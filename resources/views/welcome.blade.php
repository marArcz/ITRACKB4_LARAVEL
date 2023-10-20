@extends('layouts.app')


@section('content')
    <section class="main-content">
        <div class="container">
            <div class="home-welcome">
                <div class="row align-items-center home-row">
                    <div class="col">
                        <div class="welcome_p">
                            <p>Welcome to Jack Roberto University!</p>
                        </div>
                        <div class="title_sub">
                            <p>Embark on your college program journey with Prof. Jack,
                                a true expert in the Anti-Selos class, and someone who
                                welcomes a friendly and inclusive atmosphere.
                            </p>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex gap-3">
                                <button class="btn btn-warning text-light rounded-1">Admin Portal</button>
                                <button class="btn btn-warning text-light rounded-1">Clerk Portal</button>
                                <button class="btn btn-warning text-light rounded-1">Student Portal</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 d-flex align-items-end full-height">
                        <div class="">
                            <img class="img-fluid" src="{{ asset('assets/jack.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
