@extends('layouts.base')

@section('banner')

@foreach ($courses as $course )
    
@endforeach
<div class="col-sm-12 col-md-10 banner-container text-center">
    <img src="/images/uploads/courses/{{$course->featured}}" class="img-fluid banner-image" alt="Banner principal">
    <div class="text-block">
        <h4 class="text-block-title">{{$course->title}}</h4>
        <p class="text-block-subtitle mb-2">{{$course->place_of_course}}</p>
        <a href="" class="btn btn-sm btn-primary-yellow rounded-12">Ver Detalle</a>
    </div>
</div>
@endsection

@section('content')
<main class="row justify-content-center">

    <div class="col-10 text-center text-white pt-5 pb-2">
        <h1>Cursos disponibles</h1>
    </div>

    <!-- Filtro -->
    <div class="d-flex justify-content-center">
        <div class="col-auto lead m-1">
            <span id="passwordHelpInline" class="form-text text-white fw-light">
                <i class="fas fa-filter"></i>
                Filtrar por categoría
            </span>
        </div>
        <div class="col-auto m-1">
            <select class="form-select">
                @foreach ($categories as $category)
                    <option>{{$category->name}}</option>
                @endforeach
                
                
            </select>
        </div>
    </div>

    <!-- Grid de eventos -->
    <div class="col-md-10 col-12 py-3">
        <div class="row justify-content-center events-grid">
            @foreach ( $courses as $course )
            <div class="col-md-4 col-sm-12 text-center event mb-4">
                <img src="/images/uploads/courses/{{$course->featured}}" class="img-fluid" alt="{{$course->title}}" style="width:100%; height:100%; object-fit: cover;">
                <div class="text-block">
                    <h4 class="text-block-title">{{$course->title}}</h4>
                    <p class="text-block-p mb-0 fw-400">{{$course->date_of_course}}</p>
                    <p class="text-block-p mb-0 fw-400">{{$course->place_of_course}}</p>
                    <a href="" class="btn btn-sm btn-primary-yellow rounded-12">Ver Detalle</a>
                </div>
            </div>
            @endforeach
            
            
            
</main>
@endsection