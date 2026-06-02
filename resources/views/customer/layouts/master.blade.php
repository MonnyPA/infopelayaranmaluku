@include('customer.layouts.__header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Header Start -->
    <div class="container-fluid p-0">
        @include('customer.layouts.__navbar')

        @yield('content')


    <!-- Footer Start -->
    @include('customer.layouts.__footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary border-2 btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/customer/Poseify/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/customer/Poseify/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/customer/Poseify/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/customer/Poseify/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/customer/Poseify/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/customer/Poseify/js/main.js') }}"></script>
</body>

</html>
