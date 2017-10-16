<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba HTML5</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu vertical</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formato2.css') }}">

  </head>
  <body>

    <header class="menuHorizontal">

      <div class="botonMenu"></div>
      <figure>
        <img src="{{asset('images/cuni.jpg')}}" alt="">
      </figure>

    </header>

    <section class="contenedorPrincipal">
      @yield('content')

    </section>

    <nav class="menuNavegacion">

      <div class="contenedor-menu">
          <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
          <ul class="menu">
              <li><a href="#"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Perfil<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Salir
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
              </li>
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Alumno<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="equipo_agr.php">Registrar baja de conejos por transferencia</a> </li>

                    <li> <a href="facultad_agr.php">Solicitar horas practicas </a> </li>
                    <li> <a href="facultad_elim.php">Registrar practica</a> </li>
                    <li> <a href="facultad_mod.php">Inscripción a cursos </a> </li>
                    <li> <a href="facultad_mod.php">Registra tatuado de conejos </a> </li>
                    <li> <a href="facultad_mod.php">Supervisión de la monta</a> </li>
                    <li> <a href="facultad_mod.php">Realiza diagnostico de gestación</a> </li>
                    <li> <a href="facultad_mod.php">Supervisión de la gestación</a> </li>
                    <li> <a href="facultad_mod.php">Supervisión del parto</a> </li>
                    <li> <a href="facultad_mod.php">Registro de destete de gazapos</a> </li>
                    <li> <a href="facultad_mod.php">Registro de donación de conejos</a> </li>
                    <li> <a href="facultad_mod.php">Registro de conejo enfermo</a> </li>
                  </ul>
                </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Administrador<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="equipo_agr.php">Gestionar roles</a> </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Encargado Modulo<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="solicitud_agr.php">Validar practica</a> </li>
                          <li> <a href="investigador_elim.php">Abrir cursos</a> </li>
                          <li> <a href="investigador_mod.php">Calendarizar Actividades</a> </li>
                          <li> <a href="investigador_mod.php">Realizar solicitud de transferencia al taller de carnes</a> </li>
                          <li> <a href="investigador_mod.php">Realizar solicitud de incineracion</a> </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor Encargado<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="solicitud_agr.php">Programa montas</a> </li>
                          <li> <a href="solicitud_agr.php">Censo de engorda</a> </li>
                          <li> <a href="solicitud_agr.php">Censo de muerte</a> </li>
                          <li> <a href="investigador_agr.php">Autorizar horas practicas</a> </li>
                          <li> <a href="equipo_agr.php">Gestionar roles</a> </li>
                        </ul>
                    </li>

                  </ul>
      </div>


    </body>
    </nav>

    <footer class="pieDePagina">
      <p>Copyleft @ 2017 UNAM</p>
      <p>Desarrollado por Jake Vega Perea</p>

    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>