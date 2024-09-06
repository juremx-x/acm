<style>
      body {
      margin-top: 60px;
      /* Margen superior para la barra de menú */
      background-color: #000000;
      line-height: 3;

    }


    nav {
      position: fixed;
      /* Establece la posición fija */
      top: 70px;
      /* Coloca la barra de navegación un poco más arriba */
      width: 100%;
      /* Ajusta el ancho al 100% de la ventana del navegador */
      background-color: #74078a;
      display: flex;
      justify-content: left;
      height: 60px;
      font-size: 20px;
      /* Asegura que esté por encima de otros elementos */
        font-family: 'Poppins', sans-serif;
      z-index: 1000;
    }

    @media screen and (max-width: 768px) {
      nav {
        background-color: #000000;
        /* Muestra el contenedor de la imagen en dispositivos móviles */
      }
    }

    .nav-logo-container {
      display: none;
      /* Oculta el contenedor de la imagen por defecto */
    }

    .nav-logo-container img {
      max-width: 60px;
      max-height: 60px;
      display: block;
      margin-top: 20px;
      z-index: 1001;
    }

    nav a {
      display: inline-block;
      color: #ffffff;
      text-decoration: none;
      position: relative;
      padding: 0 10px;
      z-index: 1003;
      background-color: #74078a;
      /* Cambia el color de fondo a morado */
    }

    @media screen and (max-width: 768px) {
      nav a {
        background-color: #000000;

        /* Muestra el contenedor de la imagen en dispositivos móviles */
      }
    }

    nav a:before {
      content: "";
      position: absolute;
      top: 0;
      left: 50%;
      width: 50%;
      height: 100%;
      z-index: -1;
      transition: width 0.3s ease;
    }

    nav a:hover:before {
      width: 0;
    }

    a:hover {
      color: #000000;
      text-decoration: none;
    }

    nav a:hover:before {
      width: 0;
      /* Reduce el ancho del fondo al 0 en el estado de hover */
    }

    .social-icons-container {
      position: fixed;
      /* Establece la posición fija */
      top: 0;
      /* Coloca el contenedor en la parte superior */
      right: 20px;
      /* Coloca el contenedor a la derecha */
      width: auto;
      /* Color del contenedor */
      height: 40px;
      /* Altura del contenedor */
      display: flex;
      margin-top: 25px;
      /* Desplaza la imagen hacia arriba */
      align-items: center;
      /* Centra verticalmente los íconos */
      z-index: 999;
      /* Asegura que esté por encima de otros elementos */
      z-index: 1002;
      /* Otros estilos... */
      opacity: 1;
      /* Inicialmente visible */
      transition: opacity 0.5s;
      /* Transición suave de la opacidad */
    }

    .social-icons-container a {
      margin-left: 20px;
      /* Añade margen entre los íconos */
      color: #ffffff;
      /* Color de los íconos */
      font-size: 30px;
      /* Tamaño de fuente de los íconos */
      text-decoration: none;
      /* Quita la subrayado de los íconos */
    }

    @media screen and (max-width: 768px) {
      .social-icons-container a {
        color: #ffffff;
        /* Muestra el contenedor de la imagen en dispositivos móviles */
      }
    }

    .doop {
      color: #ffffff;
      display: flex;
    }

    @media screen and (max-width: 768px) {
      .droop {
        font-size: 0%
          /* Muestra el contenedor de la imagen en dispositivos móviles */
      }
    }

    main {
      padding-top: 85px;
      /* Agrega un relleno superior para compensar el espacio ocupado por la barra de navegación fija */
      padding-right: 80px;
      padding-bottom: 20px;
      padding-left: 80px;
    }

    footer {
      background-color: #7a0791;
      color: #ffffff;
      padding: 15px;
      text-align: center;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      z-index: 1;
      min-width: 160px;
      background-color: #000000;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      font-size: 20px;

    }

    .dropdown a {
      display: block;
      color: #ffffff;
    }

    .dropdown:hover .dropdown-content {
      display: block;

    }

    .error-message {
      color: red;
    }

    @media screen and (max-width: 768px) {
      .nav-logo-container {
        display: flex;
        /* Muestra el contenedor de la imagen en dispositivos móviles */
      }

      nav {
        justify-content: center;
        /* Centra el menú en dispositivos móviles */
        top: 0;
        /* Ajusta la posición de la barra de navegación en dispositivos móviles */
        flex-direction: column;
        /* Cambia la dirección de los elementos a columna */
        height: auto;
        /* Ajusta la altura automáticamente en dispositivos móviles */
      }

      nav a {
        margin-top: 10px;
        /* Añade espacio entre los enlaces en dispositivos móviles */
      }
    }

   
</style>
<header>
    <!-- AQUI COMIENZA EL MENU -->

    <div class="social-icons-container">
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="mailto:ennovajesus@gmail.com"><i class="far fa-envelope"></i></a>
    </div>

    <nav>
      <ul>
        <div class="dropdown">
          <!-- Envuelve la imagen en un contenedor y ajusta los estilos -->
          <div class="nav-logo-container">
            <img src="IMAGENES/Logo Prettycore (8).png" alt="Botón del menú" onclick="toggleMenu()">
          </div>
          <div class="dropdown-content">
            <a href="https://direem.com.mx/">Inicio</a>
            <a href="Nosotros.php">Nosotros</a>
            <a href="Servicios.php">Servicios</a>
            <a href="Proyectos.php">Proyectos</a>
            <a href="Contactanos.php">Contactanos</a>
          </div>
        </div>
      </ul>
    </nav>


    <div>
      <nav>
        <ul>

          <div class="droop">
            <a href="https://direem.com.mx/">INICIO</a>
            <a href="Nosotros.php">NOSOTROS</a>
            <a href="Servicios.php">SERVICIOS</a>
            <a href="Proyectos.php">PROYECTOS</a>
            <a href="Contactanos.php">CONTACTANOS</a>
          </div>
    </div>
    </ul>
    </nav>
  </header>