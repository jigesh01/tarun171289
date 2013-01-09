<?php $this->load->view ('header')?>

<h1>Home Page</h1>
  </br>

<a class="comic" href="<?php echo site_url('homepage/addEntry')?>"><button class="btn btn-primary">Add New Employee</button></a>
</br></br>
<a href="<?php echo site_url('homepage/deleteEntry')?>"><button class="btn btn-primary">Delete Existing Employee</button></a>
</br></br>
<a ><button class="btn btn-primary">Promote Employee</button></a>
</br></br>
<a ><button class="btn btn-primary">Demote Employe</button></a>
</br></br>
<a ><button class="btn btn-primary">Change title</button></a>



<?php $this->load->view ('footer')?>