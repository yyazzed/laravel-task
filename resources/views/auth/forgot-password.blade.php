@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <h2 class="mb-4 text-center">Forgot Password</h2>

    <p class="text-muted">
        Forgot your password? No problem. Just enter your email address and we’ll send you a link to reset it.
    </p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" type="email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                Send Password Reset Link
            </button>
        </div>
    </form>
</div>
@endsection
