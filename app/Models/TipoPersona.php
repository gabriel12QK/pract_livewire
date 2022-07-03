<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory;
    protected $table= 'tipo_personas';
    public $timestamps =false;
     public $fillable = ['tipo','estado'];
}
