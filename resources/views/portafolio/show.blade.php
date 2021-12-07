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
                    Detalle del Portafolio
                    <a href="{{route('portafolio')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <h5 class="card-title">Nombre: {{ $portafolio->nombre }}</h5>
    <h5 class="card-title">Descripción: {{ $portafolio->descripcion }}</h5>
    <h5 class="card-title">Categoría: {{ $portafolio->categoria }}</h5>
    <h5 class="card-title">Imagen: {{ $portafolio->imagen }}</h5>
    <h5 class="card-title">Vídeo: {{ $portafolio->url }}</h5>
    <a href="{{route('edit',$portafolio)}}" class="btn btn-success btn-sm" >Actualizar</a>
    <form action="{{route('destroy',$portafolio)}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">Eliminar</button>
        <script type="text/javascript">
            function confirmation()
            {
               if(confirm("¿Estás seguro de eliminar el registro?"))
           {
              return true;
           }
           else
           {
              return false;
           }
            }
           </script>
    </form>
    <hr>
 @endsection