@extends('Admin.layouts.app')

@section('title', 'Home')

@section('content')
   
<div class="row m-0 mb-4 mt-1 ">

    <div class="col-md-12 ">
        <div class="new__sec sec-new-card upper_section_home">
            <div class="sub__header for-none mb-2">
                <h5 class="m-0 text-dark starte__txt">Starter Page</h5>
                <h5 class="mb-0 text-success"> Process</h5>
            </div>
            <div class="sub__header set-cash-card ">
                <h5 class="m-0 text-dark none-text text-card-set">SMS Left:  smslimit -50000</h5>
                <a href="#" class="btn">Withdraw Refresh</a>
            </div>
        </div>

    </div>
    
</div>

                
@endsection
