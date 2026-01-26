@extends('Admin.layouts.app')
@section('content')
<style>
    .breadcrumb{
        background-color:#272c2f !important;
    }
</style>
            <div class="row m-0 mb-4 mt-1 new__sec">
                <div class="col-12">
                    <section class="sub__header">
                        <h5 class="m-0 text-dark starte__txt">Update Fund Request</h5>
                        <ol class="breadcrumb float-sm-right mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Fund Request</li>
                        </ol>
                    </section>
                </div><!-- /.col -->
            </div><!-- /.row -->

            
<div class="row">
    <div class="col-md-6 d-flex align-items-center justify-content-start">
        <div class="card w-100 h-auto pading-nw">
            @if(session('success'))
                <div class="alert alert-success">
                    <ul class="mb-0">
                        <li>
                            {{ session('success') }}
                        </li>
                    </ul>
                </div>
            @endif

                <!-- message -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="card-body w-100">


                <form action="{{ route('addService') }}" method="POST">
                    @csrf

                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">

                                <!-- Service Name -->
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label class="col-form-label text-dark">Service Name</label>
                                        <input 
                                            type="text" 
                                            name="service_name" 
                                            class="form-control"
                                            placeholder="Name"
                                            value="{{ old('service_name') }}"
                                            required
                                        >
                                    </div>
                                </div>

                                <!-- Service Price -->
                                <!-- <div class="form-group row">
                                    <div class="col-12">
                                        <label class="col-form-label text-dark">Service Price</label>
                                        <input 
                                            type="text" 
                                            name="service_price" 
                                            class="form-control"
                                            placeholder="Price"
                                            value="{{ old('service_price') }}"
                                            required
                                        >
                                    </div>
                                </div> -->

                                <!-- Submit Button -->
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">
                                            Save Service
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

