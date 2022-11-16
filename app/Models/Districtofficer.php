<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districtofficer extends Model
{
    use HasFactory;

    protected $table = 'districtofficers';
    protected $fillable = [
        'name',
        'email',
        'province',
        'district',
        'password',
    ];

}
