<?php 
$this->load->view ('header')?>


<form class="well" name="input" action="<?php echo site_url('find/findemp') ?>" method="get">
 
<h1>Employee Search</h1>
	
	
 First Name: <input type="text" name="firstname" id="firstname">
 <br/>
 <br/>
 Last Name: <input type="text" name="lastname" id="lastname">
 <br/>
 <br/>
 Department: <input type="text" name="department" id="department">
 <br/>
 <br/>
 Job Title: <input type="text" name="title" id="title">
 <br/><br/>
 <input type="submit" id="search_button" value="Search">

</form>	
</html>

