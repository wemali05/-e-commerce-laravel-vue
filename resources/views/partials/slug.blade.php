
<div class="row justify-content-center mb-3">
	<ul>
      @foreach($categories as $category)
				<li class="cli" >
                    <a class="btn btn-outline-info btn-sm" style="border-radius: 0.2rem;" href="/products/category/{{$category->id}}">
                        {{ $category->name}}
                    </a>
				</li>
       @endforeach
    </ul>
</div>

