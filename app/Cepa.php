<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Cepa extends Model {
	protected $table = 'cepas';
    protected $fillable = ['name'];
    //protected $hidden = ['id' , 'deleted_at'];
}