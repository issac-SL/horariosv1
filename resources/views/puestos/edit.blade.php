@extends("plantillas/plantilla2")

@section("contenido1")
   @include("puestos/tablahtml") 
@endsection

@section("contenido2")
<h1>Editando</h1>

<form action="{{route('puestos.update',$puesto->id)}}" method="POST">
  @csrf
   <div class="row mb-3">
     <label for="nombre" class="col-sm-3 col-form-label">Id Puesto</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="idpuesto" name="idpuesto" value="{{$puesto->idpuesto}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="apellidop" class="col-sm-3 col-form-label">Nombre Puesto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto" value="{{$puesto->nmbrePuesto}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="email" class="col-sm-3 col-form-label">Tipo</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="tipo" name="tipo" value="{{$puesto->tipo}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Grabar</button>
 </form>

@endsection