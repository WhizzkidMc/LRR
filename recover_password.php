<?php
  include 'NoDirectPhpAcess.php';
?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Header.php';

?>


<div class="row">
           
  <div class="col-md-4 list-group" style="margin:auto;">

  <br>
   
  <h4 class="list-group-item active"> Reset my password </h4>
    <div class="list-group-item">

      <div class="panel-body">
        <form method="post" action="Script.php" >
        <input type="hidden" name="frm_recover_password" value="true"/>
        Student number  <input type="text" name="sno" placeholder="Enter your student number" class="form-control" value="<?php echo $_SESSION['student_number']; ?>">
	<br/>
        Email  <input type="text" name="email" placeholder="Enter your email address" class="form-control" value="<?php echo $_SESSION['user_email']; ?>">
	<br/>
        <input type="submit" class="btn btn-primary" value="Recover">
        <br> * You will need to sign up again after you click the above button.

       </form>
     </div>
</div>
</div>
</div>


<?php

if(isset($_SESSION['info_recover_password'])) {
  echo  '<hr><div class="alert alert-danger" role="alert">'.$_SESSION['info_recover_password'].'</div>';
  $_SESSION['info_recover_password']=null;
}

?>
