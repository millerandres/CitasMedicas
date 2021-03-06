@extends('layouts.panel')

@section('content')
<div class="container col-md-8">
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nueva Especialidad</h3>
        </div>
        <div class="col text-right">
          <a href="{{url('specialties')}}" class="btn btn-sm btn-default">
          	Cancelar y volver
          </a>
        </div>
      </div>
    </div>
  
     <div class="card-body" >

        @if($errors->any())
        <ul> 
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach

        </ul>
        @endif

        <form action="{{url('specialties')}}" method="post">
          @csrf
     <div form-group>
       <label for="name">Nombre de la especialidad</label>
       <input type="" name="name" class="form-control" value="{{old('name')}}" >
     </div> 

      <div form-group>
       <label for="description">Descripcion</label>
       <input type="" name="description" class="form-control">
     </div> 
     <button type="submit" class="btn btn-primary">Guardar</button>
 </form>

     </div>

  


    </div>
  </div>
</div>
@endsection
