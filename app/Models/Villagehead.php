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

    protected $table = 'villageheads';

    protected $fillable = [
        'name',
        'district',
        'chieftainship',
        'headmanship',
        'mutupo',
        'incumbent',
        'idnumber',
        'gender',
        'dateofbirth',
        'dateofappointment',
        'status',
        'contactnumber',
        'bankdetails',
        'numberofhousehold',
        'dateofdeathorremoval',
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
