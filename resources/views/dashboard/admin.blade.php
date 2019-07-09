@extends('layouts.app')

@section('content')

<div class="panel container row justify-content-md-center">

      <div class="container">
        <a href="{{ url('/') }}" class="btn btn-primary">Go to website</a>
        <br>
        <br>
        <h1>Admin Panel</h1>
        <div class="accordion" id="accordionExample">

        {{-- About card --}}
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3>About</h3>
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="panel-div collapse container" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div style="text-align:center"  class="card-body custom-card admin-card">
                    @foreach($abouts as $about)

                        <br>
                        <img id="about-img" class="img-fluid" src="{{ asset($about->image) }}" alt="{{ asset($about->image) }}">
                        <br>
                        <br>
                        <p>{!! str_limit($about->body, $limit = 250, $end = '...') !!}</p>
                        <br>
                        <a href="{{ url('/t@k3m3t0@dm!n/about/'.$about->id.'/edit') }}" class="btn btn-primary">Edit About</a>
                    @endforeach
                </div>
          </div>
        </div>

        {{-- Upcoming events card --}}
        <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <h3>Upcoming events</h3>
                </button>
              </h5>
            </div>
        
            <div id="collapseTwo" class="panel-div collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <a style="margin:auto" href="{{ url('/t@k3m3t0@dm!n/upcomingevents/create') }}" class="btn btn-primary">Create Event</a>
                <br>
                <br>
                  <div style="text-align:center" class="card-body custom-card admin-card">
                      
                          <br>
                          <br> 
                             @foreach($events as $event)
                              <img class="img-fluid" src="{{ asset($event->image) }}" alt="{{ url($event->image) }}">
                              <br>
                              <br>
                              <h5>{!! $event->place!!}</h5>
                              <br>
                              <p>{!! $event->date!!}</p>
                              <br>
                              <p>{!! $event->description!!}</p>
                              <br><br>
                                  <a href="{{ url('/t@k3m3t0@dm!n/upcomingevents/'.$event->id.'/edit') }}" class="btn btn-warning">Edit event</a>
                                  <br>
                                  <br>
                                  {!! Form::open(['action' => ['DashboardController@destroyEvent', $event->id], 'method' => 'POST']) !!}
                                      {{ Form::hidden('_method', 'DELETE') }}
                                      {{ Form::submit('Delete event', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                              <hr>
                              @endforeach
                          <br>       
                  </div>
            </div>
          </div>

          {{-- Programs offered --}}

          <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h3>Programs offered</h3>
                  </button>
                </h5>
              </div>
          
              <div id="collapseThree" class="panel-div collapse" aria-labelledby="headingThree" data-parent="#accordionExample">

                  <a style="margin:auto" href="{{ url('/t@k3m3t0@dm!n/programs/create') }}" class="btn btn-primary">Add new program</a>
                  <br>
                  <br>
                    <div style="text-align:center" class="admin-card custom-card" >
                        
                            <br>
                            <br> 
                               @foreach($programs as $program)
                                <img class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
                                <br>
                                <br>
                                <h5>{!! $program->title!!}</h5>
                                <br>
                                <p>{!! $program->body!!}</p>
                                <br>
                                    <a href="{{ url('/t@k3m3t0@dm!n/programs/'.$program->id.'/edit') }}" class="btn btn-warning">Edit program</a>
                                    <br>
                                    <br>
                                    {!! Form::open(['action' => ['DashboardController@destroyProgram', $program->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete program', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                <br>
                                <hr>
                                @endforeach
                            <br>       
                    </div>
              </div>
            </div>

    </div>
</div>

</div>

@endsection
