@php
    $setting=\App\Http\Controllers\Homecontroller::getsetting()
@endphp
<!-- Start footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Company Info</h1>
                    <div class="block-body">
                        <figure class="foot-logo">
                            <a class="logo" href="{{route('home')}}">
                            <img src="{{asset('assets')}}/images/logo-light.png" class="img-responsive" alt="Logo">
                            </a>
                        </figure>
                        <p class="brand-description">

                        </p>
                        <a href="{{route('aboutus')}}" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
                    <div class="block-body">
                        <ul class="tags">
                            <li><a href="#">gazete</a></li>
                            <li><a href="#">makale</a></li>
                            <li><a href="#">haber</a></li>
                            <li><a href="#">güncel</a></li>
                            <li><a href="#">köşe yazısı</a></li>
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <h1 class="block-title">Newsletter</h1>
                    <div class="block-body">
                        <p>By subscribing you will receive new articles in your email.</p>
                        <form class="newsletter">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <input type="email" class="form-control email" placeholder="Your mail">
                            </div>
                            <button class="btn btn-primary btn-block white">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="block">
                    <h1 class="block-title">Latest News</h1>
                    <div class="block-body">
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('assets')}}/images/news/img12.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
                                </div>
                            </div>
                        </article>
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('assets')}}/images/news/img14.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
                                </div>
                            </div>
                        </article>
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('assets')}}/images/news/img15.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
                                </div>
                            </div>
                        </article>
                        <article class="article-mini">
                            <div class="inner">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{asset('assets')}}/images/news/img16.jpg" alt="Sample Article">
                                    </a>
                                </figure>
                                <div class="padding">
                                    <h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
                                </div>
                            </div>
                        </article>
                        <a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="block">
                    <h1 class="block-title">Follow Us</h1>
                    <div class="block-body">
                        <strong>Company :</strong> {{$setting->company}} <br>
                        <strong>Address :</strong> {{$setting->address}} <br>
                        <strong>Phone :</strong> {{$setting->phone}} <br>
                        <strong>Fax :</strong> {{$setting->fax}} <br>
                        <strong>Email :</strong> {{$setting->email}} <br>
                        <ul class="social trp">
                            @if($setting->facebook != null)
                            <li>
                                <a href="{{$setting->facebook}}" target="_blank" class="facebook">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            @endif

                            @if($setting->twitter != null)
                            <li>
                                <a href="{{$setting->twitter}}" target="_blank" class="twitter">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-twitter-outline"></i>
                                </a>
                            </li>
                            @endif

                            @if($setting->instagram != null)
                            <li>
                                <a href="{{$setting->instagram}}" target="_blank" class="instagram">
                                    <svg><rect width="0" height="0"/></svg>
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="line"></div>
                <div class="block">
                    <div class="block-body no-margin">
                        <ul class="footer-nav-horizontal">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Partner</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="{{route('aboutus')}}">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    COPYRIGHT &copy; MAGZ . ALL RIGHT RESERVED.
                    <div>
                        Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Beyz Mgzn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- JS -->
<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/jquery.migrate.js"></script>
<script src="{{asset('assets')}}/scripts/bootstrap/bootstrap.min.js"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="{{asset('assets')}}/scripts/jquery-number/jquery.number.min.js"></script>
<script src="{{asset('assets')}}/scripts/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/scripts/easescroll/jquery.easeScroll.js"></script>
<script src="{{asset('assets')}}/scripts/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('assets')}}/scripts/toast/jquery.toast.min.js"></script>
<script src="{{asset('assets')}}/js/demo.js"></script>
<script src="{{asset('assets')}}/js/e-magz.js"></script>
