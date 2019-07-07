@extends('layouts.app')

@section('content')

<div class="row justify-content-md-center">

    <div class="container">
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
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div style="text-align:center" class="card-body">
                           @foreach($abouts as $about)
                            <a href="{{ url('/t@k3m3t0@dm!n/about/'.$about->id.'/edit') }}" class="btn btn-primary">Edit About</a>
                            <br>
                            <br>
                            <img style="width:50%;" class="img-fluid" src="{{ asset($about->image) }}" alt="{{ url($about->image) }}">
                            <br>
                            <br>
                            <p>{!! $about->body!!}</p>
                            <br>
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
        
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div style="text-align:center" class="card-body">
                      <a href="{{ url('/t@k3m3t0@dm!n/upcomingevents/create') }}" class="btn btn-primary">Create Event</a>
                          <br>
                          <br> 
                             @foreach($events as $event)
                              <img style="width:50%;" class="img-fluid" src="{{ asset($event->image) }}" alt="{{ url($event->image) }}">
                              <br>
                              <br>
                              <h5>{!! $event->place!!}</h5>
                              <br>
                              <p>{!! $event->date!!}</p>
                              <br>
                              <p>{!! $event->description!!}</p>
                              <br><br>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ url('/t@k3m3t0@dm!n/upcomingevents/'.$event->id.'/edit') }}" class="btn btn-warning">Edit event</a>
                                  {!! Form::open(['action' => ['DashboardController@destroyEvent', $event->id], 'method' => 'POST']) !!}
                                      {{ Form::hidden('_method', 'DELETE') }}
                                      {{ Form::submit('Delete event', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!}
                              </div>
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
          
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div style="text-align:center" class="card-body">
                        <a href="{{ url('/t@k3m3t0@dm!n/programs/create') }}" class="btn btn-primary">Add new program</a>
                            <br>
                            <br> 
                               @foreach($programs as $program)
                                <img style="width:50%;" class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
                                <br>
                                <br>
                                <h5>{!! $program->title!!}</h5>
                                <br>
                                <p>{!! $program->body!!}</p>
                                <br>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ url('/t@k3m3t0@dm!n/programs/'.$program->id.'/edit') }}" class="btn btn-warning">Edit program</a>
                                    {!! Form::open(['action' => ['DashboardController@destroyProgram', $program->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete program', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </div>
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

</div>

@endsection
