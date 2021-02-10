@extends ('layouts.main')

@section('title', $data->title)

@section('description'){{ $data->description }}@endsection

@section('keywords', $data->keywords)

@section('content')
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar" id="sidebar">
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
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</li>
                        <li class="active">{{$data->title}}</li>
                    </ol>
                    <article class="article main-article">
                        <header>
                            <ul class="details">
                                <li><a href="{{$data->title}}"></a></li>
                            </ul>
                        </header>
                        <div class="main">
                            <div class="featured">
                                <figure>
                                    @foreach($datalist as  $rs)
                                    <img src="{{Storage::url($rs->image)}}" alt="Sample Article">
                                    @endforeach
                                </figure>
                            </div>
                            <h4>
                                <br>
                                {{$data->description}}
                            </h4>
                            <p>
                                <br>
                                {!! $data->detail !!}
                            </p>

                        </div>
                        <footer>
                            <div class="col">
                                <ul class="tags">
                                    <li><a href="http://127.0.0.1:8000/categorynews/1/Haber">Haber</a></li>
                                    <li><a href=http://127.0.0.1:8000/categorynews/3/Makale">Makale</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/2/Ekonomi">Ekonomi</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/16/Magazin">Magazin</a></li>
                                    <li><a href="http://127.0.0.1:8000/news/17/sosyal%20ya%C5%9Fam">Sosyal Yaşam</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
                            </div>
                        </footer>
                    </article>
                    <div class="line thin"></div>
                    <div class="comments">
                        <h2 class="title">3 Responses <a href="#">Write a Response</a></h2>
                        <div class="comment-list">
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="reply-list">
                                    <div class="item">
                                        <div class="user">
                                            <figure>
                                                <img src="images/img01.jpg">
                                            </figure>
                                            <div class="details">
                                                <h5 class="name">Mark Otto</h5>
                                                <div class="time">24 Hours</div>
                                                <div class="description">
                                                    Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                                <footer>
                                                    <a href="#">Reply</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="user">
                                    <figure>
                                        <img src="images/img01.jpg">
                                    </figure>
                                    <div class="details">
                                        <h5 class="name">Mark Otto</h5>
                                        <div class="time">24 Hours</div>
                                        <div class="description">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                        <footer>
                                            <a href="#">Reply</a>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="row">
                            <div class="col-md-12">
                                <h3 class="title">Leave Your Response</h3>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Name <span class="required"></span></label>
                                <input type="text" id="name" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email <span class="required"></span></label>
                                <input type="email" id="email" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="website">Website</label>
                                <input type="url" id="website" name="" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">Response <span class="required"></span></label>
                                <textarea class="form-control" name="message" placeholder="Write your response ..."></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary">Send Response</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
