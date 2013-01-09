<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginsmodel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // retrieves users login values
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // checks what location to find the login values in the database
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // queries the database for the users login values
        $query = $this->db->get('users');
        // checks if there is a result from the query
        if($query->num_rows == 1)
        {
        //creates a session data if there is a user found in database
            $row = $query->row();
            $data = array(
                    'id' => $row->userid,
                    'username' => $row->username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
		
        return false;
    }
}
?>