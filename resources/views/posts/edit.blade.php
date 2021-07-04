@extends('layouts.main')

@section('content')

<h2 class="uppercase tracking-wider text-red-400 text-lg font-semibold">Edit Post</h2>
<br><br>
    {!! Form::open(['action' => ["App\Http\Controllers\PostsController@update",$post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group ">
            {{Form::label('title', 'Title',['class'=>['text-red-400','text-lg']])}}
            {{Form::text('title', $post->title, ['class' => ['form-control', 'w-3/4', 'flex','pl-1', 'mb-3', 'bg-white', 'text-black', 'placeholder-black'], 'placeholder' => 'Title'])}}
        </div>
        <br>
        <div class="form-group" style="width: 75%" >
            {{Form::label('body', 'Body',['class'=>['text-red-400','text-lg']])}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => ['form-control', 'flex', 'pl-1', 'bg-red-400', 'text-black', 'placeholder-indigo-600'], 'placeholder' => 'Start a discussion!'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="mt-3 rounded">
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>['btn btn-primary', 'bg-red-400', 'pr-2', 'pl-2','w-64px', 'rounded', 'pt-1', 'pb-1', 'text-white', 'cursor-pointer']])}}
        </div>

    {!! Form::close() !!}

@endsection
