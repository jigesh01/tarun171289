<?php $this->load->view ('header')?>
</br></br>
<!-- form to retrieve username and password values-->
    <div id='login_form'>
        <form class="well" action="<?php echo site_url('login/checkLogin');?>" method='post' name='Login'>
            <h1>Human Resources</h1>
            </br>            
			<h4>Please login</h4>
			
            <label for='username'>Username</label>
            <input class="span4" type='text' name='username' id='username' size='25' /><br />
        
            <label for='password'>Password</label>
            <input class="span4" type='password' name='password' id='password' size='25' /><br />                            
				
			<br/>
            <input class="btn btn-primary" type='Submit' value='Login'/>            
        </form>
    </div>

<?php $this->load->view ('footer')?>