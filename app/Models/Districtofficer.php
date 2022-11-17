<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Districtofficer extends Model
{
    use HasFactory;
      use Sluggable;

    protected $table = 'districtofficers';
    protected $fillable = [
        'name',
        'email',
        'province',
        'district',
        'password',
        'slug'
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
