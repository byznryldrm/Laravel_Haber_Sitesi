@auth
<ul>
   <li><a href="{{route('myprofile')}}" class="active">My Profile</a></li>
   <li><a href="" class="active">My orders</a></li>
   <li><a href="{{route('user_news')}}" class="active">My News</a></li>
   <li><a href="{{route('logout')}}" class="active">Logout</a></li>
    @php
        $userRoles = Auth::user()->roles->pluck('name');
    @endphp
    @if($userRoles->contains('admin'))
        <li><a href="{{route('admin_home')}}" class="active">Admin Panel</a></li>
    @endif
 </ul>
@endauth
