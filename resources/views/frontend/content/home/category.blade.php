@foreach($categories as $category)
<li id="li_{{ $category->slug }}" class="">
	<a href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
</li>
@endforeach
<li class="all_store">
	<a href="{{ route('home') }}">All Stores<i class="fa fa-arrow-circle-o-right"></i></a>
</li>