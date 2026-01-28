@extends('Admin.layouts.app')

@section('content')
<style>
    .card-text-padding {
        position: relative;
        padding: 26px 10px;
        text-align: left;
    }

    @media (max-width:340px) {
        .card-text-padding {
            padding: 26px 0;
        }

    }

    @media (max-width:576px) {
        .text-card-set {
            display: block !important;
        }

    }
</style>
<div class="row m-0 mb-4 mt-1 ">

    <div class="col-md-12 ">
        <div class="new__sec sec-new-card upper_section_home">
            <div class="sub__header for-none mb-2">
                <!-- <h5 class="m-0 text-white starte__txt">Starter Page</h5> -->
                <!-- <h5 class="mb-0 text-success"> Process</h5> -->
            </div>
            <div class="sub__header set-cash-card ">
                <h5 class="m-0 text-white none-text text-card-set">Appointment : {{$total_Appointment}}</h5>
                <a href="{{route('appointments')}}" class="btn btn-primary">Appointments</a>
            </div>
        </div>

    </div>
    
</div>
<div class="row card__row w-100 m-0">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                            <div class="card inner">
                                <div class="card-body ">
                                    <div class="mini-stat-img ">
                                        <!-- <i class="fas fa-money-check-alt"></i> -->
                                        <!-- <img src="{{ asset('\admin\img\logo.png') }}"> -->
                                    </div>
                                    <div class="card-text-padding">
                                        <a href="#" class="stretched-link">
                                            <h5 class="font-size-16 text-uppercase m-0">Total Users</h5>
                                        </a>
                                    
                                        <h5 class="font-weight-medium mb-0 mt-1">Total : {{$users}} </h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                                <div class="card inner">
                                    <div class="card-body p-0">
                                        <div class="mini-stat-img ">
                                            <!-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> -->
                                            <!-- <img src="../../../uploads/icon224.png"> -->
                                        </div>
                                        <div class="card-text-padding">
                                            <a href="$" class="stretched-link">
                                                <h5 class="font-size-16 text-uppercase m-0">Today Joined Users</h5>
                                            </a>
                                            <h5 class="font-weight-medium mb-0 mt-1">Total : {{$today_joined_users}} </span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                                <div class="card inner">
                                    <div class="card-body p-0">
                                        <div class=" mini-stat-img ">
                                            <!-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> -->
                                            <!-- <img src="../../../uploads/dashboard_color1.png"> -->
                                        </div>
                                        <div class="card-text-padding">
                                            <a href="#" class="stretched-link">
                                                <h5 class="font-size-16 text-uppercase m-0 ">Total Appointment</h5>
                                            </a>
                                            <h5 class="font-weight-medium mb-0 mt-1">{{$total_Appointment }}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                                <div class="card inner">
                                    <div class="card-body p-0">
                                        <div class=" mini-stat-img ">
                                            <!-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> -->
                                            <!-- <img src="../../../uploads/dashboard_color1.png"> -->
                                        </div>
                                        <div class="card-text-padding">
                                            <a href="#" class="stretched-link">
                                                <h5 class="font-size-16 text-uppercase m-0 ">Today Appointment</h5>
                                            </a>
                                            <h5 class="font-weight-medium mb-0 mt-1">{{$today_Appointment }}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                                <div class="card inner">
                                    <div class="card-body p-0">
                                        <div class=" mini-stat-img ">
                                            <!-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> -->
                                            <!-- <img src="../../../uploads/dashboard_color1.png"> -->
                                        </div>
                                        <div class="card-text-padding">
                                            <a href="#" class="stretched-link">
                                                <h5 class="font-size-16 text-uppercase m-0 ">Total Payment</h5>
                                            </a>
                                            <h5 class="font-weight-medium mb-0 mt-1">₹{{$total_appointment_payment }}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="back_layer">
                            <div class="new-set-card">
                                <div class="card inner">
                                    <div class="card-body p-0">
                                        <div class=" mini-stat-img ">
                                            <!-- <i class="fas fa-dollar-sign" aria-hidden="true"></i> -->
                                            <!-- <img src="../../../uploads/dashboard_color1.png"> -->
                                        </div>
                                        <div class="card-text-padding">
                                            <a href="#" class="stretched-link">
                                                <h5 class="font-size-16 text-uppercase m-0 ">Today Payment</h5>
                                            </a>
                                            <h5 class="font-weight-medium mb-0 mt-1">₹{{$today_appointment_payment }}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

</div>
                
@endsection
