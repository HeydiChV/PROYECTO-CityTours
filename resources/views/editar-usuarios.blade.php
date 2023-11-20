<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Editar usuario</h1>
                
        <form action="{{ route('actualizar.usuario', $usuario->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="{{$usuario->nombre}}" id="exampleFormControlInput1" aria-describedby="Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" value="{{ $usuario->correo }}" id="exampleInputEmail1" aria-describedby="Correo">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="contrasena" value="{{ $usuario->contrasena }}" id="exampleInputEmail1" aria-describedby="Contraseña">
              </div>
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Es-admin</label>
                <input type="text" class="form-control" name="es_admin" value="{{ $usuario->es_admin }}" id="exampleInputEmail1" aria-describedby="Es_admin">
              </div>
              
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            </div>
            <div class="col-md-4"></div>
           
        </div>
        

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>