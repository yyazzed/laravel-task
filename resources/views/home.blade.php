@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center p-5 bg-primary text-white rounded">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Welcome to Our Website</h1>
            <p class="lead mb-4">We provide amazing web solutions to help your business grow.</p>
            <a href="{{ url('/about-us') }}" class="btn btn-light btn-lg">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h4 class="mb-3 text-primary">Fast</h4>
                        <p>Our websites load quickly and deliver smooth performance for all users.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h4 class="mb-3 text-primary">Secure</h4>
                        <p>We prioritize security to protect your data and privacy at all times.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h4 class="mb-3 text-primary">Responsive</h4>
                        <p>Our designs adapt flawlessly to desktops, tablets, and mobile devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2025 Our Company. All rights reserved.</p>
        </div>
    </footer>
@endsection
