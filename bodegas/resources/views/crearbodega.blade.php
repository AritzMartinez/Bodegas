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

    <div class="row mb-3"><input class=" btn btn-primary mr" type="button" value="Volver" name="Volver"
                                 OnClick="location.href='/bodegas'"></div>

    <form action="/bodegas" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Nombre:</label>
            <input class="form-control" type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="title">Localizacion:</label>
            <input class="form-control" type="text" id="localizacion" name="localizacion">
        </div>
        <div class="form-group">
            <label for="title">Telefono:</label>
            <input class="form-control" type="text" id="telefono" name="telefono">
        </div>
        <div class="form-group">
            <label for="title">Email:</label>
            <input class="form-control" type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="title">Persona de contacto:</label>
            <input class="form-control" type="text" id="persona_contacto" name="persona_contacto">
        </div>
        <div class="form-group">
            <label for="title">Año de fundacion:</label>
            <input class="form-control" type="text" id="ano_fundacion" name="ano_fundacion">
        </div>
        <div class="form-group">
            <label for="title">Restaurante:</label>
            <input class="form-control" type="text" id="restaurante" name="restaurante">
        </div>
        <div class="form-group">
            <label for="title">Hotel:</label>
            <input class="form-control" type="text" id="hotel" name="hotel">
        </div>
        <div class="row mb-3">
            <input class=" btn btn-primary mr" type="submit" value="Submit">
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
 * Date: 23/12/2019
 * Time: 17:50
 */
?>