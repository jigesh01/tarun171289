<!-- header html imported-->
<?php $this->load->view('header')?>
<?php echo validation_errors() ?>
</br></br>

	<form class="well" action="<?php echo site_url('homepage/deleteEntry');?>" method='post' name='DeleteEntry'>

		<h1>Delete Existing Employee Entry</h1>
		<br/><br/>            
	
		<label for='employeeno'>Employee Number</label>
            <input type='text' name='employeeno' id='employeeno'/>
		<br/><br/>                               
            <input type='Submit' value='Delete Employee' />            
    </form>


<?php $this->load->view ('footer')?>