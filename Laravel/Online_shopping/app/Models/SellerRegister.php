<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerRegister extends Model
{
    use HasFactory;
    protected $fillable = ['basic_details','documents'];

    protected $casts = [
        'basic_details' => 'json',
        'documents' => 'json',
    ];
}
