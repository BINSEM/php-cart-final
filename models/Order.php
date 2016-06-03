<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function customer()
	{
		return $this->belongsTo('App\Models\Customer');
	}

	public function products()
	{
		return $this->belongsToMany('App\Models\Product');
	}
}