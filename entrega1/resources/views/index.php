<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre One Piece</title>

    <!-- propio -->
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
    rel="stylesheet"
    />

    <!-- B -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                    <a class="navbar-brand" href="#">
                        <img
                            src="../imagenes/logo.png"
                            class="me-2"
                            height="150"
                            alt="MDB Logo"
                            loading="lazy"
                        />
                        <small>Inicio</small>
                    </a>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                      <!-- Navbar dropdown Sobre el mundo -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Sobre el mundo
                            </a>
                        <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="sobre_mundo/personajes">Personajes</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="sobre_mundo/organizaciones">Organizaciones</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="sobre_mundo/akuma_no_mi">Akuma no mi</a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- Navbar dropdown Sobre el Contenido -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Sobre el contenido
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="sobre_media/manga">Manga</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="sobre_media/anime">Anime</a>
                                </li>
                            </ul>
                       </li>
                    </ul>                    
                </div>
            </div>
        </nav><br>
        <div class="p-5 text-center bg-image" style="background-image: url('../imagenes/img1.jpg'); height: 400px;"></div>   
        <br>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-4" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                Cuidado!!! Si sigues bajando puedes encontrar algunos SPOILERS
            </div>
        </div><br>
        <div class="hstack gap-1">
            <div class="vstack gap-1">
                <div class="card mb-4" style="max-width: 630px;">
                    <div class="card-header" id="titulocard">Último cápitulo del Manga</div>
                    <div class="row g-0">
                        <div class="col-md-4" id="divimagen">
                            <img src="../imagenes/capituloM.png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cápitulo 1084: "Intento de homicidio contra un Tenryuubito"</h5>
                                <br><p class="card-text">
                                En este capítulo se repasarán los acontecimientos de el Levely a través del flashback de Sabo, retomando donde se había detenido el número anterior.
                                La mayor parte del capítulo se centrará en el encuentro de Nefertari Cobra con Los Cinco Ancianos, los más altos rangos de los Dragones Celestiales que parecen gobernar el mundo de One Piece
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">salio el 18 demayo del 2023</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4" style="max-width: 630px;">
                    <div class="card-header" id="titulocard">Último cápitulo del Anime</div>
                    <div class="row g-0">
                        <div class="col-md-4" id="divimagen">
                            <img src="../imagenes/capituloA.png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cápitulo 1062: "¡El Santouryuu del Conquistador! Zoro contra King"</h5><br>
                                <p class="card-text">
                                    Además de vislumbrar ciertos aspectos del origen y el pasado de King, veremos la conclusión del combate entre King y Zoro
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">salio el 18 demayo del 2023</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vstack gap-3" id="noticias">
                <h1>Últimas noticias..........</h1><br>
                <div class="accordion" id="accordionExampleY" style="max-width: 400px;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOneY">
                        <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#collapseOneY" aria-expanded="true" aria-controls="collapseOneY">
                            <i class="fas fa-photo-film"></i>  Donde y cuando ver el episodio 1063    
                        </button>
                        </h2>
                        <div id="collapseOneY" class="accordion-collapse collapse show mb-3" aria-labelledby="headingOneY" data-mdb-parent="#accordionExampleY">
                            <div class="accordion-body">
                                <img src="../imagenes/noticia1.jpeg" class="card-img-top" alt="Noticia 1"/><br>
                                <div class="card-body">
                                    <p class="card-text">
                                        <ol>Fecha: domingo 28 de mayo</ol>
                                        <ol>Dónde: A través de la ficha de “One Piece” en Crunchyroll</ol>
                                    </p>
                                    <a href="https://areajugones.sport.es/anime/anime-de-one-piece-horario-y-donde-ver-el-episodio-1063/" Target="_blank" class="card-link">Seguir leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwoY">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#collapseTwoY" aria-expanded="false" aria-controls="collapseTwoY">
                            <i class="fas fa-photo-film"></i>  Donde y cuando ver el capítulo 1085 del manga
                        </button>
                        </h2>
                        <div id="collapseTwoY" class="accordion-collapse collapse" aria-labelledby="headingTwoY" data-mdb-parent="#accordionExampleY">
                            <div class="accordion-body">
                                <img src="../imagenes/noticia2.png" class="card-img-top" alt="Noticia 1"/><br>
                                <div class="card-body">
                                    <p class="card-text">
                                        <ol>Fecha: 4 de junio de 2023</ol>
                                        <ol>Dónde:  Shonen Jump y Manga Plus</ol>
                                    </p>
                                    <a href="https://estrenos.news/one-piece-1085-que-podemos-esperar-del-capitulo/" Target="_blank" class="card-link">Seguir leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThreeY">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#collapseThreeY" aria-expanded="false" aria-controls="collapseThreeY">
                            <i class="fas fa-photo-film"></i>  Creador de One Piece no descansa?
                        </button>
                        </h2>
                        <div id="collapseThreeY" class="accordion-collapse collapse" aria-labelledby="headingThreeY" data-mdb-parent="#accordionExampleY">
                            <div class="accordion-body">
                                <img src="../imagenes/noticia3.png" class="card-img-top" alt="Noticia 1"/><br>
                                <div class="card-body">
                                    <p class="card-text">
                                        El creador de One Piece revela que no come durante días mientras trabaja en el manga
                                    </p>
                                    <a href="https://www.mundodeportivo.com/alfabeta/one-piece/el-creador-de-one-piece-revela-que-no-come-durante-dias-mientras-trabaja-en-el-manga" Target="_blank" class="card-link">Seguir leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>Sobre el autor: Eiichirō Oda</h1>
        <div class="card text-center" id="creador">
            <div class="row g-0">
                <div class="col-md-4" id="divimagen">
                    <img src="../imagenes/oda.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" id="imgoda"/>
                </div>
                <div class="col-md-6" id="creadortxt">
                    <div class="card-body">
                        <h5 class="card-title">Eiichirō Oda Creador del manga ONE PIECE</h5>
                        <br><p class="card-text">
                        Nacido el 1 de enero de 1975 en la prefectura de Kumamoto es un mangaka japonés, conocido por ser el creador del manga One Piece.
                        Dado el gran éxito que One Piece ha cosechado es el creador de manga que más dinero ha ganado así como el que más copias ha vendido y es considerado, junto a Akira Toriyama, uno de los dibujantes más influyentes de la historia de Japón .
                        </p>
                    </div>
                </div>
            </div>
        </div><br>
        <h1>Sobre la productora: Toei Animation</h1>
        <div class="card text-center" id="creador">
            <div class="row g-0">
                <div class="col-md-4" id="divimagen">
                    <img src="../imagenes/toei.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" id="imgoda"/>
                </div>
                <div class="col-md-6" id="creadortxt">
                    <div class="card-body">
                        <h5 class="card-title">Toei Animation Co., Ltd</h5>
                        <br><p class="card-text">
                        Es un estudio de animación japonés propiedad de la empresa Toei Company, ha creado varias series de televisión y películas y ha adaptado mangas como series animadas, muchas populares en todo el mundo
                        Sin embargo, en 1999 el estudio con un aire renovado lanza series de éxito como One Piece, Digimon o Magical Doremi consolidándose como uno de los estudios de animación japonesa más importantes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    







    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>

    <!-- B -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>