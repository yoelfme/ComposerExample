<?php

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// disable DOMPDF's internal autoloader if you are using Composer
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

$data = [
	'name'		=> 'Yoel Monzon',
	'course'	=> 'Curso Basico de Laravel'
];

// get certificate file
ob_start();
extract($data);
include '../templates/pdf/certificate.php';
$html = ob_get_clean();


$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");