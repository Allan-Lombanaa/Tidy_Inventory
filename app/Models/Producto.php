<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_producto_cb';
    use HasFactory;
    public $timestamps = false;
}
