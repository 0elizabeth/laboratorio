@extends('adminlte::page')
@section('title', 'Pacientes')
@section('content_header')
 <h1>Todos los pacientes registrados</h1>
 <a href="{{route('pacientes.create')}}">
  <button class="btn btn-primary">
   Nuevo paciente
  </button>
 </a>
@stop
@section('content')
 <p>Lista de pacientes dentro del sistema</p>
 <table class="table">
  <thead>
   <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>DNI</th>
    <th>genero</th>
    <th>Examenes</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($pacientes as $paciente)
    <tr>
     
    </tr>
   @endforeach
  </tbody>
 </table>
@stop