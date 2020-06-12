<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class SubCategory extends Model
{

	// use Sluggable;

	public $table='sub_categories';
    public $primaryKey='id';

    public $fillable = [
        'sub_name', 'under_cat',  'sub_image', 'sub_status', 'slug',
    ];


    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'sub_name'
    //         ]
    //     ];
    // }


}
