<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{$logo}}" type="image/x-icon">

    <title>{{$title}}</title>
    <link href="{{asset('/build/assets/css/header.css')}}" rel="stylesheet" />
    <link href="{{ asset('/build/assets/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />

</head>
<!-- <body>
    <nav>navbar</nav>
    <aside>sidebar</aside>
</body> -->

<body class="bg-light">

    <!-- 🔝 Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Chai & Code</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 📦 Layout Wrapper -->
    <div class="container-fluid">
        <div class="row">

            <!-- 📌 Sidebar -->
            <aside class="col-md-3 col-lg-2 d-md-block bg-white sidebar vh-100 pt-5 shadow-sm">
                <ul class="nav flex-column mt-4">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">🏠 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">👤 Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">💰 Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">⚙ Settings</a>
                    </li>
                </ul>
            </aside>

            <!-- 🧠 Main Content -->
            <main class="col-md-9 col-lg-10 ms-sm-auto px-4 pt-5">
                <div class="mt-4">
                    <h1 class="h3 mb-3">Dashboard</h1>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <p class="card-text">Total registered users: 120</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Revenue</h5>
                                    <p class="card-text">Monthly revenue: ₹25,000</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Withdrawals</h5>
                                    <p class="card-text">Pending: 5 requests</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>

</body>

</html>