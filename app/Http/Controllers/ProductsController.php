<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index', 'show', 'slug', 'check'
            ]);
    }
    public function index(Product $products)
    {

        $categories = Category::all();
        return view('pages.all-products', [
            'products' => $products->paginate(6),
            'categories' => $categories,
        ]);
    }

     public function show(Product $product)
    {
        return view('pages.single-product', [
            'product' => $product,
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'units' => $request->units,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return response()->json([
            'status' => (bool) $product,
            'data' => $product,
            'message' => $product ? 'Product Created!' : 'Error Creating Product'
        ]);
    }
    public function slug(Category $category)
    {
        $categoryProducts  = $category->products()->get();
        return view('pages.categories-product',compact('categoryProducts') );
    }

    public function fetchProduct(Product $product){
        return response()->json([
            'data' => $product,
        ]);

    }

    public function uploadFile(Request $request)
    {
        if ($request->hasFile('image')) {
            $name = time() . "_" . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $name);
        }
        return response()->json(asset("images/$name"), 201);
    }

    public function update(Request $request, Product $product)
    {
        $status = $product->update(
            $request->only(['name', 'description', 'units', 'price', 'image'])
        );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Updated!' : 'Error Uploading Product'
        ]);
    }

    public function updateUnits(Request $request, Product $product)
    {
        $product->units = $product->units + $request->get('units');
        $status = $product->save();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'United Added!' : 'Error Updating Units'
        ]);
    }


    public function destroy(Product $product)
    {
        $status = $product->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
        ]);
    }

    /**
     * Ajax array of Products paginated
     *
     * @return \Illuminate\Http\Response
     */
    public function apiProductsPaginated()
    {
        $products = Product::paginate(6);
        return response()->json($products, 200);
    }

    public function check(Product $product) {
        return view('pages.checkout',['product' => $product]);
    }
}
