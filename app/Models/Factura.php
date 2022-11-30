<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table='facturas';


       protected $fillable = [

           'id',

           'total',

           'subtotaldescuento',

           'subtotal',

           'descuentos',

           'iva',

           'aplicado10',

           'aplicado15',

           'productoseleccionado',

           'cliente',

           'year',

           'month',

           'created_at',

           'updated_at',

           'eliminated_at'


       ];
}
