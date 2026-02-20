@extends('Admin.layouts.app')
@section('content')
<style>
    .breadcrumb{
        background-color:#272c2f !important;
    }
    .form-control{
        padding: 4px 10px !important;
        margin-block: 8px;
    }

/* Glass Card */
.qr-card {
    /* background: rgba(255, 255, 255, 0.15); */
    /* backdrop-filter: blur(15px); */
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    color: #fff;
    position: relative;
    z-index: 1;
}

/* Titles */
.qr-title {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 15px;
    color: #fff;
}

/* Upload Box */
.qr-image-box {
    border: 2px dashed rgba(255,255,255,0.6);
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    background: rgba(255,255,255,0.1);
}

.qr-image-box img {
    max-width: 180px;
    border-radius: 10px;
    transition: 0.3s ease;
}

.qr-image-box img:hover {
    transform: scale(1.05);
}

/* Button */
/* .upload-btn {
    background: linear-gradient(45deg, #28a745, #20c997);
    border: none;
    border-radius: 6px;
    padding: 8px 20px;
    font-weight: 500;
}

.upload-btn:hover {
    opacity: 0.9;
} */


/* ===== Modern Gradient Button ===== */
.upload-btn {
    background: linear-gradient(45deg, #00c6ff, #0072ff);
    color: #fff;
    font-weight: 600;
    border-radius: 10px;
    padding: 10px 25px;
    border: none;
    transition: 0.3s ease;
}

.upload-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}


</style>
            <div class="row m-0 mb-4 mt-1 new__sec">
                <div class="col-12">
                    <section class="sub__header">
                        <h5 class="m-0 text-dark starte__txt">QR Image </h5>
                        <ol class="breadcrumb float-sm-right mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add QR Image </li>
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

                
            <div class="card-body w-100 qr-card">

                
                <form id="qrForm" action="{{ route('addQR') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
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
                            <!-- Service Name -->
                            {{-- Available QR --}}
                                @if(!empty($qr_image))
                                    <div class="form-group row">
                                        <div class="mb-4">
                                            <div class="qr-title">Available QR Code</div>

                                            <div class="qr-image-box">
                                                <img src="{{ asset('uploads/qr/'.$qr_image) }}" alt="QR Code">
                                            </div>
                                        </div>
                                    </div> 
                                @endif


                                    {{-- Update QR --}}
                                    <div class="form-group row">
                                        <div class="qr-title">Update QR Code</div>

                                        <input 
                                            type="file" 
                                            name="qr_image" 
                                            id="qr_image"
                                            class="form-control mb-3"
                                            accept="image/*"
                                        >

                                            <div class="qr-image-box">
                                                <img id="previewImage" src="#" style="display:none;">
                                                <p id="previewText" class="text-muted">Image preview will appear here</p>
                                            </div>
                                        </div>

                                        
                                    </div>
                                                             

                                <!-- Submit Button -->
                                <div class="form-group row">
                                    <!-- <div class="col-12">
                                        <button type="submit" class="btn btn-success" id="QR_btn">
                                           Update
                                        </button>
                                    </div> -->
                                    <div class="mt-3 text-right">
                                            <button type="submit" class="btn upload-btn text-white" id="QR_btn">
                                                Update QR
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
<script>
$(document).ready(function(){
    $('#qr_image').on('change', function(){
        let file = this.files[0];

        if(file){
            let reader = new FileReader();

            reader.onload = function(e){
                $('#previewImage')
                    .attr('src', e.target.result)
                    .fadeIn();

                $('#previewText').hide();
            }

            reader.readAsDataURL(file);
        }
    });

    $('#qrForm').on('submit', function(e){
        e.preventDefault();

        let fileInput = $('#qr_image')[0];
        let btn = $('#QR_btn');

        // ✅ Check if file is selected
        if(fileInput.files.length === 0){
            showToast("Please select a QR image first!", "danger");
            return;
        }

        let file = fileInput.files[0];

        // ✅ Optional: Validate file type
        let allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if(!allowedTypes.includes(file.type)){
            showToast("Only JPG, JPEG, PNG images are allowed!", "danger");
            return;
        }

        // ✅ Optional: Validate size (2MB example)
        if(file.size > 2 * 1024 * 1024){
            showToast("Image size must be less than 2MB!", "danger");
            return;
        }
        //
        btn.prop('disabled', true).text('Updating...');

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('addQR') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                if(response.success){
                    showToast(response.message, "success");
                } else {
                    showToast(response.message, "danger");
                }
            },
            error: function(){
                showToast("Something went wrong!", "danger");
            },
            complete: function(){
                btn.prop('disabled', false).text('Updated');
            }
        });
    });

});
</script>
@endsection

