@extends('layouts.vista')
<div class="mh-100" style="height:65px"></div>
@include('includes.section')
@section('content')

<div class="flex-center position-ref full-height gradient " style="margin:auto">
    <div class="container">
        <a href="{{ url('/preinscripcion') }}" class="btn btn-inverse">Inscribirse XXI</a>
        <br>
    </div>
</div>
@endsection