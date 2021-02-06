@extends ('layouts.main')

@section('title', $data->title .' News List')

@section('description'){{ $data->description }}@endsection

@section('keywords', $data->keywords)

@section('content')
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}} News List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="row">
                        @foreach($datalist as $rs)
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                        <img src="{{Storage::url($rs->image)}}">
                                    </a>
                                </figure>
                                <div class="details">
                                    <div class="detail">
                                        <div class="category">
                                            <a href="{{$rs->title}}"></a>
                                        </div>
                                    </div>
                                    <h1>
                                            <br>
                                            {{$rs->description}}
                                    </h1>
                                    <footer>
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
                                        <a class="btn btn-primary more" href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                            <div>More</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        @endforeach
                        <div class="col-md-12 text-center">
                            <ul class="pagination">
                                <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">97</a></li>
                                <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                            </ul>
                            <div class="pagination-help-text">
                                Showing 8 results of 776 &mdash; Page 1
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <aside>
                        <h1 class="aside-title">Recent Post</h1>
                        <div class="aside-body">
                            <article class="article-fw">
                                <div class="inner">
                                    <figure>
                                        <a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                            <img src="{{Storage::url($rs->image)}}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h1>
                                            <br>
                                            {{$rs->description}}
                                        </h1>
                                        <div class="detail">
                                            <div class="category"><a href="{{$rs->title}}"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="line"></div>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src={{asset('assets')}}/"images/news/img05.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src={{asset('assets')}}/"images/news/img02.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">Travel</a></div>
                                            <div class="time">December 21, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="article-mini">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src={{asset('assets')}}/"images/news/img13.jpg">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                        <div class="detail">
                                            <div class="category"><a href="category.html">International</a></div>
                                            <div class="time">December 20, 2016</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                    <aside>
                        <div class="aside-body">
                            <form class="newsletter">
                                <div class="icon">
                                    <i class="ion-ios-email-outline"></i>
                                    <h1>Newsletter</h1>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="form-control email" placeholder="Your mail">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                                    </div>
                                </div>
                                <p>By subscribing you will receive new articles in your email.</p>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
