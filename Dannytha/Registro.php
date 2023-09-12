<!DOCTYPE html>
<html>
<head>
<style>
  
  @font-face {
    font-family: 'Exo';
    src: url('fonts/ExoRegular-ymMe.otf') format('truetype'); 
  }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    font-size: 16px; 
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-image: url('img/fondoo.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
@media (max-width: 768px) {
}
img {
    max-width: 100%; 
  }
.header {
    padding: 2rem; 
}
.form-registro {
  width: 730px;
  height: 1500px;
  background: #000000;
  padding: 30px;
  margin: 0 auto;
  border-radius: 4px;
  color: white;
  box-shadow: 7px 13px 37px #000;
  font-family: 'Exo', sans-serif;
  
}
.form-registro .botons {
  width: 100%;
  background: #2B3B7C;
  border: none;
  padding: 12px;
  color: white;
  font-size: 16px;
  font-family: 'Exo', sans-serif;
}
    .checkbox-container {
        display: flex;
        align-items: center;
        margin-top: 25px;
        margin-bottom: 16px;
        color: white;
    }

    .checkbox-container input[type="checkbox"] {
        margin-right: 10px;
    }

    .modal-text {
        font-family: 'Exo', sans-serif;
    }

    </style>
    <link rel="icon" href="img/LOGO.png" sizes="32x32" type="image/png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<div id="google-form-container" style="display: none;">
   <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdMAN-vSTRCkdyZTbNE8e5294cvOL6HLB_gwn8wqh4zvtJMIA/viewform?embedded=true" width="640" height="1150" frameborder="0" marginheight="0" marginwidth="0" data-ruffle-polyfilled="">Cargando…</iframe>
</div>

  
  <title>Registro</title>
</head>
<body>
  <section class="form-registro">
     <h4>Formulario de Registro</h4>
     <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdMAN-vSTRCkdyZTbNE8e5294cvOL6HLB_gwn8wqh4zvtJMIA/viewform?embedded=true" width="640" height="2226" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
</div>
</form>
  </section>



<script>
    function mostrarFormularioGoogle() {
        var googleFormContainer = document.getElementById("google-form-container");
        googleFormContainer.style.display = "block";
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
