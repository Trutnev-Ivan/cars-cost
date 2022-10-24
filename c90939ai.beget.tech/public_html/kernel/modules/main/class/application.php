<?php

class Application
{
	static $instance = null;

	private function __construct()
	{
	}

	public static function getInstance()
	{
		if (!static::$instance) {
			static::$instance = new Application();
		}

		return static::$instance;
	}

	/**
	 * @param $title
	 * @return void
	 */
	public function setTitle($title="")
	{
		$out = ob_get_contents();
		ob_end_clean();
		echo "<title>".$title."</title>";
		echo $out;
	}

	public function showTitle()
	{
		ob_start();
	}

	/**
	 * @param $component -- название компонента
	 * @param $template -- шаблон компонента
	 * @param $params -- параметры компонента
	 * @return void
	 */
	public function includeComponent($component, $template = "", $params = [])
	{
		if (file_exists($_SERVER["DOCUMENT_ROOT"]."/components/".$component."/class.php"))
		{
			if ($template == "")
			{
				$template = ".default";
			}

			if (file_exists($_SERVER["DOCUMENT_ROOT"]."/components/".$component."/templates/".$template."/template.php"))
			{
				include $_SERVER["DOCUMENT_ROOT"]."/components/".$component."/class.php";
				$classes = get_declared_classes();
				$className = end($classes);
				$componentCLass= (new $className($component, $template, $params));
				$componentCLass->execute();
			}
			else
			{
				echo "<span style='color: red'>No template: " . $template . " in component " . $component . "</span><br>";
			}
		}
		else
		{
			echo "<span style='color: red'>No component: " . $component . "</span><br>";
		}
	}
}