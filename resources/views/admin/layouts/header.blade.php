
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-center header__logo_sec">
                    <!-- LOGO -->
                    <div class="Navbar__new">


                        <a href="#"
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
                                src="uploads/userIcon.png" alt="Header Avatar">
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
        
         <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <a href="#dashboard" class="brand-link" style="">


                </a>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="#dashboard" class="waves-effect">
                                <i class="ti-dashboard "></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#crypto" class="waves-effect">
                                <i class="ti-notepad "></i>
                                <span>USDT Reports</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-user"></i>
                                <span> User Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">All Members</a></li>
                               

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-user"></i>
                                <span>Archievers</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Bike Coupon Archievers</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-settings "></i>
                                <span> Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">                        
                                <li><a href="#">News</a></li>                            
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <!-- <i class="ti-package income_icon"></i> -->
                                <i class="fa-solid fa-pen-to-square"></i>
                                <span> Income Reports</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">                               
                                <li><a href="#">Income Ledgar</a></li>                            
                            </ul>
                        </li>
                          

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-package"></i>
                                <span>Notifications</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">News</a></li>

                            </ul>
                        </li>

                            
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-package"></i>
                                <span>Administrator</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                 <li><a href="#">Manage</a></li>
                            </ul>
                        </li>
                            
                            

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span> Ads Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Create Task</a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span> Task </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Create Image Task</a></li>                              

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span> Fake Registration </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Fake Registration </a></li>                                
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span>Installment</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Pending Installment</a>
                                </li>

                            </ul>
                        </li>

                        <li>
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
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ti-id-badge"></i>
                                <span> KYC Details</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                               
                                <li><a href="#">Pending Kyc</a></li>
                               
                            </ul>
                        </li>
                        <li>

                            <a href="javascript: void(0);" class="has-arrow waves-effect withdraw_spacing">
                                <!-- <i class="ti-package"></i> -->
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
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-share-alt"></i>
                                <span>Logout</span>
                            </a>

                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
           
    
          
           