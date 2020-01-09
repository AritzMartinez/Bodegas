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
<h1>Destalle de bodegas</h1>

<form action="/edit/{{$bodegas->id}}" method="get">
    <input type="submit" name="editar" value="Editar">
</form>
<form action="/bodegas/{{$bodegas->id}}/delete" method="get">
    <input type="submit" name="borrar" value="Borrar">
</form>
<div>
    <?php
    if (isset($_GET['editar'])) {
        echo "<p>
        <label>Direccion</label>
        <input type='text'  value='{$bodegas->localizacion}'  >
        </p>";
    }else{
        echo "<p>
        <label>Direccion</label>
        <input type='text'  value='{$bodegas->localizacion}' readonly>
        </p>";
    }

    ?>
    <p>
        <label>Nombre</label>
        <input type="text" value="{{$bodegas->nombre}} ">
    </p>
    <p>
        <label>Direccion</label>
        <input type="text"  value=" {{$bodegas->localizacion}}" >
    </p>
    <p>
        <label>Email</label>
        <input type="text" value=" {{$bodegas->email}}" >
    </p>
    <p>
        <label>Telefono</label>
        <input type="text" value=" {{$bodegas->telefono}}" >
    </p>
    <p>
        <label>Persona de contacto</label>
        <input type="text" value=" {{$bodegas->persona_contacto}}" >
    </p>
    <p>
        <label>Año de fundacion</label>
        <input type="text" value=" {{$bodegas->ano_fundacion}}" >
    </p>
    <p>
        <label>Restaurante</label>
        <input type="text" value=" {{$bodegas->restaurante}}" >
    </p>
    <p>
        <label>Hotel</label>
        <input type="text" value=" {{$bodegas->hotel}}" >
    </p>
</div>
<form action="/crear/vino/{{$bodegas->id}}" method="get">
    <input type="submit" name="añadir" value="Añadir">
</form>
<table class="table" border="1">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Año</th>
        <th>Alcohol</th>
        <th>Tipo de vino</th>
        <th>Accion</th>
        <th>Accion</th>

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
 * Date: 23/12/2019
 * Time: 12:18
 */
?>