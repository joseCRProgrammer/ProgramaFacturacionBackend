<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use App\Models\User;
use App\Models\Productos;
use DB;
class ProductosController extends Controller
{
    public function getAllProductos()
    {
        return Productos::where('eliminated_at',null)->get();
    }

    public function saveProductos(Request $request){
        return Productos::create([
            'descripcion' => $request['descripcion'],
            'valor' => $request['valor'],
        ]);
    }

    public function deleteProductos(Request $request){
        $ldate = date('Y-m-d H:i:s');
        return Productos::where('id',$request['id'])
        ->update(['eliminated_at'=> $ldate]);
    }

    
}
