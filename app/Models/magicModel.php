<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class magicModel extends Model
	{
		protected $table;
		public function setTitre(string $table): void {
    	$this->table = $table;
  		}

		protected $allowedFields;
		
  		public function setAllowedField(array $allowedFields): void {
    	$this->allowedFields = $allowedFields;
  		}
  		
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
		public function form_insert($data)
		{
			$db = \Config\Database::connect();

    		$this->db->insert($table, $data);
    	}
	}
?>