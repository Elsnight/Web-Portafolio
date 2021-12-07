@extends('layouts.app')

<style>
        .card{
            color : black;
            font-size: medium;	
        }
        .card{
            opacity: 80%;
            background: rgb(255,255,255);
            background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(130,195,255,1) 39%, rgba(184,209,242,1) 100%);
        }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    <h2>
                    Gestión de Portafolios
                    </h2>
                    <a href="{{route('create')}}" class="btn btn-primary btn-sm">Crear</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-body">
                <div class="card-body text-secondary">
                    @forelse ($portafolios as $portafolio)
                    <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
                    <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
                    <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
                    <h5 class="card-title">Imagen: {{ $portafolio->imagen }}</h5>
                    <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
                    <a href="{{route('show',$portafolio)}}" class="btn btn-primary btn-sm">Más información</a>
                    <hr>
                    
                    @empty
                    <p>No Existen proyectos</p>
                    
                    @endforelse
                    </div>
                </div>
            </div>
         </div>
    </div>
   
    </div>
</div> 
@endsection