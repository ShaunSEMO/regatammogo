@extends('layouts.index')

@section('gallery')

    <div class="container">
            @foreach($pictures as $picture)
            <br>
            <small>{{ \Carbon\Carbon::parse($picture->date)->format('d - m - Y')}}
            </small>
            <br>
            <img style="width:50%;" class="img-fluid" src="{{ asset($picture->image) }}" alt="Post header image">
            <br><br>
            @endforeach
            {{ $pictures->links() }}
    </div>

@endsection
