@extends('layouts.app')

@section('content')
@include('partials.slug')
    <!-- <all-products-component :products="{{ json_encode($products) }}" :category="{{ json_encode($categories) }}"></all-products-component> -->
   	<div class="container">


		
			<div class="row">
				<div class="col-md-12">
					<div class="row">
          @foreach($products as $product)
						<div class="col-md-3 product-box">
                        
							<a href="/products/{{$product->id}}">
								<img src="{{$product->image}}" alt="{{$product->name}}" />
								<h5>
									<span>{{$product->name}}</span>
									<span class="small-text text-muted float-right">$ {{$product->price}}</span>
								</h5>
								<button class="col-md-4 btn btn-sm btn-primary float-right">Buy Now</button>
							</a>
                          
						</div>
           @endforeach 
					</div>
				</div>
			</div>
		
		<!-- <pagination-component :pagination="pagination" @paginate="fetchProducts()" :offset="4"></pagination-component> -->
	</div>
    <div class="justify-content-center row mt-4 ">
     {{ $products->links() }}
    </div>
@endsection
