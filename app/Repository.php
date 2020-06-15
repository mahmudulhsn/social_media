<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    public $table='repository';
    public $primaryKey='id';

    protected $fillable = [
        'title',   'student_id', 'file', 'student_name', 'department', 'supervisor_name', 'submission_date'
    ];
}
