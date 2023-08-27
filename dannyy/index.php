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
            z-index: 2; 
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
        }
    .card {
    font-family: 'Exo', sans-serif; 
    color: white;
    width: 30%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
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
.precio{
  position: absolute;
  top: 10px;
  left: 0;
  font-size: 15px;
  background: black;
  padding: 15px;
}
    </style>
</head> 
 </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav>
            <a class="menu-item" href="#">Inicio</a>
            <a class="menu-item" href="#nosotros">Nosotros</a>
            <a class="menu-item" href="#precios">Precios</a>
            <a class="menu-item" href="#boton">Servicios</a>
        </nav>
    </header>

    <section class="d-flex flex-column justify-content-center align-items-center" id="portada">
        <div class="portada-container" data-aos="fade-in">
            <h1>Dannytha </h1>
           // <p font-family= 'Exo', sans-serif;>Soy <span class="typed" data-typed-items="Daniela, Landa, Garcia"></span></p>
        </div>
    </section>

<div id="about-content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut sem in quam fermentum posuere.
            Praesent condimentum, mi at elementum fringilla, urna tellus egestas purus, vel luctus neque libero ut elit.
            Nulla facilisi. Proin aliquam arcu vel ex vehicula, ac fringilla ipsum varius. Maecenas at tincidunt quam.
            Nullam tincidunt varius nulla, ut tristique arcu. Donec et bibendum elit, et laoreet arcu. Morbi at libero
            fermentum, dignissim ligula non, tincidunt mi. Etiam accumsan ipsum nisl, et ultricies orci luctus ac.
        </p>
    </div>
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

                        <h3 class="resume-title">What </h3>
                        <div class="resume-item">
                            <h4>is Lorem Ipsum?</h4>
                            <h5>1998-2023</h5>
                            <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</em></p>
                            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                        </div>
                        <div class="resume-item">
                            <h4>Why do we use it?</h4>
                            <h5>Lorem Ipsum</h5>
                            <p><em>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</em></p>
                            <p>as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variou</p>
                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
                        </div>
                        <h3 class="resume-title">Where does it come from?</h3>
                        <div class="resume-item">
                            <h4>Contrary to popular belief, Lorem Ipsum is not simply random text</h4>
                            <h5>2000</h5>
                            <p><em>McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words</em></p>
                            <p>consectetur, from a Lorem Ipsum passage</p>
                        </div>
                        <div class="resume-item">
                            <h4>Curso DJango</h4>
                            <h5>2017</h5>
                            <p><em>Udemy</em></p>
                            <p>Licencia UC-MQ59UOWT</p>
                        </div>
                        <div class="resume-item">
                            <h4>Lorem Ipsum</h4>
                            <h5>2023</h5>
                            <p><em>Lorem Ipsum</em></p>
                            <p>Lorem Ipsum</p>
                        </div>
                        <div class="resume-item">
                            <h4>Lorem Ipsum</h4>
                            <h5>2023</h5>
                            <p><em>Lorem</em></p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Where can I get some?</h3>
                        <div class="resume-item">
                            <h4>Lorep Ipsum</h4>
                            <h5>2023 - Presente</h5>
                            <p><em>Lorep</em></p>
                            <ul>
                                <li>There are many variations of passages of Lorem Ipsum available</li>
                                <li>but the majority have suffered alteration in some form, by injected humour</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Prácticas</h4>
                            <h5>2019</h5>
                            <p><em>ArcelorMittal R&D Asturias</em></p>
                            <ul>
                                <li>Conocimiento profundo de las tecnologías DLT y en particular de Hyperledger Fabric.</li>
                                <li>Experiencia desplegando una cadena de bloques (Blockchain) en un entorno industrial real.
                                </li>
                                <li>Modificación y adaptación de los códigos fuente de Hyperledger Fabric para adaptarla a las necesidades reales de un negocio.
                                </li>
                                <li>Definición y codificación de contratos inteligentes.</li>
                                <li>Aplicación de métodos de visualización e interacción con una cadena de bloques para diferentes usuarios, con diferentes permisos y visibilidad.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Investigación en tecnologías Blockchain</h4>
                            <h5>2018 - 2019</h5>
                            <p><em>Fundación Universidad de Oviedo</em></p>
                            <ul>
                                <li>Beca para investigación en tecnologías Blockchain y su impacto en el mercado, centradas en el producto Hyperledger Fabric de IBM.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>All the Lorem Ipsum generators </h4>
                            <h5>2023</h5>
                            <p><em>It uses a dictionary of over 200 Latin words/em></p>
                            <ul>
                                <li>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>All the Lorem Ipsum generators </h4>
                            <h5>2023</h5>
                            <p><em>It uses a dictionary of over 200 Latin words</em></p>
                            <ul>
                                <li>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

   
    <div class="new-div" id="precios">
    <h3 style="color: white;">Entertopia Streaming</h3>
    </div>
        <div class="card-container">
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">20Bs.</div>
        <img src="img/unoo.jpg" alt="Imagen 1">
        <h2 style="font-size: 28px;">Series</h2>
            <p>Acceso a Series (Solo 1 Dispositivo)</p>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">25Bs.</div>     
        <img src="img/dos.jpg" alt="Imagen 2">
        <h2 style="font-size: 28px;">Peliculas</h2>
            <p>Accion,Infantiles,Drama,Terror, Comedia (Solo 1 Dispositivo)</p>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">30Bs.</div>     
        <img src="img/tres.jpg" alt="Imagen 3">
        <h2 style="font-size: 28px;">Peliculas y Series</h2>
            <p>(2 Dispositivos Simultaneamente)</p>
        </div>
    </div>

    <div class="card" style="background-color: rgba(0, 0, 0, 0.7);margin: 0 auto;">
    <div class="precio">35Bs.</div>         
    <img src="img/dos.jpg" alt="Imagen 3">
    <h2 style="font-size: 28px;">Peliculas,Series e IPTV</h2>
            <p>Acceso a Peliculas, Series e IPTV (4 Dispositivos Simultaneamente)</p>
        </div>
    </div>


    <div class="new-div">
    <h3 style="color: white;">Entertopia Onlinetica</h3>
</div>
        <div class="card-container">
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <img src="img/unoo.jpg" alt="Imagen 1">
            <h2 style="font-size: 24px;">Acceso a Comics o Libros</h2>
            <div class="precio">15Bs.</div> 
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <img src="img/dos.jpg" alt="Imagen 2">
            <h2 style="font-size: 24px;">Acceso a Comics y Mangas</h2>
            <div class="precio">20Bs.</div> 
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
            <img src="img/tres.jpg" alt="Imagen 3">
            <h2 style="font-size: 24px;">Acceso a Comics, Mangas y Libros</h2>
            <div class="precio">30Bs.</div> 
        </div>
    </div>

    <div class="new-div" id="precios">
    <h3 style="color: white;">Entertopia Full</h3>
    </div>
        <div class="card-container">
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">25Bs.</div>   
        <img src="img/unoo.jpg" alt="Imagen 1">
        <h2 style="font-size: 28px;">Comics o Libros y Accesso a Series</h2>
            <p>Solo 1 Dispositivo</p>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">35Bs.</div>     
        <img src="img/dos.jpg" alt="Imagen 2">
        <h2 style="font-size: 28px;">Peliculas, Comics y Mangas</h2>
            <p>Accion,Infantiles,Drama, Terror y Comedia (1 Dispositivo)</p>
        </div>
        <div class="card" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="precio">45Bs.</div>     
        <img src="img/tres.jpg" alt="Imagen 3">
        <h2 style="font-size: 28px;">Peliculas y Series, Acceso a Comics, Mangas y Libros</h2>
            <p>(2 Dispositivos Simultaneamente)</p>
        </div>
    </div>
    <div class="card" style="background-color: rgba(0, 0, 0, 0.7);margin: 0 auto;">
    <div class="precio">50Bs.</div>         
    <img src="img/dos.jpg" alt="Imagen 3">
    <h2 style="font-size: 28px;">Peliculas,Series e IPTV y Acceso a Comics, Mangas y Libros</h2>
            <p>4 Dispositivos Simultaneamente</p>
        </div>
    </div>

    <div class="button-container" id="boton">
    <button class="btn-2" style="--color: #842F81;" id="streamButton">
        <span></span>
        <span></span>
        Streaming
    </button>
    <button class="btn-2" style="--color: #3B4FA7;" id="readingButton">
        <span></span>
        <span></span>
        Reading
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
    // Espera a que el documento esté cargado
    document.addEventListener("DOMContentLoaded", function() {
        const typedElement = document.querySelector('.typed');

        new Typed(typedElement, {
            strings: typedElement.getAttribute('data-typed-items').split(', '),
            typeSpeed: 100,  // Velocidad de escritura en milisegundos
            backSpeed: 50,   // Velocidad de retroceso en milisegundos
            loop: true       // Repetir la animación
        });
    });
</script>
<script>
    document.getElementById("streamButton").addEventListener("click", function() {
        window.location.href = "./Registro.php";
    });
    document.getElementById("readingButton").addEventListener("click", function() {
        window.location.href = "./Registro.php"; // Aquí usamos la misma URL para ambos botones
    });
</script>

</body>
</html>