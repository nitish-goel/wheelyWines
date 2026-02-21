<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../{{ $logo }}" type="image/x-icon">

    
    <title>@yield('title',  $title )</title>
   


    <link  href="{{ asset('/admin/css/style.css') }}" rel="stylesheet">
    <link  href="{{ asset('/admin/css/app.min.css') }}" rel="stylesheet" id="app-style"  type="text/css" >
    <link  href="{{ asset('/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('/admin/libs/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('/admin/libs/icons.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>

<script src="{{ asset('admin/libs/jquery.min.js') }}"></script>


<style>
    .forex-img {
        width: 70px !important;
        height: 100% !important;
        border-radius: 8px !important;
    }

    .content-header {
        color: #fff;
    }

    .breadcrumb-item > a {
        color: #fff;
    }

    /* .breadcrumb-item.active {
         color: #000 !important; 
    } */

    .breadcrumb-item+.breadcrumb-item::before {
        color: #000 !important;

    }
    .text-dark {
        color: #fff !important;
    }
                                                                                                                                                
    /* Toast animation */
    /* Container */
    #nt-toast-container {
        position: fixed;
        top: 1rem;
        right: 1rem;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
/* Toast box */
.nt-toast {
    min-width: 280px;
    max-width: 360px;
    border-radius: 10px;
    font-size: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    border-left: 5px solid;
    opacity: 0;
    transform: translateX(30%);
    background: #ffffff;
    overflow: hidden;
}

/* Top accent bar */
.nt-toast-accent {
    height: 4px;
    width: 100%;
}

/* Layout */
.nt-toast-row {
    display: flex;
    align-items: flex-start;
}

/* Body */
.nt-toast-body {
    padding: 12px 14px;
    flex: 1;
    font-weight: 500;
}

/* Close */
.nt-toast-close {
    border: none;
    background: transparent;
    font-size: 18px;
    cursor: pointer;
    padding: 10px;
    opacity: 0.6;
}

.nt-toast-close:hover {
    opacity: 1;
}

/* ===== TYPE STYLES ===== */

/* SUCCESS */
.nt-toast-success {
    border-left-color: #198754;
}

.nt-toast-success .nt-toast-accent {
    background: #198754;
}

.nt-toast-success .nt-toast-body {
    background: #eafaf1;
    color: #146c43;
}

/* WARNING */
.nt-toast-warning {
    border-left-color: #ffc107;
}

.nt-toast-warning .nt-toast-accent {
    background: #ffc107;
}

.nt-toast-warning .nt-toast-body {
    background: #fff4cc;
    color: #9a6b00;
}

/* DANGER */
.nt-toast-danger {
    border-left-color: #dc3545;
}

.nt-toast-danger .nt-toast-accent {
    background: #dc3545;
}

.nt-toast-danger .nt-toast-body {
    background: #fdebec;
    color: #b02a37;
}

/* Animations */
.nt-toast-show {
    animation: nt-slide-in 0.6s ease forwards,
               nt-fade-out 0.6s ease 3.5s forwards;
}

@keyframes nt-slide-in {
    from {
        transform: translateX(30%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes nt-fade-out {
    to {
        transform: translateX(20%);
        opacity: 0;
    }
}

</style>
<body data-sidebar="dark">
    <div id="layout-wrapper" class="admin__header background_layer">
    
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-center header__logo_sec">
                    <!-- LOGO -->
                    <div class="Navbar__new">


                        <a href="{{route('dashboard')}}"
                            class="logo logo-light d-block Logo_newLInk">
                            <div class="logo__sec">

                                <img class="forex-img" src="{{$logo}}" alt="logo">

                            </div>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                </div>

                <div class="d-flex">
                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="fa fa-search"></span>
                        </div>

                    </form>
                    <div class="dropdown d-none">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="#uploads/userIcon.png" alt="Header Avatar">
                            Admin
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge badge-success float-right">11</span><i
                                    class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger"
                                href="Admin/Management/logout"><i
                                    class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                    <div class="dropdown d-none">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-settings-outline"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Toast helper ========== -->
        <div id="nt-toast-container"></div>

         <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!-- <a href="#dashboard" class="brand-link" style="">
                </a> -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{route('dashboard')}}" class="waves-effect">
                                <i class="ti-dashboard "></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('appointments')}}" class="waves-effect">
                                <i class="ti-notepad "></i>
                                <span>Appointments Report</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-user"></i>
                                <span> User Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('users') }}">All Members</a></li>                            
                            </ul>
                        </li>
                        

                       <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ti-package"></i>
                                <span>Manage Services</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">                        
                                <li><a href="{{route('service.add') }}">Add Service</a></li>                            
                                <li><a href="{{route('services') }}">All Services</a></li>                            
                            </ul>
                        </li>

                         <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                 <!-- <i class="ti-package income_icon"></i>  -->
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span> Appointments Reports</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">                               
                                <li><a href="{{route('appointments')}}">Pending Appointments</a></li>                            
                                <li><a href="{{route('approve.appointments')}}">Approved Appointments</a></li>                            
                                <li><a href="{{route('decline.appointments')}}">Declined Appointments</a></li>                            
                            </ul>
                             </li>
                          

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-settings "></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">News</a></li>
                                <li><a href="{{ route('add.qr') }}">Payment QR-Code</a></li>

                            </ul>
                        </li>

                        <!-- <li> 
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span>Rewards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Rewards History</a>
                                </li>

                            </ul>
                        </li>

                        <li>

                            <a href="javascript: void(0);" class="has-arrow waves-effect withdraw_spacing">
                                <i class="ti-package"></i>
                                <i class="fa-solid fa-money-bill-transfer"></i>
                                <span class="">Withdraw Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">                               
                                <li><a href="#">Pending Withdraw Request</a></li>
                                <li><a href="#"> Approved Withdraw Request</a></li>
                                <li><a href="#">Rejected Withdraw Request</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-email"></i>
                                <span>Mail</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Pending Ticket</a></li>
                                <li><a href="#">Approved Ticket</a></li>
                                <li><a href="#">Rejected Ticket</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-package"></i>
                                <span>Fund Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#"> Send Fund</a></li>                                                     
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-wallet"></i>
                                <span>Crytpo Transactions</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#"> USDT Transactions</a></li>                               
                            </ul>
                        </li> -->
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="ti-share-alt"></i>
                                <span>Logout</span>
                            </a>

                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>

        
        <div class="main-content main_content_new dashboardcard background_layer">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- 🧠 Main Content -->
                        
                            {{-- Page Content --}}
                                @yield('content')
                            
                </div>
            </div>
        </div>
        @extends('Admin.layouts.footer')    
           
   
