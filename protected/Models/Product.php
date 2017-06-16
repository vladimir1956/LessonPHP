<?php

namespace App\Models;

use App\Model;

class Product
    extends Model
    implements OrderableInterface
{
	protected static $table = 'products';

	public $title;
	public $price;
	public $descrip;
	public $image;

	public  function getPrice()
    {
        return $this->price;
    }
}


?>