<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurdModel extends Model
{
	 protected $table = 'emp';
     protected $fillable = ['emp_name','dob','address','tech'];
}
