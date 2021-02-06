<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link href="{{asset('assets/admin')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{asset('assets/admin')}}/plugins/node-waves/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{asset('assets/admin')}}/plugins/animate-css/animate.css" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="{{asset('assets/admin')}}/plugins/morrisjs/morris.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{asset('assets/admin')}}/css/style.css" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('assets/admin')}}/css/themes/all-themes.css" rel="stylesheet" />

<section class="content">
        <div class="card">
            <div class="card-header">
                <h2>Message Detail</h2>
                @include('home.message')
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <form id="form_validation" action="{{ route('admin_message_update',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <tr>
                                <th>Id</th><td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th><td>{{ $data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th><td>{{ $data->email}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th><td>{{ $data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th><td>{{ $data->message}}</td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td>
                                    <textarea id="note" name="note" >{{$data->note}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <button class="btn btn-primary waves-effect" type="submit">Update Message</button>
                                </td>
                            </tr>

                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

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
        CKEDITOR.replace( 'detail', {
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
