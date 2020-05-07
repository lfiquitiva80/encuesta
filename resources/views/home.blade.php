@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Reportes en excel</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/encuestas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel de Encuestas</a></li>

               <li class="list-group-item"><a href="{{ url('/sinsintomas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel de Encuestas sin Sintomas</a></li>


                           <li class="list-group-item"><a href="{{ url('/concovid/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel de Encuestas con Covid Confirmado</a></li>

                 <li class="list-group-item"><a href="{{ url('/consintomas/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel de Encuestas Con Sintomas</a></li>

                             <li class="list-group-item"><a href="{{ url('faltanReportar/export/')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel Faltan por reportar</a></li>


            <li class="list-group-item"><a href="{{ url('/trabajadores/export')}}"><svg class="bi bi-file-spreadsheet" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 6H3V5h10v1zm0 3H3V8h10v1zm0 3H3v-1h10v1z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M5 14V6h1v8H5zm4 0V6h1v8H9z" clip-rule="evenodd"/>
            </svg> Excel de Trabajadores</a></li>
            <li class="list-group-item"><a href="{{ url('/')}}"><svg class="bi bi-building" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M15.285.089A.5.5 0 0115.5.5v15a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5V14h-1v1.5a.5.5 0 01-.5.5H1a.5.5 0 01-.5-.5v-6a.5.5 0 01.418-.493l5.582-.93V3.5a.5.5 0 01.324-.468l8-3a.5.5 0 01.46.057zM7.5 3.846V8.5a.5.5 0 01-.418.493l-5.582.93V15h8v-1.5a.5.5 0 01.5-.5h2a.5.5 0 01.5.5V15h2V1.222l-7 2.624z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M6.5 15.5v-7h1v7h-1z" clip-rule="evenodd"/>
              <path d="M2.5 11h1v1h-1v-1zm2 0h1v1h-1v-1zm-2 2h1v1h-1v-1zm2 0h1v1h-1v-1zm6-10h1v1h-1V3zm2 0h1v1h-1V3zm-4 2h1v1h-1V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm-2 2h1v1h-1V7zm2 0h1v1h-1V7zm-4 0h1v1h-1V7zm0 2h1v1h-1V9zm2 0h1v1h-1V9zm2 0h1v1h-1V9zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1z"/>
            </svg> Registrar por cédula</a></li>



          </ul>

<p>
  <p>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Encuestas por Fecha</h3>
      </div>
      <div class="panel-body">
        {!! Form::open(['route' => 'consultaencuesta', 'method'=>'GET', 'Class'=>'  ']) !!}


            {!! Form::date('fecha', \Illuminate\Support\Carbon::now(), ['class' => 'form-control','name'=>'fecha','required']) !!}


            
          <br>
        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Consultar</button>



        {!! Form::close() !!}



      </div>
    </div>

  <hr>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>FECHA</th>
          <th>REGISTROS</th>
          <th>EMPRESA</th>
          <th>CUMPLIMIENTO</th>
        </tr>
      </thead>
      <tbody>
        @foreach($query as $row)
        <tr>
          <td>{{$row->fecha}}</td>
          <td>{{$row->CONTAR}}</td>
          <td>{{$row->EMPRESA}}</td>
          <td>@php
            $var1=($row->CONTAR/$row->EMPRESA)*100;
            echo $english_format_number = number_format($var1, 2, '.', '')."%";

           @endphp   </td>
        </tr>

        @endforeach
      </tbody>
    </table>

              
              
        </div>





      </div>  
    </div>
  </div>
</div>



@endsection
