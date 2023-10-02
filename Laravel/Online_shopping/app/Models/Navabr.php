<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navabr extends Model
{
    use HasFactory;
    protected $fillable = ['navbar','url','sub_navbar'];

    protected $casts = [
        'sub_navbar' => 'json',
    ];
}
