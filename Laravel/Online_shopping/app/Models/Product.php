<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','image','tags','visible'=>'boolean','point'];
    protected $casts = ['tags'=>'json','description'=>'json','point'=>'json'];
}
