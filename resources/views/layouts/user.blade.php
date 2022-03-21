<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield("page-title","Home")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front-asset/lib/animate/animate.min.css" rel="stylesheet') }}" />
    <link href="{{ asset('front-asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front-asset/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('front-asset/css/style1.css') }}" rel="stylesheet" />

    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    @livewireStyles
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{ route("home") }}" class="navbar-brand">
                <h1 class="m-0 text-primary">
                    <i class="fa fa-book-reader me-3"></i>Site name
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route("home") }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route("about-us") }}" class="nav-item nav-link">About Us</a>
                    @auth
                        <a href="{{ route("user.profile") }}" class="nav-item nav-link">Profile</a>
                        <a href="{{ route("user.baby-requests.index") }}" class="nav-item nav-link">Requests</a>
                    @endauth

                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.html" class="dropdown-item">School Facilities</a>
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a> --}}
                </div>
                @auth


                    <a class="btn btn-primary rounded-pill px-3 d-none d-lg-block"
                        onclick="document.getElementById('logout-form').submit()">
                        Logout<i class="fa fa-arrow-right ms-3"></i></a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf

                    </form>
                @endauth

                @guest
                    <a href="{{ route("login") }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Login<i
                            class="fa fa-arrow-right ms-3"></i></a>
                @endguest
            </div>
        </nav>
        <!-- Navbar End -->




        @yield('content')


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York,
                            USA
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>+012 345 67890
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>info@example.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        {{-- <a class="btn btn-link text-white-50" href="">Contact Us</a> --}}
                        {{-- <a class="btn btn-link text-white-50" href="">Our Services</a> --}}
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 text-white" type="text"
                                placeholder="Your email" />
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                SignUp
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                            Right Reserved.


                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ route("home") }}">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front-asset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front-asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front-asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front-asset/js/main.js') }}"></script>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#form-" + id).submit();
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                }
            })
        }

        window.addEventListener('show-status', event => {
            Swal.fire({
                icon: event.detail.type,
                title: event.detail.msg,
            })
        })

        window.addEventListener('scroll-top', event => {

            $("body").scrollTop(0);

        })



        function ckeditor() {
            return {
                /**
                 * The function creates the editor and returns its instance
                 * @param $dispatch Alpine's magic property
                 */
                create: async function($dispatch) {
                    // Create the editor with the x-ref
                    const editor = await ClassicEditor.create(this.$refs.ckEditor);
                    // Handle data updates
                    editor.model.document.on('change:data', function() {
                        $dispatch('input', editor.getData())
                    });
                    // return the editor
                    return editor;
                },
                /**
                 * Initilizes the editor and creates a listener to recreate it after a rerender
                 * @param $dispatch Alpine's magic property
                 */
                init: async function($dispatch) {
                    // Get an editor instance
                    const editor = await this.create($dispatch);
                    // Set the initial data
                    editor.setData('{{ old('description') }}')
                    // Pass Alpine context to Livewire's
                    const $this = this;
                    // On reinit, destroy the old instance and create a new one
                    Livewire.on('reinit', async function(e) {
                        editor.setData('');
                        editor.destroy()
                            .catch(error => {
                                console.log(error);
                            });
                        await $this.create($dispatch);
                    });
                }
            }
        }
    </script>
</body>

</html>
