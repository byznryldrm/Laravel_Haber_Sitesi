
<li class="dropdown magz-dropdown">
    <a href="#">Category<i class="ion-ios-arrow-right"></i></a>
    @php
        $parentCategories = \App\Http\Controllers\Homecontroller::categorylist()
    @endphp
    <div class="@if(!isset($page)) show-on-click @endif "></div>
    <ul class="dropdown-menu">
        @foreach($parentCategories as $category)
        <li><a href="login.html">{{$category->title}}</a></li>
        @endforeach
    </ul>
</li>




