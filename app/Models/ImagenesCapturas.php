<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenesCapturas extends Model
{
    use HasFactory;
    
    protected $table = "imagen_captura";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'nombre_imagen', 'ruta_imagen', 'nombre_server_imagen','extension'
    ];
}
