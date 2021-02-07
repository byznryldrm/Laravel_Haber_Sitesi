@extends ('layouts.main')

@section('title', "User Profile")


@section('content')
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-2 ">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">HomePage</a></li>
                        <li class="active">Profile</li>
                        @include('home.usermenu')
                    </ol>
                </div>

                <div class="card col-md-10">
                    <div class="header">
                        <a href="{{ route('user_news_add') }}" class="btn btn-primary waves-effect" type="submit">Add News</a>
                        @include('home.message')
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>İmage</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                        <td>{{ $rs->title}}</td>
                                        <td>{{ $rs->description}}</td>
                                        <td>{{ $rs->type}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{route('user_image_add', ['news_id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50, left=100, width=1100, height=700')">
                                                <img src="{{asset('assets/admin/images')}}/gallery.png" height="25">
                                            </a>
                                        </td>
                                        <td>{{ $rs->status}}</td>
                                        <td><a href="{{route('user_news_edit', ['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                        <td><a href="{{route('user_news_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
