@extends('layouts.app')

@section('content')
    <section class="main-content py-5">
        <div class="row align-items-center h-100">
            <div class="col">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <img src="{{ asset('assets/jru_logo.png') }}" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col bg-light h-100">
                <div class="container px-5">
                    <div class="fs-4 fw-bold">
                        <p>Login Here</p>
                    </div>
                    <hr>
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
