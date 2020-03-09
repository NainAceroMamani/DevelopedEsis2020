@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Usuarios') }}</h3>
            </div>
            <!-- Registrar Nueva Inscripción al Ciss -->
            <div class="col text-right">
                <a href="{{ url('Admininscription/create') }}" class="btn btn-sm btn-success">{{ __('Nueva Inscripción') }}</a>
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
        <!-- Tabla para lista a los Inscritos al Ciis -->
        <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
            <th scope="col">{{ __('Nombre Completo') }}</th>    <!-- Nombre Completo del Usuario -->
            <th scope="col">{{ __('Documento') }}</th>          <!-- Documento del Usuario -->
            <th scope="col">{{ __('P. Avanzado') }}</th>        <!-- Pago Avanzado del Usuario -->
            <th scope="col">{{ __('P. Inscripción') }}</th>     <!-- Pago de Inscripción Usuario -->
            <th scope="col">{{ __('Código') }}</th>             <!-- Codigó del Usuario -->
            <th scope="col">{{ __('Estado') }}</th>             <!-- Estado del Usuario -->
            <th scope="col">{{ __('Opciones') }}</th>           <!-- Opción para confirmar o actualizar inscripción -->
            </tr>
        </thead>
        <tbody>
        @foreach ($inscriptions as $inscription)
            <tr>
            <!-- Nombre completo del Usuario -->
            <td>{{ $inscription->inscription->person->last_name_person }} , {{ $inscription->inscription->person->name_person }}</td>
            <!-- Documento del Usuario -->
            <td> @include('admin.inscription.include.label_document') </td>
            <!-- Pago Avanzado del Usuario -->
            <td> {{ $inscription->payment_advanced }} </td>
            <!-- Pago de Inscripción Usuario -->
            <td> {{ $inscription->payment_inscription }}</td>
            <!-- Codigó del Usuario -->
            <td>
                @if(!is_null($inscription->inscription->code_assistance)) 
                    {{ $inscription->inscription->code_assistance }}
                @else
                    @if($inscription->status_pre_inscription == 2)  
                        <!-- Boton para ingresar un Código Al Usuario -->
                        <a href="{{ url('/inscriptionConfirm/'.$inscription->inscription->id.'/codigoConfirm') }}">
                            <button class="btn btn-sm btn-warning" type="submit"  data-toggle="tooltip" title="Ingresar Codigo"><i class="ni ni-badge"></i></button>
                        </a>       
                    @else
                        <span class="badge badge-danger">{{ _('Pendiente') }}</span>
                    @endif 
                @endif
            </td>
            <!-- Estado del Usuario -->
            <td> @include('admin.inscription.include.label_status_pre_inscription') </td>
            <td>
                <!-- Formulario Para confirmar Inscripción -->
                <form action="{{ url('/inscriptionConfirm/'.$inscription->id.'/confirm') }}" 
                method="POST" class="d-inline-block">
                @csrf
                    <button class="btn btn-sm btn-success" type="submit"  data-toggle="tooltip" title="Confirmar Inscripción">
                        <i class="ni ni-check-bold"></i>
                    </button>
                </form>
                <!-- Fin del Formulario -->
                <!-- Enlace para actualizar -->
                <a href="{{ url('/Admininscription/'. $inscription->id .'/edit') }}" class="btn btn-sm btn-default" title="Actualizar Usuario" href="#">{{ __('Actualizar') }}</a>
                <!-- Enlace para Visializar inscripción -->
                <a class="btn btn-sm btn-primary" title="Ver Inscripción" href="#">{{ __('Ver') }}</a>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <!-- Paginación -->
    <div class="card-body">
        {{ $inscriptions->links() }}
    </div>
</div>
@endsection
