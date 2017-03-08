<?php

namespace App;

use App\Support\FilterPaginateOrder; // davery
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	use FilterPaginateOrder;
	
  protected $fillable = [
		'company', 'email', 'name', 'phone', 'address'
  ];

	// whitelist of filter-able columns
  protected $filter = [
		'id', 'company', 'email', 'name', 'phone', 'address'
  ];

  public static function initialize()
  {
  	return [
			'company' => '', 'email' => '', 'name' => '', 'phone' => '', 'address' => ''
  	];
  }

  public function invoices()
  {
  	return $this->hasMany(Invoice::class);
  }
}