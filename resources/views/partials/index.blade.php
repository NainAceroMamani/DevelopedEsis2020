@extends('layouts.panel')

@section('content')
<!-- Slider Area -->
<section class="register-today overlay section" data-stellar-background-ratio="0.5" style="background-image:url({{ asset('img/header2.jpg') }});padding-bottom: 10px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-countdown">
                    <div class="coming-course">
                        <h2><span> {{ __('XXI CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS') }}</span>{{ __('Del 09 al 13 de noviembre 2020') }}</h2>
                    </div>
                    <div class="coming-time">
                        <div class="clearfix" data-countdown="2020/11/09"></div>
                    </div>
                    <div class="text-center mt-4">
                        <!-- Enlace para Registrarse -->
                        <a class="btn white primary" href="{{ url('/inscription/create') }}">{{ __('Inscribirse') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mensajes de error del formulario Inscripción -->
@if ($errors->any())
    <div class="card-body">
        <div class="alert alert-info" role="alert">
            <h3 class="text-center">{{ __('Error en el registro') }}</h3>
            <hr>
        </div>
        <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </div>
    </div>
@endif
<!-- Slider -->
<section class="home-slider">
    <div class="slider-active ">
        <!-- Single Slider -->
        <div class="single-slider overlay">
            <div class="slider-image" style="background-image:url({{ asset('img/temp/slider/slider-bg1.jpg') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10 col-12">
                        <!-- Slider Content -->
                        <div class="slider-content">
                            <h1 class="slider-title"><span>The Best University in the World!</span>Eduland Online
                                <b>University</b>
                            </h1>
                            <p class="slider-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <!-- Button -->
                            <div class="button">
                                <a href="about.html" class="btn white">About Eduland</a>
                                <a href="courses.html" class="btn white primary">Our Courses</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                        <!--/ End Slider Content -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->

        <!-- Single Slider -->
        <div class="single-slider overlay">
            <div class="slider-image" style="background-image:url({{ asset('img/temp/slider/slider-bg1.jpg') }})">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10 col-12">
                        <!-- Slider Content -->
                        <div class="slider-content">
                            <h1 class="slider-title"><span>The Best University in the World!</span>Eduland Online
                                <b>University</b>
                            </h1>
                            <p class="slider-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority</p>
                            <!-- Button -->
                            <div class="button">
                                <a href="about.html" class="btn white">About Eduland</a>
                                <a href="courses.html" class="btn white primary">Our Courses</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                        <!--/ End Slider Content -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<!-- Courses -->
<section class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>Our <span>Courses</span></h2>
                    <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
                    <div class="icon"><i class="fa fa-clone"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course1.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author1.jpg') }}" alt="#">
                                <h4 class="title">Jewel Mathies</h4>
                            </div>
                            <span class="price">$350</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan consequa</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li class="point"><span>4.5</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>2.4k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Month</span>
                            <span><i class="fa fa-clock-o"></i>09:30 - 12:00</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course3.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author3.jpg') }}" alt="#">
                                <h4 class="title">Noha Brown</h4>
                            </div>
                            <span class="price">Free</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="point"><span>4.0</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>5.3k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Weeks</span>
                            <span><i class="fa fa-clock-o"></i>10:00 - 11:00</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course2.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author2.jpg') }}" alt="#">
                                <h4 class="title">Jenola Protan</h4>
                            </div>
                            <span class="price">$290</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="point"><span>3.9</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>2.4k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Month</span>
                            <span><i class="fa fa-clock-o"></i>10:30 - 12:30</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course4.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author1.jpg') }}" alt="#">
                                <h4 class="title">Jewel Mathies</h4>
                            </div>
                            <span class="price">$350</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan consequa</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li class="point"><span>4.5</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>2.4k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Month</span>
                            <span><i class="fa fa-clock-o"></i>09:30 - 12:00</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course4.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author3.jpg') }}" alt="#">
                                <h4 class="title">Noha Brown</h4>
                            </div>
                            <span class="price">Free</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="point"><span>4.0</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>5.3k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Weeks</span>
                            <span><i class="fa fa-clock-o"></i>10:00 - 11:00</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="{{ asset('img/temp/courses/course3.jpg') }}" alt="#">
                        <a href="course-single.html" class="btn white primary">Register Now</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="{{ asset('img/temp/author2.jpg') }}" alt="#">
                                <h4 class="title">Jenola Protan</h4>
                            </div>
                            <span class="price">$290</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the shore of this uncharted Gilligan</p>
                    </div>
                    <!-- Course Meta -->
                    <div class="course-meta">
                        <!-- Rattings -->
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li class="point"><span>3.9</span></li>
                        </ul>
                        <!-- Course Info -->
                        <div class="course-info">
                            <span><i class="fa fa-users"></i>2.4k Enrolled</span>
                            <span><i class="fa fa-calendar-o"></i>2 Month</span>
                            <span><i class="fa fa-clock-o"></i>10:30 - 12:30</span>
                        </div>
                    </div>
                    <!--/ End Course Meta -->
                </div>
                <!--/ End Single Course -->
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->

<!-- video CSS -->
<div class="clients" style="background:linear-gradient(45deg, #071a4c, #149dcc);">
    <div class=" container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12" style="margin:4% 0%;">
                <div class="text-content text-center">
                    <h4> {{ __('Conoce más del evento') }}</h4>
                    <p>{{ __('El Círculo de Estudios y Responsabilidad Social de la ESIS junto con los estudiantes de la XXVI
                        Promoción de la Escuela Profesional de Ingeniería en Informática y Sistemas organizan el XXI
                        Congreso Internacional de Informática y Sistemas con el fin de brindarle una gama de
                        conocimientos, con ponentes del más alto nivel en los distintos campos de Ciencias de la
                        Computación. ') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!--/ End video CSS -->
@endsection