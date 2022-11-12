<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headman extends Model
{
    use HasFactory;
    use Sluggable;
    use HasFactory;

    protected $table = 'headmans';

    protected $fillable = [
        'province',
        'district',
        'chieftainship',
        'headmanship',
        'mutupo',
        'incumbent',
        'idnumber',
        'ecnumber',
        'gender',
        'dateofbirth',
        'dateofappointment',
        'status',
        'contactnumber',
        'numberofhousehold',
        'numberofwards',
        'numberofvillages',
        'dateofdeathorremoval',
        'physicalladdress',
        'slug',
    ];

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
