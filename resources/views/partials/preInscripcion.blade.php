@extends('layouts.vista')

@section('content')
<div class="flex-center position-ref full-height gradient " style="margin:auto">
<div class="container">
  <div class="row">  
    <div class="col-12 col-sm-12 col-md-6 p-3">
    </div>
    <div class="col-12 col-sm-12 col-md-6  p-2 opacity">        
        <div class="card-body text-center text-light">
            <strong>  <h1 style="font-weight:bold"> Ficha de Pre-Inscripción</h1>  </strong>
        </div>
        <div class="form-group">
            <!-- <label for="getFirstName">Nombre</label> -->
            <input type="text" name="getFirstName" class="form-control" required value="{{ old('name') }}"
            placeholder="Nombres Completo.">
        </div>
        <div class="form-group">
            <!-- <label for="getLastName">Apellido</label> -->
            <input type="text" name="getLastName" class="form-control" required value="{{ old('name') }}"
            placeholder="Apellidos Completo.">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <!-- <label for="getDni">DNI</label> -->
                    <input type="text" name="getDni" class="form-control" required value="{{ old('name') }}"
                    placeholder="Documento Nacional de Identidad.">
                </div>
            </div>
            <div class="col">                          
                <div class="form-group">
                    <!-- <label for="getCellphone">Celular</label> -->
                    <input type="text" name="getCellphone" class="form-control" required value="{{ old('name') }}"
                    placeholder="Celular.">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <!-- <label for="getCountry">País</label> -->
                    <select class="form-control">
                        <option>Seleccione País</option>
                        <option>Perú</option>
                        <option>Chile</option>
                        <option>Argentina</option>
                        <option>Colombia</option>
                        <option>Brazil</option>
                    </select>
                </div>
            </div>
            <div class="col">                  
                <div class="form-group">
                    <!-- <label for="getCity">Ciudad</label> -->
                    <select class="form-control">
                        <option>Selecione Ciudad</option>
                        <option>Tacna</option>
                        <option>Arequipa</option>
                        <option>Moquegua</option>
                        <option>Abancay</option>
                        <option>Lima</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">          
                <div class="form-group">
                    <!-- <label for="getTipo">Tipo</label> -->
                    <select class="form-control">
                        <option>Estudiante</option>
                        <option>Profesional</option>
                    </select>
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    <!-- <label for="getAnio">Año de Estudiante</label> -->
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <!-- <label for="getGrade">Grado</label> -->
            <input type="text" name="getGrade" class="form-control" required value="{{ old('name') }}"
            placeholder="Grado Académico.">
        </div>
        
        <div class="form-group">
            <!-- <label for="getEmail">Email</label> -->
            <input type="text" name="getEmail" class="form-control" required value="{{ old('name') }}"
            placeholder="Correo Electrónico.">
        </div>
        <div class="form-group">
            <!-- <label for="getInstitution">Institución</label> -->
            <input type="text" name="getInstitution" class="form-control" required value="{{ old('name') }}"
            placeholder="Ingrese su institución.">
        </div>
        <div class="form-group">
            <!-- <label for="getVoucher">Nº de voucher</label> -->
            <input type="text" name="getVoucher" class="form-control" required value="{{ old('name') }}"
            placeholder="Voucher">
        </div>
        <button type="submit" class="btn btn-primary">Registrarme al Ciis XXI</button>

    </div>
  </div>
</div>
</div>
<!-- <section id="newsletter">
        <div class="wrapper">
            <h3>Entérate de todo</h3>
            <p><a style="color:#fff;">Síguenos en nuestras redes sociales</a></p>
            <ul>
                <li><a href="https://www.flickr.com/photos/160684070@N02/albums" target="_blank"
                        title="Flickr de XXI CIIS "><i class="fab fa-flickr"></i></a></li>
                <li><a href="https://www.instagram.com/xx_ciis" target="_blank" title="Instagram de XXI CIIS"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/user/ciistacna" target="_blank" title="YouTube de XXI CIIS"><i
                            class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.facebook.com/ciistacna" target="_blank" title="Facebook de XXI CIIS"><i
                            class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/ciistacna" target="_blank" title="Twitter de XXI CIIS"><i
                            class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </section> -->
@endsection
