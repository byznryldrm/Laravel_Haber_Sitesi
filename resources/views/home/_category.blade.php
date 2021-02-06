<li class="dropdown magz-dropdown">
    @php
        $parentCategories = \App\Http\Controllers\Homecontroller::categorylist()
    @endphp
    <ul>
        @foreach($parentCategories as $category)
            <li><a href="{{route('categorynews',['id'=>$category->id,'slug'=>$category->title])}}">{{$category->title}}</a></li>

        @endforeach
    </ul>
</li>
