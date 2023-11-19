<!-- Sección de Recomendaciones -->
<section id="recomendaciones" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Recomendaciones Personalizadas</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Formulario de preguntas -->
                <form id="formulario-recomendaciones">
                    <div class="form-group">
                        <label for="pregunta1">Pregunta 1:</label>
                        <input type="text" class="form-control" id="pregunta1" placeholder="Respuesta...">
                    </div>
                    <div class="form-group">
                        <label for="presupuesto">¿Cuál es tu presupuesto?</label>
                        <input type="range" class="custom-range" id="presupuesto" min="5000" max="50000" step="1000" value="25000">
                        <small>Valor actual: <span id="presupuestoValor">25,000</span> pesos</small>
                    </div>
                    <div class="form-group">
                        <label for="marca">¿Tienes alguna preferencia de marca?</label>
                        <select class="form-control" id="marca">
                            <option value="marca1">Marca 1</option>
                            <option value="marca2">Marca 2</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="uso">¿Para qué vas a utilizar la computadora?</label>
                        <select multiple class="form-control" id="uso">
                            <option value="uso1">Uso 1</option>
                            <option value="uso2">Uso 2</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                        <small>(Para seleccionar varias respuestas mantenen presionada la tecla Ctrl).</small>
                    </div>
                    <!-- Agrega más preguntas según tus necesidades -->

                    <button type="submit" class="btn btn-primary btn-block">Obtener Recomendación</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contenedor de Preguntas -->
<div id="preguntas-container" class="container mt-4">
    <div class="row">
        <!-- Las preguntas se añadirán aquí dinámicamente -->
    </div>
</div>
