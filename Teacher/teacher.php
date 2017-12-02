<?php
if(!session_id()){
    session_start();
}

// Include FB config file && User class
require_once 'fbConfig.php';
require_once 'User.php';
require_once 'config.php';

$logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'logout.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Template styles -->
    
 

</head>

<body>

<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Navbar</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MyCourse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>   
                        
                    </ul>
              
                <!--Navbar icons-->
               
                         
                    <?php if(isset($_SESSION['userData'])):?>
                    <ul class="nav navbar-nav nav-flex-icons ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION['userData']['first_name'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $logoutURL; ?> ">Logout</a>
                        </li>  
                     </ul> 
                    <?php endif;?>                       
                              
               


                       
                </div>
    </div>
</nav>
<!--/.Navbar-->

    <!--Mask-->
<div class="view hm-black-light">
    <div class="full-bg-img flex-center">
        <ul class="animated fadeInUp">
            <li>
                <p>ThInspiration, Innovation and Discovery.</p>
            </li>
            <li>
                <h1 class="h1-responsive font-bold">Studying science from a new angle.</h1>
            </li>
            <li>
                <a class="btn btn-outline-white btn-lg waves-effect waves-light"><i class="fa fa-book left"></i> Learn more</a>
            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->
  
<section id="services" class="container section feature-box">

    <!--Section heading-->
    <h1 class="section-heading">Add Cources</h1>
    
    <!--Section description-->
    <p class="section-description lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

    <!--First row-->
    <div class="row features-big">
        <!--First column-->
        <div class="col-md-4 mb-r">
            <i class="fa fa-low-vision blue-text"></i>
            <h4 class="feature-title">Analytics</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-4 mb-r">
            <i class="fa fa-book green-text"></i>
            <h4 class="feature-title">Tutorials</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-md-4 mb-r">
            <i class="fa fa-user red-text"></i>
            <h4 class="feature-title">Relax</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!--/Third column-->
    </div>
    <!--/First row-->

</section>
<!--/Section: Features v.1-->

<!--Parllax-->
<div class="streak streak-lg streak-photo view" style="background-image:url('img/p.jpg')">
    <div class="flex-center  mask">
        <ul class="white-text smooth-scroll">
            <li><h2 class="h2-responsive wow fadeIn"><i class="fa fa-quote-left"></i> Design is not just what it looks like and feels like. Design is how it works. <i class="fa fa-quote-right"></i></h2></li>
            <li><h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.4s">~ Steve Jobs</h5></li>
        </ul>
    </div>
</div>
<!--/Parllax--> 
   
<section id="student" class="container section feature-box">
    <!--Section heading-->
    <h1 class="section-heading">My Student</h1>

    <div class="container">
        <div class="row">
       
            <div class="col-lg-4">
              <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            
            <div class="col-lg-4">
              <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            
            <div class="col-lg-4">
              <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Button</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>

        </div>
    </div>
</section>
<!--Streak section-->   
<div class="streak">
    <div class="flex-center">
       <ul>
          <li><h1 class="h1-responsive wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Want to hire me?</h1></li>
            <li><h4 class="h4-responsive wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">Send me a message at john@example.com</h4></li>
        </ul>
    </div>
</div>  
<!--/Streak section-->   

   
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer links-->
    <div class="container-fluid">
        <div class="row">
             <!--First column-->
            <div class="col-lg-3 col-md-6 ml-auto">
              <h5 class="title mb-3"><strong>About material design</strong></h5>
              <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>
              <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS</p>
            </div>
            <!--/.First column-->
            <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3"><strong>First column</strong></h5>
                <ul>
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>

            <!--/.Second column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3"><strong>Second column</strong></h5>
                    <ul>
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>

                <!--/.Third column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3"><strong>Third column</strong></h5>
                    <ul>
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4 class="mb-5">Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-danger" rel="nofollow">Sign up!</a></li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


<!--Modal: Login-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">   

    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                 </button>
            </div>

            <!--Body-->
            <div class="modal-body"> 
                 <!--Social Buttons Facebook & Gmail for Login-->              
                <div class="text-center mt-2">
                <a class="btn btn-danger waves-effect" href="#" role="button"><i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;Login with Gmail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>                    
                <div class="text-center mt-2">
                    <?php echo $output; ?><!--This Redirect to Facebook Login Page-->
                </div>
                <!--End of Social Buttons Facebook & Gmail for Login-->
            </div>

            <!--Body Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
            <!--End Body Footer-->

        </div>
    </div><!--/.Content-->                        
</div>
<!--/Modal: Login -->



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