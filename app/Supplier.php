<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table='suppliers';
    public $primaryKey='id';

    public $fillable = [
        'sup_name',  'sup_phone', 'sup_email', 'sup_address',
    ];
}
