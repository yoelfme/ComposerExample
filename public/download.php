<?php

use App\Core\View\Template as View;
use App\Helpers\Pdf;

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

$data = [
	'name'		=> 'Yoel Monzon',
	'course'	=> 'Curso Basico de Laravel'
];

$html = View::render('pdf/certificate',$data);
Pdf::render('certificate',$html);
