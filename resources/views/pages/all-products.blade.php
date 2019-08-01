@extends('layouts.app')

@section('content')


   	<div class="container">



		<div class="row">
			<div class="col-md-12">
			    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3 product-box">
                        <a href="/products/{{$product->id}}">
                                            <img class="zoom" src="{{$product->image}}" alt="{{$product->name}}" />
                                            <h2>
                                                <span>{{$product->name}}</span>
                                            </h2>
                                                <p class="small-text text-muted">$ {{$product->price}}</span>
                                        </p>

                                        </a>
                                    <a  href="/checkout/{{$product->id}}" class="col-md-4 btn btn-sm btn-primary float-center">Buy Now</a>

                             </div>

                    @endforeach
		       </div>
	      </div>
     </div>

</div>
<div class="justify-content-center row mt-4 ">
     {{ $products->links() }}
</div>
@endsection
