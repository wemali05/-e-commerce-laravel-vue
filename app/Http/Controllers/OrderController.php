<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
       return response()->json(Order::with(['product'])->get(), 200);
    }


    public function deliverOrder(Order $order)
    {
        $order->is_delivered = true;
        $status = $order->save();

        return response()->json([
            'status'=> $status,
            'data' => $order,
            'message'=> $status ? 'Order Deliverd' : 'Error Dilivering Order'
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'quantity' => 'required',
            'address' => 'required'
        ]);

       $order = Order::create([
        'product_id' => $request->product_id,
        'user_id' => Auth::user()->id,
        'quantity' => $request->quantity,
        'address' => $request->address
       ]);


       return response()->json([
           'status' => (bool) $order,
           'data' =>$order,
           'message' => $order ? 'Order Created' : 'Error Creating Order'
       ]);
    }

   public function confirm(){

      return view('pages.confirmation', [
          'user'=> Auth::user()
      ]);
  }

    public function show(Order $order)
    {
       return response()->json($order, 200);
    }


    public function update(Request $request, Order $order)
    {
       $status = $order->update(
           $request->only(['quantity'])
       );

       return response()->json([
           'status'=> $status,
           'message'=> $status ? 'Order Updated!' : 'Error Updating Order'
       ]);
    }


    public function destroy(Order $order)
    {
        $status = $order->delete();

        return response()->json([
            'status'=>$status,
            'message'=>$status ? 'Order Deleted!' : 'Error Deleting Order'
        ]);
    }
}
