@extends('layouts.app')


@section('content')

    <div class="home-welcome" style="background-image: url({{ asset('assets/jru_banner.png') }});">

        <section class="main-content container">

            <div class="row w-200">
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
                </div>

                <div class="col-3 align-self-bottom">
                    <img class="img-fluid" src="{{ asset('assets/jack.png') }}" alt="">
                </div>
            </div>
        </section>

    @endsection

</div>

</html>
