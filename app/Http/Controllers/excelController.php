<?php

namespace App\Http\Controllers;

use App\Exports\encuestaExport;
use App\Exports\empleadosExport;
use App\Exports\consintomasExport;
use App\Exports\sinsintomasExport;
use App\Exports\conCovidExport;
use App\Exports\consultaencuestaExport;
use App\Exports\faltanReportarExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class excelController extends Controller
{
    
    public function encuestas(encuestaExport $encuestaExport)
    {
      return $encuestaExport;
    }

      public function empleados(empleadosExport $empleadosExport)
    {
      return $empleadosExport;
    }

       public function consintomas(consintomasExport $consintomasExport)
    {
      return $consintomasExport;
    }

          public function sinsintomas(sinsintomasExport $sinsintomasExport)
    {
      return $sinsintomasExport;
    }

            public function concovid(conCovidExport $conCovidExport)
    {
      return $conCovidExport;
    }

      public function faltanReportar(faltanReportarExport $faltanReportarExport)
    {
      return $faltanReportarExport;
    }

    public function consultaencuesta(Request $request){

        //dd($request->fecha);

      return new consultaencuestaExport($request->fecha);
    }
}


