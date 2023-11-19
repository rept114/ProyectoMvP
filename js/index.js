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
