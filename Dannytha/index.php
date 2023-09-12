<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
   <style>
         @font-face {
    font-family: 'Exo';
    src: url('fonts/ExoRegular-ymMe.otf') format('truetype'); 
  }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('img/fondoo.jpeg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        header {
            z-index: 3; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px 0;
            text-align: center;
            font-family: 'Exo', sans-serif;
        }

        #content {
            margin-bottom: 80;
            margin-top: 60px; 
            position: relative; 
            z-index: 0;
            font-family: 'Exo', sans-serif;
        }

        .menu-item {
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            transition: transform 0.3s; 
            display: inline-block;
        }

        .menu-item:hover {
            transform: scale(1.2); 
            text-decoration: none; 
            color: white; 
        }

        .typed {
            font-size: 24px;
            color: white; 
        }

        .carousel-overlay {
            z-index: 2; 
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
        z-index: 1;
    }
    .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .carousel-inner {
    max-width: 80%; 
    margin: 0 auto; 
    z-index: 2;
}
.resume-container {
    background: rgba(0, 0, 0, 0.5); 
    padding: 20px; 
    border-radius: 10px; 
}
.resume .resume-title {
    font-size: 26px;
    font-weight: 700;
    margin-top: 20px;
    margin-bottom: 20px;
    color: white;
    font-family: 'Exo', sans-serif; 
}
.resume .resume-item h4 {
    line-height: 18px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: 'Exo', sans-serif; 
    color: white;
    margin-bottom: 10px;
}
.white-text {
    color: white;
    font-family: 'Exo', sans-serif;
}

.btn {
        position: absolute;
        bottom: 10px; 
        left: 50%; 
        transform: translateX(-50%); 
        color: white;
    }

.btn-2 {
            border: 3px solid;
            position: relative;
            display: block;
            margin: 10px auto;
            padding: 5% 10%; 
            background-color: transparent;
            color: var(--color);
            transition: all 0.6s ease;
            font-size: 6vw;
            font-family: 'Exo', sans-serif; 
        }

        .btn-2:hover {
            box-shadow: 0 0 20px var(--color);
            border-color: var(--color);
        }

        .btn-2 span:nth-child(n) {
            position: absolute;
            width: 32px;
            height: 32px;
            border: 3px solid;
            transition: all 0.6s ease;
        }

        .btn-2 span:nth-child(1) {
            right: 10%;
            top: -10px;
        }

        .btn-2 span:nth-child(2) {
            left: 10%;
            bottom: -10px;
        }

        .btn-2:hover span:nth-child(1) {
            right: 80%;
            transform: rotate(90deg);
            color: var(--color);
            background-color: var(--color);
        }

        .btn-2:hover span:nth-child(2) {
            left: 80%;
            transform: rotate(90deg);
            color: var(--color);
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

#readingButton::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(img/base10.jpeg); 
    background-size: 100% 100%;
    opacity: 0;
    transition: opacity 0.4s ease;
}

#readingButton:hover::before {
    opacity: 1;
}

#streamButton::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(img/base9.jpeg); 
    background-size: 100% 100%;
    opacity: 0;
    transition: opacity 0.4s ease;
}

#streamButton:hover::before {
    opacity: 1;
}
#about-content {
    margin-top: 20px;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7); 
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: white; 
    }
.card-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            margin-bottom: 20px;
        }
    .card {
    font-family: 'Exo', sans-serif; 
    color: white;
    width: 30%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
    text-align: center;
    padding: 20px; 
    text-align: center; 
 
}
    .new-div {
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
    text-align: center;
    margin-top: 20px; 
    font-family: 'Exo', sans-serif;
}

.pie-pagina{
    width: 100%;
    background-color: #000001;
}
.pie-pagina .grupo-1{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap:50px;
    padding: 45px 0px;
    font-family: 'Exo', sans-serif;
}
.pie-pagina .grupo-1 .box h2{
    color: #fff;
    margin-bottom: 25px;
    font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
    color: #efefef;
    margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;
    background-color: #2B3B7C;
    text-align: center;
    transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
    color: black;
}
.pie-pagina .grupo-2{
    background-color: rgba(43, 59, 124, 0.2);
    padding: 15px 10px;
    text-align: center;
    color: #fff;
}
.pie-pagina .grupo-2 small{
    font-size: 15px;
}
@media screen and (max-width:800px){
    .pie-pagina .grupo-1{
        width: 90%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap:30px;
        padding: 35px 0px;
    }
}
    </style>
    <title id="pageTitle">ENTERTOPIA-Unleash your Entrenaiment Odyssey </title>
</head> 
 </style>
 <link rel="icon" href="img/LOGO.png" sizes="32x32" type="image/png">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <header>
        <nav>
            <a class="menu-item" href="#">Inicio</a>
            <a class="menu-item" href="#boton">Ingresa a Entertopia</a>
            <a class="menu-item" href="#Precios">Precios</a>
        </nav>
    </header>
</head>
<body>
<section class="resume" id="resume">
<div class="resume-container">
                <div class="section-title">
                    <h2>Bienvenidos</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">

                        <h3 class="resume-title">Te damos la Bienvenida a Entertopia</h3>
                        <div class="resume-item">
                            <h4>Donde los Mundos de la Imaginacion y el conocimiento</h4>
                            <h4>convergen en una experiencia Unica.</h4>
                            <p><em class="white-text">Como plataforma vanguardista, Entertopia fusiona de manera impecable la emocionante vivencia de un servicio de streaming con los tesoros ilimitados de una biblioteca virtual.</em></p>
                            <p class="white-text">En un entorno donde cada detalle importa, no encontrarás molestas interrupciones publicitarias. Entertopia es un oasis de entretenimiento sin publicidad, permitiéndote sumergirte por completo en el deleite de tus películas, series y animes favoritos. Imagina la emoción de disfrutar contenido de alta calidad sin distracciones, donde cada escena cobra vida con colores vibrantes y narrativas cautivadoras.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Pero la Magia de entertopia no se Detiene</h4>
                            <p><em class="white-text">Nuestra plataforma ofrece un servicio de IPTV que redefine la manera en que experimentas el entretenimiento</em></p>
                            <p class="white-text">A través de la tecnología IPTV, te transportamos a un mundo donde las fronteras entre la televisión tradicional y el streaming se desvanecen. </p>
                            <p class="white-text">Sumérgete en una programación diversa y dinámica, donde el contenido llega directamente a tus dispositivos, adaptándose a tus preferencias y horarios.</p>
                        </div>
                        <h3 class="resume-title">Biblioteca virtual </h3>
                        <div class="resume-item">
                            <h4>La biblioteca virtual de Entertopia</h4>
                            <p><em class="white-text">Es un tesoro para los amantes del conocimiento.</em></p>
                            <p class="white-text">Las páginas digitales cobran vida, ofreciendo una amplia gama de libros electrónicos, mangas, comics y revistas de interés general. En cada estante virtual, encontrarás una invitación a explorar y aprender, todo a tu propio ritmo y según tus intereses.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Personalizacion Total</h3>
                        <div class="resume-item">
                            <h4>Nos enorgullece ofrecer una experiencia altamente</h4>
                            <h4>Personalizada</h4>
                            <p><em class="white-text">Con Entertopia, puedes crear tus propias listas de reproducción, recibir recomendaciones basadas en tus hábitos de visualización y acceder a contenido exclusivo seleccionado especialmente para ti. La inteligencia artificial está en el corazón de nuestra plataforma, asegurando que siempre tengas acceso a lo que más te interesa.</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Acceso a Cualquier Momento y Lugar</h4>
                            <p><em class="white-text">¿Te encuentras en casa, en el trabajo o de viaje?</em></p>
                            <p class="white-text">No importa dónde estés, Entertopia te acompaña. Con acceso multiplataforma, puedes disfrutar de tu entretenimiento favorito en tu televisor, tablet, teléfono móvil o computadora. Nunca te perderás un momento emocionante, ya que todo el contenido está disponible para ti las 24 horas del día, los 7 días de la semana.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Sin Anuncios Molestos:</h4>
                            <p><em class="white-text">En Entertopia, tu tiempo de visualización es valioso</em></p>
                            <p class="white-text">Es por eso que garantizamos una experiencia sin interrupciones publicitarias molestas. Puedes sumergirte en tus programas y películas favoritas sin preocuparte por los comerciales. La tranquilidad de disfrutar del entretenimiento sin distracciones es parte de lo que ofrecemos.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Variedad de Contenido</h4>
                            <p><em class="white-text">En Entertopia, la variedad es nuestra fortaleza.</em></p>
                            <p class="white-text"> Desde las últimas películas de éxito hasta los programas de televisión más populares, pasando por eventos deportivos en vivo y programas culturales, nuestra plataforma ofrece un catálogo diverso que satisface todos los gustos. No importa si eres un amante del cine, un apasionado por las series, tenemos algo especial para ti.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div id="boton">
    <div class="button-container" >
    <button class="btn-2" style="--color: #5EF7EC;" id="streamButton" data-link="https://stream.am2ps.online">
        <span></span>
        <span></span>
        Streaming
    </button>
    <button class="btn-2" style="--color: #fcfc8a;" id="readingButton" data-link="https://reading.am2ps.online">
        <span></span>
        <span></span>
        Reading
    </button>
</div>
</div>
    <div id="content">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-overlay"></div>
                <img src="img/Base1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <div class="carousel-overlay"></div>
                <img src="img/Base2.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    <div class="card-container" id=Precios>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <h2 style="font-size: 24px;">Entertopia Streaming</h2> 
            <p>____________</p>
            <p>*Acceso a Series (Solo 1 Dispositivo)"20Bs"</p>
            <p>*Acceso a Peliculas (Accion, Infantiles, Drama, Terror, Comedia)(Solo 1 Dispositivo)"25Bs"</p>
            <p>*Acceso a Peliculas y Series (Para 2 Dispositivos Simultaneamente)"30Bs"</p>
            <p>*Acceso a Peliculas, Series e IPTV (Para 4 Dispositivos)"35Bs"</p>
            <p></p>
            <button class="btn" style="background-color: rgba(43, 59, 124, 0.7); color: white;" onclick="window.location.href='Registro.php'">Empezar</button>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <h2 style="font-size: 24px;">Entertopia Onliteca</h2>
            <p>____________</p>
            <p>*Acceso a Comics o Libros "15Bs"</p>
            <p>*Acceso a Comics y Mangas "20Bs"</p>
            <p>*Acceso a Comics, Mangas y Libros "30Bs"</p>
            <p></p>
            <button class="btn" style="background-color: rgba(43, 59, 124, 0.8); color: white;" onclick="window.location.href='Registro.php'">Empezar</button>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.8);">
            <h2 style="font-size: 24px;">Entertopia Full</h2>
            <p>____________</p>
            <p>*Acceso a Comics o Libros y Accesso a Series (Solo 1 Dispositivo)"25Bs"</p>
            <p>*Acceso a Peliculas (Accion, infantiles, drama, Terror, Comedia) Accesos a comics y Mangas(Solo para 1 Dispositivo)"35Bs"</p>
            <p>*Acceso a Peliculas y series, Acceso a Comics, Mangas y Libros (Para 2 Dispositivos Simultaneamente)"45Bs"</p>
            <p>*Acceso a Peliculas, Series e IPTV y Acceso a Comics, Mangas y Libros (Para 4 Dispositivos Simultaneamente)"50Bs"</p>
            <p></p>
            
            <button class="btn" style="background-color: rgba(43, 59, 124, 0.8); color: white;" onclick="window.location.href='Registro.php'">Empezar</button>

        </div>
    </div>

<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>En Entertopia, somos un equipo apasionado por ofrecer experiencias de entretenimiento y aprendizaje excepcionales.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
        <small>&copy; 2023 <b><a href="https://www.instagram.com/dannythacx/" target="_blank">Dannythaⓒˣ</a></b></small>
        </div>
    </footer>
<script>
    const buttons = document.querySelectorAll('.btn-2');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
        
            const link = button.getAttribute('data-link');

            window.location.href = link;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById("regiButton");
    button.addEventListener("click", function() {
        window.location.href = "./Registro.php";
    });
});
</script>
<script>
        let titleText = "ENTERTOPIA-Unleash your Entertainment Odyssey";
        let titleIndex = 0;
        const titleInterval = 200; 

        function scrollTitle() {
            document.title = titleText.substring(titleIndex) + titleText.substring(0, titleIndex);
            titleIndex = (titleIndex + 1) % titleText.length;
        }

        setInterval(scrollTitle, titleInterval);
    </script>
</body>
</html>