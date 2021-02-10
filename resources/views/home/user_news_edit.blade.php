@extends ('layouts.main')

@section('title', "Add News ")


@section('content')
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-2 ">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">HomePage</a></li>
                        <li class="active">Add News</li>
                        @include('home.usermenu')
                    </ol>
                </div>

                <div class="card col-md-10">
                    <div class="body">
                        <form id="form_validation" action="{{ route('user_news_update',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="Category_id" show-tick>
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                        </option>
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
                                <textarea class="form-control" id="detail" name="Detail" value="{!! $data->detail !!}"></textarea>
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
        </div>
    </section>
@endsection

