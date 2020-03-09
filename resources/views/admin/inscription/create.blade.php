@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Registrar nuevo Usuario al Congreso') }}</h3>
            </div>
            <div class="col text-right">
                <!-- Enlace para cancelar -->
                <a href="{{ url('Admininscription') }}" class="btn btn-sm btn-default">{{ __('Cancelar y volver') }}</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
        @endif
        <!-- Formulario para Inscribir -->
        <form action="{{ url('Admininscription') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <!-- Pago Avanzado -->                          
                    <div class="form-group">
                        <label for="payment_advanced">{{ __('Pago Avanzado') }}</label>
                        <input type="text" name="payment_advanced" class="form-control" value="{{ old('payment_advanced') }}" style="color:#000">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Pago Inscripción -->   
                    <div class="form-group">
                        <label for="payment_inscription">{{ __('Pago Inscripción') }}</label>
                        <input type="text" name="payment_inscription" class="form-control" value="{{ old('payment_inscription') }}" style="color:#000">
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">          
                    <!-- Seleccione un Tipo de Pago --> 
                    <div class="form-group">
                        <label for="type_payment">{{ __('Seleccione un Tipo de Pago') }}</label>
                        <select class="form-control" name="type_payment" id="type_payment" style="color:#000">                                
                            <option value="1" >{{ __('Efectivo') }}</option>
                            <option value="2" >{{ __('En línea') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Código de Asistencia --> 
                    <div class="form-group">
                        <label for="payment_inscription">{{ __('Código de Asistencia') }}</label>
                        <input type="text" name="code_assistance" class="form-control" value="{{ old('code_assistance') }}" style="color:#000">
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">        
                    <!-- Seleccione Tipo de Documento -->                   
                    <div class="form-group">
                        <label  for="type_document">{{ __('Seleccione Tipo de Documento') }}</label>
                        <select class="form-control" name="type_document" required id="type_docuemnt" style="color:#000">
                            <option value="1">{{ __('DNI') }}</option>
                            <option value="2">{{ __('CARNET DE EXTRANJERIA') }}</option>
                            <option value="3">{{ __('PASAPORTE') }}</option>
                            <option value="4">{{ __('PART. DE NACIMIENTO-IDENTIDAD') }}</option>
                            <option value="5">{{ __('Otros') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Ingrese su número Documento -->    
                    <div class="form-group">
                        <label  for="num_document">{{ __('Ingrese su número Documento') }}</label>
                        <input type="text" id="num_document" name="num_document" class="form-control" required value="{{ old('num_document') }}" style="color:#000">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <!-- Seleccione un pais -->    
                    <div class="form-group">
                        <label  for="country_id">{{ __('Seleccione un pais') }}</label>
                        <select class="form-control" id="country" name="country_id" required style="color:#000">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" 
                                @if(old('country_id') == $country->id) selected @endif>{{ $country->name_country }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">        
                    <!-- Seleccione una ciudad -->            
                    <div class="form-group">
                        <label  for="city_id">{{ __('Seleccione una ciudad') }}</label>
                        <select class="form-control" name="city_id" id="city" required style="color:#000">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}" 
                                @if(old('city_id') == $city->id) selected @endif>{{ $city->name_city }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Nombre del Usuario --> 
                    <div class="form-group">
                        <input type="text" name="name_person" id="name_person" request class="form-control" value="{{ old('name_person') }}" placeholder="Nombres Completo." style="color:#000">
                    </div>
                </div>
                <div class="col-md-6">  
                    <!-- Apellido del Usuario -->                 
                    <div class="form-group">
                        <input type="text" name="last_name_person" id = "last_name_person" class="form-control" value="{{ old('last_name_person') }}" placeholder="Apellidos Completo." style="color:#000">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">          
                    <!-- Tipo de Persona--> 
                    <div class="form-group">
                        <label for="type_person">{{ __('Seleccione un Tipo') }}</label>
                        <select class="form-control" name="type_person" id="type_person" required style="color:#000">
                            <option value="1">{{ __('Estudiante') }}</option>
                            <option value="2">{{ __('Profesional') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <!-- Año cursado del Usuario--> 
                    <div class="form-group">
                        <label for="year_student">{{ __('Seleccione un Año') }}</label>
                        <select class="form-control" name="year_student" id="year_student" style="color:#000">
                            <option value="1">{{ __('Primero') }}</option>
                            <option value="2">{{ __('Segundo') }}</option>
                            <option value="3">{{ __('Tercero') }}</option>
                            <option value="4">{{ __('Cuarto') }}</option>
                            <option value="5">{{ __('Quinto') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- Email del Usuario -->
                    <div class="form-group">
                        <input type="text" name="email_person" required class="form-control" value="{{ old('email_person') }}" placeholder="Correo Electrónico." style="color:#000">
                    </div>
                </div>
                <div class="col-md-6">            
                    <!-- Número del usuario -->      
                    <div class="form-group">
                        <input type="text" name="phone_person" class="form-control" value="{{ old('phone_person') }}" placeholder="Celular." style="color:#000">
                    </div>
                </div>
            </div>
            <!-- Grado profesional del Usuario -->
            <div class="form-group">
                <input type="text" name="grade_prefessional" id="grade_prefessional" class="form-control" value="{{ old('grade_prefessional') }}" placeholder="Grado Académico." style="color:#000">
            </div>
            <!-- Universidad del Usuario -->
            <div class="form-group">
                <input type="text" name="college" class="form-control" value="{{ old('college') }}" placeholder="Ingrese su institución." style="color:#000">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </form>
        <!-- Fin del formulario -->
    </div>
</div>
@endsection

@section('scripts')
    <!-- Script para cargar Ciudades de acuerdo al País -->
    <script src="{{ asset('/js/pre_inscription/create.js') }}"></script>
@endsection