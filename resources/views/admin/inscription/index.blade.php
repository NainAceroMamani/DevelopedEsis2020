@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Usuarios</h3>
        </div>
        <div class="col text-right">
            <a href="{{ url('patients/create') }}" class="btn btn-sm btn-success">
                Nueva Inscripción
            </a>
        </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-default" role="alert">
            {{ session('notification') }}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Documento</th>
            <th scope="col">P. Avanzado</th>
            <th scope="col">P. Inscripción</th>
            <th scope="col">Código</th>
            <th scope="col">Estado</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($inscriptions as $inscription)
            <tr>
            <td>{{ $inscription->inscription->person->last_name_person }} , 
                {{ $inscription->inscription->person->name_person }}</td>
            <td>
            @switch($inscription->inscription->person->type_document)
                @case(1)
                    DNI : {{ $inscription->inscription->person->num_document }}
                    @break

                @case(2)
                    CARNET DE EXTRANJERIA : {{ $inscription->inscription->person->num_document }}
                    @break

                @case(3)
                    PASAPORTE : {{ $inscription->inscription->person->num_document }}
                    @break

                @case(4)
                    PART. DE NACIMIENTO-IDENTIDAD : {{ $inscription->inscription->person->num_document }}
                    @break

                @default
                    Otros : {{ $inscription->inscription->person->num_document }}
            @endswitch
            </td>
            <td>
                {{ $inscription->payment_advanced }}
            </td>
            <td>
                {{ $inscription->payment_inscription }}
            </td>
            <td>
                @if(!is_null($inscription->inscription->code_assistance)) 
                    {{ $inscription->inscription->code_assistance }}
                @else
                    @if($inscription->status_pre_inscription == 2)         
                        <form action="{{ url('/inscriptionConfirm/'.$inscription->inscription->id.'/codigoConfirm') }}" 
                        method="POST" class="d-inline-block">
                        @csrf
                            <button class="btn btn-sm btn-warning" type="submit"  data-toggle="tooltip" title="Ingresar Codigo">
                                <i class="ni ni-badge"></i>
                            </button>
                        </form>
                    @else
                        <span class="badge badge-danger">Pendiente</span>
                    @endif 
                @endif
            </td>
            <td>
            @switch($inscription->status_pre_inscription)
                @case(1)
                    <span class="badge badge-danger">Pendiente</span>
                    @break

                @case(2)
                    <span class="badge badge-primary">Inscrito</span>
                    @break

                @default
                    <span class="badge badge-priamry">Pendiente</span>
            @endswitch
            </td>
                <td>
                <form action="{{ url('/inscriptionConfirm/'.$inscription->id.'/confirm') }}" 
                method="POST" class="d-inline-block">
                @csrf
                    <button class="btn btn-sm btn-success" type="submit"  data-toggle="tooltip" title="Confirmar Inscripción">
                        <i class="ni ni-check-bold"></i>
                    </button>
                </form>
                <a href="{{ url('/Admininscription/'. $inscription->id .'/edit') }}" class="btn btn-sm btn-default" title="Actualizar Usuario" href="#">Actualizar</a>
                <a class="btn btn-sm btn-primary" title="Ver Inscripción" href="#">Ver</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="card-body">
        {{ $inscriptions->links() }}
    </div>
</div>
@endsection
