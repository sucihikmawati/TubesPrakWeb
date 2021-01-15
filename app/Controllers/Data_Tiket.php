<?php namespace App\Controllers;

use App\Models\TiketModel;

class Data_Tiket extends BaseController
{
	public function index()
	{
		$model = new TiketModel();
		$data = $model->findAll();
		return view('data_tiket', ['data' => $data]);
	}

	public function hapus($id)
	{
		$model = new TiketModel();
		$model->delete($id);
		return redirect()->to('/data_tiket');
	}

	public function save()
	{
		helper(['form']);
		$rules = [
			'notiket' => 'required',
			'inputPesawat' => 'required',
			'inputWaktu' => 'required',
			'inputJurusan' => 'required',
			'inputKelas' => 'required',
			'inputPenumpang' => 'required',
			'inputTotal' => 'required'
		];
		
		if($this->validate($rules)){
            $model = new TiketModel();
            $data = [
				'id' 		=> $this->request->getVar('notiket'),
				'penyedia'	=> $this->request->getVar('inputPesawat'),
				'waktu'		=> $this->request->getVar('inputWaktu'),
				'jurusan'	=> $this->request->getVar('inputJurusan'),
				'kelas'		=> $this->request->getVar('inputKelas'),
				'harga'		=> $this->request->getVar('inputPenumpang'),
				'kursi'		=> $this->request->getVar('inputTotal')
            ];
            $model->save($data);
            return redirect()->to('/data_tiket');
        }else{
            $data['validation'] = $this->validator;
            echo view('/edit_tiket', $data);
        }
	}

	//--------------------------------------------------------------------

}