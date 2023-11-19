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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #044261;">
        <a class="navbar-brand" href="#" style="font-family: 'Poppins Medium', sans-serif; color: #E9F6F4;">
            <img src="assets/img/logo5.0.png" alt="Logo" width="75" height="56">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" onclick="inicio();" style="color: #E9F6F4;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #E9F6F4;">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showRecomendacion();" style="color: #E9F6F4;">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #E9F6F4;">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Carrusel -->
    <div style="position: relative; width: 100%; height: 0; padding-top: 33.3333%;
        padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0em; margin-bottom: 0em; overflow: hidden;
        border-radius: 0px; will-change: transform;">
        <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
            src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF0khL0Eec&#x2F;view?embed">
        </iframe>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div class="container mt-5" id="dvContainer">
        <!-- Contenido principal -->
        <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h1>¡Bienvenido a PC Build!</h1>
            <p style="text-align: justify;">
                En PC Build, simplificamos la elección de tu computadora ofreciéndote recomendaciones personalizadas. Responde algunas preguntas y obtén configuraciones adaptadas a tus necesidades y preferencias. Ya sea para trabajo, entretenimiento o gaming, estamos aquí para guiarte en la construcción de la computadora perfecta.

                Descubre nuestras sugerencias, mantente al tanto de las últimas tendencias tecnológicas y comienza a crear la computadora ideal para ti. En PC Build, hacemos que la tecnología se adapte a tu estilo de vida. ¡Inicia ahora tu viaje informático con nosotros!
            </p>

            <a href="#" class="btn btn-primary">Más información</a>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-color: #044261; border-radius: 50%; width: 400px; height: 400px; overflow: hidden;">
                <img src="assets/img/logo5.0.png" alt="Imagen de muestra" class="img-fluid" style="width: 100%; height: 100%; object-fit: contain;">
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
    <footer class="bg-color text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/logo5.0.png" alt="Logo de la Empresa" width="200" height="162" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4 style="font-family: 'Poppins Medium', sans-serif;">Descripción de la Empresa</h4>
                    <p style="font-family: 'Poppins Medium', sans-serif;">PC Build es una empresa especializada en recomendar configuraciones personalizadas de computadoras, ya sean de escritorio o laptops, a través de su sitio web interactivo. Guiados por una serie de preguntas específicas, ofrecen soluciones adaptadas a las necesidades y preferencias individuales de los usuarios, garantizando un rendimiento óptimo y una experiencia informática a medida.</p>
                </div>
                <div class="col-md-3">
                    <h4 style="font-family: 'Poppins Medium', sans-serif;">Síguenos</h4>
                    <!-- Agrega enlaces a tus redes sociales con íconos -->
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light" style="text-decoration: none;"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-light" style="text-decoration: none;"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-light" style="text-decoration: none;"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <!-- Navbar en el Footer con color de fondo personalizado -->
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavFooter" aria-controls="navbarNavFooter" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavFooter">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #E9F6F4;">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #E9F6F4;">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #E9F6F4;">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #E9F6F4;">Contacto</a>
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
