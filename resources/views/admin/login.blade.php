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
    <meta property="og:type" content="{{ $title }}">
    <link rel="shortcut icon" href="{{$logo}}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Css -->
    <!-- <link href="commonall.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> -->

    <link href="{{ asset('/admin/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/admin/css/login.css')}}" rel="stylesheet" type="text/css" />
</head>

<style>
    .user-1 {
        padding-bottom: 20px !important;
    }

    .password-1 {
        padding-bottom: 20px !important;
    }

    .remem-1 {
        padding-bottom: 8px !important;

    }

    .sub-title::after {
        bottom: -8px !important;
    }

    .login-btn button {
        font-weight: 600 !important;
    }
</style>



<body >


    <div class="main-form-page">
        <div class="section w-100">
            <div class="form-set h-100 d-flex align-items-center justify-content-end">
                <div class="container h-100 d-flex align-items-center justify-content-center cont-reg">
                    <!-- <div class="row"> -->
                    <!-- <div class="col-lg-6"> -->
                    <div class="sub-title">
                        <div class="login-heading justify-content-center align-items-center">
                            <a href="#">
                                <!-- <img src="logo" alt="earth_pic"> -->
                                <img alt="progress" src="{{ $logo }}" width="100%" />
                            </a>
                        </div>
                        <p style="color:red;text-align: center;">
                            <!-- message -->
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <br>
                                    <span class="text-danger">
                                        {{$error}}                                
                                    </span>
                                @endforeach
                            @endif
                        </p>
                        <form action="{{ route('adminLogin') }}" method="post">
                            @csrf
                        <h4 class="text-center text-black p-2 ">Login</h4>
                        <!-- <input type="hidden" class="form-control" id="wallet_address" name="wallet_address"> -->

                        <div class="panel-form">
                            <!-- <span class="ion ion-locked form-control-feedback "></span> -->
                            <div class="user-field  user-1">
                                <input type="text" class="form-control" placeholder="Enter name" name="user_id" value="" />
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="password-field password-1">
                                <!-- <span class="ion ion-locked form-control-feedback "></span> -->

                                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                <i toggle="#password-field" class="fa-regular fa-eye-slash field-icon toggle-password"></i>


                            </div>

                        </div>

                        <!-- <div class="details password-form">
                            <div class="d-flex align-item-center justify-content-between position-relative for_get">

                                <div class=" m-0  remem-1">

                                    <input id="deviceremember" type="checkbox" class="">

                                    <label class="remember-1 text-white" for="deviceremember">Remember Me</label>

                                </div>
                                <a class="forget-pass" href="Dashboard/User/forgot_password">Forgot Password?</a>

                            </div>
                        </div> -->

                        <div class="login-btn">
                            <button type="submit" value="login" class="btn from-right">Log in</button>


                        </div>

                        </form>

                        <!-- <div class="text-center create-acc mt-3">

                            <p class="m-0 text-white">Still no account? <a href="Dashboard/Register" class="tgreen">Create new account</a></p>

                        </div> -->
                    </div>
                    <!-- </div> -->
                   
                </div>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
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