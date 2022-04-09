<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class AdminModel extends Model
	{
		protected $table = 'admin';
		protected $allowedFields = ['FirstName', 'LastName', 'Email', 'Password', 'Update_at'];
		protected $beforeInsert = ['beforeInsert'];
		protected $beforeUpdate = ['beforeUpdate'];

		protected function beforeInsert(array $data)
		{
			//hashagePassword
			$data = $this->passwordHash($data);
			$data['data']['Updated_at'] = new Time('now');

			return $data;
		}

		protected function beforeUpdate(array $data)
		{
			//hashagePassword
			$data = $this->passwordHash($data);
			$data['data']['Updated_at'] = new Time('now');


			return $data;
		}

		//Fonction hashagePassword
		protected function passwordHash(array $data)
		{
			
			if (isset($data['data']['Password'])) {
				$data['data']['Password'] = password_hash($data['data']['Password'], PASSWORD_DEFAULT);
			}
			return $data;
		}
	}

?>