<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller{
    
    function __construct()
		{
			parent::__construct();
		}
 
 
 //change the title for login page
    public function index($msg = NULL)
	{
		$data ['title'] =  "Human Resources Login";
		$data['msg'] = $msg;
        $this->load->view('loginPage', $data);
    }

	
	//login validation
    public function checkLogin(){
        // loads the loginmodel and validates user
        $this->load->model('loginsmodel');
        $result = $this->loginsmodel->validate();
		
        // check results
        if(! $result){
            // show login page if user is not validated
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index();
        }else{
			//if user has been validated, then the user will be redirected to the home page
            redirect('homepage');
        }        
    }

}
?>