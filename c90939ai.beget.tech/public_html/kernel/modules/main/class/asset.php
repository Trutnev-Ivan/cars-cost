<?php

class Asset
{
	static $instance = null;

	private function __construct(){}

	public static function getInstance()
	{
		if (!static::$instance)
		{
			static::$instance = new Asset();
		}

		return static::$instance;
	}

	public function addCss($path)
	{
		?>
		<link rel="stylesheet" href="<?=$path?>">
		<?php
	}

	public function addJs($path)
	{
		?>
		<script src="<?=$path?>"></script>
		<?php
	}
}