@extends('layout.master')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="col-sm-8 blog-main">


                        <h1>Create Post</h1>

                        <hr>

                        <form method="post" action="/posts" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group" >

                                <label for="title">Publish a Post</label>

                                <input type="text" name="title" class="form-control" id="title" >

                            </div>

                            <div class="form-group">

                                <label for="author_name">Author Name</label>


                                <input type="text" name="author_name" class="form-control" id="author_name" >

                            </div>

                            <div class="form-group">

                                <label for="body">Post Body</label>

                                <textarea id="body" name="body" class="form-control" ></textarea>

                            </div>

                            <div class="form-group">

                                <label for="exampleInputFile">File input</label>

                                <input type="file" name="thumbnail">

                                <p class="help-block">Example block-level help text here.</p>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Publish</button>

                            </div>


                            @include('layout.errors')


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
