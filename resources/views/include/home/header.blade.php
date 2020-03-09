<!-- Header -->
<header class="header" style="position: fixed; top: 0; width: 100%;z-index: 999;">
    <!-- Header Inner -->
    <div class="header-inner overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{ asset('img/logo_ciis.svg') }}" style="width: 120px !important; margin: 10px 10px;" alt="CIIS XXI"></a>
                </div>
                <!--/ End Logo -->
                <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="menu-bar">
                        <nav class="navbar navbar-default">
                            <div class="navbar-collapse">
                                <!-- Main Menu -->
                                <ul id="nav" class="nav menu navbar-nav">
                                    <li><a href="courses.html"><i class="fa fa-home"></i>{{ __('Inicio') }}</a></li>
                                    <li><a href="#"><i class="fa fa-clone"></i>{{ __('Congreso') }}</a>
                                        <ul class="dropdown">
                                            <li><a href="teachers.html">{{ __('Talleres') }}</a></li>
                                            <li><a href="teachers.html">{{ __('Concursos') }}</a></li>
                                            <li><a href="teachers.html">{{ __('Ponencias') }} <i class="fa fa-angle-double-right"></i></a>
                                                <ul class="dropdown submenu">
                                                    <li><a href="contact.html"><i class="fa fa-address-book"></i>{{ __('Ponentes') }}</a> </li>
                                                    <li><a href="contact.html"><i class="fa fa-address-book"></i>{{ __('Cronograma') }}</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="teachers.html">{{ __('Feria Tecnológica') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"><i class="fa fa-address-book"></i>{{ __('Postmaster') }}</a></li>
                                    <li><a href="courses.html"><i class="fa fa-clone"></i>{{ __('II WIA') }}</a></li>
                                    <li><a href="events.html"><i class="fa fa-bullhorn"></i>{{ __('Eventos Anteriores') }}</a>
                                        <ul class="dropdown">
                                            <li><a href="https://ciistacna.com/2019/">{{ __('XX CIIS') }}</a></li>
                                            <li><a href="https://ciistacna.com/2018/">{{ __('XIX CIIS') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Main Menu -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->