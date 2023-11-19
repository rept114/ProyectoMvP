<!DOCTYPE html>
<html>
<head>
    <title>Asistente de Selección de Computadora</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!--Boostrap CSS!!-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Boostrap CSS!-->
    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
</head>
<body>
    <div class="jm-loadingpage"></div>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#" onclick="inicio();">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="showRecomendacion();">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="container mt-5" id="dvContainer">
        <!-- Contenido principal -->
        <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>Bienvenido a nuestro sitio web</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor hendrerit est, eu convallis justo pharetra id.</p>
            <a href="#" class="btn btn-primary">Más información</a>
            </div>
            <div class="col-md-6">
            <img src="https://via.placeholder.com/400" alt="Imagen de muestra" class="img-fluid">
            </div>
        </div>
        </div>
        <!-- Sección de Productos -->
        <section id="productos" class="py-5 bg-light">
            <div class="container">
                <h2 class="mb-4 text-center">Nuestros Productos</h2>

                <!-- Filtros -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <label for="filtroCategoria">Filtrar por Categoría:</label>
                        <select class="form-control" id="filtroCategoria">
                            <option>Todas</option>
                            <option>Categoría 1</option>
                            <option>Categoría 2</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="filtroPrecio">Filtrar por Precio:</label>
                        <select class="form-control" id="filtroPrecio">
                            <option>Todos</option>
                            <option>Menor a Mayor</option>
                            <option>Mayor a Menor</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="buscadorProductos">Buscar Productos:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="buscadorProductos" placeholder="Ingrese su búsqueda...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lista de Productos con Cards y Paginación -->
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción del producto 1.</p>
                                <a href="#" class="btn btn-primary">Ver Detalles</a>
                            </div>
                        </div>
                    </div>

                    <!-- Repite esta estructura para más productos -->

                </div>

                <!-- Paginación -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">1 <span class="sr-only">(current)</span></span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">&raquo;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="ruta-del-logo.jpg" alt="Logo de la Empresa" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4>Descripción de la Empresa</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor hendrerit est, eu convallis justo pharetra id.</p>
                </div>
                <div class="col-md-3">
                    <h4>Síguenos</h4>
                    <!-- Agrega enlaces a tus redes sociales -->
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Facebook</a></li>
                        <li><a href="#" class="text-light">Twitter</a></li>
                        <li><a href="#" class="text-light">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-- Navbar en el Footer -->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavFooter" aria-controls="navbarNavFooter" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavFooter">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="js/index.js?v=1"></script>
    <!--Boostrap 5.0 js!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://kit.fontawesome.com/1c4528e88d.js" crossorigin="anonymous"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    
</body>
</html>
