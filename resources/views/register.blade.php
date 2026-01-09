
<!-- if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
} -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
    {{ $title }} 
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sites meta Data -->
    <meta name="application-name" content="{{ $title }}">
    <meta name="author" content="{{ $title }}">
    <meta name="keywords" content="{{ $title }}, Crypto, Forex, and Stocks Trading Business">
    <meta name="description" content="Experience the power of {{ $title }}.">

    <!-- OG meta data -->
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:site_name" content="{{ $title }}">
    <meta property="og:url" content="{{ $url }}">
    <meta property="og:description" content="Welcome to {{ $title }}.">
    <meta property="og:type" content="{{ $title }} | Crypto">
    <!-- <meta property="og:image" content="logo"> -->
    <!-- <link rel="shortcut icon" href="logo" type="image/x-icon"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap Css -->
    <link href="{{ asset('/build/assets/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('/build/assets/libs/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/build/assets/css/login.css')}}" id="app-style" rel="stylesheet" type="text/css" />




</head>
<style>
    .field-user {
        padding: 0 !important;
    }

    .field-no {
        margin-bottom: 20px !important;

    }

    .field-no input {
        background-color: transparent !important;
    }

    .email-set {
        margin-bottom: 20px !important;

    }

    .phone-field {
        margin-bottom: 20px !important;
        width: 100%;
    }

    .pin-field {
        margin-bottom: 20px !important;

    }

    .password-field {
        margin-bottom: 20px !important;

    }

    .form-check-inline .form-check-input {
        height: 16px !important;
        width: 18px !important;
    }

    .sub-title::after {
        bottom: -35% !important;
        height: 38px;
        width: 150px;
    }

    .form-check-inline {
        display: flex !important;
        /* justify-content:center !important; */
    }

    .right-text {
        color: #000 !important;
    }

    .left-text {
        color: #000 !important;

    }

    .main-remember {
        justify-content: center !important;

    }
</style>
<style>
    .checkbox-wrapper-43 {
        display: flex;
        align-items: center;
    }

    .checkbox-wrapper-43 input[type="checkbox"] {
        display: none;
        visibility: hidden;
    }

    .checkbox-wrapper-43 label {
        display: inline-block;
    }

    .checkbox-wrapper-43 .check {
        cursor: pointer;
        position: relative;
        margin-right: 10px;
        /* Space between checkbox and text */
        width: 18px;
        height: 18px;
        -webkit-tap-highlight-color: transparent;
        transform: translate3d(0, 0, 0);
    }

    .checkbox-wrapper-43 .check:before {
        content: "";
        position: absolute;
        top: -15px;
        left: -15px;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(34, 50, 84, 0.03);
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .checkbox-wrapper-43 .check svg {
        position: relative;
        z-index: 1;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: #fff;
        stroke-width: 1.5;
        transform: translate3d(0, 0, 0);
        transition: all 0.2s ease;
    }

    .checkbox-wrapper-43 .check svg path {
        stroke-dasharray: 60;
        stroke-dashoffset: 0;
    }

    .checkbox-wrapper-43 .check svg polyline {
        stroke-dasharray: 22;
        stroke-dashoffset: 66;
    }

    .checkbox-wrapper-43 .check:hover:before {
        opacity: 1;
    }

    .checkbox-wrapper-43 .check:hover svg {
        stroke: #91AD6E;
        /* Green hover color */
    }

    .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg {
        stroke: #fff;
        /* Green color when checked */
    }

    .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg path {
        stroke-dashoffset: 60;
        transition: all 0.3s linear;
    }

    .checkbox-wrapper-43 input[type="checkbox"]:checked+.check svg polyline {
        stroke-dashoffset: 42;
        transition: all 0.2s linear;
        transition-delay: 0.15s;
    }
    .terms-text {
        color: #fff;
    }
    .terms-text a {
        color:#91AD6E;
        text-decoration: underline !important;
        /* Matching link color */
        text-decoration: none;
        font-weight: 600;
    }

    .terms-text a:hover {
        text-decoration: underline;
    }
</style>

<body>

    <div class="main-form-page">
        <div class="section w-100">
            <div class="form-set d-flex align-items-center justify-content-end">
                <div class="container  d-flex align-items-center justify-content-center cont-reg">
                    <div class="sub-title register-titlee">
                        <!-- 'error'-->
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                            <br>
                                <span class="text-danger">
                                    {{$error}}                                
                                </span>
                            @endforeach
                        @endif
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                     <h4 class="text-center text-black p-2">Register</h4>
                        <div class="panel-form">                        
                         

                            <div class="user-field field-user">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" />
                                <span class="ion ion-locked form-control-feedback "></span>
                                <span class="text-danger"></span>
                                <span id="errorMessage" class="text-danger">
                                </span>

                            </div>
                            <div class="user-field email-set">
                                <input type="text" class="form-control" placeholder="Email ID" name="email">
                            </div>
                          

                            

                            <div class="user-field password-field">
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                <!-- <i class="fa-regular fa-envelope"></i> -->
                                <i toggle="#password-field" class="fa-regular fa-eye-slash field-icon toggle-password"></i>
                            </div>
                            <div class="user-field email-set">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            </div>

                        </div>


                        <div class="details password-form">
                            <div class="d-flex align-item-center justify-content-between position-relative">

                            </div>
                        </div>
                        <!-- <form>
                            <label>
                                <input type="checkbox" id="simpleCheckbox">
                                I agree to the terms and conditions
                            </label>
                        </form> -->

                        <div class="checkbox-wrapper-43">
                            <input type="checkbox" id="cbx-43" name="terms">
                            <label for="cbx-43" class="check">
                                <svg width="18px" height="18px" viewBox="0 0 18 18">
                                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                    <polyline points="1 9 7 14 15 4"></polyline>
                                </svg>
                            </label>
                            <span class="terms-text">I agree to the <a href="" target="_blank">Terms and Conditions</a></span>
                        </div>


                        <div class="main-remember  remember-main">
                            <div class="login-btn btn-login">

                                <button type="submit" value="register"  class="btn from-right">Sign Up</button>


                            </div>


                        </div>

                        </form>

                        <div class="text-center create-acc mt-3">

                            <p class="m-0 text-white">Already have account? <a href="login" class="tgreen">Login</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   


    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
   

</body>

</html>