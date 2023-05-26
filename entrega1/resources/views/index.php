<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre One Piece</title>
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
                                    <a class="dropdown-item" href="#">Personajes</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Organizaciones</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Akuma no mi</a>
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
                                    <a class="dropdown-item" href="#">Manga</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Anime</a>
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
        <div class="hstack gap-4">
            <div class="vstack gap-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="card-header">Último cápitulo del Manga</div>
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img
                            src="../imagenes/capituloM.png"
                            alt="Trendy Pants and Shoes"
                            class="img-fluid rounded-start"
                        />
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                            </p>
                            <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light border">Second item</div>
                <div class="bg-light border">Third item</div>
            </div>
            <div class="vstack gap-3">
                <div class="bg-light border">First item</div>
                <div class="bg-light border">Second item</div>
                <div class="bg-light border">Third item</div>
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