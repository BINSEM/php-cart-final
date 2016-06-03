<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent {
	protected $guarded = ['id'];
	public $timestamps = false;

	public function orders()
	{
		return $this->hasmany('App\Models\Order');
	}
}