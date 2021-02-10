@extends ('layouts.main')

@section('title','References -'. $setting->title)

@section('description'){{ $setting->description }}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="home-first">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">References</li>
                </ol>
                <h1 class="page-title">References</h1>

                {{$setting->references}}
                <aside id="sponsored">
                    <h1 class="aside-title">Sponsored</h1>
                    <div class="aside-body">
                        <ul class="sponsored">
                            <li>
                                <a href="https://www.haberturk.com/">
                                    <img src="{{asset('assets')}}/images/habertürk.jpg" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ntv.com.tr/">
                                    <img src="{{asset('assets')}}/images/ntv1.png" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.showtv.com.tr">
                                    <img src="{{asset('assets')}}/images/show.jpg" alt="Sponsored">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.etietieti.com/">
                                    <img src="{{asset('assets')}}/images/eti1.jpg" alt="Sponsored">
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </div>
    </section>
@endsection
