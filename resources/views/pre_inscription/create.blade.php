@extends('layouts.panel')

@section('content')
<!-- Preinscripciones -->
<section class="register-today overlay section" data-stellar-background-ratio="0.5"
    style="background-image:url({{ asset('img/header2.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-countdown">
                    <div class="coming-course">
                        <h2><span>{{ __('XXI CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS') }}</span>{{ __('Iniciará pronto') }}  </h2>
                    </div>
                    <div class="coming-time">
                        <div class="clearfix" data-countdown="2020/11/09"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-12">
                <div class="register-form">
                    <!-- Notificaciones -->
                    @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification') }}
                    </div>
                    @endif
                    <!-- Errores del formulario -->
                    @if (session('errors'))
                    <div class="alert alert-danger" role="alert">
                        Los cambios se han guardado pero tener en cuenta que:
                        <ul>
                            @foreach(session('errors') as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row ml-3 mb-3" style="font-size:18px;text-color:black;">
                        <img src="#" alt="Interbank" style="width: 150px;padding-left: 0px;">
                        <div class="row">
                            <p class="mr-2"><b>{{ __('Número de cuenta Interbank') }}: </b> 666 666 666 0000 [ERIK COLOMA QUISPE]
                            </p>
                            <p><b>CCI: </b> XXX-XXX-XXXXXXXXXXXX-XX</p>
                        </div>
                    </div>
                    <div class="form-title text-center">
                        <h2>{{ __('FORMULARIO PRE-INSCRIPCIÓN') }}</h2>
                        <p>{{ __('No olvide realizar el pago correspondiente') }}</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8  p-3 ">
                            <!-- Formulario de Inscripción -->
                            <form action="{{ url('inscription') }}" method="post">
                            @csrf
                                @include('include.form_inscritos')
                                <!-- Foto del voucher de pago -->            
                                <div class="form-group">
                                    <label for="link_photo" style="color:fff">{{ __('Seleccione Foto Voucher *opcional') }}</label>
                                    <input type="file" name="link_photo" class="form-control-file" id="link_photo">
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Registrarme al Ciis XXI') }}</button>
                            </form>
                            <!-- Fin del formulario -->
                        </div>

                        <!-- Beneficios del Ciis -->
                        <div class="col-12 col-sm-12 col-md-4 p-2" style="margin-top:-3%">
                            <br>
                            <div class="container">
                                <div class="container">
                                    <h4 class="text-center">{{ __('Beneficios de los participantes') }}</h4>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 p-2">
                                            <div class="card h-100 rounded a_small Blurb">
                                                <div class="card-body text-center">
                                                    <img src="{{ asset('img/recursos/201576.svg') }}" width="50px">
                                                    <h1 class="lead pb-3 mt-3  color-texto">{{ __('Material de apuntes') }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 p-2">
                                            <div class="card h-100 rounded a_small Blurb">
                                                <div class="card-body text-center">
                                                    <img src="{{ asset('img/recursos/201553.svg') }}" width="50px">
                                                    <h1 class="lead pb-3 mt-3  color-texto">{{ __('Acceso a ponencias magistrales') }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 p-2">
                                            <div class="card h-100 rounded a_small Blurb">
                                                <div class="card-body text-center">
                                                    <img src="{{ asset('img/recursos/236839.svg') }}" width="50px">
                                                    <h1 class="lead pb-3 mt-3  color-texto">{{ __('Certificado de participación') }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 p-2">
                                            <div class="card h-100 rounded a_small Blurb">
                                                <div class="card-body text-center">
                                                    <img src="{{ asset('img/recursos/school-bag-icon-1.png') }}"
                                                        width="50px">
                                                    <h1 class="lead pb-3 mt-3  color-texto">{{ __('Morral CIIS') }}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Beneficios -->
                    </div>
                    <!--/ End contenedor formulario-->
                </div>
            </div>
        </div>

</section>
<!--/ End preinscripciones -->

@endsection

@section('scripts')
    <script src="{{ asset('/js/pre_inscription/create.js') }}"></script>
@endsection