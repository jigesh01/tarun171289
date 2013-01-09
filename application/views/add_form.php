<?php $this->load->view('header')?>
<?php echo validation_errors() ?>

            <h1>Add New Employee</h1>


<!--Form for entering new employee values -->
<form class="well" action="<?php echo site_url('homepage/addEntry');?>" method='post' name='addEntry'>

            <label for='firstname'>First Name: </label><input class="span4" type='text' name='firstname' id='firstname' />
			<br><br/>
			<label for='lastname'>Surname Name: </label><input class="span4" name='lastname' id='lastname'/>
			<br/><br/>
        
			<label for='gender'>Gender:</label>			 
				<select class="span4" name = 'gender' id = 'gender'>
				<option value="">Gender</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			<br/><br/>
			
			<label for='DOB'>Date Of Birth (YYYY-MM-DD):</label><input class="span4" type='text' name='DOB' id='DOB'/>
			<br/><br/>
			
			<label for='department'>Department:</label>	<select class="span4" name = 'department' id = 'department'>
				<option value="d001">Marketing</option>
				<option value="d002">Finance</option>
				<option value="d003">Human Resources</option>
				<option value="d004">Production</option>
				<option value="d005">Development</option>
				<option value="d006">quality Management</option>
				<option value="d007">Sales</option>
				<option value="d008">Research</option>
				<option value="d009">Customer Service</option>
			</select>
			<br/><br/>
			
			<label for='title'>Title:</label> <input class="span4" type='text' name='title' id='title'/>
			<br/><br/>	
			
			<label for='salary'>Salary:</label> <input class="span4" type='text' name='salary' id='salary'/>
			<br/><br/>
        
		<!-- submit button-->
            <input class="btn btn-primary" type='Submit' value='Add Employee' />            
        </form>
    </div>


<?php $this->load->view ('footer')?>