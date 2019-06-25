@extends('layouts.index')

@section('create')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('succes'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

<h1>Create post</h1>
<br>
<div class="container">
    {!! Form::open(['action' => 'BlogController@store', 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image') }}
        </div>
    
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post title']) }}
            
        </div>
    
        <div class="form-group">
            {{ Form::label('text', 'Text') }}
            {{ Form::textArea('body', '', ['class' => 'form-control', 'placeholder' => 'Article...', 'id' => 'summary-ckeditor']) }}
            
        </div>
        
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
</div>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
