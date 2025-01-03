<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo")</title>

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles.css')}}">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

    {{-- ESTO ES EL INCLUDE PARA EL NAVBAR --}}
    @include("plantilla.navbar");


    <section id="hero" class="position-relative overflow-hidden py-4" style="background: url({{asset('images/banner-img.png')}});">
        <!-- <div class="pattern-overlay pattern-right position-absolute">
            <img src="images/pattern-hero.png" alt="pattern">
        </div> -->
        <div class="container py-5 mt-5">
            @yield("contenido")
        </div>
    </section>


    <section id="footer">
        <div class="container footer-container mt-5 pt-3">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

                <div class=" col-md-4 mt-5 mt-md-0 ">
                    <img src="{{asset('images/main-logo.png')}}" alt="image" class="my-3">
                    <p class="">Elit adipi massa diam in dignissim. Sagittis pulvinar ut dis venenatis nunc nunc vitae
                        aliquam vestibulum.</p>
                    <div class="d-flex align-items-center ">
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon active pe-4"
                                icon="mdi:facebook"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:twitter"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:instagram"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:linkedin"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:youtube"></iconify-icon></a>
                    </div>

                </div>

                <div class="col-md-2 offset-md-1">
                    <h5 class="py-3">Our services</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof replacement</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Damage repairs </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof repair</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof Solar System</a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Roof coating</a></li>
                    </ul>
                </div>
                <div class="col-md-2 ">
                    <h5 class="py-3">Quick links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Our locations </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> About us </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Our gallery </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Privacy Policy</a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link fw-normal p-0 "> Contact us </a></li>
                    </ul>
                </div>
                <div class="col-md-3 ">
                    <h5 class="py-3">Contact Info</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:location"></iconify-icon>
                            <a href="#" class="nav-link p-0 "> 163 Elm Drive, NYC, USA </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:call"></iconify-icon><a href="#"
                                class="nav-link p-0 "> (+089) 234-516-6123 </a>
                        </li>
                        <li class="nav-item d-flex mb-3">
                            <iconify-icon class="contact-icon pe-3" icon="ion:mail"></iconify-icon><a href="#"
                                class="nav-link p-0 "> info@yourdomain.com </a>
                        </li>

                    </ul>
                </div>



            </footer>
        </div>



        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p>© 2023 Roofers - All rights reserved</p>

                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <p class="">© 2023 Website By:<a href="https://templatesjungle.com/" class="website-link"
                            target="_blank"> <b><u>TemplatesJungle</u></b></a> <br> Distributed By: <a href="https://themewagon.com"><b><u>ThemeWagon</b></u></a></p>
                </div>

            </footer>
        </div>
    </section>

    <!-- script ================================================== -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>


</body>

</html>
