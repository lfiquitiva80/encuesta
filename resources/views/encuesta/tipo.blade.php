@extends('layouts.app')

@section('content')


<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8">
      

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">TIPO DE TRABAJO</h3>
        </div>
        <div class="panel-body">

<table class="table table-bordered table-hover">
        
        <tbody>

            {!! Form::open(['route' => 'encuesta.create', 'method'=>'GET','id'=>'reg_form2']) !!}
            <tr>
                <td>
                   <div class="form-group">
                        
                        {!! Form::hidden('cedula', $cedula, []) !!}

                     {{ Form::radio('home', 'Home Office', ['class'=>'with-gap', 'checked']) }} <span>Home Office</span>
                     {{ Form::radio('home', 'Presencial', ['class'=>'with-gap']) }} <span>Presencial</span>

                   </div>
                   <div class="form-group">  
                     {!! Form::select('trabajo',[ ''=>'Seleccionar...','Presencial en Oficina '=>'Presencial en Oficina ', 'Exterior de la Oficina' =>'Exterior de la Oficina '],null,['class'=> 'tipo ocultar form-control','name'=>'trabajo' ,'id'=>'trabajo1','required'] )!!}

                 </div>
{{-- 
                 <div class="form-group">
                     {!!Form::text('transportes', null, ['class'=> 'form-control ocultar tipo','name'=>'transportes',       'placeholder'=>'Digite el medio de Transporte','id'=>'transportes']) !!} 
                </div> --}}
                <div class="form-group">
                <select name="transportes" placeholder="Digite el medio de Transporte" id="tranportes" class="form-control ocultar tipo" required>
                        <option value="">Seleccionar...</option>
                        
                        
                        <option value="Automóvil">Vehículo Propio</option>
                        <option value="Bicicleta">Bicicleta</option>
                       <option value="Camión">Camión</option>
                        <option value="Motocicleta">Motocicleta</option>
                        <option value="RutaEmpresa">Ruta de la empresa</option>
                        <option value="TransportePublico">Transporte público</option>
                        

                </select>
            </div>


                    {!! Form::submit('Enviar', ['class'=>'btn btn-success']) !!}
                    <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
                    

                </td>
            </tr>
        </tbody>
</table>

{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>


<script>
    
$(document).ready(function() {
  
 $('input:radio[name=home]').click(function () {

//alert('hola');
    $('.tipo').hide();

    var trabajo=$(this).val(); 
    if (trabajo=='Home Office') {
        $('.tipo').hide(); 
        $('.tipo').removeAttr("required");
       
    }else {
        $('.tipo').show();
        $('.tipo').addAttr("required"); 
    }

      });

});


</script>


@endsection