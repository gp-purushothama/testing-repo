<?php
/* * * * * * * * * *
* Version GA 2.3
* 
* Description : This class is used to abort the mysql queries based on controller name
* 
* When user logging into the user authentication page and trying to navigate one page 
* to another page that time big sql queries are killed in the backend.
* 
*
* * * * * * * * * */
class Process_control extends CI_Controller
{
	/**
	 * To initialize all the default properties of the CI class
	 * 
	 * @param void
	 * 
	 * @return void
	 */
	public function __construct()
	{
		//inherit the parent controller
		parent::__construct();		
	}
	
	/**
	 * To kill all the request related to the controller
	 * 
	 * @param string $controller
	 * 
	 * @return void
	 */
	public function abort()
	{
		//take controller name
		$controller=$this->input->post('url');
		
		//log_message('error',"controller name-->".print_r($controller,TRUE));
		
		//release the session lock
		$this->session->unlock_file();
		
		//array variable
		$data = array();
		
		//to kill all the request associated with this controller
		$data = $this->process_model->kill($controller);
		
		//response type is json
		//header('Content-Type:application/json');
		
		//encode json values
		echo json_encode($data);
		
	}
	
}