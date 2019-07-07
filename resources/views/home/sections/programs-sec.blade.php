<br>
<div class="container sec-cont">
    <h1 class="sec-heading">Programs offered</h1>
        <br>
        <br>
    <div class="container">
        <div class="row">
            @foreach($programs as $program)
                <div class="container col-lg-6 col-md-6"> 
                    <div class="container">
                        <img class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
                            <br>
                            <br>
                        <h2>{!! $program->title!!}</h2>
                            <br>
                        <p>{!! $program->body!!}</p>
                            <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>