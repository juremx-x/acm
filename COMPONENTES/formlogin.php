<style>
      body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Asegura que la imagen no se desborde */
    padding-top: 100px;
}

.background-image {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ajusta la imagen para que cubra todo el contenedor */
    z-index: -1;
}

.login-form {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
    padding: 20px;
    border-radius: 10px;
}



.button4 {
    background-color: #ff7e03; /* Color del botón */
    color: white;
    cursor: pointer;
}

.button4:disabled {
    background-color: #ccc; /* Color del botón deshabilitado */
    cursor: not-allowed;
}
input, .button4 {
  margin: 10px auto;
  padding: 8px 16px;
  border-radius: 5px;
  width: 200px;
    font-size: 22px;
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

    body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden; /* Asegura que la imagen no se desborde */
}

.background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ajusta la imagen para que cubra todo el contenedor */
    z-index: -1;
}   
  </style>
