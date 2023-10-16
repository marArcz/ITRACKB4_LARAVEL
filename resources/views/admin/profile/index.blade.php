@extends('layouts.app', ['title' => 'Profile'])

@section('content')
<section class="main-content container">
    <div class="d-flex align-items-center mb-3">
        <p class="fs-5 fw-bold text-dark me-auto">Profiles</p>
        <a href="{{route('admin.profile.create')}}" class="btn btn-primary btn-sm">Create</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Address</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Marlo A. Zafe</td>
                <td>2020-1234</td>
                <td>Earth</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary btn-sm">View</a>
                    <a href="{{route('admin.profile.edit',9)}}" class="btn btn-success btn-sm">Edit</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Lemark Manlagnit</td>
                <td>2020-5678</td>
                <td>Mars</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary btn-sm">View</a>
                    <a href="{{route('admin.profile.edit',10)}}" class="btn btn-success btn-sm">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
