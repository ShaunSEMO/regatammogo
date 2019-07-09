<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    {{-- Custom css --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/events.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/programs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/sponsors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sections/contact.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Regatammogo</title>
  </head>
  <body id='body'>

      {{-- Header section --}}
      <div id="header">

        {{-- navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg">

            <a class="navbar-brand" href="{{ url('/') }}"><img width="50px" height="50px" style="border-radius: 50%;" src="{{ asset('/img/navlogo.png') }}"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('upcomingevents') }}">Upcoming Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('programs') }}">Programs Offered</a>
                    </li>
                  </ul>

            </div>

          </nav>
      {{-- navbar --}}

      {{-- Header content --}}
        <div class="container" id="headerContent">

          <h1 data-aos="flip-left" id="heading"><strong>Regatammogo</strong></h1>
            <br>
          <p data-aos="flip-right" id="subheading">We step together</p>
            <br>
          
        </div>
      {{-- Header content --}}

      </div>
      {{-- Header section --}}


    <br>

        @yield('home')
        @yield('about')
        @yield('blog')
        @yield('gallery')
        @yield('shop')
        @yield('create')

      {{-- footer --}}
       <br><br>
      <footer>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <small>Copyright © 2019 | All rights reserved to Regatammogo</small>
                    <br>
                    <br>
                    <small>makgoka@regatammogo.co.za</small>
                    <br>
                    <br>
                    <small> <a href="http://www.regatammogo.org">www.regatammogo.org</a></small>
                    <br><br>
                </div>
                
                <div class="col-lg-6 col-md-6 col-12">
                    <small class="swbranding">
                      Site designed and developed by <a href="http://www.spyderwebs.co.za"><span class="spyder">Spyder</span><span class="webs">Webs</span>.co.za</a>  
                    </small>
                </div>
            </div>
      </footer>

      

      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init({
          duration:700
        });
      </script>
  </body>
</html>
