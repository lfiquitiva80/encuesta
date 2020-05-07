
@extends('layouts.app')

@section('content')

    </head>
    <body>


                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

                <div class="card-body">

                       <center><img src="{{asset('img/Duquesa.png')}}" alt="" > <img src="{{asset('img/palmar.jpg')}}" width="50%" height="50%" alt="" class="glyphicon-align-left"> </center>
                {!! Form::open(['route' => 'tipotrabajo', 'method'=>'GET','id'=>'fom1']) !!}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Cédula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control @error('name') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" autocomplete="cedula" autofocus placeholder="Digite la cédula">

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>
                                <div class="icheck-primary">
                                  <input type="checkbox" id="remember" required>
                                  <label for="remember">
                                    He leído y acepto los términos y condiciones de uso de la información Política de Protección Base de Datos<p>
                                   <img src="{{asset('img/pdf.svg')}}" alt="Política" width="8%" height="8%"><a href="{{asset('pdf/GAD-PO-01 Politica de Proteccion Base de Datos V2.pdf')}}" title="">   Política de Protección Base de Datos.pdf</a>  
                                  </label>
                                </div>
                                
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    Realizar encuesta
                                </button>
                            </div>

                            
                        </div>

                        <center><div class="links">
                    <a href="http://www.duquesa.com.co/">Duquesa</a>
                    <a href="http://palmar.com.co/">Palmeras</a>
                    <a href="http://www.duquesa.com.co/">Riveros</a>
                 
                </div></center>


                
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>



                    
                </div>

                <
            </div>
        </div>
    </body>
</html>


@endsection