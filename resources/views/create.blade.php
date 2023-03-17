@extends('layouts.app')

@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>
<link rel="icon" href="{{asset('img/icon-60x60.png')}}">

<h1>Añadir Película</h1>

<form action="/tasks" method="POST" role="form">
    {{csrf_field()}}

    <div class="form-group">
        <label for="">ID</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Escriba el id de la película" enctype=multipart/form-data>
    </div>   

    <div class="form-group">
        <label for="">Título</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Escriba el título" enctype=multipart/form-data>
    </div>   
    <div class="form-group">
        <label for="">Director</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Escriba el Director" enctype=multipart/form-data>
    </div>   
    <div class="form-group">
        <label for="">Duración</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Duración en minutos" enctype=multipart/form-data>
    </div>  
    <br>
    <div class="form-group">
        <label for="">Portada</label>
        <form name="subida-imagenes" type="POST" id="uniqueID" enctype="multipart/formdata" enctype=multipart/form-data>
	        <input type="file" name="imagen" />
        </form>
    </div>  
        <br>
    <div class="form-group">
        <label for="">Clasificación</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Género" enctype=multipart/form-data>
    </div>   
    <div class="form-group">
        <label for="">Inicio Estreno</label>
            <input type="text" class="form-control" id="uniqueID" name="Fecha1" placeholder="Fecha de estreno" enctype=multipart/form-data>
    </div>   
    <div class="form-group">
        <label for="">Fin exhibición</label>
            <input type="text" class="form-control" id="uniqueID" name="Fecha2" placeholder="Fecha de término" enctype=multipart/form-data>
    </div>   
    <div class="form-group">
        <label for="">Estatus</label>
            <input type="text" class="form-control" id="" placeholder="Actual o finalizado" enctype=multipart/form-data>
    </div>   
<br>
<div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LdRowwlAAAAAAWpmYvZ9gYQz5DvfyWNMKMFRApO" data-callback='onSubmit' data-action='submit'>
    </div>
</div>
    <button type="submit" class="btn btn-primary">Crear</button>

</form>

@stop