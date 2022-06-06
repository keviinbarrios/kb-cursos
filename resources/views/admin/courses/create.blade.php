@extends('adminlte::page')

@section('title', 'Admin Crear Cursos')

@section('content_header')
    <h1> Crear Cursos</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                   
                    <a href="{{route('admin.courses')}}" class="btn btn-info">Volver</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Título</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="titulo del curso">
                        </div>
                        <div class="form-group">
                            <label for="featured">Imagen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="featured" class="custom-file-input" id="featured">
                                    <label class="custom-file-label" for="featured">Elegir archivo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date-of-event">Fecha del curso</label>
                            <input type="date" name="date_of_course" class="form-control" id="date-of-event">
                        </div>
                        <div class="form-group">
                            <label for="">Lugar del curso</label>
                            <input type="text" class="form-control"name="place_of_course" id="place_of_course" placeholder="lugar del curso">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        </div>
                       {{--  <div class="form-group">
                            <label for="status">Estado</label>
                            <label type='bool' name="status" class="form-control" id="status" ></label>
                        </div> --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

