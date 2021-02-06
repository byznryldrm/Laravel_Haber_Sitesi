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

                    <li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="{{route('megamenu')}}">Mega Menu <i class="ion-ios-arrow-right"></i> <div class="badge">Hot</div></a>
                        <div class="dropdown-menu megamenu">
                            <div class="megamenu-inner">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="megamenu-title">Trending</h2>
                                            </div>
                                        </div>
                                        <ul class="vertical-menu">
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
                                            <li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="megamenu-title">Featured Posts</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <article class="article col-md-4 mini">
                                                <div class="inner">
                                                    <figure>
                                                        <a href="single.html">
                                                            <img src="{{asset('assets')}}/images/news/img10.jpg" alt="Sample Article">
                                                        </a>
                                                    </figure>
                                                    <div class="padding">
                                                        <div class="detail">
                                                            <div class="time">December 10, 2016</div>
                                                            <div class="category"><a href="category.html">Healthy</a></div>
                                                        </div>
                                                        <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="article col-md-4 mini">
                                                <div class="inner">
                                                    <figure>
                                                        <a href="single.html">
                                                            <img src="{{asset('assets')}}/images/news/img11.jpg" alt="Sample Article">
                                                        </a>
                                                    </figure>
                                                    <div class="padding">
                                                        <div class="detail">
                                                            <div class="time">December 13, 2016</div>
                                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                                        </div>
                                                        <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="article col-md-4 mini">
                                                <div class="inner">
                                                    <figure>
                                                        <a href="single.html">
                                                            <img src="{{asset('assets')}}/images/news/img14.jpg" alt="Sample Article">
                                                        </a>
                                                    </figure>
                                                    <div class="padding">
                                                        <div class="detail">
                                                            <div class="time">December 14, 2016</div>
                                                            <div class="category"><a href="category.html">Travel</a></div>
                                                        </div>
                                                        <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown magz-dropdown"><a href="{{route('profil')}}">Profil<i class="ion-ios-arrow-right"></i></a>
                        <ul class="dropdown-menu">
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <h11> <i class="icon ion-person"></i>{{\Illuminate\Support\Facades\Auth::user()->name}}</h11>
                            @else
                                <li><a href="{{route('myprofile')}}"><i class="icon ion-person"></i> My Account</a></li>
                            @endif
                            <li><a href="#"><i class="icon ion-heart"></i> Favorite</a></li>
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

