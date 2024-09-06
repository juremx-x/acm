<style>
    h6 {
      background-color: #000000;
      /* Color de fondo negro */
      color: #ffffff;
      /* Color del texto blanco */
      font-size: 40px;
      text-align: center;
      /* Padding en lugar de margin */
      font-family: 'Poppins', sans-serif;
      margin-top: -60px;
    }
    h7 {
      background-color: transparent;
      /* Color de fondo negro */
      color: #ffffff;
      /* Color del texto blanco */
      font-size: 22px;
      text-align: center;
      /* Padding en lugar de margin */
      display: block;
      line-height: 1.5;
      margin-bottom: 40px;

    }
   

    label {
      color: #FFFFFF;
      font-size: 30px;
        font-family: 'Poppins', sans-serif;


    }

    input {
      background-color: #ffffff;
    color: rgb(0, 0, 0);
    text-transform: uppercase;
    font-weight: bold;
    padding: 5px 20px;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    transition: background-color 0.4s;
    display: block;
    margin: 10px auto;
    text-align: center;
    font-size: large;
    }
    
    button {
      color: #000000;
    text-transform: uppercase;
    font-weight: bold;
    padding: 5px 20px;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    transition: background-color 0.4s;
    display: block;
    margin: 10px auto;
    text-align: center;
    font-size: large;
    width: 150px;
    margin-top: -30px;
    font-size: 30px;

    }
  
   

    form {
      background-color: #000000;
      padding: 50px;
      margin-top: -120px;
    }
    .newsletter-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
   <div02>
  <h6>¿NECESITAS UNA ASESORIA?</h6>
  <h7>¡En unos segundos nos contactaremos contigo!</h7>
</div02>



<form id="newsletterForm" onsubmit="return validarFormulario()" method="post" action="correo.php">
  <label for="email"></label>
  <input type="email" id="email" name="email" required placeholder="Correo electrónico" aria-label="Correo electrónico">
  <span id="emailError" class="error-message"></span>

  <br>

  <button type="submit" style="background-color: white;">Enviar</button>
</form>

<script>
  function validarFormulario() {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');

    // Verificar si el campo de correo electrónico está vacío
    if (emailInput.value.trim() === '') {
      emailError.textContent = 'Por favor, ingrese su correo electrónico.';
      return false; // Detener el envío del formulario
    } else {
      emailError.textContent = ''; // Limpiar el mensaje de error si hay un correo ingresado
      // Aquí puedes agregar cualquier lógica adicional antes de enviar el formulario, si es necesario
      return true; // Permitir el envío del formulario
    }
  }
</script>