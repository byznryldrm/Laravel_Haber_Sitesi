@extends('layouts.admin')

@section('title','News Edit List')

@section('content')

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2>Edit News</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="body">
                    <form id="form_validation" action="{{ route('admin_news_update',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control" name="Category_id" show-tick>
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif> {{$rs->title}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Title" value="{{$data->title}}" required="" aria-required="true">
                                <label>Title</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Keywords" value="{{$data->keywords}}" required="" aria-required="true">
                                <label>Keywords</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="Description" value="{{$data->description}}" cols="" rows="" class="form-control no-resize" required="" aria-required="true"></textarea>
                                <label>Description</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <br>
                            <textarea class="form-control" id="detail" name="Detail"value="{{$data->detail}}"></textarea>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control " name="Type" value="{{$data->type}}" aria-required="true">
                                <label>Type</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" class="form-control" name="İmage" >
                                <label>İmage</label>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="100" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Slug" value="{{$data->slug}}" aria-required="true">
                                <label>Slug</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
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
                        <div class="form-group">
                            <input type="checkbox" id="checkbox" name="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Update News</button>
                    </form>
                </div>
            </div>
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
