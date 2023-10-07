@extends('layouts.app')

@section('content')

<div class="home-description">
    <p>This is Profile Section of Admin</p>

    <div class="mt-3">
       <p> Admin Id: {{ $id }}</p>
        <p>Admin Date of Birth: {{ $dob }}</p>
    </div>
</div>
@endsection



