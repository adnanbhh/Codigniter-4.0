<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = 
			[
				'Email' => 'required|min_length[6]|max_length[50]|valid_email',
				'Password' => 'required|min_length[8]|max_length[255]|validateUser[Email,Password]'
			];

			$errors = [
				'Password' => [
					'validateUser' => 'Email or Password do not match'
				]
			];
		

			if(! $this->validate($rules, $errors))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// adding a new folder to our app called validation
				$model = new AdminModel();

				$user = $model->where('Email', $this->request->getVar('Email'))
						->first();

				$this->setAdminSession($user);

				
				return redirect()->to('/Dash');


			}
		}

		echo view('template/header', $data);
		echo view('admin/login');
		echo view('template/footer');
	}

	private function setAdminSession($user)
	{
		$data = [
			'ID' => $user['ID'],
			'FirstName' => $user['FirstName'],
			'LastName' => $user['LastName'],
			'Email' => $user['Email'],
			'isLoggedIn' => true,

		];

		session()->set($data);
	}

	public function register()
	{
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = [
				'FirstName' => 'required|min_length[3]|max_length[20]',
				'LastName' => 'required|min_length[3]|max_length[20]',
				'Email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin.Email]',
				'Password' => 'required|min_length[8]|max_length[255]',
				'Confirmepassword' => 'matches[Password]'
			];
		

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new AdminModel();

				$newData = [
					'FirstName' => $this->request->getVar('FirstName'), 
					'LastName' => $this->request->getVar('LastName'), 
					'Email' => $this->request->getVar('Email'), 
					'Password' => $this->request->getVar('Password')
					];

					$model->save($newData);
					//$session = session();
					//$session->setFlashdata('success', 'Successful Registration');

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/Dash');
				//return redirect('login');
					exit;
			}
		}
		
		echo view('admintemplate/headerAdmin', $data);
		echo view('admin/register');
		echo view('template/footer');
		//echo view('admin/footer');
		
	}

	public function profile()
	{
		echo view('template/header', $data);
		echo view('admin/profile');
		echo view('template/footer');
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}
}


?>