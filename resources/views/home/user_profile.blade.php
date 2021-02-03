@extends ('layouts.main')

@section('title', "User Profile")


@section('content')
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">HomePage</a></li>
                        <li class="active">Profile</li>
                    </ol>
                    <div id="main" class="col-md-10">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
