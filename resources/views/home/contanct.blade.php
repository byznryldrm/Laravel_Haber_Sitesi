@extends ('layouts.main')

@section('title','Contact -'. $setting->title)

@section('description'){{ $setting->description }}@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="home-first">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
            <div class="col-md-12 col-md-offset-8">
            {!!$setting->contanct!!}
            </div>
            <div class="col-md-6 col-sm-6">
                @include('home.message')
                <form method="post" action="{{route('sendmessage')}}">
                    @csrf
                    <div class="col-12 col-md-8">
                        <div class="gazette-heading">
                            <h4 class="font-bold">address</h4>
                        </div>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name&Surname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn contact-btn">SUBMIT <i class="fa fa-angle-right ml-2"></i></button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
<script>
    import İnput from "@/Jetstream/Input";
    export default {
        components: {İnput}
    }
</script>
