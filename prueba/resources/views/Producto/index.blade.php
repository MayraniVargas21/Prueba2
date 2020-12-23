@extends('layouts.layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Productos</h3>
            </div>
            <div class="col text-right" style="margin-rigth: 50px">
                Nuevo producto
                <a href="#" class="btn btn-sm btn-circle btn-success" data-toggle="modal" data-target="#create" title="Agregar producto">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>

    <div class="table-responsive" style="margin-top: 20px">
        <div class="card-body">
        <!-- Projects table -->
        <table id="producto" class="table table-bordered table-flush align-items-center" style="width:100%">
        <thead class="thead-light">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Total</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($producto as $product)
            <tr>
                <td>
                    {{$product->id}}
                </td>
                <td>
                    {{$product->nombre}}
                </td>
                <td>
                    {{ $product->precio }}
                </td>
                <td>
                    {{ $product->stock }}
                </td>
                <td>
                    {{ $product->total }}
                </td>
                <td>
                    <a href="#" class="btn btn-circle btn-sm btn-primary" data-toggle="modal" data-target="#update" id="editbtn" title="Editar producto">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                <form action="{{action('ProductoController@destroy', $product->id)}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button class="btn btn-circle btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                  
                 </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="card-body">
        {{ $producto->links() }}
    </div>
    @endsection
        @include('Producto.new')
        @include('Producto.update')
    

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#producto').DataTable();
        } );
    </script>
