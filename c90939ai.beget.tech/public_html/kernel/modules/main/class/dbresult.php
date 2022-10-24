<?php

class DBResult
{
	public function __construct($query)
	{
		$this->dbResult = $query;
	}

	public function fetch()
	{
		return $this->dbResult->fetch_assoc();
	}
}