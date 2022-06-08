<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CreativeAdmin - @yield('title')</title>
    <link href="{{ asset('backend/img/logo_black.png') }}" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('backend/css/ruang-admin.min.css') }}" rel="stylesheet">
    @yield('cus_style')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion text-uppercase" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dashboard">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('backend/img/logo.png') }}">
                </div>
                <div class="sidebar-brand-text mx-3">CreativeAdmin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading text-uppercase">
                Frontend Contents
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHeader"
                    aria-expanded="true" aria-controls="collapseHeader">
                    <i class="fas fa-book-reader"></i>
                    <span>Header Contents</span>
                </a>
                <div id="collapseHeader" class="collapse" aria-labelledby="headingHeader"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Header Contents</h6>
                        <a class="collapse-item" href="{{ route('header.create') }}">Add Header</a>
                        <a class="collapse-item" href="{{ route('header.index') }}">All Header</a>
                        <a class="collapse-item" href="{{ route('header.trash') }}">All Trashed Header</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBanner"
                    aria-expanded="true" aria-controls="collapseBanner">
                    <i class="fab fa-artstation"></i>
                    <span>Banner Contents</span>
                </a>
                <div id="collapseBanner" class="collapse" aria-labelledby="headingBanner"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Banner Contents</h6>
                        <a class="collapse-item" href="{{ route('banner.create') }}">Add Banner</a>
                        <a class="collapse-item" href="{{ route('banner.index') }}">All Banner</a>
                        <a class="collapse-item" href="{{ route('banner.trash') }}">All Trashed Banner</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGellery"
                    aria-expanded="true" aria-controls="collapseGellery">
                    <i class="fab fa-envira"></i>
                    <span>Gellery Contents</span>
                </a>
                <div id="collapseGellery" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gellery Contents</h6>
                        <a class="collapse-item" href="{{ route('gellery.create') }}">Add Gellery Items</a>
                        <a class="collapse-item" href="{{ route('gellery.index') }}">All Gellery Items</a>
                        <a class="collapse-item" href="{{ route('gellery.tarsh') }}">All Trashed Gellery</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbout"
                    aria-expanded="true" aria-controls="collapseAbout">
                    <i class="fas fa-magic"></i>
                    <span>About Contents</span>
                </a>
                <div id="collapseAbout" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">About Contents</h6>
                        <a class="collapse-item" href="{{ route('about.create') }}">Add About Items</a>
                        <a class="collapse-item" href="#">All About Items</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContacts"
                    aria-expanded="true" aria-controls="collapseContacts">
                    <i class="far fa-address-book"></i>
                    <span>Contacts</span>
                </a>
                <div id="collapseContacts" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Contacts Informations</h6>
                        <a class="collapse-item" href="{{ route('contact.index') }}">All Contacts</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeminars"
                    aria-expanded="true" aria-controls="collapseSeminars">
                    <i class="fab fa-elementor"></i>
                    <span>Seminars</span>
                </a>
                <div id="collapseSeminars" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Seminars Contents</h6>
                        <a class="collapse-item" href="{{ route('seminar.create') }}">Add Seminars Items</a>
                        <a class="collapse-item" href="{{ route('seminar.all') }}">All Seminars Items</a>
                        <a class="collapse-item" href="{{ route('seminar.index') }}">Seminar & Leed Items</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourses"
                    aria-expanded="true" aria-controls="collapseCourses">
                    <i class="fab fa-elementor"></i>
                    <span>Courses</span>
                </a>
                <div id="collapseCourses" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Courses Contents</h6>
                        <a class="collapse-item" href="{{ route('course.create') }}">Add Courses Items</a>
                        <a class="collapse-item" href="{{ route('course.index') }}">All Courses Items</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars text-warning"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small"
                                            placeholder="What do you want to look for?" aria-label="Search"
                                            aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="https://avatars.dicebear.com/api/adventurer/{{ Auth::user()->name }}.svg"
                                    style="max-width: 60px">
                                <span
                                    class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">

                    @yield('content')

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> - ReDeveloped by
                            <b><a href="#" target="_blank">Asifuddoula Sakib</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('backend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('backend/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('backend/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/js/chart-area-demo.js') }}"></script>
    @yield('custom_script')
</body>

</html>
