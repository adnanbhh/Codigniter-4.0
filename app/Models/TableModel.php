<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class TableModel extends Model
	{
		protected $table;
		public function setTitre(string $table): void {
    	$this->table = $table;
  		}
		protected $allowedFields = ['Name', 'Type', 'Size'];
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
	    //$this->db->insert_batch('tbl_description', $data);
/*$j=0;
while ($j <= $i) {
	$newsData = [
			'Name' => $this->request->getVar('txtName[$j]'),
			'Type' => $this->request->getVar('txtType[$j]'),
			'Size' => $this->request->getVar('txtSize[$j]'), 
		];

		$mod = new TableModel($Title);
		$mod->save($newsData);

}*/
/*$k=0;
$Name[] =  $this->request->getVar('txtName[]');
$Type[] =	 $this->request->getVar('txtType[]');
$Size[] =  $this->request->getVar('txtSize[]');
foreach($this->request->getVar('txtSize[]') as $key)
{*/
/*$newsData['Name'][$k] = $Name[$k];
$newsData['Type'][$k] = $Type[$k];
$newsData['Size'][$k] = $Size[$k];*/


/*$newsData = [
		 
			'Name' => $Name[$k],
			'Type' => $Type[$k],
			'Size' => $Size[$k], 
	];

$temp[$k] = $newsData;
unset($newsData);
		$moha = new TableModel();
		$moha->setTitre($Title) ;
		$moha->form_insert($temp[$k]);
		unset($moha);
$k++;*/

	/*
$college_temp[] = $newsData;
		$b = 0;		
        $college_temp[$k][$b] =  $newsData->Name;
        $b = 1; 
        $college_temp[$k][$b] =  $newsData->Type;
        $b = 2;
        $college_temp[$k][$b] =  $newsData->Size;
}*/


/*
$college_temp = array();

foreach($newsData['Name'] as $college)
{
    $college_temp[] =  $college;
}*/
/*
for ($i=0; $i <= $k ; $i++) { 
		
		$moha = new TableModel();
		$moha->setTitre($Title) ;

		$b = 0;
		$Dataa = [
			'Name' => $college_temp[$i][$b],
		];
		$b = 1;
		$Dataa = [
			'Type' => $college_temp[$i][$b],
		];
		$b = 2;
		$Dataa = [
			'Size' => $college_temp[$i][$b],
		];
		//	'Type' => $college_temp[$i][],
		//	'Size' => $college_temp[$i][],
		


		$moha->save($Dataa);
		unset($moha);
}*/
/*
if($k != 0)
{
	$first = 'txtName[';
	$second = 'txtType[';
	$third = 'txtSize[';
	$aft = ']';

for ($i=0; $i < $k ; $i++) {
	$name = $first.$i.$aft;
	$type = $second.$i.$aft;
	$size = $third.$i.$aft;
	$newsData = [
			'Name' => $this->request->getVar($name),
			'Type' => $this->request->getVar($type),
			'Size' => $k, 
		];

		$mod = new TableModel;
		$mod->setTitre($Title) ;
		$mod->save($newsData);
}	
}
else
{
	return redirect()->to('asset');
}

*/

?>