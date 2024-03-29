<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Editar Estudiantes</title>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Editar Estudiante') }} </h2>
        </x-slot>
        <div class="py-12">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            
              <div class="container mb-3">
    <form method="POST" action="{{ route('estudiantes.update', ['estudiante'=>$estudiante->id]) }}">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="id" class="form label">Id</label>
        <input type="text" class="form-input rounded focus:outline-none w-full bg-gray-100" 
        id="id" aria-describedby="idlHelp" name="id" disabled="disabled"
        value="{{$estudiante->id}}">
        <div id="idHelp" class="form-text">Id del estudiante</div>
      </div>    
        
    <div class="mb-3">
        <label for="nombre" class="form label">Nombre</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" 
        id="nombre" aria-describedby="nombreHelp"
        name="nombre" value="{{$estudiante->Nombre}}">
      </div>

      <div class="mb-3">
        <label for="apellido" class="form label">Apellido</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" 
        id="apellido" aria-describedby="apellidoHelp"
        name="apellido" value="{{$estudiante->apellido}}">
      </div>

      <div class="mb-3">
        <label for="cedula" class="form label">Cedula</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" 
        id="cedula" aria-describedby="cedulaHelp"
        name="cedula" value="{{$estudiante->cedula}}">
      </div>

      <div class="mb-2">
        <label for="email" class="form label">E-mail</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" 
        id="email" aria-describedby="emailHelp"
        name="email" value="{{$estudiante->email}}">
      </div>

      <div class="mb-2">
        <label for="telefono" class="form label">Telefono</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" 
        id="telefono" aria-describedby="telefonoHelp"
        name="telefono" value="{{$estudiante->telefono}}">
      </div>

      <label for="carrera">Carrera:</label>
      <select class="form-select w-60 rounded-md focus:outline-none" 
      id="carreraid" name="carreraid" required>
        <option selected disabled value="">Elija una carrera...</option>
        @foreach ($carreras as $carrera)
        @if ($carrera->id ==$estudiante->carreraid)
        <option selected value="{{$carrera->id}}">{{$carrera->nombre}}</option>
        @else
       <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
          
      @endif
      @endforeach
      </select>
        <div class="mt-3">
        <button type="submit" class="btn btn-info" > Actualizar</button>
          <a href="{{route('estudiantes.index')}}" class="btn btn-warning">Cancelar</a>        
      </div>      
    </form>
  
  <!------>
</div> 
</div>  
</div>  
  </x-app-layout>
  </body>
</html>