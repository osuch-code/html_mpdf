<?php
//Define a PHP variable with mPDF page number, date and some text
$footertext='{PAGENO} - {DATE j-m-Y} - Wamazoola Forms';
require_once __DIR__ . '../../../../../mpdf7/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
//Get the location of the external style sheet
$stylesheet = file_get_contents('styles.css');
//Get the location of the HTML file
$html = file_get_contents('basic_text.php');
//Set the Title, Author and Subject properties
$mpdf->SetTitle('Title goldenchild');
$mpdf->SetAuthor('Author goldenchild');
$mpdf->SetSubject('Subject goldenchild');
//Set the display magnification
$mpdf->SetDisplayMode(75);
//Apply a Watermark
$mpdf->SetWatermarkText('PREVIEW ONLY');
$mpdf->showWatermarkText = true;
//Create bookmarks from the HTML tags and apply a heirarchy
$mpdf->h2bookmarks = array('H1'=>0, 'H2'=>1, 'H3'=>2);
//Apply the footer
$mpdf->SetFooter($footertext);
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);
$mpdf->Output(); 
exit;
?>