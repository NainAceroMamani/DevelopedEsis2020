@extends('layouts.vista')

@section('content')

<div class="flex-center position-ref full-height gradient " style="margin:auto">
    <div class="container">
        <br>
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div> 
            @endif

            @if (session('errors'))
                <div class="alert alert-danger" role="alert">
                    Los cambios se han guardado pero tener en cuenta que:
                    <ul>
                    @foreach(session('errors') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        <div class="row">      
            <div class="col-12 col-sm-12 col-md-6 p-3">
                <div class="card opacityimg">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>  
                </div>
                <br>
                <div class="card opacityimg">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>  
                </div>
                <br>
                <div class="card opacityimg">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>  
                </div>
                <br>
            </div>
            <div class="col-12 col-sm-12 col-md-6  p-3 opacity">       
                <div class="card-body text-center text-light">
                    <strong>  <h1 style="font-weight:bold"> Ficha de Pre-Inscripción</h1>  </strong>
                </div>
                <form action="{{ url('create') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="firstName" class="form-control" required value="{{ old('firstName') }}" placeholder="Nombres Completo.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastName" class="form-control" required value="{{ old('lastName') }}" placeholder="Apellidos Completo.">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="dni" class="form-control" required value="{{ old('dni') }}"
                                placeholder="Documento Nacional de Identidad.">
                            </div>
                        </div>
                        <div class="col">                          
                            <div class="form-group">
                                <input type="text" name="cellPhone" class="form-control" required value="{{ old('cellPhone') }}"
                                placeholder="Celular.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select class="form-control" name="country" required>
                                    <option>Seleccione País</option>
                                    <option value="Peru">Perú</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Colombia">Colombia</option>
                                    <option vakue="Brazil">Brazil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">                  
                            <div class="form-group">
                                <select class="form-control" name="city" required>
                                    <option>Selecione Ciudad</option>
                                    <option value="Tacna">Tacna</option>
                                    <option value="Arequipa">Arequipa</option>
                                    <option value="Moquegua">Moquegua</option>
                                    <option value="Abancay">Abancay</option>
                                    <option value="Lima">Lima</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">          
                            <div class="form-group">
                                <select class="form-control" name="tipo" required>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Profesional">Profesional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col"> 
                            <div class="form-group">
                                <select class="form-control" name="yearStudent" required>
                                    <option>Seleccione Año</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="grade" class="form-control" required value="{{ old('grade') }}"
                        placeholder="Grado Académico.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" required value="{{ old('email') }}"
                        placeholder="Correo Electrónico.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="institution" class="form-control" required value="{{ old('institution') }}"
                        placeholder="Ingrese su institución.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="voucher" class="form-control" required value="{{ old('voucher') }}"
                        placeholder="Voucher">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarme al Ciis XXI</button>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection
