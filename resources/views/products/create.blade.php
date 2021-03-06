@extends('master')
@section('content')
    <form action="/products" class="form-horizontal" method="post">
        {{csrf_field()}}
        {{method_field('POST')}}

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
        </div>
        <div class="form-group">
            <label for="slug" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">

                <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" name="price" class="form-control" id="price" placeholder="Price">
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description" placeholder="Description">
                    </textarea>
            </div>
        </div>

        <input type="submit" class="btn btn-info">

        @if (count($errors) > 0)
            <hr>
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </form>
@endsection