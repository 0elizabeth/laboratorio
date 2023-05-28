@extends('adminlte::page')
@section('title', 'Nuevo paciente')
@section('content_header')
 <h1>Datos del paciente</h1>
@stop
@section('content')
 {!! Form::open(['route'=>'pacientes.store','method'=>'post']) !!}
  <div class="row">
   <div class="col-sm-12">
    <div class="card">
     <div class="card-hader">
       <h5>Datos principales</h5>
     </div>
     <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Nombre</label>
          {!! Form::text('nombre', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Apellido</label>
          {!! Form::text('apellido', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">DNI</label>
          {!! Form::text('dni', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Telefono</label>
          {!! Form::text('telefono', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Dirección</label>
          {!! Form::text('direccion', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Edad</label>
          {!! Form::number('edad', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <label for="" class="form-label">Genero</label>
          {!! Form::text('genero', null, ['class'=>'form-control']) !!}
        </div>
      </div>
      </div>
     </div>
     <div class="card-footer">
      <button class="btn btn-success" type="submit"><i class="fas fa-upload"></i> Guardar</button>
      <button data-dismiss="modal" class="btn btn-success"><i class="fas fa-ban"></i> Cancelar</button>                                </div>
     </div>
    </div>
   </div>
  </div>
 {!! Form::close() !!}
@stop