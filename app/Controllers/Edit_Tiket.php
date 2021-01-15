<?php namespace App\Controllers;

use App\Models\TiketModel;

class Edit_Tiket extends BaseController
{
	// public function index()
	// {
	// 	return view('edit_tiket');
	// }

	public function edit($id)
	{
		$model = new TiketModel();
		$data = $model->find($id);
		return view("edit_tiket", ["data" => $data]);
	}

	//--------------------------------------------------------------------

}