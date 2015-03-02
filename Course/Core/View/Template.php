<?php

namespace App\Core;

class Template
{
	public static function render($file, $data = array())
	{
		ob_start();
		extract($data);
		include '../templates/' . $file .'.php';
		return ob_get_clean();
	}
}