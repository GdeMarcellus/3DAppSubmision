<?php
class Model {

	public $dbhandle;
	
	
	public function __construct()
	{
		
		$dsn = 'sqlite:./db/database.db';
		try {	
			
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside database.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	

	public function dbGetBrand()
	{
		
		return array("-", "Coke", "Powerade", "Fanta");
	}

	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Coke', 'X3D Coke Model', 'made using blender', 'Coke can model','a simple drink','a delicous drink for all '); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Fanta', 'X3D Fanta Model', 'made using blender', 'Fanta bottle model','Fanta a fruity drink','Fanta is a great orange drink everyone should drink'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
			VALUES (3, 'Powerade', 'X3D Powerade Model', 'made using blender', 'Powerade bottle model','Powerade sports in a bottle','Powerade is the sports drink for all have a taste and get hooked'); ");
			
			return "X3D model data inserted successfully inside database.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			
			$sql = 'SELECT * FROM Model_3D';
			
			$stmt = $this->dbhandle->query($sql);
			
			$result = null;
			
			$i=-0;
				
			while ($data = $stmt->fetch()) {
			
				$result[$i]['brand'] = $data['brand']; 
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		
		$this->dbhandle = NULL;
		
		return $result;
	}
	
	
	public function model3D_info()
	{
		
		return array(

			'model_1' => 'Coke',
			'image3D_1' => 'Coke',

			'model_2' => 'Fanta',
			'image3D_2' => 'Fanta',

			'model_3' => 'Powerade',
			'image3D_3' => 'Powerade'
		);
	}
}
?>