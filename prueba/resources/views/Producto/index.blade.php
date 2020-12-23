@extends('layouts.layout')
@section('content')
  
<div class="table-responsive">
        <div class="card-body">
        <!-- Projects table -->
        <table id="producto" class="table table-bordered table-flush align-items-center" style="width:100%">
        <thead class="thead-light">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th>Stock</th>
            <th>Total</th>
            <th>Editar</th>
            <th>Eliminar</th>
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
                    <a href="#" class="btn btn-circle btn-sm btn-primary" data-toggle="modal" data-target="#update" id="editbtn" title="Editar productlero">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href ="#" class="btn btn-circle btn-sm btn-danger"  data-toggle="modal" data-target="#delete" id="deletebtn" title="Eliminar productlero">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#producto').DataTable();
        } );
    </script>
