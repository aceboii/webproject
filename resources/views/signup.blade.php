<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
            
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Revving Up | Register</title>
</head>
<body>
<section class="container forms">
    <div class="form signup">
        <div class="form-content">
            <header>{{$title}}</header>
            <form action="{{$url}}" method="post">
                @csrf
                <div class="field input-field">
                    <input type="email" placeholder="Email" class="input" name="email" value="{{$test->email}}">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Create password" class="password" name="password">
                </div>

                <div class="field input-field">
                    <label for="confirmPassword"></label>
                    <input type="password" placeholder="Confirm password" class="password" for='confirmPassword' name="confirmPassword">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field input-field">
                    <label for="address"></label>
                    <input type="text" placeholder="Address" class="input" for="address" name="address" value="{{$test->address}}">
                </div>
                <div class="field textarea-field">
                    <label for="bio"></label>
                    <input type="textarea" placeholder="Bio" class="input" for="bio" name="bio" value="{{$test->bio}}">
                </div>

                <div class="field button-field">
                    <button>Signup</button>
                </div>
            </form>

            <div class="form-link">
                <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
            </div>
        </div>

        <div class="line"></div>

        <div class="media-options">
            <a href="#" class="field facebook">
                <i class='bx bxl-facebook facebook-icon'></i>
                <span>Login with Facebook</span>
            </a>
        </div>

        <div class="media-options">
            <a href="#" class="field google">
                <img src="https://w7.pngwing.com/pngs/937/156/png-transparent-google-logo-google-search-google-account-redes-search-engine-optimization-text-service-thumbnail.png" alt="" class="google-img">
                <span>Login with Google</span>
            </a>
        </div>
    </div>
</section>
<script src="script.js"></script>
</body>
</html>