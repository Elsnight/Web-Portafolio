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
        <div class="col-md-8">
            <div class="card">
            <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Creación de un Portafolio
                    <a href="{{route('portafolio')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">

                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Descripción</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Categoría</label>
                            <div class="col-sm-10">
                                <input type="text" name="categoria" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Imagen</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagen" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Vídeo</label>
                            <div class="col-sm-10">
                                <input type="text" name="video"  class="form-control form-control-sm" id="colFormLabelSm" placeholder="Ingrese información">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center bg-sucess fw-bold text-success div col-md-4">
            <img src="data:image/png;base64,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"
                alt="...">  
        </div>
        <br>
        <hr>
        <div class="card" style="width: 200rem;">
  <div class="card-body">
    <h5 class="card-title">Recuerda </h5>
    <h6 class="card-subtitle mb-2 text-muted">Sugerencia </h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Home </a>
    <a href="#" class="card-link">Servicios</a>
  </div>
</div>
    </div>
    <br>


    @endsection