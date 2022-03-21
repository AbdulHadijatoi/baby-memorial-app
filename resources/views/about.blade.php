@extends("layouts.user")
@section('page-title', 'About Us')

@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">
                        Learn More About Our Work And Our Cultural Activities
                    </h1>
                    <p>
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class="mb-4">
                        Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                        stet est diam rebum amet diam ipsum. Clita clita labore, dolor
                        duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore
                        duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at
                        dolor est vero nonumy magna.
                    </p>
                    <div class="row g-4 align-items-center">

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{  asset("front-asset/img/user.jpg")}}" alt=""
                                    style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Jhon Doe</h6>
                                    <small>CEO & Founder</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{  asset("front-asset/img/about-1.jpg")}}" alt="" />
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{  asset("front-asset/img/about-2.jpg")}}" alt="" />
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{  asset("front-asset/img/about-3.jpg")}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Call To Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="{{  asset("front-asset/img/call-to-action.jpg")}}"
                                style="object-fit: cover" />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Submit your request</h1>
                            <p class="mb-4">Sign up to submit a memory of your child</p>
                            <a class="btn btn-primary py-3 px-5" href="{{ route("register") }}">Get Register Now<i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->



@endsection
