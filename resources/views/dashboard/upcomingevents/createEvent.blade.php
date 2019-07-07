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
    <div class="card-header">Create event</div>
    <div class="card-body">
        {!! Form::open(['action' => 'DashboardController@storeEvent', 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image') }}
        </div>
    
        <div class="form-group">
            {{ Form::label('place', 'Place')}}
            {{ Form::text('place', '', ['class' => 'form-control', 'placeholder' => 'Event location']) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('date', 'Date') }}
            {{ Form::date('date', '',['class' => 'form-control']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('description', 'Description') }}<br>
            {{ Form::textArea('description', '', ['class' => 'form-control', 'placeholder' => 'Event description', 'class' => 'summary-ckeditor']) }}
        </div>

        {{ Form::submit('Publish Event', ['class' => 'btn btn-primary']) }}

        {!! Form::close() !!}
    </div>
</div>

</div>
</div>
</div>
@endsection
