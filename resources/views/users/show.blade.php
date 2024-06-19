@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">User Details</div>
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input type="text" id="password" class="form-control" value="********"readonly>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                        <div class="col-md-6">
                            <input type="text" id="role" class="form-control" value="{{ $user->role->role }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="created_at" class="col-md-4 col-form-label text-md-right">Created At</label>
                        <div class="col-md-6">
                            <input type="text" id="created_at" class="form-control" value="{{ $user->created_at->format('d M Y') }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
