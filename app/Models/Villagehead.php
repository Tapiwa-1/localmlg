<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villagehead extends Model
{
    use HasFactory;
    use Sluggable;
    use HasFactory;

    protected $guarded = []; //if empty allows all fields to be filled

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'incumbent'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
