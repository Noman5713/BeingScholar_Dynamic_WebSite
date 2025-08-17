@extends('layouts.student')
@section('content')
<div class="container mt-5">
    <h2>Forgot Password</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('student.forgot-password.send') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
    <p class="mt-3"><a href="{{ route('student.login.form') }}">Back to Login</a></p>
</div>
@endsection
