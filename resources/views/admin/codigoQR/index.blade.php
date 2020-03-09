@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Codigos Qr') }}</h3>
            </div>
            <div class="col text-right">
                <!-- Enlace para cancelar -->
                <a href="{{ url('dowloadCodigoQR') }}" class="btn btn-sm btn-success">{{ __('Descargar CódigosQr') }}</a>
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
    <!-- Formulario para Crear Códigos QR -->
    <form action="{{ url('/codigoQr/create') }}" method="POST" class="d-inline-block">
    @csrf
        <div class="card-body">
            <div class="row">
                <!-- Cantidas de Códigos QR a generar -->
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="cantidad" class="form-control" required value="{{ old('cantidad') }}" placeholder="Ingrese la cantidad a generar.">
                    </div>
                </div>
                <!-- Nú´mero de Inicio de Códigos QR a generar -->
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="numer_start" class="form-control" value="{{ old('numer_start') }}" placeholder="Número de inicio.">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit"  data-toggle="tooltip" title="Confirmar Inscripción">{{ __('Generar') }}</button>
        </div>
    </form>
    <!-- Fin del Formulario -->
    <div class="card-body">
        <div class="row">
        <?php  
            $directory="../public/codeQR";  // Directorio donde se encuentran los Códigos QR
            $dirint = dir($directory);      // Directorio Abierto
            $val = 0;                       // variable para filtrar 10 imagenes
            if($count == 1){
                /* Ciclo While que recorre las imagenes del directorio Abierto */
                while (($archivo = $dirint->read()) !== false && $val < 10 ) 
                { 
                    $sub = substr($archivo, -3);            // Recorte de las 3 ultimas palabras 
                    $img = strstr($archivo, '.', true);     // Recorte de la primera posición hasta un punto
                    if ($sub == "png") { 
                        ?>
                        <div class="col-md-4 col-sm-4 col-lg-3 col-xl-3">
                            <div class="card shadow-none p-3 mb-5 bg-light rounded">
                                <!-- Impresión de Imagenes QR -->
                                <img class="card-img-top" src="{{ asset('codeQR/'. $archivo .'') }}" alt="Card image cap">
                                <div class="card-body">
                                    <!-- Impresión del Código de cada Imagen -->
                                    <h2 class="card-title text-center" style="color:#000">{{ __('Code') }} : {{ $img }}</h2>
                                </div>
                            </div>
                        </div>
        <?php       }               // Fin del @if
                $val++;             // Impremento de la variable val para que imcremente el contador de imagenes 
                }                   // Fin de @While 
            $dirint->close(); ?>    <!-- Cerrar el directorio -->
        </div>
        <!-- Enalce para Mostrar Todos los Códigos QR -->
        @if($val >= 10)
            <a href="{{ url('codigoQrShow') }}">
                <button type="button" class="btn btn-lg btn-default" >Mostrar Más</button>
            </a> 
        @endif
    <?php   }       // Fin del @if 
            else {  // @else en caso de haber presionado el botón => Mostrar Más
                echo    "<div class='row'>";
                /* Ciclo While que recorre las imagenes del directorio Abierto */
                while (($archivo = $dirint->read()) !== false) { 
                    $sub = substr($archivo, -3);            // Recorte de las 3 ultimas palabras 
                        $img = strstr($archivo, '.', true);     // Recorte de la primera posición hasta un punto
                    if ($sub == "png") { ?>
                    <div class="col-md-4 col-sm-4 col-lg-3 col-xl-3">
                        <div class="card shadow-none p-3 mb-5 bg-light rounded">
                            <!-- Impresión de Imagenes QR -->
                            <img class="card-img-top" src="{{ asset('codeQR/'. $archivo .'') }}" alt="Card image cap">
                            <div class="card-body">
                                <!-- Impresión del Código de cada Imagen -->
                                <h2 class="card-title text-center" style="color:#000">Code : {{ $img }}</h2>
                            </div>
                        </div>
                    </div>
            <?php   }               // Fin del @if   
                }                   // Fin del @while
                $dirint->close();  // Cerramos el directorio
            } ?>                   <!-- Fin  --> 
            </div>
</div>
@endsection
