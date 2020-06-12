<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{

	// use Sluggable;

	public $table='categories';
    public $primaryKey='id';

    public $fillable = [
        'cat_name',   'cat_image', 'cat_status', 'slug',
    ];


    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'cat_name'
    //         ]
    //     ];
    // }


}
