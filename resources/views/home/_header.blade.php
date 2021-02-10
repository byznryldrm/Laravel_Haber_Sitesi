<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="brand">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets')}}/images/logo.png" alt="Magz Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form class="search" autocomplete="off">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Type something here">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="help-block">
                            <div>Popular:</div>
                            <ul>
                                <li><a href="#">gazete</a></li>
                                <li><a href="#">makale</a></li>
                                <li><a href="#">haber</a></li>
                                <li><a href="#">güncel</a></li>
                                <li><a href="#">köşe yazısı</a></li>
                            </ul>
                        </div>
                    </form>
                </div>

                @if(\Illuminate\Support\Facades\Auth::check())
                    <h11><i class="ion-person"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</h11>
                @else
                    <div class="col-md-3 col-sm-12 text-right">
                        <ul class="nav-icons">
                            <li><a href="/register"><i class="ion-person-add"></i><div>Register</div></a></li>
                            @guest()
                            <li><a href="/login"><i class="ion-person"></i><div>Login</div></a></li>
                            @endguest
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Start nav -->
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="#">
                    <img src="{{asset('assets')}}/images/logo.png" alt="Magz Logo">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">
                <ul class="menu">
                    <li class="for-tablet nav-title"><a>Menu</a></li>
                    <li class="for-tablet"><a href="/login">Login</a></li>
                    <li class="for-tablet"><a href="/register">Register</a></li>
                    <li><a href="{{route('home')}}">HomePage</a></li>


                  @include('home._category')


                    <li class="dropdown magz-dropdown"><a href="{{route('profil')}}">Profil<i class="ion-ios-arrow-right"></i></a>
                        <ul class="dropdown-menu">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <h11> <i class="icon ion-person"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</h11>
                            @else
                                <li><a href="{{route('myprofile')}}"><i class="icon ion-person"></i></a></li>
                            @endif
                                @if(\Illuminate\Support\Facades\Auth::check())
                            <li><a href="{{route('myprofile')}}"><i class="icon ion-heart"></i>My Account</a></li>
                                @endif
                            <li><a href="#"><i class="icon ion-chatbox"></i> Comments</a></li>
                            <li><a href="#"><i class="icon ion-key"></i> Authentication</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="forgot.html">Forgot Password</a></li>
                                    <li><a href="reset.html">Reset Password</a></li>
                                    <li><a href="#">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon ion-settings"></i> Settings</a></li>
                            <li><a href="{{route('logout')}}"><i class="icon ion-log-out"></i> Logout</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End nav -->
</header>

