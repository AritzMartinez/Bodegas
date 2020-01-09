<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container col-8">
    <h1>Destalle de bodegas</h1>

    <div class="row mb-3">
        <input class=" btn btn-primary mr" type="button" value="Editar" name="Editar"
               OnClick="location.href='/edit/{{$vinos->id}}?modo=Editar'">
    </div>

    <form action="/update/{{$vinos->id}}" method="get">
        <div id="datos">
            <?php
            if (!isset($_GET['modo'])) {
                echo "
        <style>
        #datos{
        pointer-events: none;
        }
        </style>";
            }
            ?>
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text" value=" {{$vinos->nombre}}" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <input class="form-control" type="text" value=" {{$vinos->descripcion}}" id="descripcion"
                       name="descripcion">
            </div>
            <div class="form-group">
                <label>Año</label>
                <input class="form-control" type="text" value=" {{$vinos->ano}}" id="ano" name="ano">
            </div>
            <div class="form-group">
                <label>Alcohol</label>
                <input class="form-control" type="text" value=" {{$vinos->alcohol}}" id="alcohol" name="alcohol">
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <input class="form-control" type="text" value=" {{$vinos->tipo}}" id="tipo" name="tipo">
            </div>
            <div class="row mb-3"><input class=" btn btn-primary mt-3" type="submit" name="guardar" value="Guardar">
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: msimm
 * Date: 24/12/2019
 * Time: 13:37
 */
?>