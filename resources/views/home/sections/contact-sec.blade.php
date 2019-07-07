<br>
<div class="container sec-cont">
    <h1 class="sec-heading">Get in touch with us</h1>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-4">
                <img style="width: 80px; border:" src="{{ asset('img/social/facebook.png') }}" alt="">
            </div>

            <div class="col-lg-4 col-md-4 col-4">
                <img style="width: 80px; border:" src="{{ asset('img/social/instagram.png') }}" alt="">
            </div>

            <div class="col-lg-4 col-md-4 col-4">
                <img style="width: 80px; border:" src="{{ asset('img/social/twitter.png') }}" alt="">
            </div>
        </div>
    </div>

    <form action="https://formspree.io/info@spyderwebs.co.za " method="POST">
        {{ csrf_field() }}
        <div class="form-group">
                @if (Session::has('file_message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('file_message')}}
                    </div>
                @endif
                <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                @if ($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                @endif
                <br>
                <input name="email" type="name" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
                <br>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
                @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
                <br>
                <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </form>
</div>