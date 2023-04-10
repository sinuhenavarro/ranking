<?php
  
  echo "Entra en la funcion";
   $dataJSON = file_get_contents("data/jugadores.json");//recoge los datos del fichero y lo pone en una cadena
 
   
   $objetoJugadores= json_decode($dataJSON,true);// transformamos la cadena en un objeto PHP
   //$jugadores=$objetoJugadores["jugadores"];//nos quedamos con el array de jugadores.
      
   
//añadimos un nuevo jugador al array
 
//Cambiar esta parte para que coja los datos del formulario
$nuevoJugador=
[
      'usuario'=>'jugadorAñadido',
      'nombre'=> 'El',
      'apellido1'=> 'Nuevo',
      'totalpuntos'=>5,
      'retos'=>
       [
         'LMSGI'=>['puntos'=>3,'retosganados'=>['01-10-2022']],
         'GBD'=>['puntos'=>2,'retosganados'=>['01-10-2022','02-10-2022']]
       ]
];
 
   array_push($objetoJugadores["jugadores"],$nuevoJugador);
   print_r($objetoJugadores["jugadores"]);

 //Guardamos los datos modificados en el fichero*/

$dataJSON= json_encode($objetoJugadores,JSON_PRETTY_PRINT);//transformamos el objeto en una cadena de caracteres


file_put_contents("data/jugadores.json",$dataJSON);
   


?>