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
    <div class="row"><h1>Insertar bodega</h1></div>


    <form action="/store/vino/{{$id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Nombre:</label>
            <input class="form-control" type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="title">Descripcion:</label>
            <input class="form-control" type="text" id="descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="title">Año:</label>
            <input class="form-control" type="text" id="ano" name="ano">
        </div>
        <div class="form-group">
            <label for="title">Alcohol:</label>
            <input class="form-control" type="text" id="alcohol" name="alcohol">
        </div>
        <div class="form-group">
            <label for="title">Tipo:</label>
            <input class="form-control" type="text" id="tipo" name="tipo">
        </div>
        <div class="row mb-3">
            <input class=" btn btn-primary mr" type="submit" value="Guardar">
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
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: msimm
 * Date: 24/12/2019
 * Time: 11:56
 */
?>