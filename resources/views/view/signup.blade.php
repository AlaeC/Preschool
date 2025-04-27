<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar-container">
        <img src="{{ asset('assets/images/logoschool-removebg-preview.png') }}" class="logo-image me-3" />
     </div>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
             <div class="card shadow">
                <div class="card-body p-4">
                        <h2 class="card-title text-center mb-4">Sign-up</h2>
                        <form id="sign-up">
                            <div class="mb-3">
                               <label for="name" class="name-label"></label>
                               <input type="name" class="form-control required" placeholder="Name"></input>
                        </div>
                              <div class="mb-3">
                                <label for="email" class="email-label"></label>
                                <input type="email" class="form-control required" placeholder="Email"></input>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="password-label"></label>
                                <input type="password" class="form-control required" placeholder="Password"></input>
                            </div>
                            <div class="d-grid gap-2">
                                <bouton type="submit" class="btn btn-primary">Sign-up</bouton>
                            </div>
                            <div class="text-center mt-3">
                                <p class="mt-2">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none" id="signupLink">Login</a></p>
                            </div>
                        </form>

                </div>
             </div>
      </div>
    </div>
    <script></script>
 </body>
</html>