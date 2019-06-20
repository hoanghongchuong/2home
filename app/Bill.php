<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Exception;

class Bill extends Model
{
	protected $fillable =['full_name','phone','email','start_date','end_date','children','adult','product_id'];
   	// public function getDetailAttribute($value) 
    // {
    // 	try {
    // 		return json_decode($value);
    // 	} catch (Exception $e) {
    // 		return [];
    // 	}
    // }
}
