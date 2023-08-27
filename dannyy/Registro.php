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
  background-image: url('img/unoo.jpg');
}

.form-registro {
  width: 400px;
  background: #000000;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  color: white;
  box-shadow: 7px 13px 37px #000;
  font-family: 'Exo', sans-serif;
}

.form-registro h4 {
  font-size: 22px;
  margin-bottom: 20px;
}

.controls {
  width: 100%;
  background: #24303c;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #2B3B7C;
  font-family: 'Exo', sans-serif;
  font-size: 18px;
  color: white;
}

.form-registro p {
  height: 40px;
  text-align: center;
  font-size: 18px;
  line-height: 40px;
}

.form-registro a {
  color: white;
  text-decoration: none;
}

.form-registro a:hover {
  color: white;
  text-decoration: underline;
}

.form-registro .botons {
  width: 100%;
  background: #2B3B7C;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
  font-family: 'Exo', sans-serif;
}
.select-container {
        display: flex;
        align-items: center;
        margin-top: 16px;
        font-family: 'Exo', sans-serif;
      }

    .select-container select {
        width: 100%;
        padding: 10px;
        border: none;
        outline: none;
        background: #24303c;
        color: white;
        border-radius: 4px;
        margin-top: 16px;
        font-size: 18px;
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

    .select-container {
       margin-top: 0px; 
    }

    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-registro">
     <h4>Formulario de Registro</h4>
    <form action="registro.php" method="post"> 
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombres">
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
        <input class="controls" type="text" name="celular" id="celular" placeholder="Celular">
        <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
       <div class="select-container">
            <select id="mySelect">
                <option value="opcion1">Stream</option>
                <option value="opcion2">Reading</option>
                <option value="opcion3">Ambos</option>
            </select>
        </div>
        
        <p class="checkbox-container">
            <input type="checkbox" id="terminos" name="terminos">
            <label for="terminos">Estoy de acuerdo con <a href="#">Términos y Condiciones</a></label>
        </p>
        <input class="botons" id="registrar-btn"type="submit" value="Registrar">
    </form>
    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </section>

  <script>
    const checkbox = document.getElementById('terminos');
    const registrarBtn = document.getElementById('registrar-btn');
    
   checkbox.addEventListener('change', function() {
        registrarBtn.disabled = !checkbox.checked;
    });
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const mySelect = document.getElementById("mySelect");

    mySelect.addEventListener("mouseover", function() {
        const selectedValue = mySelect.value;

        const streamOptions = document.getElementById("streamOptions");
        if (streamOptions) {
            streamOptions.parentNode.removeChild(streamOptions);
        }

        const readingOptions = document.getElementById("readingOptions");
        if (readingOptions) {
            readingOptions.parentNode.removeChild(readingOptions);
        }

        if (selectedValue === "opcion1") {
            const streamOptionsDiv = document.createElement("div");
            streamOptionsDiv.id = "streamOptions";

            const innerStreamSelect = document.createElement("select");
            innerStreamSelect.innerHTML = `
                <option>Series</option>
                <option>Peliculas</option>
                <option>Peliculas y Series</option>
                <option>Peliculas, Series e IPTV</option>
            `;

            streamOptionsDiv.appendChild(innerStreamSelect);
            mySelect.parentNode.appendChild(streamOptionsDiv);
        } else if (selectedValue === "opcion2") {
            const readingOptionsDiv = document.createElement("div");
            readingOptionsDiv.id = "readingOptions";

            const innerReadingSelect = document.createElement("select");
            innerReadingSelect.innerHTML = `
                <option>Comics o Libros</option>
                <option>Comics y Mangas</option>
                <option>Comics, Mangas y Libros</option>
            `;

            readingOptionsDiv.appendChild(innerReadingSelect);
            mySelect.parentNode.appendChild(readingOptionsDiv);
          } else if (selectedValue === "opcion3") {
            const ambosOptionsDiv = document.createElement("div");
            ambosOptionsDiv.id = "ambosOptions";

            const innerAmbosSelect = document.createElement("select");
            innerAmbosSelect.innerHTML = `
                <option>Comics o Libros y Accesso a Series</option>
                <option>Peliculas Comics y Mangas</option>
                <option>Peliculas y Series, Acceso a Comics, Mangas y Libros</option>
            `;

            ambosOptionsDiv.appendChild(innerAmbosSelect);
            mySelect.parentNode.appendChild(ambosOptionsDiv);
        }
    });

    mySelect.addEventListener("change", function() {
        const streamOptions = document.getElementById("streamOptions");
        if (streamOptions) {
            streamOptions.parentNode.removeChild(streamOptions);
        }

        const readingOptions = document.getElementById("readingOptions");
        if (readingOptions) {
            readingOptions.parentNode.removeChild(readingOptions);
        }

        const ambosOptions = document.getElementById("ambosOptions");
        if (ambosOptions) {
            ambosOptions.parentNode.removeChild(ambosOptions);
        }
    });
});
</script>
</body>
</html>
