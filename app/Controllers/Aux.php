<?php namespace App\Controllers;

class Aux extends BaseController
{
	public function index()
	{
		header("Content-type:application/pdf");
		$html = view('aux');
		$mpdf = new \Mpdf\Mpdf(['setAutoTopMargin' => 'stretch']);
		$mpdf->WriteHTML($html);
			$mpdf->DefHTMLHeaderByName(
				'Chapter2Header',
				'<div style="text-align: right; border-bottom: 1px solid #000000; 
				font-weight: bold; font-size: 10pt;">Chapter 2</div>'
			);
			
			$mpdf->DefHTMLFooterByName(
				'Chapter2Footer',
				'<div style="text-align: right; font-weight: bold; font-size: 8pt; 
				font-style: italic;">Chapter 2 Footer</div>'
			);
		$mpdf->Output();
		exit;
	}

	//--------------------------------------------------------------------

}
