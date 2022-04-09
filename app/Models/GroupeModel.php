<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class GroupeModel extends Model
	{
		protected $table = 'groupe';
		protected $allowedFields = ['Titre'];
		protected $beforeInsert = ['beforeInsert'];
		protected $beforeUpdate = ['beforeUpdate'];


		protected function beforeInsert(array $data)
		{
			return $data;
		}

		protected function beforeUpdate(array $data)
		{
			return $data;
		}
		
	}
	

?>