<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Gestion de vinos</h1>
<table class="table" border="1">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Año</th>
        <th>Alcohol</th>
        <th>Tipo de vino</th>

    </tr>
    </thead>
    <tbody>
    @foreach($vinos as $vino)
        <tr>
            <td>{{$vino->nombre }}</td>
            <td>{{$vino->descripcion }}</td>
            <td> {{$vino->ano}}</td>
            <td>{{$vino->alcohol}}</td>
            <td>{{$vino->tipo}}</td>
            <td><a href="/vinos/{{$vino->id }}">Detalle</a></td>
            <td><a href="/vinos/{{$vino->id }}/delete">Borrar</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: msimm
 * Date: 24/12/2019
 * Time: 10:45
 */
?>