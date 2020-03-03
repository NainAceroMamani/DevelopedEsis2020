
@include('includes.header')            
    <div class="mh-100" style="height:70px"></div>
        <section class="seccion">
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero"></p> <span>días</span></li>
                    <li><p id="horas" class="numero"></p> <span>horas</span></li>
                    <li><p id="minutos" class="numero"></p> <span>minutos</span></li>
                    <li><p id="segundos" class="numero"></p> <span>segundos</span></li>
                </ul>
            </div>
        </section>
    <div>
    @include('includes.section')
    @yield('content')
@include('includes.footer')
