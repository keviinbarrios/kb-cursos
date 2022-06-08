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
                <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">categoria</label>
                            <select  class="form-control" name="category_id" id="category_id" placeholder="titulo del curso">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}"
                                         <?= $category->id == $course->category_id? "selected" : '' ?>
                                          >{{$category->name}}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title" value="{{$course->title}}" id="title"
                                placeholder="titulo del curso">
                        </div>
                        <div class="form-group">
                            <label for="featured">Imagen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="featured" class="custom-file-input" id="featured">
                                    <label class="custom-file-label" for="featured">Elegir archivo</label>
                                </div>
                                <img src="{{asset('images/uploads/courses/'.$course->featured)}}" alt="" width="120">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date-of-event">Fecha del curso</label>
                            <input type="date" name="date_of_course" value="{{$course->date_of_course}}" class="form-control" id="date-of-event">
                        </div>
                        <div class="form-group">
                            <label for="">Lugar del curso</label>
                            <input type="text" class="form-control" value="{{$course->place_of_course}}" name="place_of_course" id="place_of_course"
                                placeholder="lugar del curso">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" class="form-control" id="description" rows="3">{{$course->description}}</textarea>
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
