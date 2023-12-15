<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'phone',
        'email',
    ];
}
