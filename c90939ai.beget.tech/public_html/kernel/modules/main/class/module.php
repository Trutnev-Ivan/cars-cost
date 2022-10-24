<?php

class Module
{
	static $error = "";

	public static function includeModule($module)
	{
		if (is_dir($_SERVER["DOCUMENT_ROOT"]."/modules/".$module))
		{
			if (file_exists($_SERVER["DOCUMENT_ROOT"]."/modules/".$module."/include.php"))
			{
				require_once $_SERVER["DOCUMENT_ROOT"]."/modules/".$module."/include.php";
				return true;
			}
			else
			{
				static::$error = "Can`t find include.php in module " . $module;
				return false;
			}
		}
		else
		{
			static::$error = "Can`t find module " . $module;
			return false;
		}
	}
}
