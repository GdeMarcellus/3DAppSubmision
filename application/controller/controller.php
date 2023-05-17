<?php
class Controller {

	public $load;
	public $model;
	
	
	function __construct($pageMethod = null)
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageMethod();
	}
	
    function home()
	{

		//$this->model->dbCreateTable();
		//$this->model->dbInsertData();
		$data = $this->model->dbGetData();
		
		$this->load->view('viewCocaCola', $data);

	}

	
	function apiDrinksImages()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}

	
	function apiCreateTable()
	{
	  	
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  	
	
	
	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');
	}
	
	
	function apiGetJson()
	{
		$this->load->view('viewJson');
	}
	
function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();

	   $this->load->view('viewDrinks', $data);
	}

	
	function apiCocaCola()
	{
		$this->load->view('viewCocaCola');	
	}
	function apiGetCokeData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  	  	
	
}
?>    