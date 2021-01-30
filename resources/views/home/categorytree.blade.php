@foreach($children as $subcategory)
    <div id="menu-list">
        <ul class="list-links">
            @if(count($subcategory->$children))
                <li style="color:black;font-family: 'Arial Black' ">{{$subcategory->title}}</li>
                <ul class="list-links">
                    @include('home._categorytree',['$children'=>$subcategory->$children])
                </ul>
                <hr>
            @else
                <li><a href="#">{{$subcategory->title}}</a></li>
            @endif
        </ul>
    </div>
@endforeach
