@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Editar Usuario') }}</h3>
                    @include('admin.inscription.include.label_status_pre_inscription')
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
        <!-- Formulario para Actualizar Inscripción -->
        <form action="{{ url('Admininscription/'.$inscription->id) }}" method="post">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <!-- Pago Avanzado -->
                    <div class="form-group">
                        <label for="payment_advanced">{{ __('Pago Avanzado') }}</label>
                        <input type="text" name="payment_advanced" class="form-control" value="{{ old('payment_advanced', $inscription->payment_advanced) }}" style="color:#000">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Pago Inscripción -->
                    <div class="form-group">
                        <label for="payment_inscription">{{ __('Pago Inscripción') }}</label>
                        <input type="text" name="payment_inscription" class="form-control" value="{{ old('payment_inscription', $inscription->payment_inscription) }}" style="color:#000">
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">    
                    <!-- Tipo de Pago -->  
                    <div class="form-group">
                        <label for="type_payment">{{ __('Seleccione un Tipo de Pago') }}</label>
                        <select class="form-control" name="type_payment" id="type_payment" style="color:#000">                                
                            <option value="1" @if( $inscription->type_payment == 1) selected @endif >{{ __('Efectivo') }}</option>
                            <option value="2" @if( $inscription->type_payment == 2) selected @endif >{{ __('En línea') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Código de Asistencia -->  
                    <div class="form-group">
                        <label for="payment_inscription">{{ __('Código de Asistencia') }}</label>
                        <input type="text" name="code_assistance" class="form-control" value="{{ old('code_assistance', $inscription->inscription->code_assistance) }}" style="color:#000">
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Número de Operación -->
                    <div class="form-group">
                        <label for="num_operation">{{ __('Número de Operación') }}</label>
                        <input type="text" name="num_operation" class="form-control" value="{{ old('num_operation', $inscription->inscription->num_operation) }}" style="color:#000">
                    </div> 
                </div>
                <div class="col-md-6">        
                    <!-- Documento -->
                    <div class="form-group">
                        <label for="document">{{ __('Número de ') }}
                            @include('admin.inscription.include.label_document')
                        </label>
                        <input type="text" name="num_document" class="form-control" required value="{{ old('num_document', $inscription->inscription->person->num_document) }}" style="color:#000">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">      
                    <!-- Nombre de Usuario -->    
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name_person">{{ __('Nombre de Usuario') }}</label>
                            <input type="text" name="name_person" class="form-control" required value="{{ old('name_person', $inscription->inscription->person->name_person) }}" style="color:#000">
                        </div> 
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Apellido de Usuario -->    
                    <div class="form-group">
                        <div class="form-group">
                            <label for="last_name_person">{{ __('Apellido de Usuario') }}</label>
                            <input type="text" name="last_name_person" class="form-control" value="{{ old('last_name_person', $inscription->inscription->person->last_name_person) }}" style="color:#000">
                        </div> 
                    </div> 
                </div>
            </div>
            <!-- Id => inscripción --> 
            <input type="hidden" name="inscription_id"  value="{{ $inscription->inscription->id }}">
            <!-- Id => usuario --> 
            <input type="hidden" name="person_id"       value="{{ $inscription->inscription->person->id }}">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </form>
        <!-- Fin del Formulario -->
    </div>
</div>
@endsection