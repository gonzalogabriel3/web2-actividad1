
<!--
Actividad:

Crear un nuevo proyecto en PHP.
Crear un único archivo PHP que haga lo siguiente:

- reciba del request (GET) dos parámetros: un string y un booleano.
- declarar un arreglo de strings (ej. localidades).
- validar que los dos parámetros estén presentes. De lo contrario, mostrar una página de error.
- diseñar un frontend COMPLETO con su librería de preferencia. Deberá contener:
- encabezado: nombre de alumno, "ACTIVIDAD 1"
- pie de página: nombre de la cátedra, año, nombre de la Institución y logo.
- En el contenido: 
- mostrar el string ingresado, convertido a mayúsculas.
- dependiendo del valor del parámetro booleano, mostrar selectivamente dos bloques de código.
- armar un tag <select> en base a los valores del arreglo declarado previamente.

DESAFIO EXTRA: tomar un tercer parametro entero, y marcarlo como "selected" en el option.

-->
<?php
   
    $nombreRecibido=$_GET['nombre'];
    $mayor=$_GET['mayor'];
    //$numeroRecibido=$_GET['numero'];
    $ciudades=array("Rawson","Trelew","Madryn","Gaiman","Dolavon");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Actividad 1</title>
        <!--Css de Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--Mi estilo-->
        <link rel="stylesheet" href="css/estilo.css">
        
    </head>
    <body class="container">
        <header>
            <h2 class="cabecera">Gonzalo Cruzado - Actividad 1</h2>                  
        </header>
        
