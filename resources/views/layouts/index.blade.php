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

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Regatammogo</title>
  </head>
  <body id='body'>

      {{-- Header section --}}
      <div id="header">

        {{-- navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg">

            <a class="navbar-brand" href="{{ url('/') }}">Regatammogo</a>

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

          <h1 id="heading"><strong>Regatammogo</strong></h1>
            <br>
          <p id="subheading">We step together</p>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>
</html>
