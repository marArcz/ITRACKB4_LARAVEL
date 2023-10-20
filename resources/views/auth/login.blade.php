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
            <div class="col  h-100">
                <div class="container px-5">
                    <div class="card border-0 shadow rounded-3">
                        <div class="card-body p-4">
                            <div class="fs-4 fw-bold ">
                                <p>Login Here</p>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter your password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Remember me
                                        </label>
                                      </div>
                                    <div class="mb-4">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-dark">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
