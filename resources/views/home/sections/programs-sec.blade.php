<br>
<div data-aos="zoom-in-up" class="container sec-cont">
    <h1 class="sec-heading">Programs offered</h1>
        <hr class="heading-ul">
        <br>
        <br>
    <div class="container">
        <div class="row">
            @foreach($programs as $program)
                <div data-aos="fade-up" class="container col-lg-6 col-md-6"> 
                    <div class="container">
                        <img id="program-img" class="img-fluid" src="{{ asset($program->image) }}" alt="{{ url($program->image) }}">
                            <br>
                            <br>
                        <h2>{!! $program->title!!}</h2>
                        <hr class="sub-ul">
                        <p>{!! $program->body!!}</p>
                            <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>