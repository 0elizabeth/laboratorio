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
    <th>Telefono</th>
    <th>Dirección</th>
    <th>Edad</th>
    <th>genero</th>
    <th>Examenes</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($pacientes as $paciente)
    <tr>
     <td>{{$paciente->nombre}}</td>
     <td>{{$paciente->apellido}}</td>
     <td>{{$paciente->dni}}</td>
     <td>{{$paciente->telefono}}</td>
     <td>{{$paciente->direccion}}</td>
     <td>{{$paciente->edad}}</td>
     <td>{{$paciente->genero}}</td>
     <td>{{$paciente->examene}}</td>
    </tr>
   @endforeach
  </tbody>
 </table>
@stop