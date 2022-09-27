<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Chief extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'name',
        'district',
        'chieftainship',
        'mutupo',
        'incumbent',
        'idnumber',
        'ecnumber',
        'gender',
        'dateofbirth',
        'dateofappointment',
        'status',
        'contactnumber',
        'numberofheadman',
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
                'source' => 'name'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
