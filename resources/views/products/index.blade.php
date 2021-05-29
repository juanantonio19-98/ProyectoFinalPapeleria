@extends('layouts.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <title>Papeleria Lili</title>
<style>
  
  
</style>

</head>
<body class="fondo">
<h5>Productos en tienda</h5>


@forelse($products as $product)
  <div class="container">
    <div class="clearfix">
        
        
        <br>
    </div>

    <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Productos</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Productos/Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Disponibilidad</th>
                    <th>Categoria</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      <br>
                       <h4>{{ $product->name }}  </h4>
                    </td>
                    <td>({{ $product->brand }})</td>
                    <td><h1>  ${{ $product->price }} </h1></td>
                    <td>
                    <p> {{ $product->description }} </p> 
                    </td>
                    <td>
                    <h2>{{ $product->availability }} </h2>
                    </td>
                    <td><h3>{{ $product->category }} </h3></td>
                    <td><input type="submit" value="Comprar"></td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
@empty
    <div><h3>NO HAY REGISTROS DE PRODUCTOS EN LA BD</h3></div>
@endforelse    
{{ $products->links() }}
</body>
<footer>
  Derechos Reservados <div>Iconos diseñados por <a href="https://www.flaticon.es/autores/catkuro" title="catkuro">catkuro</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div> 
</footer>

</html>

@endsection