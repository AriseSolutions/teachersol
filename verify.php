<?php
session_start();
include('config.php');
             
	if(isset($_GET['email']) && isset($_GET['activation_code']) ){
	$success_message="";
    $error_message1="";
    $error_message2="";	
    $email = mysqli_escape_string($conn,$_GET['email']); // Set email variable
    $activation_code = mysqli_escape_string($conn,$_GET['activation_code']); // Set hash variable
     

    $search = mysqli_query($conn,"SELECT email, Activation_Code, Active FROM users WHERE email='".$email."' AND Activation_Code='".$activation_code."' AND Active='2'") or die(mysql_error()); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account

        mysqli_query($conn,"update users set Active='1' where oauth_uid='".$_SESSION['user_oauth_uid']."' and Active='2'") or die(mysql_error());
        $success_message='Your account has been activated, Now you can now login.';
    }else{
        // No match -> invalid url or account has already been activated.
        $error_message1= 'The url is either invalid or you already have activated your account.';
    }
}                 
else{
    // Invalid approach
    $error_message2= 'Invalid approach, please use the link that has been send to your email.';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Facebbok</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        .indigo1{

            background-color: #2BBBAD;
        }
    </style>

</head>


<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><b>Navbar</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
    </div>
</nav>
<!--/.Navbar-->

    <!--Mask-->
<div class="view hm-black-light">
	<div class="full-bg-img flex-center">
    	<div class="container" style="margin-top: 50px;">
			<div class="row">
			<div class="col-lg-6">	
			<div class="alert alert-info">
				<strong><?php if(isset($success_message))
					
					{echo $success_message;}
					
					if(isset($error_message1))
					{
						echo $error_message1;
					}
					if(isset($error_message2))
					{
						echo $error_message2;
					}
					?>
				</strong>
			</div>
		</div>
	</div>
		</div>
    <!--/.Mask-->
	</div>
</div>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>


	