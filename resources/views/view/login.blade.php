<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar-container">
        <img src="{{ asset('assets/images/logoschool-removebg-preview.png') }}" class="logo-image me-3" />
     </div>
     <div class="container  ">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow"> 
                    <div class="card shadow">
                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4">Login</h2>
                            <form id="Login" >
                                <div class="mb-3">
                                    <label for="email" class="email-form" ></label>
                                    <input type="email" class="form-control required" placeholder="Email address"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="password-form" ></label>
                                    <input type="password" class="form-control required" placeholder="Password"></input>
                                </div>
                                <div class="d-grid gap-2">
                                    <bouton type="submit" class="btn btn-primary">Login</bouton>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none">Forgot password?</a>
                                    <p class="mt-2">Don't have an account? <a href="{{ route('signup') }}" id="signupLink">Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <script></script> 
</body>
</html>