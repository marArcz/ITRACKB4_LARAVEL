@extends('layouts.app', ['title' => 'Profile'])

@section('content')
<section class="main-content container ">
    <div class="d-flex align-items-center mb-3">
        <p class="fs-5 fw-bold text-dark me-auto">Edit Profile</p>
        <a href="{{route('admin.profile.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
    </div>
    <form method="patch" action="{{route('admin.profile.update',$id)}}">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Student ID:</label>
            <input type="text" class="form-control" name="studentIdNumber" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address:</label>
            <input type="text" class="form-control" name="address" required>
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save profile</button>
    </form>
</section>
@endsection
