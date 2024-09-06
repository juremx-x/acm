<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Secular+One">   
   <!-- AQUI COMIENZAN LOS ESTILOS DEL MENU -->
  <style>
    body {
      margin-top: 60px;
      /* Margen superior para la barra de menú */
      background-color: #000000;
      line-height: 3;

    }

    h2 {
      font-size: 60px;
      color: #000000;
      font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 999px) {
      h2 {
        font-size: 40px;
        color: #000000;
        font-family: 'Poppins', sans-serif;
      }
    }


    h3 {
      font-size: 60px;
      color: #d41bbc;
      line-height: 25px;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20PX;
    }

    @media (max-width: 999px) {
      h3 {
        font-size: 40px;
        color: #d41bbc;
        line-height: 25px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20PX;
      }
    }

    .texto2 {
      flex: 1;
      color: #000000;
      padding: 40px;
        font-family: 'Poppins', sans-serif;
      margin: 10px;
    }

    @media (max-width: 800px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 750px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 700px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 650px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 600px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 550px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 500px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 450px) {
      .texto2 {
        text-align: center;
        font-size: 16px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 400px) {
      .texto2 {
        text-align: center;
        font-size: 14px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 350px) {
      .texto2 {
        text-align: center;
        font-size: 14px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 300px) {
      .texto2 {
        text-align: center;
        font-size: 14px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 250px) {
      .texto2 {
        text-align: center;
        font-size: 14px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 200px) {
      .texto2 {
        text-align: center;
        font-size: 14px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }

    @media (max-width: 999px) {
      .texto2 {
        text-align: center;
        font-size: 18px;
        color: #646464;
        padding: 20px;
        margin: -60px;

      }
    }


    @media (min-width: 1000px) {
      .texto2 {
        font-size: 24px;
        color: #646464;
        line-height: 1.5;
      }
    }

    .navbar-nav {
      --bs-nav-link-padding-x: 0;
      --bs-nav-link-padding-y: 0.0rem;
      --bs-nav-link-font-weight: ;
      --bs-nav-link-color: var(--bs-navbar-color);
      --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
      --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
      display: flex;
      flex-direction: column;
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
      font-size: 20px;
    }

    .btn-success {
      --bs-btn-color: #fff;
      --bs-btn-bg: #9619af;
      --bs-btn-border-color: #9619af;
      --bs-btn-hover-color: #fff;
      --bs-btn-hover-bg: #9619af;
      --bs-btn-hover-border-color: #9619af;
      --bs-btn-focus-shadow-rgb: 60, 153, 110;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #9619af;
      --bs-btn-active-border-color: #9619af;
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #9619af;
      --bs-btn-disabled-border-color: #9619af;
      height: 40px;
      margin-top: auto;

    }

    .btn-success.focus,
    .btn-success:focus {
      color: #000;
      background-color: #ffffff;
      border-color: #ffffff;
      box-shadow: 0 0 0 0.2rem rgb(255 255 255 / 50%);
    }

    .btn-success:not(:disabled):not(.disabled).active:focus,
    .btn-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgb(255 255 255 / 50%);
      background: #ae32fb;
    }

    .d-flex {
      display: flex !important;
    }

    .mt-3 {
      margin-top: 1rem !important;
    }

    .offcanvas-body {
      flex-grow: 1;
      padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
      overflow-y: auto;
      font-family: 'Poppins', sans-serif;
    }

    .container-fluid {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      width: 100%;
      padding-right: calc(var(--bs-gutter-x) * .5);
      padding-left: calc(var(--bs-gutter-x) * .5);
      margin-right: auto;
      margin-left: auto;
    }

    .menu-img {
      display: block;
      margin: 0 auto;
      width: 3em;
      height: 3em;
    }

    h2 {
      font-size: 60px;
      color: #000000;
      font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 999px) {
      h2 {
        font-size: 40px;
        color: #000000;
        font-family: 'Poppins', sans-serif;
      }
    }


    h3 {
      font-size: 60px;
      color: #d41bbc;
      line-height: 25px;
      font-family: 'Poppins', sans-serif;
      margin-bottom: 20PX;
    }

    @media (max-width: 999px) {
      h3 {
        font-size: 40px;
        color: #d41bbc;
        line-height: 25px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20PX;
      }
    }

    body {
        font-family: 'Poppins', sans-serif;

    }

    form1 {
      background-color: #212529;
      padding: 50px;
      margin-top: -120px;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: var(--bs-body-color);
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-color: var(--bs-body-bg);
      background-clip: padding-box;
      border: var(--bs-border-width) solid var(--bs-border-color);
      border-radius: var(--bs-border-radius);
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
      height: 40px;

    }

    h8 {
      font-size: 1.5rem;
      font-family: 'Poppins', sans-serif;
    }

    .navbar-toggler {
      padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
      font-size: var(--bs-navbar-toggler-font-size);
      line-height: 1;
      color: var(--bs-navbar-color);
      background-color: transparent;
      border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
      border-radius: var(--bs-navbar-toggler-border-radius);
      transition: var(--bs-navbar-toggler-transition);
      margin-top: auto;
      margin-right: -50px;

    }

    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-lg,
    .navbar>.container-md,
    .navbar>.container-sm,
    .navbar>.container-xl,
    .navbar>.container-xxl {
      display: flex;
      flex-wrap: inherit;
      align-items: center;
      justify-content: space-between;
      background-color: #000000;
    }

    .bg-dark {
      --bs-bg-opacity: 1;
    }

    .navbar-dark .navbar-toggler-icon {
      background-image: url('./IMAGENES/MENU.png');
      /* Agrega url() para especificar la ruta de la imagen */
      background-size: 30px 30px;
      /* Define el tamaño de la imagen */
      background-color: black;
      width: 30px;
      /* Ajusta el ancho del icono */
      height: 30px;
      /* Ajusta la altura del icono */
      border: none;
      /* Elimina el borde si es necesario */
    }

    .mt-3 {
      margin-top: 1rem !important;
      background: black;
    }

    :root,
    [data-bs-theme=light] {
      --bs-blue: #0d6efd;
      --bs-indigo: #6610f2;
      --bs-purple: #6f42c1;
      --bs-pink: #d63384;
      --bs-red: #dc3545;
      --bs-orange: #fd7e14;
      --bs-yellow: #ffc107;
      --bs-green: #198754;
      --bs-teal: #20c997;
      --bs-cyan: #0dcaf0;
      --bs-black: #000;
      --bs-white: #fff;
      --bs-gray: #6c757d;
      --bs-gray-dark: #343a40;
      --bs-gray-100: #f8f9fa;
      --bs-gray-200: #e9ecef;
      --bs-gray-300: #dee2e6;
      --bs-gray-400: #ced4da;
      --bs-gray-500: #adb5bd;
      --bs-gray-600: #6c757d;
      --bs-gray-700: #495057;
      --bs-gray-800: #343a40;
      --bs-gray-900: #212529;
      --bs-primary: #0d6efd;
      --bs-secondary: #6c757d;
      --bs-success: #198754;
      --bs-info: #0dcaf0;
      --bs-warning: #ffc107;
      --bs-danger: #dc3545;
      --bs-light: #f8f9fa;
      --bs-dark: #212529;
      --bs-primary-rgb: 13, 110, 253;
      --bs-secondary-rgb: 108, 117, 125;
      --bs-success-rgb: 25, 135, 84;
      --bs-info-rgb: 13, 202, 240;
      --bs-warning-rgb: 255, 193, 7;
      --bs-danger-rgb: 220, 53, 69;
      --bs-light-rgb: 248, 249, 250;
      --bs-dark-rgb: 0, 0, 0;
      --bs-primary-text-emphasis: #052c65;
      --bs-secondary-text-emphasis: #2b2f32;
      --bs-success-text-emphasis: #0a3622;
      --bs-info-text-emphasis: #055160;
      --bs-warning-text-emphasis: #664d03;
      --bs-danger-text-emphasis: #58151c;
      --bs-light-text-emphasis: #495057;
      --bs-dark-text-emphasis: #495057;
      --bs-primary-bg-subtle: #cfe2ff;
      --bs-secondary-bg-subtle: #e2e3e5;
      --bs-success-bg-subtle: #d1e7dd;
      --bs-info-bg-subtle: #cff4fc;
      --bs-warning-bg-subtle: #fff3cd;
      --bs-danger-bg-subtle: #f8d7da;
      --bs-light-bg-subtle: #fcfcfd;
      --bs-dark-bg-subtle: #ced4da;
      --bs-primary-border-subtle: #9ec5fe;
      --bs-secondary-border-subtle: #c4c8cb;
      --bs-success-border-subtle: #a3cfbb;
      --bs-info-border-subtle: #9eeaf9;
      --bs-warning-border-subtle: #ffe69c;
      --bs-danger-border-subtle: #f1aeb5;
      --bs-light-border-subtle: #e9ecef;
      --bs-dark-border-subtle: #adb5bd;
      --bs-white-rgb: 255, 255, 255;
      --bs-black-rgb: 0, 0, 0;
      --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
      --bs-body-font-family: var(--bs-font-sans-serif);
      --bs-body-font-size: 1rem;
      --bs-body-font-weight: 400;
      --bs-body-line-height: 1.5;
      --bs-body-color: #212529;
      --bs-body-color-rgb: 33, 37, 41;
      --bs-body-bg: #fff;
      --bs-body-bg-rgb: 255, 255, 255;
      --bs-emphasis-color: #000;
      --bs-emphasis-color-rgb: 0, 0, 0;
      --bs-secondary-color: rgba(33, 37, 41, 0.75);
      --bs-secondary-color-rgb: 33, 37, 41;
      --bs-secondary-bg: #e9ecef;
      --bs-secondary-bg-rgb: 233, 236, 239;
      --bs-tertiary-color: rgba(33, 37, 41, 0.5);
      --bs-tertiary-color-rgb: 33, 37, 41;
      --bs-tertiary-bg: #f8f9fa;
      --bs-tertiary-bg-rgb: 248, 249, 250;
      --bs-heading-color: inherit;
      --bs-link-color: #0d6efd;
      --bs-link-color-rgb: 13, 110, 253;
      --bs-link-decoration: underline;
      --bs-link-hover-color: #0a58ca;
      --bs-link-hover-color-rgb: 10, 88, 202;
      --bs-code-color: #d63384;
      --bs-highlight-color: #212529;
      --bs-highlight-bg: #fff3cd;
      --bs-border-width: 1px;
      --bs-border-style: solid;
      --bs-border-color: #dee2e6;
      --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
      --bs-border-radius: 0.375rem;
      --bs-border-radius-sm: 0.25rem;
      --bs-border-radius-lg: 0.5rem;
      --bs-border-radius-xl: 1rem;
      --bs-border-radius-xxl: 2rem;
      --bs-border-radius-2xl: var(--bs-border-radius-xxl);
      --bs-border-radius-pill: 50rem;
      --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
      --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
      --bs-focus-ring-width: 0.25rem;
      --bs-focus-ring-opacity: 0.25;
      --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
      --bs-form-valid-color: #198754;
      --bs-form-valid-border-color: #198754;
      --bs-form-invalid-color: #dc3545;
      --bs-form-invalid-border-color: #dc3545;
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
      cursor: pointer;
      border: none;
    }

    .navbar-toggler:focus {
      text-decoration: none;
      outline: 0;
      box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
    }

    .navbar {
      --bs-navbar-padding-x: 0;
      --bs-navbar-padding-y: 0.5rem;
      --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
      --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
      --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
      --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-brand-padding-y: 0.3125rem;
      --bs-navbar-brand-margin-end: 1rem;
      --bs-navbar-brand-font-size: 1.25rem;
      --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
      --bs-navbar-nav-link-padding-x: 0.5rem;
      --bs-navbar-toggler-padding-y: 0.25rem;
      --bs-navbar-toggler-padding-x: 0.75rem;
      --bs-navbar-toggler-font-size: 1.25rem;
      --bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
      --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
      --bs-navbar-toggler-border-radius: var(--bs-border-radius);
      --bs-navbar-toggler-focus-width: 0rem;
      --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
      position: fixed;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
    }
  </style>

    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://direem.com.mx/"><img src="./IMAGENES/Logo Prettycore (8).png" alt=""class="menu-img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h8 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENÚ</h8>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://direem.com.mx/">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Servicios.php">SERVICIOS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MÁS
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form1 class="d-flex mt-3" role="BUSCAR">
          <input class="form-control me-2" type="BUSCAR" placeholder="BUSCAR" aria-label="BUSCAR">
          <button class="btn btn-success" type="submit">BUSCAR</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</body>
</html>