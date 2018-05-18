@foreach ($categories as $category)
  @if ($category->children->where('published', 1)->count())
    <li class="dropdown-submenu"><a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}<span class="caret"></span></a>
    <ul class="dropdown-menu">
        @include('layouts.top_menu', ['categories' => $category->children])
    </ul>
  @else
    <li><a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a></li>
  @endif
@endforeach
