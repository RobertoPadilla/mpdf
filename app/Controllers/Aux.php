<?php namespace App\Controllers;

class Aux extends BaseController
{
	public function index()
	{
		header("Content-type:application/pdf");
		$html = view('aux');
		$mpdf = new \Mpdf\Mpdf(['setAutoTopMargin' => 'stretch']);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		exit;
	}

	//--------------------------------------------------------------------

}
