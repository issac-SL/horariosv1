@extends("plantillas/plantilla2")

@section("contenido1")
   @include("alumnos2/tablahtml") 
@endsection

@section("contenido2")

<ul>
  @foreach ($errors->all() as $error )
    <li>
      {{$error}}
    </li>
  @endforeach
</ul>

@if ($accion=='C')
<h1>Insertando frm</h1>
<form action="{{route('alumnos.store')}}" method="POST">

  @elseif ($accion=='E')
  <h1>Editando frm</h1>
 <form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
  
  @elseif ($accion == "D")
  <h1>Eliminar frm</h1>
  <form action="{{route('alumnos.destroy',$alumno)}}" method="post">
  @endif
  
  @csrf
   <div class="row mb-3">
     <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="nombre" name="nombre" value={{old('nombre', $alumno->nombre)}}>
      @error('nombre')
       <p class="text-danger">Error en: {{$message}}</p> 
      @enderror
      </div>
   </div>
   <div class="row mb-3">
      <label for="apellidop" class="col-sm-3 col-form-label">Apellido Paterno</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="apellidop" name="apellidop"value={{old('apellidop', $alumno->apellidop)}}>
      </div>
    </div>
    @error('apellidop')
    <p class="text-danger">Error en: {{$message}}</p> 
   @enderror
    <div class="row mb-3">
      <label for="email" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email" value={{old('email', $alumno->email)}}>
      </div>
    </div>
    @error('email')
    <p class="text-danger">Error en: {{$message}}</p> 
   @enderror
   <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
 </form>

@endsection
