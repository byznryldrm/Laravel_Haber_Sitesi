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

            </div>
        </div>
    </div>
    </section>
@endsection
