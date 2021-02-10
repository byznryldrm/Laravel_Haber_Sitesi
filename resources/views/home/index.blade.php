@extends ('layouts.main')

@section('title', $setting->title)

@section('description'){{ $setting->description }}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="headline">
                        <div class="nav" id="headline-nav">
                            <a class="left carousel-control" role="button" data-slide="prev">
                                <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" role="button" data-slide="next">
                                <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme slide" id="featured">
                        @foreach($slider as $rs)
                            @if($rs->status=='True')
                        <div class="item">
                            <article class="featured">

                                <div class="overlay"></div>
                                <figure>
                                    <img src="{{Storage::url($rs->image)}}" alt="Sample Article">
                                </figure>
                                right carousel-control  <div class="details">
                                    <div class="category" ><a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}"></a>
                                        <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}} News</li>
                                    </div>

                                    <h1><a href="{{$rs->title}}">
                                            <br>
                                            {{$rs->description}}
                                        </a></h1>
                                </div>
                            </article>
                        </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="line">
                        <div>Latest News</div>
                    </div>
                    <div class="row">
                        @foreach($last as $rs)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <article class="article col-md-12">
                                    <div class="inner">
                                        <figure>
                                            <a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                                <img src="{{Storage::url($rs->image)}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <div class="detail">
                                                <div class="category"><a href="{{$rs->title}}"></a></div>
                                            </div>
                                            <h5>
                                                <br>
                                                {{$rs->description}}
                                            </h5>
                                            <footer>
                                                <a href="#" class="love"><i class="ion-android-favorite-outline"></i><div></div></a>
                                                <a class="btn btn-primary more" href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                                    <div>More</div>
                                                    <div><i class="ion-ios-arrow-thin-right"></i></div>
                                                </a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="line transparent little"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 trending-tags">
                            <h1 class="title-col">Trending Tags</h1>
                            <div class="body-col">
                                <ol class="tags-list">
                                    <li><a href="http://127.0.0.1:8000/categorynews/1/Haber">Haber</a></li>
                                    <li><a href=http://127.0.0.1:8000/categorynews/3/Makale">Makale</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/2/Ekonomi">Ekonomi</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/16/Magazin">Magazin</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/17/sosyal%20ya%C5%9Fam">Sosyal Yaşam</a></li>
                                    <li><a href="#">Bilimsel</a></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1 class="title-col">
                                Hot News
                                <div class="carousel-nav" id="hot-news-nav">
                                    <div class="prev">
                                        <i class="ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="next">
                                        <i class="ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                            </h1>
                            <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                                @foreach($hot as $rs)
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                                <img src="{{Storage::url($rs->image)}}" alt="Sample Article">
                                            </a>
                                        </figure>
                                        <div class="padding">
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="line top">
                        <div>Just Another News</div>
                    </div>
                    <div class="row">
                        @foreach($another as $rs)
                        <article class="col-md-12 article-list">
                            <div class="inner">
                                <figure>
                                    <a href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                        <img src="{{Storage::url($rs->image)}}" alt="Sample Article">
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
                                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i></a>
                                        <a class="btn btn-primary more" href="{{route('news', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">
                                            <div>Detail</div>
                                            <div><i class="ion-ios-arrow-thin-right"></i></div>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
