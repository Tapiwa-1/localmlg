<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincial extends Model
{
    use HasFactory;

    public function district()
    {
        $this->belongsTo(District::class);
    }
}
