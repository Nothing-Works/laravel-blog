@extends('layouts.masterblog')
@section('contentblog')
    <div class="col-sm-8 blog-main">

    <h1>Publish post</h1>
<hr>
        <form method="post" action="/blog">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea id="body" name="body" class="form-control" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>


            @include('layouts.errors')
        </form>


    </div>
    @endsection