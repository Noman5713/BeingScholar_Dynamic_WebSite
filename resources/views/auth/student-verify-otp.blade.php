@extends('layouts.student')
@section('content')
<div class="container mt-5">
    <h2>Email Verification (OTP)</h2>
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
    <form method="POST" action="{{ route('student.verify-otp') }}">
        @csrf
        <div class="mb-3">
            <label for="otp" class="form-label">Enter OTP</label>
            <input type="text" class="form-control" id="otp" name="otp" maxlength="6" required>
        </div>
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>
@endsection
