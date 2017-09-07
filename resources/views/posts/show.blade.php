@extends('layout.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>
            {{ $post->title }}

        </h1>


        {{ $post->body }}
        @if(auth()->check())

        @if(auth()->user()->id == $post->id)


            <div class="form-group">

                {{ link_to_route('posts.edit', 'Update',[$post->id],['class' => 'btn btn-primary']) }}

            </div>
            <div class="form-group">
                {!! Form::open(['method' => 'delete', 'route' => ['posts.destroy', 'post_id']]) !!}
                {!! Form::submit('Delete', ['class' => 'btn bth-danger']) !!}
                {!! Form::close() !!}
            </div>

    </div>
    <div class="form-group">
        @else
            <a href="{{ route('login') }}">Sing in</a>
        @endif
        @endif
    </div>
@endsection
