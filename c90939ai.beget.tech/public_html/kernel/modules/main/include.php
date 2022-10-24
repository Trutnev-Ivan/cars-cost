<?php

$dir = scandir(__DIR__."/class");
$dir = array_diff($dir, [".", ".."]);

foreach ($dir as $class)
{
	require_once __DIR__."/class/" . $class;
}
