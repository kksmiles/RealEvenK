<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to Evenk</title>

  <!-- Font Awesome Icons -->
  <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{ URL::asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{ URL::asset('css/creative.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Evenk</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
              @auth
                    <a class="nav-link js-scroll-trigger" href="/feed">Get Started</a>
              @else
                    <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#exampleModal"=>Get Started</a>

              @endauth
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Our Events</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get Started</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="Login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Sign-up</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form method="POST" action="{{ route('login') }}" class="card-body">
                  @csrf
                <div class="form-group">
                  <label for="email"> Email Address </label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password"> Password </label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
                <input  type="submit" class="btn btn-primary" name="btnLogin" value="Login"/>
              </form>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
              <form method="POST" action="{{ route('register') }}" class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Name </label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                    </div>
                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"> Confirm Password </label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <input type = "submit" name="btnRegister" value ="Register"  class="btn btn-primary"/>


              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <form action="/browse" method="get">
            <button class="btn btn-dark" type="submit">Login as Guest</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Evenk</h1>
          <h1 class="text-uppercase text-white font-weight-bold">Your trusted Event Community</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white font-weight-light mb-5">
            Let's spread knowledge around the world through events
          </p>
          @auth
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="/feed">Get Started</a>
            @else
            <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">Get Started</a>

          @endauth
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">What is our objective?</h2>
          <hr class="divider light my-4">
          <h3 class="text-white font-weight mb-4">
            EvenK stands for Event and knowledge.
          </h3>
          <p class="text-white font-weight-bold mb-4" style="font-size: 18px;">
            We aim to make events easily accessible to users
            encouraging people to engage in more events
            and knowledge sharing sections.
          </p>
          <p class="text-white font-weight-bold mb-4" style="font-size: 18px;">
            We aim to build a trusted media
            for both event organizers and location manager
            to engage and negotiate and easily host an event.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-search text-primary mb-4"></i>
            <h3 class="h4 mb-2">Browse Events</h3>
            <p class="text-muted mb-0">
              Easily browse around your own personalized eventsfeed as well as our notification system will keep you updated with your favourite events
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-user-circle text-primary mb-4"></i>
            <h3 class="h4 mb-2">Speakers</h3>
            <p class="text-muted mb-0">
              Easily contact and negotiate with location managers to host an event.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-map-marked-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Locations</h3>
            <p class="text-muted mb-0">
              Manage your own locations and gain exposure by hosting events with various speakers
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-photo-video text-primary mb-4"></i>
            <h3 class="h4 mb-2">Subscribe</h3>
            <p class="text-muted mb-0">
              Become our premium member and gain access to various events' videos and presentation slides.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Tech, Trending
              </div>
              <div class="project-name">
                What is 5G?
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Startup, Tech, Business
              </div>
              <div class="project-name">
                Social Media Marketing
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Cars, Opening
              </div>
              <div class="project-name">
                Lugia Car Showroom Opening Ceremony
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                University, Graduation
              </div>
              <div class="project-name">
                Aalborg University graduation ceremony
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Motivational, Empowerment
              </div>
              <div class="project-name">
                TedTalks - Idea Worth Spreading
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Startup, Entreprenaur
              </div>
              <div class="project-name">
                Scale-up Transition & Startups
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Evenk</div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ URL::asset('js/creative.min.js') }}"></script>

</body>

</html>
