@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Usuario') }} #{{ $inscription->person->id }}</h3>
            </div>
            <div class="col text-right">
                <!-- Enlace para cancelar -->
                <a href="{{ url('Admininscription') }}" class="btn btn-sm btn-default">{{ __('Cancelar y volver') }}</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
    @endif
    <div class="card-body">
        <ul>
            <li>
                <!-- Nombre de Usuario -->
                <strong>{{ __('Nombre Completo') }}: </strong> {{ $inscription->person->last_name_person }} , {{ $inscription->person->name_person }}
            </li>
            <li>
                <!-- Apellido de Usuario -->
                <strong>{{ __('Documento') }}: </strong>
                @switch($inscription->person->type_document)
                    @case(1)
                        <!-- Tipo de Documento DNI -->
                        {{ __('DNI') }} : {{ $inscription->person->num_document }} @break
                    @case(2)
                        <!-- Tipo de Documento CARNET DE EXTRANJERIA -->
                        {{ __('CARNET DE EXTRANJERIA') }} : {{ $inscription->person->num_document }}  @break
                    @case(3)
                        <!-- Tipo de Documento PASAPORTE -->
                        {{ __('PASAPORTE') }} : {{ $inscription->person->num_document }}  @break
                    @case(4)
                        <!-- Tipo de Documento PART. DE NACIMIENTO-IDENTIDAD -->
                        {{ __('PART. DE NACIMIENTO-IDENTIDAD') }} : {{ $inscription->person->num_document }}  @break
                    @default
                        <!-- Tipo de Documento OTROS -->
                        {{ __('Otros') }} : {{ $inscription->person->num_document }}
                @endswitch
            </li>
            <li>
                <!-- Celular de Usuario -->
                <strong>{{ __('Celular') }}: </strong> {{ $inscription->person->phone_person }}
            </li>
        </ul>
        <!-- Formulario para guardar Código de Usuario -->
        <form action="{{ url('/showcodigoConfirm') }}" 
            method="POST">
            @csrf
            <!-- Código de Usuario -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ingrese un Código" name="code_assistance">
                <small id="emailHelp" class="form-text text-muted">{{ __('El código debe ser distinto para cada usuario.') }}</small>
            </div>
            <!-- Id de Inscripción -->
            <input type="hidden" name="id" value="{{ $inscription->id }}">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </form>
        <!-- fin del formulario -->
    </div>
</div>
@endsection
