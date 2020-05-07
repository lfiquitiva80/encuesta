
@extends('layouts.app')
@section('content')
{!! Form::close() !!}
{!! Form::hidden('CODCC', 99999, []) !!}
{!! Form::hidden('NOMBRECOSTOS', 'EXTERNO', []) !!}
			
			<h3 class="panel-title">Registro Externo</h3>
		1
		</div>
		<div class="panel-body">
		<div class="panel-heading">
	</div>
	</div>
	</div>
	</div>
	<div class="panel panel-primary">
	<label for="id">Apellidos</label>
	<label for="id">ARL</label>
	<label for="id">Cédula'7856U/
	<label for="id">Dirección</label>
	<label for="id">Email</label>
	<label for="id">Empresa</label>
	<label for="id">EPS</label>
	<label for="id">Fecha de Nacimiento</label>
	<label for="id">Género</label>
	<label for="id">Nombre</label>
	<label for="id">Téléfono:</label>
	{!! Form::date('FECNAC', null,['class' => 'form-control', 'placeholder' => 'FECNAC','name'=>'FECNAC', 'required']) !!}
	{!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email', 'required']) !!}
	{!! Form::select('SEXO',[ ''=>'Seleccione...','M'=>'Masculino', 'F' =>'Femenino'],null,['class'=> 'form-control','name'=>'SEXO', 'required'] )!!}
	{!! Form::text('APELLIDO', null,['class' => 'form-control', 'placeholder' => 'Digite los Apellidos','name'=>'APELLIDO', 'required']) !!}
	{!! Form::text('ARL', null,['class' => 'form-control', 'placeholder' => 'Digite la ARL','name'=>'ARL', 'required']) !!}
	{!! Form::text('CEDULA', null,['class' => 'form-control', 'placeholder' => 'Digite la Cédula','name'=>'CEDULA', 'required']) !!}
	{!! Form::text('DIRECCION', null,['class' => 'form-control', 'placeholder' => 'Digite la dirección','name'=>'DIRECCION', 'required']) !!}
	{!! Form::text('EMPRESA', null,['class' => 'form-control', 'placeholder' => 'Digite la empresa donde laborá','name'=>'EMPRESA']) !!}
	{!! Form::text('EPS', null,['class' => 'form-control', 'placeholder' => 'Digite la EPS','name'=>'EPS', 'required']) !!}
	{!! Form::text('NOMBRE', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'NOMBRE', 'required']) !!}
	{!! Form::text('TELEFONO', null,['class' => 'form-control', 'placeholder' => 'Digite el teléfono','name'=>'TELEFONO', 'required']) !!}
   
    
     
                                             
    </div> -->
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>
    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <label for="id">Centro de costos</label>
  <div class="col-md-8">
 <!--    <div class="form-group">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>     
<div class="container">
<div class="form-group" >
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="form-group">
<div class="row justify-content-center">
@endsection
