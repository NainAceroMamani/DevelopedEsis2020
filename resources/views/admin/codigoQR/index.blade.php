@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Codigos Qr</h3>
        </div>
        <div class="col text-right">
            <a href="{{ url('dowloadCodigoQR') }}" class="btn btn-sm btn-success">
                Descargar CódigosQr
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
    <form action="{{ url('/codigoQr/create') }}" 
    method="POST" class="d-inline-block">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="cantidad" class="form-control" required value="{{ old('cantidad') }}"
                placeholder="Ingrese la cantidad a generar.">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="numer_start" class="form-control" value="{{ old('numer_start') }}" placeholder="Número de inicio.">
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit"  data-toggle="tooltip" title="Confirmar Inscripción">
            Generar
        </button>
    </div>
    </form>
    <div class="card-body">
    <div class="row">
    <?php  
        $directory="../public/codeQR";
        $dirint = dir($directory);
        $val = 0;
        if($count == 1){
        while (($archivo = $dirint->read()) !== false && $val < 10 ) { $sub = substr($archivo, -3); $img = strstr($archivo, '.', true);; if ($sub == "png") { ?>
            <div class="col-md-4 col-sm-4 col-lg-3 col-xl-3">
            <div class="card shadow-none p-3 mb-5 bg-light rounded">
                <img class="card-img-top" src="{{ asset('codeQR/'. $archivo .'') }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title text-center" style="color:#000">Code : {{ $img }}</h2>
                </div>
            </div>
            </div>
    <?php   }  $val++; } $dirint->close(); ?>
    
    <a href="{{ url('codigoQrShow') }}">
        <button type="button" class="btn btn-lg btn-default" >Mostrar Más</button>
    </a>
    
     <?php } else { 

        while (($archivo = $dirint->read()) !== false) { $sub = substr($archivo, -3); $img = strstr($archivo, '.', true);; if ($sub == "png") { ?>
            <div class="col-md-4 col-sm-4 col-lg-3 col-xl-3">
            <div class="card shadow-none p-3 mb-5 bg-light rounded">
                <img class="card-img-top" src="{{ asset('codeQR/'. $archivo .'') }}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title text-center" style="color:#000">Code : {{ $img }}</h2>
                </div>
            </div>
            </div>
        <?php   }   } $dirint->close();
    } ?>
    </div>
    </div>
</div>
@endsection
