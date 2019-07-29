<div
			class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto"
		>
			<h2 class="title">Welcome to the bigStore</h2>
		</div>
		<div class="row justify-content-center">
			<ul>
      @foreach($categories as $category)
				<li class="cli" >
					<a href="/products/category/{{$category->id}}">{{ $category->name}}</a>
				</li>
       @endforeach 
			</ul>
		</div>