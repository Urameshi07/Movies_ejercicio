@extends('layouts.app')

@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>


<h1>Añadir Película</h1>

<form action="/create" method="POST" role="form">
    {{csrf_field()}}

    <div class="form-group">
        <label for="">ID</label>
            <input type="text" class="form-control" id="" placeholder="Escriba el id de la película">
    </div>   

    <div class="form-group">
        <label for="">Título</label>
            <input type="text" class="form-control" id="" placeholder="Escriba el título">
    </div>   
    <div class="form-group">
        <label for="">Director</label>
            <input type="text" class="form-control" id="" placeholder="Escriba el Director">
    </div>   
    <div class="form-group">
        <label for="">Duración</label>
            <input type="text" class="form-control" id="" placeholder="Duración en minutos">
    </div>  
    <br>
    <div class="form-group">
        <label for="">Portada</label>
        <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	        <input type="file" name="imagen" />
        </form>
    </div>  
        <br>
    <div class="form-group">
        <label for="">Clasificación</label>
            <input type="text" class="form-control" id="" placeholder="Género">
    </div>   
    <div class="form-group">
        <label for="">Inicio Estreno</label>
            <input type="text" class="form-control" id="fecha" name="Fecha1" placeholder="Fecha de estreno">
    </div>   
    <div class="form-group">
        <label for="">Fin exhibición</label>
            <input type="text" class="form-control" id="fecha" name="Fecha2" placeholder="Fecha de término">
    </div>   
    <div class="form-group">
        <label for="">Estatus</label>
            <input type="text" class="form-control" id="" placeholder="Actual o finalizado">
    </div>   
<br>
<div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LdRowwlAAAAAAWpmYvZ9gYQz5DvfyWNMKMFRApO" data-callback='onSubmit' data-action='submit'>
    </div>
</div>
    <button type="submit" class="btn btn-primary">Crear</button>

</form>

@stop