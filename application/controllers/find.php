<?php

class Find extends CI_Controller {


//loads the employee search view
	function index()
	{
		$this->load->view('data_query_view');
	}

		

//fine employee function retrieves data values from the database
	function findemp () 
	{
	$this->load->model('data_query_model');
	
		$firstname = $this->input->get('firstname');
	
		$lastname = $this->input->get('lastname');
	
		$department = $this->input->get('department');
	
		$title = $this->input->get('title');

		//results
		$results= $this->data_query_model->search($firstname,$lastname,$department,$title);
	
	
	//display as json
		$data['count'] = count($results['rows']);
		$data['results'] = $results['rows']; 
	
	echo json_encode($data);
	}
}

