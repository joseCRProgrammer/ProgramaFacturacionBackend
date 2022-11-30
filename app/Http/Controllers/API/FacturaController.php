<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use App\Models\User;
use App\Models\Factura;
use DB;
class FacturaController extends Controller
{


    public function saveFactura(Request $request){
        return Factura::create([
            'total' => $request['total'],
            'subtotaldescuento' => $request['subtotaldescuento'],
            'subtotal' => $request['subtotal'],
            'descuentos' => $request['descuentos'],
            'iva' => $request['iva'],
            'aplicado10' => $request['aplicado10'],
            'aplicado15' => $request['aplicado15'],
            'productoseleccionado' => json_encode($request['productoseleccionado']),
            'cliente' => json_encode($request['cliente']),
            'year' => $request['year'],
            'month' => $request['month']
        ]);
    }

    public function obtainReportes(Request $request)
    {
        return  Factura::where('year',$request['year'])
                ->where('month',$request['month'])->get();           
    }

    
}
