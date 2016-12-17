<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = [
		'name',
		'codebar'
	];

	public function lots(){

		return $this->hasMany('App\Lot');
		
	}



}
