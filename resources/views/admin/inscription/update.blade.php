@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Editar Usuario</h3>
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
        </div>
        <div class="col text-right">
            <a href="{{ url('Admininscription') }}" class="btn btn-sm btn-default">
                Cancelar y volver
            </a>
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
        <form action="{{ url('Admininscription/'.$inscription->id) }}" method="post">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_advanced">Pago Avanzado</label>
                        <input type="text" name="payment_advanced" class="form-control" required value="{{ old('payment_advanced',
                            $inscription->payment_advanced) }}" style="color:#000">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_inscription">Pago Inscripción</label>
                        <input type="text" name="payment_inscription" class="form-control" required value="{{ old('payment_inscription',
                            $inscription->payment_inscription) }}" style="color:#000">
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">          
                    <div class="form-group">
                        <label for="type_payment">Seleccione un Tipo de Pago</label>
                        <select class="form-control" name="type_payment" id="type_payment" style="color:#000">                                
                            <option value="1" @if( $inscription->type_payment == 1) selected @endif >Efectivo</option>
                            <option value="2" @if( $inscription->type_payment == 2) selected @endif >En línea</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_inscription">Código de Asistencia</label>
                        <input type="text" name="code_assistance" class="form-control" required value="{{ old('code_assistance',
                            $inscription->code_assistance) }}" style="color:#000">
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num_operation">Número de Operación</label>
                        <input type="text" name="num_operation" class="form-control" required value="{{ old('num_operation',
                            $inscription->num_operation) }}" style="color:#000">
                    </div> 
                </div>
                <div class="col-md-6">          
                    <div class="form-group">
                        <label for="payment_inscription">Número de 
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
                        </label>
                        <input type="text" name="num_document" class="form-control" required value="{{ old('num_document',
                            $inscription->inscription->person->num_document) }}" style="color:#000">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">          
                    <div class="form-group">
                        <div class="form-group">
                            <label for="payment_inscription">Nombre de Usuario</label>
                            <input type="text" name="name_person" class="form-control" required value="{{ old('name_person',
                                $inscription->inscription->person->name_person) }}" style="color:#000">
                        </div> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="payment_inscription">Apellido de Usuario</label>
                            <input type="text" name="last_name_person" class="form-control" required value="{{ old('last_name_person',
                                $inscription->inscription->person->last_name_person) }}" style="color:#000">
                        </div> 
                    </div> 
                </div>
            </div>
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection
