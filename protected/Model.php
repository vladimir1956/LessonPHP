<?php
namespace App;

abstract class Model
{
	protected static $table = null;
	
	public $id;

	public static function findAll()
	{
		//$sql = 'SELECT * FROM products';
		//$sql = 'SELECT * FROM' . Product::$table;
        //$sql = 'SELECT * FROM' . self::$table;

		$sql = 'SELECT * FROM' . static::$table;
        $db = new Db();
        return $db->query($sql, static::class);

	}
	
}