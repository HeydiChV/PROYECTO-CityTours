<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container">
        <h1>Lista Paquetes Turisticos</h1>
        
        <a type="button" href= "{{ route('registro.paquete') }}" class= "btn btn-primary">Registrar nuevo paquete turistico</a>

        @foreach($paquetes_turisticos as $paquete_turistico)
        <p>{{$paquete_turistico['nombre'] }} // {{$paquete_turistico['descripcion'] }} </p>


        @endforeach
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Descripción</th>
                    <th scope="col" class="text-center">Precio</th>
                    <th scope="col" class="text-center">Región ID</th>

                </tr>
            </thead>
            <tbody>
                @foreach($paquetes_turisticos as $paquete_turistico)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$paquete_turistico['nombre'] }}</td>
                    <td>{{$paquete_turistico['descripcion'] }}</td>
                    <td>{{$paquete_turistico['precio'] }}</td>
                    <td>{{$paquete_turistico['region_id'] }}</td>

                    <td class="d-flex" style="text-align:center">
                        <a href="{{ route('mostrar.paquete', $paquete_turistico['id']) }}" type="button" class="btn btn-success">Detalles</a>
                        <a href="{{ route('editar.paquete', $paquete_turistico['id']) }}" type="button" class="btn btn-primary">Editar</a>
                        <form action="{{route('eliminar.paquetes', $paquete_turistico ['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                    
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>