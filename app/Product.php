<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Product extends Model
{
    public $table='products';
    public $primaryKey='id';
   
    protected $fillable = [
        'pro_name',   'purchase_price', 'price', 'sell_price', 'q_type', 'quantity', 'sup_name', 'email', 'payment',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'pro_name'
            ]
        ];
    }
}