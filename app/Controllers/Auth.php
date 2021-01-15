<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
	public function login()
	{
		
		if(session()->get('logged_in')){
            return redirect()->to('/dashboard');
        }else{
			helper(['form']);
			return view("auth/login");
        }
	}

	public function check()
	{
		$session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_level'    => $data['user_level'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if($data['user_level'] == 1){
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/dashboard');
                }
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/auth/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/auth/login');
        }
	}
	public function register()
	{
		if(session()->get('logged_in')){
            return redirect()->to('/');
        }else{
            //include helper form
            helper(['form']);
			$data = [];
			return view("auth/register");
        }
	}

	public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/auth/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('/auth/register', $data);
        }
	}

	//--------------------------------------------------------------------

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/auth/login');
	}

}