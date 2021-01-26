@extends('layouts.admin')

@section('title','Setting Edit List')

@section('content')

    <section class="content">
        <!-- Tabs With Icon Title -->
        <div class="row clearfix">
            <form id="form_validation" action="{{ route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TABS WITH ICON TITLE
                        </h2>
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">home</i>HOME
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#smtp_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">face</i> SMTP
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#socialmedia_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">person_add</i> SOCİAL MEDİA
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#aboutus_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">bookmark</i> ABOUT US
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#contanct_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">settings_phone</i> CONTANCT
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#references_with_icon_title" data-toggle="tab">
                                    <i class="material-icons">info</i> REFERENCES
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                <input type="hidden" class="form-control" name="id" id="id" value="{{$data->id}}">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}" required="" aria-required="true">
                                        <label>Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" required="" aria-required="true">
                                        <label>Keywords</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" value="{{$data->description}}" cols="" rows="" class="form-control no-resize" required="" aria-required="true"></textarea>
                                        <label>Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                        <label>Company</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                        <label>Address</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="phone" value="{{$data->phone}}">
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="fax" value="{{$data->fax}}">
                                        <label>Fax</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="{{$data->email}}">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <label >Status</label>
                                            <select class="form-control" name="Status" show-tick>
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>False</option>
                                                <option>True</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="smtp_with_icon_title">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                        <label>Smtp Server</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                        <label>Smtp Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                        <label>Smtp Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                        <label>Smtp Port</label>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="socialmedia_with_icon_title">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                        <label>Facebook</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                        <label>Instagram</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                        <label>Twitter</label>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="aboutus_with_icon_title">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <br>
                                    <textarea class="form-control" id="aboutus" name="aboutus" value="{{$data->aboutus}}"></textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="contanct_with_icon_title">
                                <div class="form-group">
                                    <label>Contanct</label>
                                    <br>
                                    <textarea class="form-control" id="contanct" name="contanct" value="{{$data->contanct}}"></textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="references_with_icon_title">
                                <div class="form-group">
                                    <label>References</label>
                                    <br>
                                    <textarea class="form-control" id="references" name="references" value="{{$data->references}}"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Update Setting</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection

@section('footer')
    <!-- Jquery Core Js -->
<script>
    import İnput from "@/Jetstream/Input";
    export default {
        components: {İnput}
    }
</script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets/admin')}}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{asset('assets/admin')}}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/admin')}}/js/admin.js"></script>
    <script src="{{asset('assets/admin')}}/js/pages/tables/jquery-datatable.js"></script>

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'aboutus', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'contanct', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace( 'references', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        $(document).ready(function (){
            $('body').on('submit', '#submitform', function (e){
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    type:'post',
                    contentType: false,
                    cache:false,
                    processData:false,
                    success: function (data){
                        alert(data.msg);
                    }
                });
            });

        });
    </script>
@endsection
