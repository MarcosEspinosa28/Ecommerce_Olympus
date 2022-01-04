<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = 'clasificaciones';

    protected $fillable = [

        'clasificacion'
    ];

    public function productos(){

        return $this->hasMany(Productos::class,'id');
    }
}
