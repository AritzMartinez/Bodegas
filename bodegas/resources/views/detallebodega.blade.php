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
    <div class="row"><h1>Detalle de bodegas</h1></div>

    <div class="row mb-3">
        <input class=" btn btn-primary mr" type="button" value="Editar" name="Editar"
               OnClick="location.href='/edit/bodega/{{$bodegas->id}}?modo=Editar'">
        <input class=" btn btn-primary ml-3 " type="button" value="Borrar" name="Borrar"
               OnClick="location.href='/bodegas/{{$bodegas->id}}/delete'">
    </div>

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
        <form action="/update/bodega/{{$bodegas->id}}" method="get">
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text" value="{{$bodegas->nombre}}" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label>Direccion</label>
                <input class="form-control" type="text" value=" {{$bodegas->localizacion}}" id="localizacion"
                       name="localizacion">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" value=" {{$bodegas->email}}" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input class="form-control" type="text" value=" {{$bodegas->telefono}}" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label>Persona de contacto</label>
                <input class="form-control" type="text" value=" {{$bodegas->persona_contacto}}" id="persona_contacto"
                       name="persona_contacto">
            </div>
            <div class="form-group">
                <label>Año de fundacion</label>
                <input class="form-control" type="text" value=" {{$bodegas->ano_fundacion}}" id="ano_fundacion"
                       name="ano_fundacion">
            </div>
            <div class="form-group">
                <label>Restaurante</label><br>
                <input class="form-control" type="text" value=" {{$bodegas->restaurante}}" id="restaurante"
                       name="restaurante">
            </div>
            <div>
                <label>Hotel</label>
                <input class="form-control" type="text" value=" {{$bodegas->hotel}}" id="hotel" name="hotel">
            </div>
            <div class="row mb-3"><input class=" btn btn-primary mt-3" type="submit" name="guardar" value="Guardar">
            </div>
        </form>

    </div>

    <div class="row mb-3"><input class=" btn btn-primary mr" type="button" value="Añadir" name="Añadir"
                                 OnClick="location.href='/crear/vino/{{$bodegas->id}}'"></div>

    <table class="table" border="1">
        <thead class="thead-dark ">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Año</th>
            <th>Alcohol</th>
            <th>Tipo de vino</th>
            <th colspan="2">Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vinos as $vino)
            <tr>
                <td>{{$vino->nombre }}</td>
                <td>{{$vino->descripcion }}</td>
                <td>{{$vino->ano}}</td>
                <td>{{$vino->alcohol}}</td>
                <td>{{$vino->tipo}}</td>
                <td><a href="/vinos/{{$vino->id }}">Detalle</a></td>
                <td><a href="/vinos/{{$vino->id }}/delete">Borrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
 * Time: 12:18
 */
?>