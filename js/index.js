//Precio vista
const price = document.querySelector("#price");
const output = document.querySelector(".price-output");

if (price && output) {
  output.textContent = `$${price.value}`;

  price.addEventListener("input", function () {
    output.textContent = `$${price.value}`;
  });
}

document.getElementById("computerForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevenir que el formulario se envíe de la manera tradicional

  // Get form data and do something with it (e.g., send it to the server)
  const formData = new FormData(this);

  // For example, you can log the form data to the console
  for (const entry of formData.entries()) {
    console.log(entry[0], entry[1]);
  }

  // Update the results div with the form data
  document.getElementById("results").innerHTML = "<h3>Resultados:</h3>" + [...formData.entries()].map(entry => `<p>${entry[0]}: ${entry[1]}</p>`).join("");
});

//Aquí se muestran las vistas
function showRecomendacion(){
    $.post("modulos/recomendacion/showRecomendacion.php", {})
    .done(function(data)
    {
        $("#dvContainer").html("");
        $("#dvContainer").html(data);
    });
}

//Aquí se muestran las vistas
function inicio(){
  $.post("C:/xampp/htdocs/ProyectoMvP/modulos/Inicio/index.php", {})
  .done(function(data)
  {
      $("#dvContainer").html("");
      $("#dvContainer").html(data);
  });
}

// Agrega el siguiente script en tu HTML, preferiblemente al final del cuerpo (justo antes de </body>)
