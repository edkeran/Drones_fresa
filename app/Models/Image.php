<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
}
Schema::create('tareas',function (Blueprint $table){
    $table->string('path');
});

class image extends Model
{
    protected $fillable =['path'];
    public function getUrlPathAttribute(){
        return\Storage::url($this->path);
    }
}