@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">
        <div class="row mb-3">
            <div class="col">Edit Profile</div>
            <div class="col-auto">
                <a href="{{route('admin.profile.index')}}" class="btn btn-sm btn-primary">Back</a>

            </div>

        </div>

    </div>
