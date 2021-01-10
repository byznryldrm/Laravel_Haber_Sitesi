@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('content')

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2>Add Category</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="body">
                    <form id="form_validation" action="{{ route('admin_category_create') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="form-group form-float">

                            <input type="text" class="form-control" name="parent" required="" aria-required="true">
                            <label>Parent</label>
                            <select class="form-control" name="parent_id" style="width: 100%;">
                                <option value="0" selected="selected">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id}}"> {{ $rs->title}} </option>
                                @endforeach
                            </select>>

                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="title" required="" aria-required="true">
                                <label>Title</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Keywords" required="" aria-required="true">
                                <label>Keywords</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="gender" id="male" class="with-gap">
                            <label for="male">Male</label>

                            <input type="radio" name="gender" id="female" class="with-gap">
                            <label for="female" class="m-l-20">Female</label>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="description" cols="" rows="" class="form-control no-resize" required="" aria-required="true"></textarea>
                                <label>Description</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Slug" required="" aria-required="true">
                                <label>Slug</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" class="form-control selected2" name="Status" style="width: 100%;">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="checkbox" name="checkbox">
                            <label for="checkbox">I have read and accept the terms</label>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
