<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>
         @font-face {
    font-family: 'Exo';
    src: url('fonts/ExoRegular-ymMe.otf') format('truetype'); 
  }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('img/unoo.jpg'); 
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
            background-color: #000000;
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
        #readingButton {
    --color: #3B4FA7;
}

#readingButton::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(img/Base10.png); 
    background-size: 100% 100%;
    opacity: 0;
    transition: opacity 0.4s ease;
}

#readingButton:hover::before {
    opacity: 1;
}

#streamButton {
    --color: #842F81;
}

#streamButton::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(img/Base9.jpg); 
    background-size: 100% 100%;
    opacity: 0;
    transition: opacity 0.4s ease;
}

#streamButton:hover::before {
    opacity: 1;
}


        #portada {
            width: 100%;
            height: 100vh;
            background: url("img/portadaa.jpg") top center;
            background-size: cover;
            font-family: 'Exo', sans-serif; 
        }

        #portada:before {
            content: "";
            background: rgba(5, 13, 24, 0.3);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        #portada .portada-container {
            position: relative;
            z-index: 2;
            min-width: 300px;
        }

        #portada h1 {
            margin: 0 0 10px 0;
            font-size: 64px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
        }

        #portada p {
            color: #fff;
            margin-bottom: 50px;
            font-size: 26px;
            font-family: "Poppins", sans-serif;
        }

        #portada p span {
            color: #fff;
            padding-bottom: 4px;
            letter-spacing: 1px;
            border-bottom: 3px solid #149ddd;
        }

        @media (min-width: 1024px) {
            #portada {
                background-attachment: fixed;
            }
        }

        @media (max-width: 768px) {
            #portada h1 {
                font-size: 28px;
                line-height: 36px;
            }
            #portada h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }
         }
    footer {
    height: 80px; 
    background-color: #000000; 
    color: white;
    bottom: 0; 
    left: 0;
    right: 0;
}
#about-content {
    margin-top: 20px;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7); 
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: white; 
    }
    .resume {
    background-color: rgba(0, 0, 0, 0.8); 
    color: #fff; 
    padding: 40px 0;
}

.resume .resume-title,
.resume .resume-item {
    background-color: transparent; 
    padding: 20px; 
    border-radius: 8px; 
    margin-bottom: 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}

.resume .resume-item h4 {
    color: #fff; 
}

.resume .resume-item h5 {
    background: rgba(228, 237, 249, 0.8); 
    padding: 5px 15px;
    display: inline-block;
    font-weight: 600;
    margin-bottom: 10px;
}

.resume .resume-item a {
    color: #007bff; 
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
        .card img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    .new-div {
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
    text-align: center;
    margin-top: 20px; 
    font-family: 'Exo', sans-serif;
}
.btn {
        position: absolute;
        bottom: 10px; 
        left: 50%; 
        transform: translateX(-50%); 
        background-color: rgba(70, 7, 84, 0.7);
        color: white;
    }
.precio{
  position: absolute;
  top: 10px;
  left: 0;
  font-size: 15px;
  background: black;
  padding: 15px;
}
#about-content-2 {
    width: 100%; 
    height: 100%; 
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center; 
    overflow: auto; 
    text-align: center; 
    padding: 20px; 
    position: relative; 
    z-index: 1
}

#scrolling-text {
    position: absolute; 
    animation: scroll-up 5s linear infinite; 
    font-size: 18px; 
    line-height: 1.5; 
    font-family: 'Exo', sans-serif;
    margin-top: 0; 
    top: 100px;
    transform: translateY(0);
    z-index:1;
}

@keyframes scroll-up {
    0% {
        top: 0%; /* Comienza desde la parte inferior */
    }
    100% {
        top: -150%; /* Desplaza completamente hacia arriba */
    }
}

    </style>
</head> 
 </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <header>
        <nav>
            <a class="menu-item" href="#">Inicio</a>
            <a class="menu-item" href="#nosotros">Nosotros</a>
            <a class="menu-item" href="#Precios">Precios</a>
            <a class="menu-item" href="#boton">Ingresa a Entertopia</a>
        </nav>
    </header>
</head>
<body>
    <section id="portada">
       <div class="portada-container" data-aos="fade-in">
       <div id="about-content-2">
        <p font-family= 'Exo', sans-serif; id="scrolling-text">
        Te damos la bienvenida a Entertopia, donde los mundos de la imaginación y el conocimiento convergen en una experiencia única. 
        Como plataforma vanguardista, Entertopia fusiona de manera impecable la emocionante vivencia de un servicio de streaming con los tesoros 
        ilimitados de una biblioteca virtual.</p>
        </p>
    </div>
    </div>
    </section>


    <div id="content">
    <!-- Carrusel de imágenes -->
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

    <section class="resume" id="resume">
            <div class="container">

                <div class="section-title">
                </div>

                <div class="row" id=nosotros>
                    <div class="col-lg-6" data-aos="fade-up">

                        <h3 class="resume-title">Entertopia</h3>
                        <div class="resume-item">
                            <p><em>Pero la magia de Entertopia no se detiene allí. Nuestra plataforma ofrece un servicio de IPTV que redefine la manera en que experimentas el entretenimiento. A través de la tecnología IPTV, te transportamos a un mundo donde las fronteras entre la televisión tradicional y el streaming se desvanecen. Sumérgete en una programación diversa y dinámica, donde el contenido llega directamente a tus dispositivos, adaptándose a tus preferencias y horarios.
</em></p>
</div>
                        <div class="resume-item">
                            <h4>Biblioteca Virtual</h4>
                            <p><em>La biblioteca virtual de Entertopia es un tesoro para los amantes del conocimiento. Las páginas digitales cobran vida, ofreciendo una amplia gama de libros electrónicos, mangas, comics y revistas de interés general</em></p>
                            <p>En cada estante virtual, encontrarás una invitación a explorar y aprender, todo a tu propio ritmo y según tus intereses.</p>
                       </div>
                        <h3 class="resume-title">En Resumen</h3>
                        <div class="resume-item">
                            <h4>Entertopia es tu refugio en un mundo digital.</h4>
                            <p><em>Aquí, la magia del entretenimiento sin publicidad se entrelaza con la riqueza del conocimiento en nuestra biblioteca virtual.</em></p>
                            <p> Nuestra tecnología IPTV redefine tu experiencia televisiva, ofreciendo una programación adaptada a ti.</p>
                            <p>Te invitamos a explorar, aprender y vivir la emoción de un mundo sin límites, donde el entretenimiento y el aprendizaje coexisten en perfecta armonía.</p>
                        </div>
                        
                    </div>
                </div>

            </div>
        </section>

    <div class="card-container" id=Precios>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <h2 style="font-size: 24px;">Entertopia Streaming</h2> 
            <p>____________</p>
            <p>Acceso a Series (Solo 1 Dispositivo)"20Bs"</p>
            <p>Acceso a Peliculas (Accion, Infantiles, Drama, Terror, Comedia)(Solo 1 Dispositivo)"25Bs"</p>
            <p>Acceso a Peliculas y Series (Para 2 Dispositivos Simultaneamente)"30Bs"</p>
            <p>Acceso a Peliculas, Series e IPTV (Para 4 Dispositivos)"35Bs"</p>
            <p></p>
            <button class="btn" style="background-color: rgba(70, 7, 84, 0.7); color: white;">Empezar</button> 
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <h2 style="font-size: 24px;">Entertopia Onliteca</h2>
            <p>____________</p>
            <p>Acceso a Comics o Libros "15Bs"</p>
            <p>Acceso a Comics y Mangas "20Bs"</p>
            <p>Acceso a Comics, Mangas y Libros "30Bs"</p>
            <p></p>
            <button class="btn" style="background-color: rgba(70, 7, 84, 0.7); color: white;">Empezar</button> 
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <h2 style="font-size: 24px;">Entertopia Full</h2>
            <p>____________</p>
            <p>Acceso a Comics o Libros y Accesso a Series (Solo 1 Dispositivo)"25Bs"</p>
            <p>Acceso a Peliculas (Accion, infantiles, drama, Terror, Comedia) Accesos a comics y Mangas(Solo para 1 Dispositivo)"35Bs"</p>
            <p>Acceso a Peliculas y series, Acceso a Comics, Mangas y Libros (Para 2 Dispositivos Simultaneamente)"45Bs"</p>
            <p>Acceso a Peliculas, Series e IPTV y Acceso a Comics, Mangas y Libros (Para 4 Dispositivos Simultaneamente)"50Bs"</p>
            <p></p>
            
            <button class="btn" style="background-color: rgba(70, 7, 84, 0.7); color: white;">Empezar</button> 
        </div>
    </div>

<div>
    <div class="button-container" id="boton">
    <button class="btn-2" style="--color: #842F81;" id="streamButton" data-link="https://stream.am2ps.online">
        <span></span>
        <span></span>
        Streaming
    </button>
    <button class="btn-2" style="--color: #3B4FA7;" id="readingButton" data-link="https://reading.am2ps.online">
        <span></span>
        <span></span>
        Reading
    </button>
</div>

<button class="btn-2" style="--color: #1D7DB5;" id="regiButton">
        <span></span>
        <span></span>
        Registro
    </button>
</div>

<footer> 
    <div class="col-md-4 d-flex align-items-center">
    <ul class="list-unstyled d-flex mb-0 me-4">
            <li class="me-3"><a href="#"><i class="fab fa-facebook fa-lg" style="color: white;"></i></a></li>
            <li class="me-3"><a href="#"><i class="fab fa-twitter fa-lg" style="color: white;"></i></a></li>
            <li class="me-3"><a href="#"><i class="fab fa-discord fa-lg" style="color: white;"></i></a></li>
            </ul>
            <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none lh-1">
                <svg class="bi" width="30" height="24" style="fill: white;"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <div class="ms-auto">
            <a href="https://fb.com/dannythacx">© 2023 Dannytha</a>
            </div>
        </div>
    </footer>

    <script>
        const typedElement = document.getElementById('typed');
        const typedItems = typedElement.getAttribute('data-typed-items').split(', ');
        let currentItemIndex = 0;

        function typeNextItem() {
            typedElement.textContent = typedItems[currentItemIndex];
            currentItemIndex = (currentItemIndex + 1) % typedItems.length;
        }


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

</body>
</html>