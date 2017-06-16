<?php

namespace App;

class Db
{
	protected $dbh;
	
	public function __construct()
	{
		$this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
	}

    public function query($sql, $data, $class = \stdClass::class)
	//public function query($sql, $data)
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($data);
		return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
	}

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

}


?>