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
                            $inscription->payment_advanced) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_inscription">Pago Inscripción</label>
                        <input type="text" name="payment_inscription" class="form-control" required value="{{ old('payment_inscription',
                            $inscription->payment_inscription) }}">
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">          
                    <div class="form-group">
                        <label for="type_payment">Seleccione un Tipo de Pago</label>
                        <select class="form-control" name="type_payment" id="type_payment" >
                            <option value="1">Efectivo</option>
                            <option value="2">En línea</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="payment_inscription">Pago Inscripción</label>
                        <input type="text" name="payment_inscription" class="form-control" required value="{{ old('payment_inscription',
                            $inscription->payment_inscription) }}">
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