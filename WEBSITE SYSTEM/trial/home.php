<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron">
         <h1>Welcome User <hr> Network Automation System</h1>
         <p>Monitor And Control Water Level Tank System</p>
         <p> Procedures For Using the Application:<p>
         <p>1. Make sure you have installed the Teamviewer software application on your desktop.<p>
         <p>COPY THIS LINK IF YOU NOT INSTALL YET: https://www.teamviewer.com/en/download/windows/<p>
         <p>2. You will directly connect to the login panel. Enter your details here.<p>
         <p>3. After you have logged in , you should see the Access details for the user to access the server.<p>
         <p>4. You should get the User ID and password provided enable you to access the server.<p>
         <p>5. Input the User ID and password on Teamviewer application.<p>
         <p>6. You have been successfully access the plants server from your computer :).<p>
         <strong>Access Details</strong>
												
												<p>	<strong>PLANT WATER LEVEL TANK </strong>
												
											</p>
											<p>	<strong>User ID: 1 045 091 950</strong>
												
											</p>
												<p>	<strong>Password: sdaodoi924c</strong>
											
      </div>




    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
