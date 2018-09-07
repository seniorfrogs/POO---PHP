<?php
#NOTA: Programar en POO es más seguro que en código Imperativo ya que en la POO puedes separa las clases y los objetos
# en archivos aislados sin compreter la información de robo de información, ya que tener todo junto se presta para eso.

#CLASE:
# Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado, e identidad.

class Automovil{

public $marca;
public $modelo;

#METODO
# Es el algoritmo  asociado a un objeto que indica la capacidad de lo que éste
# puede hacer. La única diferencia entre método y función, es la que llamamos
# método a las funciones de una clase (en la POO), mientras que llamamos funciones,
# a los algoritmos de la programación estructurada.

public function mostrar(){
  echo "<p>Hola! Soy un $this->marca, modelo $this->modelo</p>";
  }

}

#OBJETO
#Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Carolla";
$a -> mostrar();

#Principios d ela POO que se cumplen en este ejemplo:

#ABSTRACCIÓN: Nuevos tipos de datos (el que tu quieras, tu lo creas).
#ENCAPSULAMIENTO: Organizar el código en grupos lógicos.
#OCUTAMIENTO: Ocultar detales de implementación y exponer solo los detalles que sean necesarios para el resto del sistema.

?>
