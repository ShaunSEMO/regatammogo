@extends('layouts.index')

@section('shop')

    <div class="container">
        <br>
        <img style="width:50%;" class="img-fluid" src="{{ asset($item->image) }}" alt="Post header image">
        <h3>{!! $item->name !!}</h3>
        <br>
        <h6>Color: {!! $item->color !!}</h6>
        <br>
        <h6>Size: {!! $item->size !!}</h6>
        <br>
        <p>Size: {!! $item->description !!}</p>
        <br>
        <h5>Price: {!! $item->price !!}</h5>

        <br><br>

        {{-- Size
            color
            address
            contact --}}

        {{ Form::open(array('url' => 'foo/bar')) }}

            <div class="form-group">
                {{Form::label('size', 'Size' )}}
                {{Form::number('size', '')}}
            </div>
            <br>
            <div class="form-group">
                {{Form::label('color', 'Color')}}
                {{Form::text('color')}}
            </div>
            <br>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::text('address')}}   
            </div>
            <br>
            <div class="form-group">
                {{Form::label('contact', 'Contact')}}
                {{Form::text('contact')}}   
            </div>
            {{Form::submit('Place order')}}
        {{ Form::close() }}

    </div>

@endsection
