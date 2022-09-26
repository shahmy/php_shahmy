<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRep extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'tel',
        'joined_date',
        'current_route',
        'comments'
    ];


}
