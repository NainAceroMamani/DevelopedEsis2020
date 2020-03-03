
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
    </div>
    <section id="newsletter">
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
    </section>
@include('includes.footer')
