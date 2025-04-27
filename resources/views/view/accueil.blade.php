<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar-container">
    <img src="{{ asset('images/logoschool-removebg-preview.png') }}" class="logo-image me-3"/>
     <!-- navbar -->
     <div class="container" >
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-style">
            <li class="nav-item"><a href="#" class="nav-link active home-icone" aria-current="page">Home</a></li>
            <li><a href="#" class="nav-link px-3 text-white"></a></li>
            <li><a href="{{asset('learning.blade.php')}}" class="nav-link px-3 text-white">Learning</a></li>
            <li><a href="princing_page.html" class="nav-link px-3 text-white">Pricing</a></li>
            <li><a href="faq_page.html" class="nav-link px-3 text-white">FAQs</a></li>
            <li><a href="about_page.html" class="nav-link px-3 text-white">About</a></li>
          </ul>
  
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..." aria-label="Search">
          </form>
  
          <div class="text-end">
            <button type="button" class="btn btn-light me-2 login-button"><a class="text-decoration-none" href="login.html">Login</a></button>
            <button type="button" class="btn  btn-dark sing-up-button"><a href="sign_up.html" class="text-decoration-none" >Sign-up</a></button>
          </div>
        </div>
      </div>
    </div>

      <!-- heroo -->"
      <div class="container" >
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3  shadow-lg " >
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 div-of-text"  >
            <h2 class="display-4 fw-bold lh-1  text-style ">The best way to learn or practice is through fun!</h2>
            <h4>.Playful & Motivational</h4>
            <h5>📚ABCs, 123s, and moreall with giggles and fun!</h5>
            <h4>.Simple & Direct</h4>
            <h5>🖍️Color, play, and discover all while learning!</h5>
            <h4>.Gamification Hook</h4>
            <h5>🏆Learn faster, and become a learning superhero!</h5>
            <div class="progress-tracker mt-4 p-3 rounded">
              <h3 class="text-dark">🚀 See Your Learning Journey!</h3>
              <div class="progress-map">
                  <div class="milestone"><h5 class="milestone-text">⭐Alphabet Master</h5></div>
                  <div class="milestone current"><h5 class="milestone-text">🔢Counting to 100</h5></div>
                  <div class="milestone"><h5 class="milestone-text">🌈Color Mixer</h5></div>
              </div>
          </div>
           

        </div>

          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg align-self-start"  >
             
              <img class="rounded-lg-3  animated-alphabet" src="{{ asset('images/alphabet.png') }}"  width="390" height="500">
          </div>
         

        
        
      </div>
    
  </body>
</html>