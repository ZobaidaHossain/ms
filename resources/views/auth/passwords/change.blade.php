

@extends('admin.layout.main')

@section('title', 'Change Password')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container mt-5">
        <h2>Change Password</h2>

        <!-- Display session messages if any -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="current_password">Current Password</label>
                <input type="password" id="current_password" name="current_password" class="form-control" required>
                @error('current_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
                @error('new_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-3">
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
