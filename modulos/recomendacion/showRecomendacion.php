<form id="computerForm">
    <label for="budget"><h2>Cotización:</h2></label><br>
    <label for="purpose">Para qué la utilizarás:</label><br>
    <select id="purpose" name="purpose" required>
        <option value="">Selecciona el tipo de uso</option>
        <option value="programar">Programar</option>
        <option value="videojuegos">VideoJuegos</option>
        <option value="diseño">Diseño</option>
        <option value="3d">Creación 3D</option>
        <option value="edicion">Edición de video</option>
    </select><br><br>
        
    <label for="pcBrand">Marca de preferencia en PC:</label>
    <select id="pcBrand" name="pcBrand">
        <option value="">Selecciona tu marca de preferencia en PC</option>
        <option value="nvidia-amd">Nvidia y AMD</option>
        <option value="nvidia-intel">Nvidia e Intel</option>
        <option value="amd-amd">AMD</option>
        <option value="amd-intel">AMD e Intel</option>
        <option value="intel-amd">Intel y AMD</option>
        <option value="intel-intel">Intel</option>
    </select><br><br>

    <label for="laptopBrand">Marca de preferencia en laptop:</label>
    <select id="laptopBrand" name="laptopBrand">
        <option value="">Selecciona tu marca de preferencia en laptop</option>
        <option value="hp">HP</option>
        <option value="dell">Dell</option>
        <option value="samsung">Samsung</option>
        <option value="lg">LG</option>
    </select><br><br>

    <label for="price">Escoge un rango de precio</label>
    <input
      type="range"
      name="price"
      id="price"
      min="5000"
      max="50000"
      step="100"
      value="25000" />
    <output class="price-output" id="priceOutput">$25000</output><br><br>
        
    <input type="submit" value="Enviar">
</form>

<div id="results"></div>

