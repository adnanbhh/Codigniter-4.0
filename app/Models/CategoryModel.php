<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class CategoryModel extends Model
	{
		protected $table = 'category';
		protected $allowedFields = ['Title', 'isParent', 'ParentCategory', 'Summary', 'Statut'];
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