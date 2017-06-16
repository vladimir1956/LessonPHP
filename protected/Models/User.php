<?php

namespace App\Models;

use App\Model;

class User
    extends \App\Model
    implements HasEmail
{
	protected static $table = 'users';

	public $email;
	public $password;
	
	use HasEmailTrait;

	/*public static function findAll()
	{
		//$sql = 'SELECT * FROM users';
		//$sql = 'SELECT * FROM' . Product::$table;
		$sql = 'SELECT * FROM' . self::$table;
		$db = new Db();
		return $db->query($sql, 'User');
	}*/
}
?>