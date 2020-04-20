<?php namespace App\Controllers;

class pdfController extends BaseController
{
	public function index()
	{
    $data['contractor'] = $this->request->getPost('formContractorName');
    $data['responsable'] = $this->request->getPost('formResponsableName');
		header("Content-type:application/pdf");
		$html = view('pdf', $data);
		$mpdf = new \Mpdf\Mpdf(['setAutoTopMargin' => 'stretch']);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		exit;
	}

	//--------------------------------------------------------------------

}
