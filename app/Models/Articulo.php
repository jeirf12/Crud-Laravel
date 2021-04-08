<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = "articulos";
	protected $primaryKey = 'id_articulo'; 
    protected $fillable = ['codigo', 'codigo_barras', 'descripcion','comentario','imagen','id_tipoarticulo','stock_minimo','stock_maximo','id_ubicacion','existencia','porcentaje_iva','valor_inicial','tar_1','peso'];
}
