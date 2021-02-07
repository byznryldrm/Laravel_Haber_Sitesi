<html>
<head>
    <title>Image Gallery</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
</head>
<body>
        <div class="card-body">
            <div class="card">
                <div class="body">
                    <h3 class="card-title">{{$data->title}}</h3>

                    <form id="form_validation" action="{{ route('user_image_store',['news_id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Title" required="" aria-required="true">
                                <label>Title</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="file" class="form-control" name="İmage">
                                <label>İmage</label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Add Image</button>
                    </form>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="100" alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('user_image_delete', ['id' => $rs->id, 'news_id'=>$data->id])}}" onclick="return confirm('Record will be Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>


