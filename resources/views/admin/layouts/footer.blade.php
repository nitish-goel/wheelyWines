<footer class="bg-dark text-light mt-auto">
    <div class="container py-4">
        <div class="row gy-3">

            <!-- Brand -->
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <img src="{{ $logo }}" alt="logo" height="40">
                    <h5 class="mb-0 text-warning fw-bold">Wheely Wines</h5>
                </div>
                <p class="text-muted small mb-0">
                    Premium car servicing at your doorstep.  
                    Quality, transparency & trust.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-4">
                <h6 class="text-uppercase fw-semibold mb-3">Quick Links</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a href="{{ route('home') }}" class="text-decoration-none text-light footer-link">Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('services') }}" class="text-decoration-none text-light footer-link">Services</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-light footer-link">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h6 class="text-uppercase fw-semibold mb-3">Contact</h6>
                <p class="small mb-1">📍 India</p>
                <p class="small mb-1">📞 +91 9XXXX XXXXX</p>
                <p class="small mb-0">✉ support@wheelywines.com</p>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small text-muted">
            © {{ date('Y') }} Wheely Wines. All rights reserved.
        </div>
    </div>
</footer>
