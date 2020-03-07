@extends('layouts.panel')

<div class="mh-100" style="height:65px"></div>

@section('content')

<div class="flex-center position-ref full-height gradient " style="margin:auto">
    <div class="container"><br>
        @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ __(session('notification')) }}
            </div> 
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
        @endif
        <div class="row">      
        <div class="col-12 col-sm-12 col-md-6  p-3 opacity">       
                <div class="card-body text-center text-light">
                    <strong><h1 style="font-weight:bold"> {{ __('Ficha de Pre-Inscripción') }}</h1></strong>
                </div>
                <form action="{{ url('inscription') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">                          
                            <div class="form-group">
                                <label style="color:#fff" for="type_document">Seleccione Tipo de Documento</label>
                                <select class="form-control" name="type_document" required id="type_docuemnt">
                                    <option value="1">DNI</option>
                                    <option value="2">CARNET DE EXTRANJERIA</option>
                                    <option value="3">PASAPORTE</option>
                                    <option value="4">PART. DE NACIMIENTO-IDENTIDAD</option>
                                    <option value="5">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label style="color:#fff" for="num_document">Ingrese su número Documento</label>
                                <input type="text" id="num_document" name="num_document" class="form-control" required value="{{ old('num_document') }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label style="color:#fff" for="country_id">Seleccione un pais</label>
                                <select class="form-control" id="country" name="country_id" required>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" 
                                    @if(old('country_id') == $country->id) selected @endif>{{ $country->name_country }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">                  
                            <div class="form-group">
                                <label style="color:#fff" for="city_id">Seleccione una ciudad</label>
                                <select class="form-control" name="city_id" id="city" required>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" 
                                        @if(old('city_id') == $city->id) selected @endif>{{ $city->name_city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name_person" id="name_person" request class="form-control" value="{{ old('name_person') }}" placeholder="Nombres Completo.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name_person" id = "last_name_person" class="form-control" value="{{ old('last_name_person') }}" placeholder="Apellidos Completo.">
                    </div>
                    <div class="row">
                        <div class="col">          
                            <div class="form-group">
                                <label style="color:#fff" for="type_person">Seleccione un Tipo</label>
                                <select class="form-control" name="type_person" id="type_person" required>
                                    <option value="1">Estudiante</option>
                                    <option value="2">Profesional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col"> 
                            <div class="form-group">
                                <label style="color:#fff" for="year_student">Seleccione un Año</label>
                                <select class="form-control" name="year_student" id="year_student" >
                                    <option value="1">Primero</option>
                                    <option value="2">Segundo</option>
                                    <option value="3">tercero</option>
                                    <option value="4">Cuarto</option>
                                    <option value="5">Quinto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="grade_prefessional" id="grade_prefessional" class="form-control" value="{{ old('grade_prefessional') }}"
                        placeholder="Grado Académico.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email_person" required class="form-control" value="{{ old('email_person') }}"
                        placeholder="Correo Electrónico.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="college" class="form-control" required value="{{ old('college') }}"
                        placeholder="Ingrese su institución.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_person" class="form-control" value="{{ old('phone_person') }}" placeholder="Celular.">
                    </div>
                    <div class="form-group">
                        <label for="link_photo" style="color:fff">Seleccione Foto Voucher *opcional</label>
                        <input type="file" name="link_photo" class="form-control-file" id="link_photo">
                    </div>
                    <button type="submit" class="btn btn-primary" style="opacity:none;">Registrarme al Ciis XXI</button>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-6 p-3" style="margin-top:-3%">
                <br>
                <div class="card opacityimg">
                    <div class="card-body">
                        <h2 class="text-center">Beneficios de los participantes</h2>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 p-3">
                                <div class="card h-100 rounded a_small Blurb">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('img/recursos/201576.svg') }}" width="50px">
                                        <h1 class="lead pb-3 mt-3  color-texto">Material de apuntes</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 p-3">
                                <div class="card h-100 rounded a_small Blurb">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('img/recursos/201553.svg') }}" width="50px">
                                        <h1 class="lead pb-3 mt-3  color-texto">Acceso a ponencias magistrales</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 p-3">
                                <div class="card h-100 rounded a_small Blurb">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('img/recursos/236839.svg') }}" width="50px">
                                        <h1 class="lead pb-3 mt-3  color-texto">Certificado de participación</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 p-3">
                                <div class="card h-100 rounded a_small Blurb">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('img/recursos/school-bag-icon-1.png') }}" width="50px">
                                        <h1 class="lead pb-3 mt-3  color-texto">Morral CIIS</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/pre_inscription/create.js') }}"></script>
@endsection