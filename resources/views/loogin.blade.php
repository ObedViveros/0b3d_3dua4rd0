<center><h1>Crear un usuario</h1>
<br>

<form action="{{route('valida')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="inuser" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="inuser" id="inuser" >
        </div>
        <br>
        <div class="mb-3">
            <label for="inpass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="inpass" id="inpass">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form></center>
    <head>
<style>
body {
      background-color:pink;       
}
</style>
</head>
</html>