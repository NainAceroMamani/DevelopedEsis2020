@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Usuario #{{ $inscription->person->id }}</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul>
            <li>
                <strong>Nombre Completo: </strong> {{ $inscription->person->last_name_person }} , {{ $inscription->person->name_person }}
            </li>
            <li>
                <strong>Documento: </strong>
                @switch($inscription->person->type_document)
                    @case(1)
                        DNI : {{ $inscription->person->num_document }}
                        @break

                    @case(2)
                        CARNET DE EXTRANJERIA : {{ $inscription->person->num_document }}
                        @break

                    @case(3)
                        PASAPORTE : {{ $inscription->person->num_document }}
                        @break

                    @case(4)
                        PART. DE NACIMIENTO-IDENTIDAD : {{ $inscription->person->num_document }}
                        @break

                    @default
                        Otros : {{ $inscription->person->num_document }}
                @endswitch
            </li>
            <li>
                <strong>Celular: </strong> {{ $inscription->person->phone_person }}
            </li>
        </ul>
        <form action="{{ url('/showcodigoConfirm') }}" 
            method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ingrese un Código" name="code_assistance">
                <small id="emailHelp" class="form-text text-muted">El código debe ser distinto para cada usuario.</small>
            </div>
            <input type="hidden" name="id" value="{{ $inscription->id }}">
            <button type="submit" class="btn btn-primary">Guardar</button>
                
            <a href="{{ url('/Admininscription') }}" class="btn btn-default">Volver</a>
        </form>
    </div>
</div>
@endsection
