<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    //
    protected $fillable = [
    	'emp_id',
    	'entry_date',
    	'm_in',
    	'm_out',
    	'a_in',
    	'a_out',
    ];
}
