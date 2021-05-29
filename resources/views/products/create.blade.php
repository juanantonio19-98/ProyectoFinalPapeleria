@extends('layouts.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria lili | Creación </title>

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</head>
<body>
<h3>Agregar un producto nuevo</h3>
<form class="row g-3" method="post" action="{{ route('product.store') }}">

    @csrf

    <div class="col-md-6">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="" class="form-control" required maxlength="100">
    </div>
    <br>
    <div class="col-md-6">
        <label for="" class="form-label" >Marca</label>
        <input type="text" name="brand" class="form-control" id="" required maxlength="100">
    </div>
    <br>
    <div class="col-md-6">
        <label for="" class="form-label">Precio</label>
        <input type="text" name="price" id="" class="form-control" required>
    </div>
    <br>
    <div class="col-md-6">
        <label for="" class="form-label">Descripción</label>
        <!--<input type="text" name="description" required>-->
        <textarea name="description" id="" class="form-control" cols="30" rows="5" required></textarea>
    </div>

    <div class="col-md-4">
        <label for="" class="form-label">Disponibilidad</label>
        <select class="form-select" name="availability" id="" required>
            <option value="">Seleccione una opción</option>
            <option value="1">Disponible</option>
            <option value="0">No disponible</option>
        </select>
    </div>
    <br>
    <div class="col-md-6">
    <label class="form-label" for="">Categoria</label>
    <select class="form-select" name="category" id="" required>
        <option value="">Seleccione una opción</option>
        <option value="Oficina">Oficina</option>
        <option value="Libretas">Libretas</option>
        <option value="Electronica">Electronica</option>
        <option value="Libreria">Libreria</option>
        <option value="Accesorios">Accesorios</option>
        <option value="Material">Material didactico</option>
        <option value="Decoracion">Decoración</option>
        <option value="Otros">Otros servicios</option>
    </select>
    </div>
     
     <input type="submit" value="Guardar">
</form>
<!-- css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>    
</body>
</html>
@endsection
