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
                <h1>Editar paquetes turisticos</h1>
                <form action="{{ route('actualizar.paquete', $paquete_turistico->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre" value="{{$paquete_turistico->nombre}}" id="exampleInputEmail1" aria-describedby="Nombres">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$paquete_turistico->descripcion}}" id="exampleInputEmail1" aria-describedby="Descripción">
                      </div>
                     
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" value="{{$$paquete_turistico->precio}}" id="exampleInputEmail1" aria-describedby="Precio">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Región_ID</label>
                        <input type="text" class="form-control" name="region_id" value="{{$$paquete_turistico->region_id}}" id="exampleInputEmail1" aria-describedby="Región_ID">
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