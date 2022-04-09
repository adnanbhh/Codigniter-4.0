<?php 
namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\AssetModel;
use App\Models\AdminModel;
use App\Models\GroupeModel;
use App\Models\TableModel;
use App\Models\magicModel;


class Dashboard extends BaseController
{
	///////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////
	public function index()
	{
		$data = [];

		$m = new AssetModel();
		$data['asset'] = $m->findAll();	

		$me = new CategoryModel();
		$data['category'] = $me->findAll();

		$mes = new AdminModel();
		$data['user'] = $mes->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		//echo view('template/header', $data);
		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/index', $data);
		echo view('template/footer');

		//echo view('template/footer');
	}


	/////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////
	public function assets()
	{
		$data = [];

		$m = new AssetModel();
		$data['category'] = $m->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/affiche', $data);
		echo view('template/footer');
	}

	public function DeleteAsset()
	{
		$data = [];
		helper(['url']);

		$m = new AssetModel();
		$id=$this->request->getGet('id'); //receive id of the record
		$m->where('ID', $id)->delete($id);
		return redirect()->to('/asset');
	}


	public function UpdateAsset()
	{
		$data = [];
		helper(['form']);


		// Showing at view 
		$m = new AssetModel();
		$id=$this->request->getGet('id');
		$data['asset']=$m->where('ID',$id)->first();


		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();


		$me = new CategoryModel();
		$data['category'] = $me->findAll();


		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = 
			[
				'FirstName' => 'required|min_length[2]|max_length[20]',

				'LastName' => 'required|min_length[2]|max_length[20]',
				
				'Serial' => 'required|min_length[2]|max_length[30]|is_unique[asset.Serial]',
				
				'Model' => 'required|min_length[2]|max_length[30]',
				
				'Desk' => 'required|max_length[20]',

				'DatePurchased' => 'required',
				
				'DateLoaned' => 'required',

			];
		

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new AssetModel();

				$newData = [
					'Category' => $this->request->getVar('Category'), 

					'FirstName' => $this->request->getVar('FirstName'),

					'LastName' => $this->request->getVar('LastName'), 
					
					'Description' => $this->request->getVar('Description'),

					'Serial' => $this->request->getVar('Serial'), 

					'Model' => $this->request->getVar('Model'),

					'Stage' => $this->request->getVar('Stage'), 
					
					'Desk' => $this->request->getVar('Desk'),

					'Cost' => $this->request->getVar('Cost'), 

					'DatePurchased' => $this->request->getVar('DatePurchased'),

					'DateLoaned' => $this->request->getVar('DateLoaned'), 
					
					'Condit' => $this->request->getVar('Condit'),
					
					'WarrantyExpiration' => $this->request->getVar('WarrantyExpiration')
					];

					$model->update($id, $newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
						//echo view('template/footer');	

					return redirect()->to('/asset');
					//return redirect('login');
					
					exit;
			}
		}

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/updateAsset', $data);
		echo view('template/footer');
	}



	public function addAssets()
	{
		$data = [];
		helper(['form']);

		$me = new CategoryModel();
		$data['category'] = $me->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();
///

		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = 
			[
				'FirstName' => 'required|min_length[2]|max_length[20]',

				'LastName' => 'required|min_length[2]|max_length[20]',
				
				'Serial' => 'required|min_length[2]|max_length[30]|is_unique[asset.Serial]',
				
				'Model' => 'required|min_length[2]|max_length[30]',
				
				'Desk' => 'required|max_length[20]',

				'DatePurchased' => 'required',
				
				'DateLoaned' => 'required',

			];
		

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new AssetModel();

				$newData = [
					'Category' => $this->request->getVar('Category'), 

					'FirstName' => $this->request->getVar('FirstName'),

					'LastName' => $this->request->getVar('LastName'), 
					
					'Description' => $this->request->getVar('Description'),

					'Serial' => $this->request->getVar('Serial'), 

					'Model' => $this->request->getVar('Model'),

					'Stage' => $this->request->getVar('Stage'), 
					
					'Desk' => $this->request->getVar('Desk'),

					'Cost' => $this->request->getVar('Cost'), 

					'DatePurchased' => $this->request->getVar('DatePurchased'),

					'DateLoaned' => $this->request->getVar('DateLoaned'), 
					
					'Condit' => $this->request->getVar('Condit'),
					
					'WarrantyExpiration' => $this->request->getVar('WarrantyExpiration')
					];

					$model->save($newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/asset');
				//return redirect('login');
					exit;
			}
		}



		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/addAssets', $data);
		echo view('template/footer');

	}



	/////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////
	public function category()
	{
		$data = [];

		$m = new CategoryModel();
		$data['category'] = $m->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/category', $data);
		echo view('template/footer');
	}
	
	public function DeleteCategory()
	{
		$data = [];
		helper(['url']);

		$m = new CategoryModel();
		$id=$this->request->getGet('id'); //receive id of the record
		$m->where('ID', $id)->delete($id);
		return redirect()->to('/category');
	}
	

	public function UpdateCategory()
	{
		$data = [];
		helper(['form']);


		// Showing at view 
		$m = new CategoryModel();
		$id=$this->request->getGet('id');
		$data['cat']=$m->where('ID',$id)->first();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		$me = new CategoryModel();
		$data['category'] = $me->findAll();


		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = [
				'Title' => 'required|min_length[2]|max_length[20]|is_unique[category.Title]',
				'Statut' => 'required',
			];
		

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new CategoryModel();

				//crerer une variable check qui contient yes or no selon checkbox de addcategory.php
				if ($this->request->getVar('myCheck')) {
					$isParented = "YES";
				}
				else
				{
					$isParented = "NO";
				}

				$idd=$this->request->getGet('id');


				$newData = [
					'Title' => $this->request->getVar('Title'), 
					'isParent' => $isParented, 
					'ParentCategory' => $this->request->getVar('parent_id'), 
					'Summary' => $this->request->getVar('Summary'), 
					'Statut' => $this->request->getVar('Statut')
					];

					$model->update($idd, $newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/category');
				//return redirect('login');
					exit;
			}
		}
		

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/updateCategory', $data);
		echo view('template/footer');
	}


	public function addCategory()
	{
		$data = [];
		helper(['form']);

		$m = new CategoryModel();
		$data['category'] = $m->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = [
				'Title' => 'required|min_length[2]|max_length[20]|is_unique[category.Title]',
				'Statut' => 'required',
			];
		

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new CategoryModel();

				//crerer une variable check qui contient yes or no selon checkbox de addcategory.php
				if ($this->request->getVar('myCheck')) {
					$isParented = "YES";
				}
				else
				{
					$isParented = "NO";
				}

				$newData = [
					'Title' => $this->request->getVar('Title'), 
					'isParent' => $isParented, 
					'ParentCategory' => $this->request->getVar('parent_id'), 
					'Summary' => $this->request->getVar('Summary'), 
					'Statut' => $this->request->getVar('Statut')
					];

					$model->save($newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/category');
				//return redirect('login');
					exit;
			}
		}

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/addCategory', $data);
		echo view('template/footer');
	}
	

	///////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////:///
	//////////////////////////////////////////////////////////////////////



	public function listAdmin()
	{
		$data = [];

		$m = new AdminModel();
		$data['admin'] = $m->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/listAdmin', $data);
		echo view('template/footer');
	}

	public function DeleteAdmin()
	{
		$data = [];
		helper(['url']);

		$m = new AdminModel();
		$id=$this->request->getGet('id'); //receive id of the record
		$m->where('ID', $id)->delete($id);
		return redirect()->to('/listAdmin');
	}
	
	///////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////:///
	//////////////////////////////////////////////////////////////////////



	public function group()
	{
		$data = [];

		$m = new GroupeModel();
		$data['group'] = $m->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/listGroup', $data);
		echo view('template/footer');
	}

	public function addGroup()
	{
		$data = [];
		helper(['form']);

/*		$m = new GroupeModel();
		$data['group'] = $m->findAll();*/

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();


		if ($this->request->getMethod() == 'post') 
		{	
			// The Validation Of registration
			$rules = [
				'Titre' => 'required|min_length[2]|max_length[20]|is_unique[groupe.Titre]',
			];
		

		if(! $this->validate($rules))
		{
				echo '<h1>Title should be unique<h1>';
				exit;			
		}
		else
		{
				// to complete
			$model = new GroupeModel();

			$newData = [
					'Titre' => $this->request->getVar('Titre'), 
				];

			$model->save($newData);

			$forge = \Config\Database::forge();

	$fields = [
	        'ID'          => [
	                'type'           => 'INT',
	                'constraint'     => 5,
	                'unsigned'       => true,
                'auto_increment' => true
	        ],
	        'Name'       => [
	                'type'           => 'VARCHAR',
	                'constraint'     => '100',
	                'unique'         => true,
	        ],
	        'Type'      => [
	                'type'           =>'VARCHAR',
	                'constraint'     => 100,
	        ],
	        'Size' => [
	                'type'           =>'VARCHAR',
	                'constraint'     => 100,
	        ],
	];

				$db = \Config\Database::connect();
				$forge->addKey('ID');
				$forge->addField($fields);
				$Title = $this->request->getVar('Titre');
				$forge->createTable($Title, TRUE);

			    		$dat = array();
	    				$count = count($this->request->getVar('txtName[]'));
						$moha = new TableModel();
						$moha->setTitre($Title) ;

	    for($i=0; $i < $count; $i++) 
	    {
	    		$moha = new TableModel();
				$moha->setTitre($Title) ;

	           	if (is_numeric($this->request->getVar('txtSize['.$i.']')))
	           	{	

			   	$n =  $this->request->getVar('txtName['.$i.']');
	           	$t =  $this->request->getVar('txtType['.$i.']');
	           	$s =  $this->request->getVar('txtSize['.$i.']');

				$n = json_encode($n);
				$t = json_encode($t);
				$s = json_encode($s);

				//$n = substr($n, 1, -1);
				//$t = substr($t, 1, -1);
				//$s = substr($s, 1, -1);


				$newData = [
	        	    'Name' => $n,
	                'Type' => $t,
	                'Size' => $s,
					];

	    		$moha->save($newData);
	    		unset($data);
	    		unset($moha);
	    		unset($n);
	    		unset($t);
	    		unset($s);
	    		}
	    		else
	    		{
	    			echo '<h1>Erreur size should be an integer</h1>';
	    			//	return redirect()->to('/asset');
						exit;
	    		}
	    }
		
		return redirect()->to('/group');
		exit;
		
	}
}

	//		echo view('admintemplate/headerAdmin', $data);
			echo view('admintemplate/pages/forms/addGroup', $data);
			echo view('template/footer');
}

	public function DeleteGroup()
	{
		$data = [];
		helper(['url']);

		$id=$this->request->getGet('id'); //receive id of the record

		$m = new GroupeModel();		
		$user = $m->find($id);
		$forge = \Config\Database::forge();
		
		$forge->dropTable($user['Titre'], true);
		$Title =
		$prefis = "alpha";
		$Title = $prefis.$user['Titre'];
		$forge->dropTable($Title, true);

		$m->where('ID', $id)->delete($id);


		return redirect()->to('/group');
	}
	

	public function UpdateGroup()
	{
		$data = [];
		helper(['form']);

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		// Showing at view 
		$m = new GroupeModel();
		$id=$this->request->getGet('id');
		$data['group']=$m->where('ID',$id)->first();

		if ($this->request->getMethod() == 'post') 
		{	
			

			if(! $this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else
			{
				// to complete
				$model = new GroupeModel();
				$idd=$this->request->getGet('id');


				$newData = [
					'Titre' => $this->request->getVar('Titre'), 
					];

					$model->update($idd, $newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/group');
				//return redirect('login');
					exit;
			}
		}
		

	//	echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/updateGroupe', $data);
		echo view('template/footer');
	}

	protected $identity;

	public function setID(int $identity) : void
	{
		$this->identity = $identity;
	}

	public function getID() : int
	{
		return $identity;
	}


	public function mAffiche()
	{
		$data = [];
		$db = \Config\Database::connect();

		$m = new GroupeModel();
		$data['group'] = $m->findAll();

		$mo = new TableModel();
		$id = $this->request->getGet('id');
		$sql = "SELECT * FROM groupe WHERE id = ?";
		$query = $db->query($sql, [$id]);
		$rw   = $query->getRowArray();
		$titre = $rw['Titre'];
		$mo->setTitre($titre);

		$data['title'] = $mo->findAll();


		$prefis = "alpha";
		$Title = $prefis.$titre;

		$que= $db->query('SELECT * FROM '.$Title.'');
		$data['fafa'] = $que->getResultArray();	

	
		echo view('admintemplate/headerAdmin', $data);
		echo view('admintemplate/pages/forms/mAffiche', $data);
		echo view('template/footer');



	}
	

	public function addMagic()
	{
		$data = [];
		helper(['form']);
		helper(['array']);

		$x = 0;

		$me = new CategoryModel();
		$data['category'] = $me->findAll();

		$mess = new GroupeModel();
		$data['group'] = $mess->findAll();

		$db = \Config\Database::connect();
		$forge = \Config\Database::forge();

		// recevoir l'id
		$id = $this->request->getGet('id');
		//$tem = $request->getGet('id');


		if (is_null($id))
		{
			$id = $this->request->getVar('ID');	
		}
		//$id = $this->request->getVar('ID');
		// cherecher le titre de l'id
		$sql = "SELECT * FROM groupe WHERE id = ?";
		$query = $db->query($sql, [$id]);
		$rw   = $query->getRowArray();

		// stocker la valeur du titre
		$titre = $rw['Titre'];
		$que= $db->query('SELECT Name, Type, Size FROM '.$titre.'');
		$results = $que->getResultArray();

$fields = [
	        'ID'          => [
	                'type'           => 'INT',
	                'constraint'     => 5,
	                'unsigned'       => true,
                'auto_increment' 	 => true
	        ],
	];

/*		foreach ($results as $row)
		{
		    $Type = substr($row['Type'],1,-1);
		    $Name = substr($row['Name'],1,-1);
		    $Size = substr($row['Size'],1,-1);
		}

*/		
				$prefis = "alpha";
				$Title = $prefis.$titre;

				if ($db->tableExists($Title))
				{

				}
				else
				{
					$forge->addKey('ID');
					$forge->addField($fields);

					$forge->createTable($Title, TRUE);
							foreach ($results as $row)
							{
									$fields = [  
							        substr($row['Name'],1,-1)       => [
							                'type'           => substr($row['Type'],1,-1),
							                'constraint'     => substr($row['Size'],1,-1),
							        ], 
							    ];

							$names[$x] = substr($row['Name'],1,-1);
							$x++;
/*							    if ($db->fieldExists(substr($row['Name'],1,-1), $Title))
							    {
							    	$forge->dropColumn($Title, substr($row['Name'],1,-1));
							    }*/

							    $forge->addColumn($Title, $fields);

							}
				}

$x=0;
foreach ($results as $row)
{
							$names[$x] = substr($row['Name'],1,-1);
							$x++;
}


		if ($this->request->getMethod() == 'post') 
		{	

				$mobil = new magicModel();

					$i = 0;
					foreach ($results as $r)
					{
							$fil[$i] = $names[$i];

								$na = substr(json_encode($names[$i]),1,-1);
								$newData[$na] = $this->request->getVar($names[$i]);

								//echo "    sunesh       ";
								
								//echo $this->request->getVar($names[$i]);
								$i++;
					}
					$mobil->setAllowedField($fil) ;
					$mobil->setTitre($Title) ;
//var_dump($fil);
//var_dump($newData);
					
					$mobil->save($newData);

					//echo view('template/header', $data);
					//echo view('admin/login');
					//echo view('template/footer');
					return redirect()->to('/asset');
				//return redirect('login');
					exit;
		}

		$moha = new TableModel();
		$moha->setTitre($titre) ;
		$data['title'] = $moha->findAll();

		echo view('admintemplate/headerAdmin', $data);
		echo $this->request->getVar('ID');
		echo view('admintemplate/pages/forms/magic', $data);
		echo view('template/footer');

	}
}


?>