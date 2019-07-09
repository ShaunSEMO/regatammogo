@extends('layouts.index')

@section('home')
<br>
<div class="container sec-cont">
    <h1 class="sec-heading">Upcoming event</h1>
    <hr class="heading-ul">
    <br><br>
    <div class="container">
        <div>
            <div class="container">
                <img id="event-img" class="img-fluid" src="{{ asset($events->image) }}">
                    <br>
                    <br>
                <h5>{!! $events->place!!}</h5>
                    <br>
                <p>{!! $events->date!!}</p>
                    <br>
                <p>{!! $events->description!!}</p>
            </div>
            <br><br>
        </div>
    </div>
    <br>
    <br>
    <h1 class="sec-heading">Register for event!</h1>
    <hr class="heading-ul">
    <br>
    <div class="container custom-card register-form">
            <form action="https://formspree.io/info@spyderwebs.co.za " method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                      @if (Session::has('file_message'))
                          <div class="alert alert-success" role="alert">
                              {{Session::get('file_message')}}
                          </div>
                      @endif

                    <div class="container form-group">

                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                        @endif
                        <label class="field-label">Name</label>
                        <input name="Name" type="name" class="form-control" placeholder="Jon">

                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                        @endif
                        <label class="field-label">Lastname</label>
                        <input name="Lastname" type="name" class="form-control" placeholder="Doe">

                    </div>

                    <div class="container form-group">
                            <label class="field-label">How many people are you registering for?</label>
                            <input type="number" name="how-many" class="form-control num-input" placeholder="3">
                          <br>
                            <label class="field-label">Email</label>
                            <input name="email" type="name" class="form-control" id="exampleFormControlInput1" placeholder="jon@example.com">
                            @if ($errors->has('email'))
                                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                            @endif
      
                            <br>
                    </div>

                      <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
        </div>
</div>

@endsection