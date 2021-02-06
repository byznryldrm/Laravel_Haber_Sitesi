@foreach($children as $subcategory)
    <div id="menu-list">
        <ul class="list-links">
            @if(count($category->children))
                <li style="...">{{$category->title}}</li>
                <ul class="list-links">
                    @include('home._category',['children'=>$subcategory->children])
                </ul>
                <hr>
            @else
                <li><a href="{{route('categorynews', ['id' =>$category->id, 'slug'=>$category->title])}}">{{$category->title}}</a></li>
            @endif
        </ul>
    </div>
@endforeach
