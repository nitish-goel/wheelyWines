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
                <h5 class="m-0 text-white starte__txt">Starter Page</h5>
                <h5 class="mb-0 text-success"> Process</h5>
            </div>
            <div class="sub__header set-cash-card ">
                <h5 class="m-0 text-white none-text text-card-set">SMS Left: 423 limit - 500</h5>
                <a href="#" class="btn">Withdraw Refresh</a>
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
                                            <h5 class="font-size-16 text-uppercase m-0">Total Payout</h5>
                                        </a>
                                    
                                        <h5 class="font-weight-medium mb-0 mt-1">Total : $ 55 </h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
</div>
                
@endsection
