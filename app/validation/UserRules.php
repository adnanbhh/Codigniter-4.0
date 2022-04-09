<?php 
namespace App\validation;
use App\Models\AdminModel;

class UserRules
{
	public function validateUser(string $str, string $fields, array $data)
	{
		$model = new AdminModel();
		$user = $model->where('Email', $data['Email'])
					  ->first();
		if(!$user)
		{
			return false;
		}

		return password_verify($data['Password'], $user['Password']);
	}
}

?>