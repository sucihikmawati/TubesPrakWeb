<?php namespace App\Controllers;

use App\Models\TiketModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$model = new TiketModel();
		$data = $model->findAll();
		return view("dashboard", ['data' => $data]);
	}

	//--------------------------------------------------------------------

}