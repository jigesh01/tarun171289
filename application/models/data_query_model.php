<?php


class data_query_model extends CI_Model 
{

	function __construct() 
	{
		$this->load->database();
		parent::__construct();
	}
	
	
	function search ($firstname,$lastname,$department,$title)
	{
 
		//query function
		$findquery = $this->db->select('employees.first_name AS firstname, employees.last_name AS lastname, titles.title AS jobtitle, departments.dept_name AS dept, departments.dept_no AS deptid')
			->select('IF(`dept_manager`.`emp_no` = `employees`.`emp_no`, 1, 0) AS ismanager', false)
			->from('employees')
			->join('dept_emp', 'dept_emp.emp_no = employees.emp_no')
			->join('departments', 'departments.dept_no = dept_emp.dept_no')
			->join('titles', 'titles.emp_no = employees.emp_no')
			->join('dept_manager', 'dept_manager.emp_no = dept_emp.emp_no','left')
			->where('titles.to_date', '9999-01-01')
			->where('dept_emp.to_date', '9999-01-01');
			if (!empty($firstname)) {
			$this->db->where('employees.first_name', $firstname);
			}
			if (!empty($lastname)) {
			$this->db->where('employees.last_name', $lastname);
			}
			if (!empty($department)) {
			$this->db->where('departments.dept_name', $department);
			}
			if (!empty($title)) {
			$this->db->where('titles.title', $title);
			}
		
		$queryresult['rows'] = $findquery->get()->result();
		
		return $queryresult;
	
		}

 
 
	//inserts the employee department value into database
	public function add_employeedepartment($employeeid, $department)
	{
		$fields = array (
			'emp_no' => $employeeid,
			'dept_no' => $department,
			'from_date' => date("Y-m-d"),
			'to_date' => '9999-01-01'
			);
		$this->db->set($fields); 
	
		$this->db->insert('dept_emp');
	}
 
 
 
	//inserts employee title into database
  public function add_employeetitle($employeeid, $title)
  {
	$fields = array (
	'emp_no' => $employeeid,
	'title' => $title,
	'from_date' => date("Y-m-d"),
	'to_date' => '9999-01-01'
		);
		$this->db->set($fields); 
	
	$this->db->insert('titles');
	}
 
 
 
 	//inserts employee salary into database
  public function add_employeesalary($employeeid, $salary)
  {
	$fields = array (
	'emp_no' => $employeeid,
	'salary' => $salary,
	'from_date' => date("Y-m-d"),
	'to_date' => '9999-01-01'
		);
		$this->db->set($fields); 
	
	$this->db->insert('salaries');
 
	}
	
	
 // inserts all values for the employee into the database
public function add_entry($firstname, $lastname, $gender, $DOB, $department, $title, $salary)
{
	$fields = array 
	(
		'first_name' => $firstname,
		'last_name' => $lastname,
		'gender' => $gender,
		'birth_date' => $DOB,
		'hire_date' => date("Y-m-d"),
	);
	
	
	$this->db->set($fields); 
	$this->db->insert('employees');

	$employeeid = $this->db->insert_id();
	
	$this->add_employeedepartment($employeeid, $department);
	$this->add_employeesalary($employeeid, $salary);
	$this->add_employeetitle($employeeid, $title);
	
}



//deletes employees values from database
public function delete_entry($employeeno)
{
$tables = array ('employees', 'dept_manager','dept_emp','titles','salaries');
		
		
		$this->db->where('emp_no', $employeeno); 
	
	$this->db->delete($tables);

}
 

//end 
}
