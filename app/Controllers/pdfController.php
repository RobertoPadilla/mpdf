<?php namespace App\Controllers;

class pdfController extends BaseController
{
	public function index()
	{
    $data['contractor'] = $this->request->getPost('formContractorName');
    $data['responsable'] = $this->request->getPost('formResponsableName');
		return view('pdf', $data); //this line, after finishing design page, It will be included on the function writeHTML from MPDF 
	}

	//--------------------------------------------------------------------

}
