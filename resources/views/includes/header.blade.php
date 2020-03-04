<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{ asset('css/Styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="top-right links">
            <nav id="main-nav" style="scroll-behavior: smooth;font-size:16px;">
                <a href="#" id="logo">
                    <img src="{{ asset('img/logo_ciis.svg') }}" alt="ciistacna">
                </a>
                <input type="checkbox" id="responsive-status-menu" name="resposive-status-menu"> 
                <label for="responsive-status-menu" class="responsive-toggle-menu"> <span class="icon-toggle"></span> </label>

                <div class="responsive-menu">
                    <ul class="menu">
                        <li class="item with-submenu"> <a href="javascript:void(0);">Actividades</a>
                            <ul class="submenu" style="width: 180px;">
                                <li class="subitem"><a href="#">TALLERES DE VERANO</a></li>
                            </ul>
                        </li>            
                        <li class="item with-submenu"> <a href="javascript:void(0);">Eventos Anteriores</a>
                            <ul class="submenu">
                                <li class="subitem"><a href="http://ciistacna.com/2019/" style="width: 190px;">XX CIIS</a></li>
                                <li class="subitem"><a href="http://ciistacna.com/2018/" style="width: 190px;">XIX CIIS</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <a href="https://www.facebook.com/ciistacna/" id="call-to-action" target="_blank">
                        <section class="seccion" style="width:400px;margin-top:-15px">
                            <div class="cuenta-regresiva contenedor">
                                <ul class="clearfix">
                                    <br>
                                    <li ><p id="dias" class="numero"></p> <span>días</span></li>
                                    <li><p id="horas" class="numero"></p> <span>horas</span></li>
                                    <li><p id="minutos" class="numero"></p> <span>minutos</span></li>
                                    <li><p id="segundos" class="numero"></p> <span>segundos</span></li>
                                </ul>
                            </div>
                        </section>
                    </a>
                </div>
            </nav>
        </div>