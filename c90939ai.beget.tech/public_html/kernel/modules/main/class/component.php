<?php

abstract class Component
{
	public function __construct($component, $template="", $params=[])
	{
		$this->component = $component;
		$this->template = $template;
		$this->params = $params;
		$this->result = [];
	}

	public function execute()
	{
		$this->includeTemplate($this->template);
	}

	public function includeTemplate()
	{
		global $result, $params, $templateFolder;
		$result = $this->result;
		$params = $this->params;

		if ($this->template == "")
		{
			$this->template = ".default";
		}

		$templateFolder = "/components/".$this->component."/templates/".$this->template;

		include $_SERVER["DOCUMENT_ROOT"]."/components/".$this->component."/templates/".$this->template."/template.php";
	}
}