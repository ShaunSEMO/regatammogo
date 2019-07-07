@extends('layouts.app')

@section('content')

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


<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card">
    <div class="card-header">Edit program</div>
    <div class="card-body">
        {!! Form::open(['action' => ['DashboardController@updateProgram', $program->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image') }}
        </div>
    
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $program->title, ['class' => 'form-control', 'placeholder' => 'Program title']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('description', 'Description') }}<br>
            {{ Form::textArea('description', $program->description, ['class' => 'form-control', 'placeholder' => 'Program description', 'class' => 'summary-ckeditor']) }}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Update Program', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
    </div>
</div>

</div>
</div>
</div>
@endsection
