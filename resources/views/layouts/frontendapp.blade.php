<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="yLmeswqO68dg2qFCgnUKfAMhE3CxXoXexo0sZ3gl">
    <title>@yield('title') - Chattogram Branch</title>
    <link rel="icon">
    <link href="css.css?family=Arimo:400,700&display=swap" rel="stylesheet">
    <link href="css-1.css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="css2.css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">


    <link href="{{ asset('images/icon.jpg') }}" rel="icon" />
    <link href="//fonts.googleapis.com/css?family=Arimo:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
    <link href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">
    <header id="header">
        <div class="container">
            <div class="row mx-0">
                <div class="col-lg-2 col-sm-3 px-0">
                    <div class="news-title">
                        <p>{{ $header->notice_title }}</p>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9 px-0">
                    <div class="news-details">
                        <p class="marquee">{{ $header->notice }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--============== Navbar Part Goes Here ================-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ $header->logo }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link seminar-click" href="#seminar">Seminar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="py-md-5 py-4" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="conatct-left footer-logo text-center">
                        <img src="https://creativeitinstitutectg.com/storage/logo/logo_6055bd628a508.png" alt="logo">
                        <h4>CHANGE I GROW I SUCCEED</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pt-sm-4 pt-md-0 offset-lg-1">
                    <div class="addres-main">
                        <div class="address">
                            <h3>Address</h3>
                            <p>9 No, Kapasgola Road (4th Floor),<br>
                                Chawk Bazar, Telpotti More, Chattogram 4203, Bangladesh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pt-sm-4 pt-md-0">
                    <div class="contact-right">
                        <div class="address">
                            <h3>Contact</h3>
                            <h5>ctg@creativeitinstitute.com</h5>
                            <p>+880 1847422965, +880 1847422959</p>
                            <p>+880 1847422966 </p>
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com/CITI.Chattogram" target="_blank"><i
                                    class="fa fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCWxEU-3nFwQ95_VniFMU4Ng" target="_blank"><i
                                    class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/company/75671629/admin" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/creativeitinstitutechattogram/" target="_blank"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============== Copyright Part Goes Here ================-->
    <a href="#" class="back2"> <i class="fa fa-chevron-up" aria-hidden="true"></i> </a>
    <section id="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footerbtm text-center">
                        <p>Copyright © 2020 Creative IT Institute Chattogram. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/lightbox.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



</body>

</html>
