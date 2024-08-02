<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios PHP</title>
</head>
<body>

<?php
/* 1. Crea una lista de personas conocidas y saludalas
   2. Crea una lista de paises y su abreviatura, por ejemplo ES=>España y según el pais, indicamos el idioma
    ES es de España y se habla español
    FR es Francia ...
    ES=>[pais=españa,idioma=español]
   3. Crea un array de mascotas e indica la raza
   4. Crea una cadena en mayuscula, del abecedario, luego transformala en un array, y recorrelo mostrando su indice y su valor de forma descendente
 */

    // Ejercicio 1
    $nombres=["Marina","Sandra","Pilar"];
    foreach ($nombres as $nombre) {
        echo "Hola $nombre<br>";
    }

    // Ejercicio 2
    $paises=["ES"=>["Pais"=>"España","Idioma"=>"Español"],
        "FR"=>["Pais"=>"Francia","Idioma"=>"Francés"],
        "ITA"=>["Pais"=>"Italia","Idioma"=>"Italiano"],
        "POR"=>["Pais"=>"Portugal","Idioma"=>"Portugués"]];

    foreach ($paises as $clave=>$valor){
        echo "<br>$clave";
        foreach ($valor as $clave2=>$valor2){
            if ($clave2 == "Pais"){
                echo " pertenece al pais $valor2";
            }else{
                echo " y se habla el idioma $valor2<br>";
            }
        }
    }


    // Ejercicio 3
    // la clave en este caso es tillo, y el valor seria gato
    $mascotas=["Tillo"=>"gato","Duque"=>"perro","Mina"=>"gato"];
    foreach ($mascotas as $clave=>$valor){
        echo "<br>$clave es un $valor<br>";
    }

    // Ejercicio 4
    $abecedario="A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
    $arraayAbecedario=explode(",",$abecedario);
    for ($i = count($arraayAbecedario)-1; $i >= 0; $i--) {
        echo "<br>El indice $i es la letra $arraayAbecedario[$i]" ;
    }

?>
</body>
</html>
<?php
