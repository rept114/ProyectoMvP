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