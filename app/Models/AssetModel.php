<?php namespace App\Models;
	
	use CodeIgniter\Model;
	use CodeIgniter\I18n\Time;

	class AssetModel extends Model
	{
		protected $table = 'asset';
		protected $allowedFields = ['Category', 'FirstName', 'LastName', 'Description', 'Serial', 'Model', 'Stage', 'Desk', 'Cost', 'DatePurchased', 'DateLoaned', 'Condit', 'WarrantyExpiration', 'Updated_at'];
		protected $beforeInsert = ['beforeInsert'];
		protected $beforeUpdate = ['beforeUpdate'];


		protected function beforeInsert(array $data)
		{
			$data = $this->convertStringToDate($data);
			return $data;
		}

		protected function beforeUpdate(array $data)
		{
			return $data;
		}

		// convert string to date
		protected function convertStringToDate(array $data)
		{
			
/*			if (isset($data['data']['DatePurchased'])) 
			{
				$data['data']['DatePurchased'] = date("d-m-Y", strtotime($data['data']['DatePurchased']));

			}

			if (isset($data['data']['DateLoaned'])) 
			{
			$data['data']['DateLoaned'] = date("d-m-Y", strtotime($data['data']['DateLoaned']));

				//$data['data']['DateLoaned'] = password_hash($data['data']['Password'], PASSWORD_DEFAULT);
			}

			if (isset($data['data']['WarrantyExpiration'])) 
			{
				$data['data']['WarrantyExpiration'] = date("d-m-Y", strtotime($data['data']['WarrantyExpiration']));

				//data['data']['WarrantyExpiration'] = password_hash($data['data']['Password'], PASSWORD_DEFAULT);
			}*/

			$data['data']['Updated_at'] = new Time('now');

			return $data;
		}
		
	}
	

?>