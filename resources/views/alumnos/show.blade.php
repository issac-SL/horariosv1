@extends("plantillas/plantilla2")

@section("contenido1")
   @include("alumnos/tablahtml") 
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>

<form action="{{route('alumnos.destroy',$alumno)}}" method="post">
  @csrf
   <div class="row mb-3">
     <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$alumno->nombre}}">
     </div>
   </div>
   <div class="row mb-3">
      <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidop" name="apellidop" disabled value="{{$alumno->apellidop}}">
      </div>
    </div>
    <div class="row mb-3">
      <label for="email" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email" disabled value="{{$alumno->email}}">
      </div>
    </div>
   <button type="submit" class="btn btn-primary">Confirma la eliminacion</button>
<a href="{{route('alumnos.index')}}" class="btn btn-primary">REGRESAR</a> 
</form>

@endsection
