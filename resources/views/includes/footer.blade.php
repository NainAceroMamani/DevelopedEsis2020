
<footer id="main-footer" style="font-size: 15px;line-height: 1.15;">
    <div class="wrapper">
        <article> 
            <a href="#" id="logo" style="margin:auto;">
              <img src="{{ asset('img/logo_ciis_blank.png') }}" style="width: 83%;" alt="T3chFest">
            </a>
            <br><br>
            <p class="text-justify"> El Círculo de Estudios y Responsabilidad Social de la ESIS junto con los 
              estudiantes de la XXVI Promoción de la Escuela Profesional de Ingeniería en Informática y Sistemas 
              organizan el XXI Congreso Internacional de Informática y Sistemas con el fin de brindarle una gama 
              de conocimientos, con ponentes del más alto nivel en los distintos campos de Ciencias de la Computación.</p>
            <ul style="align-items: center; justify-content: center;">
                <li>
                  <a href="https://www.flickr.com/photos/160684070@N02/albums" target="_blank" title="Flickr de CIIS">
                    <i class="fab fa-flickr"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/xx_ciis" target="_blank" title="Instagram de CIIS">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/user/ciistacna" target="_blank" title="YouTube de CIIS">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/ciistacna" target="_blank" title="Facebook de CIIS">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/ciistacna" target="_blank" title="Twitter de CIIS">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
            </ul>
        </article>

        <nav id="footer-nav">
            <ul >
                <li style="list-style: disc;margin-left: 20px;">
                  <a style="padding: 7px 5px;">Postmaster</a>
                </li>
                <li style="list-style: disc;margin-left: 20px;">
                  <a style="padding: 7px 5px;">Cronograma</a>
                </li>
                <li style="list-style: disc;margin-left: 20px;">
                  <a style="padding: 7px 5px;">Ponentes</a>
                </li>
                <li hidden style="list-style: disc;margin-left: 20px;">
                  <a style="padding: 4px 5px;"href="#">Primer WIA</a>
                </li>
                <li style="list-style: disc;margin-left: 20px;">
                  <a style="padding: 7px 5px;">Feria Tecnológica</a>
                </li>
            </ul>
            <ul id="contact">
                <li>
                  <a style="padding: 5px 0;" >CONTÁCTENOS</a>
                </li>
                <li>
                  <a style="padding: 5px 0;" href="javascript:;">
                    <i class="fa fa-home"></i> Sede "Los Granados", Avenida Miraflores S/N -Tacna
                  </a>
                </li>
                <li>
                  <a style="padding: 5px 0;" href="mailto:ciistacna@unjbg.edu.pe" style="background-image: none;">
                    <i class="far fa-envelope"></i> ciistacna@unjbg.edu.pe
                  </a>
                </li>
                <li>
                  <a style="padding: 5px 0;" href="javascript:;">
                    <i class="fa fa-phone"></i> (052) 583000 Anexo 2005
                  </a>
                </li>
            </ul>
        </nav>
    </div>
    <div>
      <p style="text-align:center;">Todos los Derechos Reservados 2019-2020 ©
          <a href="#" style="text-decoration:none;color:white;">
              <strong>&nbspCírculo de Estudios y Responsabilidad Social de la ESIS</strong>
          </a>
      </p>
 </div>
</footer>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script>
    $('.cuenta-regresiva').countdown('2020/11/09 09:00:00' , function(event){
		$('#dias').html(event.strftime('%D'));
		$('#horas').html(event.strftime('%H'));
		$('#minutos').html(event.strftime('%M'));
		$('#segundos').html(event.strftime('%S'));
	});
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
