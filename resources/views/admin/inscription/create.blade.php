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
            @include('include.form_inscritos')
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