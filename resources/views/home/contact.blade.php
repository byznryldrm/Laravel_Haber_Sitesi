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

                <div class="col-md-6 col-sm-6">
                    <h3>Contact</h3>
                    {{$setting->contact}}
                    <p>

                    </p>
                    <p>
                        Phone: <span class="bold">055311111</span> <br>
                        Email: <span class="bold">hi@ygmail.com</span>
                        <br>
                        <br>
                        Address: Atatürk Mahallesi<br>
                        Sincan/Ankara
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form class="row contact" id="contact-form" method="post" action="">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name & Surname <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="required"></span></label>
                                <input type="text" class="form-control" name="email" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message <span class="required"></span></label>
                                <textarea class="form-control" name="message" rows="10" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
    </section>
@endsection
