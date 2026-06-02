<nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="{{ asset('assets/customer/Poseify/index.html') }}" class="navbar-brand ms-4 ms-lg-0">
                <h2 class="mb-0 text-success text-uppercase"><i class="fa-regular fa-face-surprise me-1"></i>IPM</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="{{ '/' }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ asset('assets/customer/Poseify/about.html') }}" class="nav-item nav-link">About</a>
                    <a href="{{ asset('assets/customer/Poseify/service.html') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ asset('assets/customer/Poseify/team.html') }}" class="dropdown-item">Our Models</a>
                            <a href="{{ asset('assets/customer/Poseify/testimonial.html') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ asset('assets/customer/Poseify/404.html') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ asset('assets/customer/Poseify/contact.html') }}" class="nav-item nav-link">Contact</a>
                </div>
                {{-- <div class="d-none d-lg-flex">
                    <a class="btn btn-outline-primary border-2" href="https://themewagon.com/themes/poseify">Download
                        Now</a>
                </div> --}}
            </div>
        </nav>
