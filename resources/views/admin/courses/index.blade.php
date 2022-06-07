@extends('adminlte::page')

@section('title', 'Admin Cursos')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Listado de Cursos <a href="{{route('admin.create')}}" class="btn btn-sm btn-primary">Crear</a>
                </div>
            </div>
            <div class="card-body">
                <table id="courses" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Fecha cursos</th>
                            <th>Lugar cursos</th>
                            <th>Status</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->title}}</td>
                            <td><img src="{{asset('images/uploads/courses/'.$course->featured)}}" alt="" width="120"> </td>
                            <td>{{$course->date_of_course}}</td>
                            <td>{{$course->place_of_course}}</td>
                            <td>{{$course->status}}</td>
                            <td>{{$course->category->name}}</td>
                             <td>
                                <a href="" class="btn btn-warning">Editar</a>
                                <a href="" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Fecha cursos</th>
                            <th>Lugar cursos</th>
                            <th>Status</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </tfoot>
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
    $('#courses').DataTable();
});
</script>
@stop