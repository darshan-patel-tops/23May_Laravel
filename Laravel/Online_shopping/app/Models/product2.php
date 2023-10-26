<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product2 extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','quantity','description','image','visible'];
}
