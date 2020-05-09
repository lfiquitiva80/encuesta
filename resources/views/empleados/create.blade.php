@extends('layouts.app')
@section('content')


<div class="container">

	<div class="row justify-content-center">
		  <div class="col-md-8">
	<div class="panel-body">
		<div class="panel-heading">
{!! Form::open(['route' => 'empleados.store', 'method'=>'POST','id'=>'reg_form2']) !!}


{!! Form::hidden('CODCC', 99999, []) !!}
{!! Form::hidden('NOMBRECOSTOS', 'EXTERNO', []) !!}
			
			<h3 class="panel-title">Registro Externo</h3>
		


	<div class="panel panel-primary">

	
	<div class="form-group">
	<label for="id">Cédula</label>
	{!! Form::text('CEDULA', null,['class' => 'form-control', 'placeholder' => 'Digite la Cédula','name'=>'CEDULA', 'required']) !!}
	</div>

	<div class="form-group">
	<label for="id">Nombre: </label>
	{!! Form::text('NOMBRE', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'NOMBRE', 'required']) !!}
	</div>

	<div class="form-group">
	<label for="id">Apellido: </label>
	{!! Form::text('APELLIDO', null,['class' => 'form-control', 'placeholder' => 'Digite los Apellidos','name'=>'APELLIDO', 'required']) !!}
	</div>

		<div class="form-group">
	<label for="id">Teléfono: </label>
	{!! Form::text('TELEFONO', null,['class' => 'form-control', 'placeholder' => 'Digite el teléfono','name'=>'TELEFONO', 'required']) !!}
	</div>

			<div class="form-group">
	<label for="id">Dirección: </label>
	{!! Form::text('DIRECCION', null,['class' => 'form-control', 'placeholder' => 'Digite la dirección','name'=>'DIRECCION', 'required']) !!}
	</div>

				<div class="form-group">
	<label for="id">Fecha de Nacimiento: </label>
	{!! Form::date('FECNAC', null,['class' => 'form-control', 'placeholder' => 'FECNAC','name'=>'FECNAC', 'required']) !!}
	</div>

				<div class="form-group">
	<label for="id">Empresa donde laborá: </label>
	{!! Form::text('EMPRESA', null,['class' => 'form-control', 'placeholder' => 'Digite la empresa donde laborá','name'=>'EMPRESA']) !!}

	</div>


				<div class="form-group">
	<label for="id">Correo Electrónico: </label>
	{!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email', 'required']) !!}

	</div>

				<div class="form-group">
	<label for="id">Género: </label>
	{!! Form::select('SEXO',[ ''=>'Seleccione...','M'=>'Masculino', 'F' =>'Femenino'],null,['class'=> 'form-control','name'=>'SEXO', 'required'] )!!}
	</div>

					<div class="form-group">
	<label for="id">ARL: </label>
	{!! Form::text('ARL', null,['class' => 'form-control', 'placeholder' => 'Digite la ARL','name'=>'ARL', 'required']) !!}
	</div>

	<div class="form-group">
	<label for="id">EPS: </label>
	{!! Form::text('EPS', null,['class' => 'form-control', 'placeholder' => 'Digite la EPS','name'=>'EPS', 'required']) !!}
	</div>

	<div class="form-group">
	<label for="id">Persona que tiene contacto de la empresa: </label>
	{!! Form::text('contactoempresa', null,['class' => 'form-control', 'placeholder' => 'Digite la persona que va a tener el contacto dentro de la empresa','name'=>'contactoempresa', 'required']) !!}
	</div>

   
    <center><button type="submit" class="btn btn-block btn-primary" >Enviar</button>
	
	</div>
	</div>
	</div>
	</div>
	
	
	
	
	
	
	
   
    
     
                                             
 
 
    


  	{!! Form::close() !!}

@endsection
