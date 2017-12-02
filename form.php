<?php 
if(!session_id()){
    session_start();
}

// Include FB config file && User class
require_once 'fbConfig.php';
require_once 'User.php';
include('config.php');

if(isset($accessToken)){
	  // Get logout url
    $logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'logout.php');
}
if(isset($_POST['submit']))
{
        
        $msg="";
        $_SESSION['email'] = $_POST['email'];
$activation_code = hash('sha256',rand(0,1000));
$_SESSION['activation_code'] = $activation_code;

            include('activateemail.php');
            $sql="update users set Activation_Code='".$activation_code."', phone_no='".$_POST['phone']."', Role='".$_POST['role']."', Active='2' where oauth_uid='".$_SESSION['user_oauth_uid']."'";
            if (mysqli_query($conn, $sql)) 
                {
           
                $msg = "Please activate your Email";
               
                }else 
                {
                    echo "Error updating record: " . mysqli_error($conn);
                }
}
 $flag=0;
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

        input[type=number], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    </style>

</head>


<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Navbar</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
    </div>
</nav>
<!--/.Navbar-->

    <!--Mask-->
<div class="view hm-black-light">
    <div class="full-bg-img flex-center">
        
        <div class="container" style="margin-top: 65px;">

<!-- Form login -->

<div class="col-lg-5">
    <div class="card">
        <h3 class="card-header indigo1 white-text font-up text-center py-2"><strong>Sign Up Form</strong></h3>
    <div class="card-body" id="formContent" style="padding-bottom: 10px;">

        <form action="" method="post">             
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="defaultForm-name" class="form-control" name="first_name" value="<?php echo $_SESSION['fbdata']['first_name']; ?>">
                <label for="defaultForm-email">First Name</label>
            </div>

            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="defaultForm-name" class="form-control" name="last_name" value="<?php echo $_SESSION['fbdata']['last_name']; ?>">
                <label for="defaultForm-pass">Last Name</label>
            </div>
             <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="defaultForm-email" class="form-control" name="email" value="<?php echo $_SESSION['fbdata']['email']; ?>">
                <label for="defaultForm-pass">Email</label>
            </div>
            <div class="md-form">
                <i class="fa fa-phone-square prefix grey-text"></i>
                <input type="text" id="defaultForm-phone" class="form-control" name="phone">
                <label for="defaultForm-pass">Phone No</label>
            </div> 
            <div class="row">
                <div class="col-lg-4" style="margin-top: 10px;">
                    <div class="md-form">
                    <label for="defaultForm-pass">Role</label>
                </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <select id="type" name="role">
                          <option value="Student">Student</option>
                          <option value="Teacher">Teacher</option>
                        </select>
                    </div>
                </div>
            </div>
   
                        
            <div class="text-center">
                <button type="submit" class="btn btn-default" name="submit">Sign Up&nbsp;<i class="fa fa-sign-in prefix"></i></button>
                <a class="btn btn-default" href="<?php echo $logoutURL; ?> ">Logout <i class="fa fa-sign-out prefix"></i></a>
            </div>        
        </form>

    </div>
    <div class="card-footer">
        <?php if(isset($msg)):?>
        <?php $flag=1; ?>
            <div class="alert alert-info">
                <strong><?php echo $msg ; ?>
                </strong><a href="./index.php" class="btn btn-default">Go To Home Page</a>
            </div>  
        <?php endif;?>  
    </div>
    </div>
</div>

<!-- Form login -->
</div>
</div>
<!--/.Mask-->
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
<?php if($flag == 1):?>
<script type="text/javascript">
    $('#formContent').hide();
    $('.card-header').hide();
    <?php 
    unset($_SESSION['facebook_access_token']);

// Remove user data from session
unset($_SESSION['userData']);
unset($_SESSION['fbdata']);
?>
</script>
<?php endif; ?>
</body>

</html>