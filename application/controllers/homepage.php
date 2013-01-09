<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 class Homepage extends CI_Controller
 {
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
		$this->load->helper('form');
 }
    
	
    public function index()
	{
		 $data ['title'] =  "Home Page";
		 $this->load->view ('homepage',$data);
    }
    
	
	//Add new employee entry to database
	public function addEntry(){

	 $this->load->library('form_validation');
	    $this->form_validation->set_rules('firstname', 'First Name', 'required');
	    $this->form_validation->set_rules('lastname', 'Last Name', 'required'); 
	    $this->form_validation->set_rules('gender', 'Gender', 'required');  
		$this->form_validation->set_rules('DOB', 'D.O.B.', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('salary', 'Salary', 'required');
	 
	   if ($this->form_validation->run() == FALSE)
		{
         $this->add_entry();
		}
      else
		{
		$firstname=$this->input->post('firstname');
		$lastname= $this->input->post('lastname');
		$gender= $this->input->post('gender');
		$DOB= $this->input->post('DOB');
		$department= $this->input->post('department');
		$title= $this->input->post('title');
		$salary= $this->input->post('salary');
	   
			$this->load->model('data_query_model');
			$this->data_query_model->add_entry($firstname, $lastname, $gender, $DOB, $department, $title, $salary);
			$this->load->view('entryAdded');
		}
    }
	
	public function add_entry(){
		$data ['title'] =  "Add Employee";
		$this->load->view('add_form',$data);
    }
	
	
	
	
	//DELETE existing member employee from database
	public function deleteEntry()
	{ 
		$this->load->library('form_validation');
		$this->form_validation->set_rules('employeeno', 'Employee No', 'required');
	  
		if ($this->form_validation->run() == FALSE)
			{
				$this->delete_entry();
			}
		else
			{
				$employeeno=$this->input->post('employeeno');
	   
				$this->load->model('data_query_model');
				$this->data_query_model->delete_entry($employeeno);
				$this->load->view('deletedEntry'); 
			}
	}
	
	public function delete_entry(){
		$data ['title'] =  "Delete Employee";
		$this->load->view('delete_form',$data);
    }
	

	
	
	



	
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	
	 public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 
 ?>