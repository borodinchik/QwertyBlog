@extends('layout.master')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="col-sm-8 blog-main">

                        <h1>Update Post</h1>

                        <hr>

                        <div class="form-group">

                            {!! Form::model($posts, ['route' => ['posts.update', $posts->id],'method' => 'PATCH', 'files' => 'true'])  !!}

                            {{ csrf_field() }}


                            {!! Form::label('title', 'Enter title') !!}

                            {!! Form::text('title',null,['class' => 'form-control']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('author_name') !!}


                            {!! Form::text('author_name',null,['class' => 'form-control']) !!}


                        </div>

                        <div class="form-group">

                            {!! Form::label('body', 'Post body') !!}


                            {!! Form::textarea('body',null,['class' => 'form-control']) !!}

                        </div>
                        <div class="form-group">


                            {!! Form::submit('Update',['route' => 'posts.update','type' => 'submit' ,'class' => 'btn btn-primary']) !!}
                        </div>


                    </div>


                    {!!  Form::close() !!}

                    <div class="form-group">

                        @include('layout.errors')

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection