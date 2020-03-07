@extends('layouts.panel')
<div class="mh-100" style="height:65px"></div>
@include('include.section')

@section('content')
@if ($errors->any())
    <div class="card-body">
        <div class="alert alert-info" role="alert">
            <h3 class="text-center">{{ __('Error en el registro') }}</h3>
            <hr>
        </div>
        <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </div>
    </div>
@endif

<div class="flex-center position-ref full-height gradient " style="margin:auto">
    <div class="container">
        <a href="{{ url('/inscription/create') }}" class="btn btn-primary">{{ __('Inscribirse XXI') }}</a>
        <br>
    </div>
</div>

@include('include.social_networks')

@endsection
