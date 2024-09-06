<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DIREEM</title>
  <link rel="icon" href="IMAGENES/LOGO_DIREEM.png" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/COLECCIONES/CONTENEDOR">
  <link rel="stylesheet" href="CSS/COLECCIONES/H.CSS">
  <link rel="stylesheet" href="CSS/COLECCIONES/IMAGEN.CSS">
  <link rel="stylesheet" href="CSS/COLECCIONES/TEXTO">
  <link rel="stylesheet" href="CSS/COLECCIONES/VIDEO.CSS">
  <link rel="stylesheet" href="CSS/INDEX.CSS">

  <style>

    @media (min-width: 981px) {
      .et_pb_section {
        padding: 4% 0;
      }
    }

    .et_pb_section {
      position: relative;
      background-color: #FFF;
    }

    .et_pb_slider .et_pb_slide,
    .et_pb_section {
      background-position: center;
      background-size: 100%;
      background-size: cover;
    }

    .et_had_animation {
      position: relative;
    }

    @media (min-width: 981px) {
      .et_pb_row {
        padding: 2% 0;
      }
    }

    .et_pb_posts_nav a,
    .et_pb_row,
    .et_pb_row_inner,
    .et_pb_column,
    .et_pb_module,
    .et_pb_counters .et_pb_counter_container,
    .et_pb_portfolio_item,
    .et_pb_pricing_table,
    .et_pb_all_tabs,
    .et_pb_tab,
    .et_pb_slide,
    .et_pb_with_background {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .et_pb_row {
      width: 80%;
      max-width: 1080px;
      margin: auto;
      position: relative;
    }

    @media (min-width: 981px) {

      .et_pb_row .et_pb_column:last-child,
      .et_pb_row .et_pb_column.et-last-child,
      .et_pb_row_inner .et_pb_column:last-child,
      .et_pb_row_inner .et_pb_column.et-last-child {
        margin-right: 0 !important;
      }
    }

    .et_pb_row .et_pb_column:last-child,
    .et_pb_row .et_pb_column.et-last-child,
    .et_pb_row_inner .et_pb_column:last-child,
    .et_pb_row_inner .et_pb_column.et-last-child {
      margin-right: 0 !important;
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column_4_4,
      .et_pb_gutters3.et_pb_row .et_pb_column_4_4 {
        width: 100%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column,
      .et_pb_gutters3.et_pb_row .et_pb_column {
        margin-right: 5.5%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_section .et_pb_row .et_pb_column .et_pb_module:last-child,
      .et_pb_section .et_pb_row .et_pb_column .et_pb_module.et-last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_column .et_pb_module:last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_column .et_pb_module.et-last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module:last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module.et-last-child {
        margin-bottom: 0;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column_4_4 .et_pb_module,
      .et_pb_gutters3.et_pb_row .et_pb_column_4_4 .et_pb_module {
        margin-bottom: 2.75%;
      }
    }

    .et_pb_text_3.et_pb_text {
      color: #012b76 !important;
    }

    .et_pb_text_3 {
      font-family: 'Work Sans', Helvetica, Arial, Lucida, sans-serif;
      font-weight: 500;
    }

    .et_had_animation {
      position: relative;
    }

    .et_pb_module {
      -webkit-animation-duration: 200ms;
      animation-duration: 200ms;
    }

    .et_pb_module {
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
    }

    .et_pb_text_align_left {
      text-align: left;
    }

    .et_pb_posts_nav a,
    .et_pb_row,
    .et_pb_row_inner,
    .et_pb_column,
    .et_pb_module,
    .et_pb_counters .et_pb_counter_container,
    .et_pb_portfolio_item,
    .et_pb_pricing_table,
    .et_pb_all_tabs,
    .et_pb_tab,
    .et_pb_slide,
    .et_pb_with_background {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .et_pb_gallery_item,
    .et_pb_portfolio_item,
    .et_pb_blurb_content,
    .et_pb_tabs_controls,
    .et_pb_tab,
    .et_pb_slide_description,
    .et_pb_pricing_heading,
    .et_pb_pricing_content,
    .et_pb_promo_description,
    .et_pb_newsletter_description,
    .et_pb_counter_title,
    .et_pb_circle_counter,
    .et_pb_number_counter,
    .et_pb_toggle_title,
    .et_pb_toggle_content,
    .et_pb_contact_main_title,
    .et_pb_testimonial_description_inner,
    .et_pb_team_member,
    .et_pb_countdown_timer_container,
    .et_pb_post,
    .et_pb_text,
    .product,
    .et_pb_widget,
    .et_pb_wc_additional_info,
    .et_pb_wc_breadcrumb,
    .et_pb_wc_title,
    .et_pb_wc_stock,
    .et_pb_wc_rating,
    .et_pb_wc_price,
    .et_pb_wc_meta,
    .et_pb_wc_description,
    .et_pb_wc_add_to_cart {
      word-wrap: break-word;
    }

    .et_pb_text> :last-child {
      padding-bottom: 0;
    }

    .et_pb_text_inner {
      position: relative;
    }

    .et_pb_row_7.et_pb_row {
      padding-top: 0px !important;
      padding-bottom: 0px !important;
      margin-top: 15px !important;
      margin-bottom: 15px !important;
      padding-top: 0px;
      padding-bottom: 0px;
    }

    @media (min-width: 981px) {

      .et_pb_gutters2,
      .et_pb_gutters2.et_pb_row .et_had_animation {
        position: relative;
      }
    }

    @media (min-width: 981px) {
      .et_pb_row {
        padding: 2% 0;
      }
    }

    .et_pb_posts_nav a,
    .et_pb_row,
    .et_pb_row_inner,
    .et_pb_column,
    .et_pb_module,
    .et_pb_counters .et_pb_counter_container,
    .et_pb_portfolio_item,
    .et_pb_pricing_table,
    .et_pb_all_tabs,
    .et_pb_tab,
    .et_pb_slide,
    .et_pb_with_background {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .et_pb_row {
      width: 80%;
      max-width: 1080px;
      margin: auto;
      position: relative;
    }

    @media (min-width: 981px) {

      .et_pb_gutters2 .et_pb_column_1_4,
      .et_pb_gutters2.et_pb_row .et_pb_column_1_4 {
        width: 22.75%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters2 .et_pb_column,
      .et_pb_gutters2.et_pb_row .et_pb_column {
        margin-right: 3%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column_1_4,
      .et_pb_gutters3.et_pb_row .et_pb_column_1_4 {
        width: 20.875%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column,
      .et_pb_gutters3.et_pb_row .et_pb_column {
        margin-right: 5.5%;
      }
    }

    .et_pb_posts_nav a,
    .et_pb_row,
    .et_pb_row_inner,
    .et_pb_column,
    .et_pb_module,
    .et_pb_counters .et_pb_counter_container,
    .et_pb_portfolio_item,
    .et_pb_pricing_table,
    .et_pb_all_tabs,
    .et_pb_tab,
    .et_pb_slide,
    .et_pb_with_background {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .et_pb_css_mix_blend_mode_passthrough {
      mix-blend-mode: unset !important;
    }

    .et_pb_column {
      float: left;
      background-size: cover;
      background-position: center;
      position: relative;
      z-index: 2;
      min-height: 1px;
    }

    @media (min-width: 981px) {

      .et_pb_section .et_pb_row .et_pb_column .et_pb_module:last-child,
      .et_pb_section .et_pb_row .et_pb_column .et_pb_module.et-last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_column .et_pb_module:last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_column .et_pb_module.et-last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module:last-child,
      .et_pb_section.et_section_specialty .et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module.et-last-child {
        margin-bottom: 0;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters2 .et_pb_column_1_4 .et_pb_module,
      .et_pb_gutters2.et_pb_row .et_pb_column_1_4 .et_pb_module {
        margin-bottom: 6.593%;
      }
    }

    @media (min-width: 981px) {

      .et_pb_gutters3 .et_pb_column_1_4 .et_pb_module,
      .et_pb_gutters3.et_pb_row .et_pb_column_1_4 .et_pb_module {
        margin-bottom: 13.174%;
      }
    }

    .et_pb_image_1 {
      transition: transform 300ms ease 0ms;
      text-align: left;
      margin-left: 0;
    }

    .et_pb_module {
      -webkit-animation-duration: 200ms;
      animation-duration: 200ms;
    }

    .et_pb_module {
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
    }

    .et_pb_image {
      display: block;
    }

    .et_pb_image {
      margin-left: auto;
      margin-right: auto;
      display: block;
      line-height: 0;
    }

    .et_pb_posts_nav a,
    .et_pb_row,
    .et_pb_row_inner,
    .et_pb_column,
    .et_pb_module,
    .et_pb_counters .et_pb_counter_container,
    .et_pb_portfolio_item,
    .et_pb_pricing_table,
    .et_pb_all_tabs,
    .et_pb_tab,
    .et_pb_slide,
    .et_pb_with_background {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .et_pb_image .et_pb_image_wrap {
      display: inline-block;
      position: relative;
      max-width: 100%;
    }

    .et_pb_image_1 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_2 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_3 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_4 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_5 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_6 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_7 .et_pb_image_wrap img {
      max-height: 130px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_8 .et_pb_image_wrap img {
      max-height: 130px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_9 .et_pb_image_wrap img {
      max-height: 100px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_10 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_11 .et_pb_image_wrap img {
      max-height: 120px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .et_pb_image_12 .et_pb_image_wrap img {
      max-height: 150px;
    }

    .et_pb_image img {
      position: relative;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    /* Agrega el efecto de zoom al pasar el mouse sobre las imágenes */
    img[class^="wp-image-"] {
      transition: transform 0.3s ease;
    }

    img[class^="wp-image-"]:hover {
      transform: scale(1.2);
    }


    .form-container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 10px;
      color: #000000;
    }

    .input-row {
      margin-bottom: 10px;
    }

    .input-row label {
      display: block;
      margin-bottom: 3px;
    }

    .input-row input,
    .input-row textarea {
      width: 100%;
      outline: 0;
      margin-bottom: 3px;
      font-size: 14px;
      font-family: arial;
    }

    .input-row textarea {
      height: 100px;
    }

    .input-row input[type="submit"] {
      width: 100px;
      margin: 0 auto;
      display: block;
      text-align: center;
      background: #2a79be;
      color: #ffffff;
      cursor: pointer;
    }

    .success {
      background-color: #9fd2a1;
      padding: 5px 10px;
      color: #326b07;
      text-align: center;
      border-radius: 3px;
      font-size: 14px;
      margin-top: 10px;
    }


    .texto4 {
  text-align: center;
  line-height: 1;
  margin: 40px;
}

.texto4 h15 {
  font-size: 40px;
}

@media (max-width: 1300px) {

  /* Para pantallas más grandes, muestra todos los videos en línea horizontal */
  .texto4 h15 {
    font-size: 30px;
  }
}

.texto4 h16 {
  font-size: 30px;
  line-height: 2;
}

@media (max-width: 1300px) {

  /* Para pantallas más grandes, muestra todos los videos en línea horizontal */
  .texto4 h16 {
    font-size: 20px;
  }
}
  </style>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary2">
    <div class="container-fluid">
      <a class="navbar-brand" ><img src="./IMAGENES/DIREEM SIN FONDO (1).png" alt=""
          class="menu-img"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="https://direem.com.mx/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nuestras-marcas.php">Nuestras Marcas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://direem.mx/collections/productos">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Trabaja con nosotros.php">Trabaja con Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contactanos.php">Contáctanos</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <nav class="navbar2 navbar-dark2 bg-dark fixed-top2">
    <div class="container-fluid2">
      <a class="navbar-brand2"><img src="./IMAGENES/DIREEM SIN FONDO (1).png" alt=""
          class="menu-img2"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon2"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h8 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENÚ</h8>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link2 active" aria-current="page" href="https://direem.com.mx/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link2" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link2" href="Nuestras-marcas.php">Nuestras Marcas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link2" href="https://direem.mx/collections/productos">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link2" href="Trabaja con nosotros.php">Trabaja con Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link2" href="Contactanos.php">Contáctanos</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>






  <div>
  <div id="carousel2ExampleIndicators" class="carousel2 slide" data-bs-ride="carousel2">
    <div class="carousel2-indicators">
     
    </div>
      <div class="im-ns-2-item">
       <img src="IMAGENES/BANNER VACANTES EMPLEO 1080X1920.png" class="im-ns-2">
      </div>
      </div>


    </div>
      <div class="im-ns-1-item">
       <img src="IMAGENES/BANNER VACANTES EMPLEO 1920X800.png" class="im-ns-1">
      </div>
      </div>

    
<style>
  p {
    margin-bottom: 1rem;
    line-height: 1.5;
    text-align: justify;
  
}
@media (min-width: 771px) {
    p {
    margin-right: 30px;
    }
  }
</style>
      <div class="dm-block-1">
    <div class="texto4" style="font-weight: bold; line-height: 1.4;">
      <h15 style="
    color: #000000;
    font-weight: bold;
    line-height: .7;">Te estamos <span style="
    color: #2a79be;
    font-weight: bold;
    line-height: .7;">esperando</span></h15>
      <div></div>
      <p style="color: black; text-align: center;">¿Buscas una oportunidad para trabajar en un entorno donde la diversidad está presente, la innovación
        es una constante, y los retos sean una forma de vida?,
        ¡no esperes más!
      </p>
      <p style="color: #2a79be; text-align: center;">Encuentra empleo ahora.</p>
      <div></div>
      
    </div>
  </div>






    



 
  <?php
    include('COMPONENTES/formulario-trabaja.php');
    ?>









  <?php
    include('COMPONENTES/botones_redes.php');
    ?>



  <?php
    include('COMPONENTES/footer.php');
    ?>




  <script>
    // Obtener el elemento de la imagen
    const homeImg = document.querySelector('.home img');

    // Función para manejar el evento de desplazamiento
    function handleScroll() {
      // Calcular la posición de la mitad de la página
      const halfPagePosition = window.innerHeight / 4;

      // Verificar si la mitad de la página está visible
      if (window.scrollY >= halfPagePosition) {
        // Si la mitad de la página está visible, ocultar la imagen
        homeImg.style.opacity = 0;
      } else {
        // Si la mitad de la página no está visible, mostrar la imagen
        homeImg.style.opacity = 1;
      }
    }

    // Agregar un event listener para el evento de desplazamiento
    window.addEventListener('scroll', handleScroll);

    // Función para manejar el evento de clic en el menú
    function toggleMenu() {
      // Aquí puedes implementar la lógica para mostrar/ocultar el menú según sea necesario
    }
  </script>




</body>

</html>