@extends('adminlte::page')

@section('title', 'Admin Categorias')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Listado de Categorias <a href="{{route('admin.createCategory')}}" class="btn btn-sm btn-primary">Crear Nueva categoria</a>
                </div>
            </div>
            <div class="card-body">
                <table id="categories" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre de categorias</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                          
                             <td>
                                <a href="" class="btn btn-warning">Editar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                  {{--   <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Fecha cursos</th>
                            <th>Lugar cursos</th>
                            <th>Status</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function () {
    $('#categories').DataTable();
});
</script>
@stop