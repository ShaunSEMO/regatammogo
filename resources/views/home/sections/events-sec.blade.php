<br>
<div class="container sec-cont">
    <h1 class="sec-heading">Upcoming events</h1>
    <br>
    <div class="container">
        <div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-lg-4 col-md-6">
                    <div class="container custom-card">
                        <img id="event-img" class="img-fluid" src="{{ asset($event->image) }}" alt="{{ url($event->image) }}">
                            <br>
                            <br>
                        <h5>{!! $event->place!!}</h5>
                            <br>
                        <p>{!! $event->date!!}</p>
                            <br>
                        <p>{!! $event->description!!}</p>
                    </div>
                    <br><br>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>