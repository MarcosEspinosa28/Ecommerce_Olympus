<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = 'productos';

    protected $fillable = [

        'nombre_producto', 'imagen', 'color','categoria_id', 'clasificacion_id',
        'valor', 'cantidad','created_at','updated_at'];

    public function Clasificacion()
    {
        return $this->belongsTo(Clasificaciones::class, 'clasificacion_id');
    }

    public function Categoria()
    {

        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
}
