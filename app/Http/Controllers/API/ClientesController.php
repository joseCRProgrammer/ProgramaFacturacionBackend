<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use App\Models\User;
use App\Models\Clientes;
use DB;
class ClientesController extends Controller
{
    public function getAllClientes()
    {
        return Clientes::where('eliminated_at',null)->get();
    }

    public function saveClientes(Request $request){
        return Clientes::create([
            'nombre' => $request['nombre'],
            'tipo' => $request['tipo'],
            'documento' => $request['documento'],
        ]);
    }

    public function deleteClientes(Request $request){
        $ldate = date('Y-m-d H:i:s');
        return Clientes::where('id',$request['id'])
        ->update(['eliminated_at'=> $ldate]);
    }

    
}
