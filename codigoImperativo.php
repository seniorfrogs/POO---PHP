<?php

# Código imperativo o espagueti
$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Carolla"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Vision"];

  function mostrar($automovil){
    echo "<p>Hola! Soy un $automovil->marca, modelo $automovil->modelo</p>";
  }
  mostrar($automovil1);

?>
