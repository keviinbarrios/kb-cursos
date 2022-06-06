@extends('adminlte::page')

@section('title', 'Admin Crear Categorias')

@section('content_header')
    <h1>Editar categorias</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    
                    <a href="{{route('admin.categories')}}" class="btn btn-info">Volver</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.updateCategory',$category->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de categoria</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="ingrese nombre de la categoria">
                        </div>
                      
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