@extends('site.layouts.app')
<style>
/* ============================= */
/* Header Shadow */
/* ============================= */
.main-header .header-upper .inner-container {
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

/* ============================= */
/* Page Title */
/* ============================= */
.page-title-section {
    background: #f7f7f7;
    padding: 70px 15px;
    text-align: center;
}

.page-title-section h1 {
    font-size: 36px;
    font-weight: 800;
}

.page-title-section p {
    margin-top: 10px;
    color: #777;
}

/* ============================= */
/* Booking Section */
/* ============================= */
.booking-section {
    padding: 80px 0;
    background: #ffffff;
}

.booking-wrapper {
    display: flex;
    justify-content: center;
}

.booking-card {
    background: #ffffff;
    width: 100%;
    max-width: 520px;
    padding: 40px;
    border-radius: 14px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
}

.booking-title {
    font-size: 26px;
    font-weight: 700;
    text-align: center;
}

.booking-subtitle {
    font-size: 14px;
    color: #777;
    text-align: center;
    margin-bottom: 30px;
}

.booking-form .form-group {
    margin-bottom: 20px;
}

.booking-form label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
}

.booking-form .form-control {
    height: 50px;
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 10px 14px;
}

.booking-form .form-control:focus {
    border-color: #e41f28;
    box-shadow: none;
}

/* ============================= */
/* Responsive */
/* ============================= */
@media (max-width: 768px) {
    .page-title-section h1 {
        font-size: 28px;
    }

    .booking-card {
        padding: 25px;
    }
}

@media (max-width: 576px) {
    .page-title-section {
        padding: 50px 15px;
    }

    .booking-section {
        padding: 50px 0;
    }
}
/* ============================= */
/* Payment Field */
/* ============================= */
.payment-group label {
    font-weight: 600;
}

.payment-note {
    font-size: 12px;
    color: #777;
    margin-left: 5px;
    font-weight: 400;
}

.payment-row {
    display: flex;
    gap: 10px;
    margin-top: 8px;
}

.payment-row .form-control {
    flex: 1;
    height: 50px;
}

.pay-btn {
    white-space: nowrap;
    height: 50px;
    padding: 0 22px;
}

/* 📱 Mobile Responsive */
@media (max-width: 576px) {
    .payment-row {
        flex-direction: column;
    }

    .pay-btn {
        width: 100%;
    }
}


/* ===== Titles ===== */
.qr-title {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 15px;
    color: #000;
    letter-spacing: 0.5px;
}

/* ===== Upload Box ===== */
.qr-image-box {
    border: 2px dashed #EE0D09;
    border-radius: 14px;
    padding: 25px;
    text-align: center;
    background: #EE0D09;
    transition: 0.3s ease;
}

.qr-image-box:hover {
    /* background: rgba(255,255,255,0.15); */
    background: #E9ECEF;
}

.qr-image-box img {
    max-width: 180px;
    border-radius: 12px;
    transition: 0.3s ease;
}

.qr-image-box img:hover {
    transform: scale(1.08);
}
</style>


  

@section('content')

        <!-- ============================= -->
        <!-- PAGE TITLE -->
        <!-- ============================= -->
        <!-- <section class="page-title-section">
            <div class="auto-container">
                <h1>Book Service Appointment</h1>
                <p>Schedule your car service in just a few clicks</p>
            </div>
        </section> -->

        <!-- ============================= -->
        <!-- BOOKING SECTION -->
        <!-- ============================= -->
        <section class="booking-section">
            <div class="auto-container">
                <div class="booking-wrapper">
                    <div class="booking-card">

                        <!-- <h2 class="booking-title">Book a Service</h2>
                        <p class="booking-subtitle">
                            Choose your service and preferred date
                        </p> -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Fail!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('payment'))
                            <div class="card my-3">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">Payment Details</h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Payment ID:</strong> {{ session('payment')->payment_id }}</p>
                                    <p><strong>Order Id:</strong> {{ session('payment')->order_id }}</p>
                                    <p><strong>Amount:</strong> ₹{{ session('payment')->amount }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="text-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        
                        <h1>Book Service Appointment</h1>
                        <p class="booking-subtitle">Schedule your car service in just a few clicks</p>

                        @if($services->isEmpty())
                            <p class="text-center">No services available.</p>
                        @else
                            <form method="POST" action="{{ route('book-appointment') }}" class="booking-form" id="appointmentForm">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="phone" name="phone" class="form-control" placeholder="number" required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Company</label>
                                    <input type="text" name="car_company" class="form-control" placeholder="company" required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Name</label>
                                    <input type="text" name="car_name" class="form-control" placeholder="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Model</label>
                                    <input type="month" name="car_model" class="form-control" placeholder="model" required>
                                </div>
                                <div class="form-group">
                                    <label>Select Service</label>

                                    <!-- Hidden field for service name -->
                                    <input type="hidden" name="service_name" id="service_name" required>

                                    <select name="service_id" id="serviceSelect" class="form-control" required>
                                        <option value="">-- Select Service --</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}" data-name="{{ $service->name }}">
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>                               

                                <div class="form-group payment-group">
                                    <label>
                                        Appointment Payment
                                        <span class="payment-note">(₹-Payment included with Services)</span>
                                    </label>
                                    <div class="payment-row">
                                        <input type="number" name="amount" class="form-control" value="320" readonly>
                                        <!-- <a href="http://car_services.test" class="theme-btn btn-style-one pay-btn">
                                            Pay Now
                                        </a> -->
                                       
                                    </div>                                    
                                </div>
                                @if(!empty($QR))
                                        <div class="form-group mb-4">
                                        <label>Scan QR-Code for Payment :-</label>

                                            <div class="qr-image-box">
                                                <img src="{{ asset('uploads/qr/'.$QR) }}" alt="QR Code">
                                            </div>
                                        </div>
                                         @endif
                                <div class="form-group">
                                    <label>Transaction ID</label>
                                    <input type="number" name="transaction_id" class="form-control" placeholder="transaction id" required>
                                </div>

                                <!-- <button type="submit" class="theme-btn btn-style-one w-100" onclick="payNow()"> -->
                                <button type="submit" class="theme-btn btn-style-one w-100">
                                    Book Appointment
                                </button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </section>
<script>
    document.getElementById('serviceSelect').addEventListener('change', function () {
        let selectedOption = this.options[this.selectedIndex];
        let serviceName = selectedOption.getAttribute('data-name') || '';

        document.getElementById('service_name').value = serviceName;
    });
</script>

<!-- <script>
function payNow() {
    const form = document.getElementById('appointmentForm');
    fetch('/appointmentPayment', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: form.name.value,
            phone: form.phone.value,
            car_company: form.car_company.value,
            car_name: form.car_name.value,
            car_model: form.car_model.value,
            service_id: form.service_id.value,
            service_name: form.service_name.value,
            amount: form.amount.value
        })
    })
    .then(res => res.json())
    .then(data => {
        const cashfree = Cashfree({
            mode: "{{ env('CASHFREE_ENV') }}"
        });

        cashfree.checkout({
            paymentSessionId: data.payment_session_id
        });
    });
}
</script>
<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script> -->
@endsection




  
