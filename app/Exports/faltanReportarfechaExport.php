<?php

namespace App\Exports;

use App\encuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;



class faltanReportarfechaExport implements FromCollection,ShouldQueue,Responsable,WithHeadings
{

    use Exportable;



    private $fileName = 'faltanReportarfecha.xlsx';


      public function __construct($fecha) 
    {
        $this->fecha = $fecha;
      
    }


    //$ayer=Carbon::yesterday();
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

         return $index = \DB::table('empleados')
                
                ->leftjoin('empleados', 'encuesta.empleados_id', '=', 'empleados.ID')
                ->where('empleados.Diligenciar','1' )    
                ->where('encuesta.created_at','LIKE','%'.$this->fecha.'%')  
                ->get();    

                
        		

        
    }

       public function headings(): array
    {
        return [
        
        'CEDULA',
        'NOMBRE',
        'APELLIDO',
        'EMPRESA',
        'CARGO',
        'DIRECCION',
        'TELEFONO',
        'CODCC',
        'NOMBRECOSTOS'
        
            
        ];
    }
}
