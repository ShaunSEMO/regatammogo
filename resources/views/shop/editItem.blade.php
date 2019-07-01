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
    <div class="card-header">Edit Item</div>
    <div class="card-body">
        {!! Form::open(['action' => ['DashboardController@updateItem', $item->id], 'files' => true, 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{ Form::label('image', 'Image')}}
            <br>
            {{ Form::file('image') }}
        </div>
    
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $item->name, ['class' => 'form-control', 'placeholder' => 'Item name', 'style' => 'width: 250px;']) }}
        </div>

        <div class="form-group">
            {{ Form::label('color', 'Color') }}
            {{ Form::text('color', $item->color, ['class' => 'form-control', 'placeholder' => 'Item color', 'style' => 'width: 250px;']) }}
        </div>

        <div class="form-group">
            {{ Form::label('size', 'Size') }}
            {{ Form::text('size', $item->size, ['class' => 'form-control', 'placeholder' => 'S, M, XL / 23, 24', 'style' => 'width: 250px;']) }}
        </div>
    
        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textArea('description', $item->description, ['class' => 'form-control', 'placeholder' => 'Item description', 'id' => 'summary-ckeditor']) }}
        </div>

        <div class="form-group">
            {{ Form::label('price', 'Price') }}
            {{ Form::number('price', $item->price, ['class' => 'form-control', 'placeholder' => '3000.... (type in just the number)', 'style' => 'width: 250px;']) }}
        </div>

        {{-- <div class="form-group">
            <label>Text</label>
            <textarea style="height: 250px;" name="body" class="form-control" id="exampleFormControlTextarea1" placeholder="Article..." id="summary-ckeditor"></textarea>
        </div> --}}

        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Edit item', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
</div>

</div>
</div>
</div>
@endsection
