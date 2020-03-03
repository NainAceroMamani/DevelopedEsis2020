@extends('layouts.vista')

@section('content')
<div class="container">
<br>
<div class="card text-center">
  <div class="card-body">
    <img src="{{ asset('img/logo_ciis.svg') }}" alt="ciistacna" width="250px">
  </div>
</div>
  <div class="row">  
    <div class="col-sm-6 p-3">
        <div class="form-group">
            <label for="getFirstName">Nombre</label>
            <input type="text" name="getFirstName" class="form-control" required value="{{ old('name') }}">
            <small id="getFirstName" class="form-text text-muted">Nombres Completo.</small>
        </div>
        <div class="form-group">
            <label for="getDni">DNI</label>
            <input type="text" name="getDni" class="form-control" required value="{{ old('name') }}">
            <small id="getDni" class="form-text text-muted">Documento Nacional de Identidad.</small>
        </div>
        <div class="form-group">
            <label for="getEmail">Email</label>
            <input type="text" name="getEmail" class="form-control" required value="{{ old('name') }}">
            <small id="getEmail" class="form-text text-muted">Correo Electrónico.</small>
        </div>
        <div class="form-group">
            <label for="getCountry">País</label>
            <select class="form-control">
                <option>Perú</option>
                <option>Chile</option>
                <option>Argentina</option>
                <option>Colombia</option>
                <option>Brazil</option>
            </select>
            <small id="getCountry" class="form-text text-muted">País.</small>
        </div>
        <div class="form-group">
            <label for="getTipo">Tipo</label>
            <select class="form-control">
                <option>Estudiante</option>
                <option>Profesional</option>
            </select>
            <small id="getTipo" class="form-text text-muted">Tipo.</small>
        </div>
        <div class="form-group">
            <label for="getGrade">Grado</label>
            <input type="text" name="getGrade" class="form-control" required value="{{ old('name') }}">
            <small id="getGrade" class="form-text text-muted">Grado Académico.</small>
        </div>
    </div>
    <div class="col-sm-6 p-3">
        <div class="form-group">
            <label for="getLastName">Apellido</label>
            <input type="text" name="getLastName" class="form-control" required value="{{ old('name') }}">
            <small id="getLastName" class="form-text text-muted">Apellidos Completo.</small>
        </div>
        <div class="form-group">
            <label for="getCellphone">Celular</label>
            <input type="text" name="getCellphone" class="form-control" required value="{{ old('name') }}">
            <small id="getCellphone" class="form-text text-muted">Celular.</small>
        </div>
        <div class="form-group">
            <label for="getAnio">Año</label>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <small id="getAnio" class="form-text text-muted">Año de Estudiante.</small>
        </div>
        <div class="form-group">
            <label for="getCity">Ciudad</label>
            <select class="form-control">
                <option>Tacna</option>
                <option>Arequipa</option>
                <option>Moquegua</option>
                <option>Abancay</option>
                <option>Lima</option>
            </select>
            <small id="getCity" class="form-text text-muted">Ciudad.</small>
        </div>
        <div class="form-group">
            <label for="getInstitution">Institución</label>
            <input type="text" name="getInstitution" class="form-control" required value="{{ old('name') }}">
            <small id="getInstitution" class="form-text text-muted">Ingrese su institución.</small>
        </div>
        <div class="form-group">
            <label for="getVoucher">Nº de voucher</label>
            <input type="text" name="getVoucher" class="form-control" required value="{{ old('name') }}">
            <small id="getVoucher" class="form-text text-muted">Voucher.</small>
        </div>
        <button type="submit" class="btn btn-primary">Registrarme al Ciis XXI</button>

    </div>
  </div>
</div>
@endsection
