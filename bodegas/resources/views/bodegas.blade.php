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

<div class="container col-11">
    <div class="row"><h1>Gestion de bodegas</h1></div>
    <div class="row mb-3"><input class=" btn btn-primary mr" type="button" value="Añadir" name="Añadir"
                                 OnClick="location.href='/crear/bodega'"></div>
    <div class="row">
        <table class="table " border="1">
            <thead class="thead-dark ">
            <tr>
                <th>Nombre</th>
                <th>Localizacion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th colspan="2">Acciones</th>

            </tr>
            </thead>
            <tbody>
            @foreach($bodegas as $bodega)
                <tr>
                    <td>{{$bodega->nombre }}</td>
                    <td>{{$bodega->localizacion }}</td>
                    <td> {{$bodega->telefono}}</td>
                    <td>{{$bodega->email}}</td>
                    <td><a href="/bodegas/{{$bodega->id }}">Detalle</a>
                        <a href="/bodegas/{{$bodega->id }}/delete">Borrar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
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
 * Date: 22/12/2019
 * Time: 17:40
 */
?>