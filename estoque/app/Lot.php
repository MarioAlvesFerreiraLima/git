<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model {

		protected $fillable = [
		'name',
		'validation',
		'product_id',
		'qty'
	];


}
