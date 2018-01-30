<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    //
    protected $fillable = [
    	'id',
    	'emp_name',
    	'dept',
    	'age',
    	'mobile',
    	'email',
    	 'city,'
    ];

}
