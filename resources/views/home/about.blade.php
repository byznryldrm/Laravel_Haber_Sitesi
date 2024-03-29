@extends ('layouts.main')

@section('title','About Us -'. $setting->title)

@section('description'){{ $setting->description }}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="home-first">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
                <h1 class="page-title">About Us</h1>
                <p class="page-subtitle">We will tell you who we are</p>

                {{$setting->aboutus}}

            </div>
        </div>
    </div>
    </section>
@endsection
