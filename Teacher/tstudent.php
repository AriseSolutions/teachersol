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

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: -1px;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
            .table-responsive{
                overflow-y: hidden;
            }
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url(img/header.jpg)no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>

</head>

<body>

    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Cources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Student</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!--/.Navbar-->
    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
            <ul class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive font-bold">My Student..</h1></li>
                <li>
                <hr class="hr-light">
            </ul>
        </div>
    </div>
    <!--/.Mask-->
    <br>

<!-- Table Section -->

<div class="container">
 <!--Section: Best Features-->
            <section id="best-features" class="text-center">
                <!-- Heading -->
                <h2 class="mb-4 font-weight-bold">Student</h2>
                <hr class="hr-dark">
<!--Table-->
<div class="row">
    <div class="col-lg-4">
        <h2 class="mb-4 font-weight-bold">Manage Student</h2>
    </div>
    <div class="col-lg-8">
<table class="table table-responsive table-bordered">

    <!--Table head-->
    <thead class="mdb-color darken-3">
        <tr class="text-white">
            <th>Course Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a><i class="fa fa-edit"></i>Edit</a></td>
            <td><a><i class="fa fa fa-trash-o"></i>Delete</a></td>
            <td><a><i class="fa fa fa-refresh"></i>Update</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td><a><i class="fa fa-edit"></i>Edit</a></td>
            <td><a><i class="fa fa fa-trash-o"></i>Delete</a></td>
            <td><a><i class="fa fa fa-refresh"></i>Update</a></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a><i class="fa fa-edit"></i>Edit</a></td>
            <td><a><i class="fa fa fa-trash-o"></i>Delete</a></td>
            <td><a><i class="fa fa fa-refresh"></i>Update</a></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td><a><i class="fa fa-edit"></i>Edit</a></td>
            <td><a><i class="fa fa fa-trash-o"></i>Delete</a></td>
            <td><a><i class="fa fa fa-refresh"></i>Update</a></td>
        </tr>
    </tbody>

    <!--Table body-->
</table>
</div>
</div>
<div class="d-flex justify-content-center">
    <!--Pagination -->
    <nav class="mt-4 pt-2 mb-2">
        <ul class="pagination pagination-circle pg-darkgrey mb-0">
        <!--First-->
            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>
            <!--Arrow left-->
            <li class="page-item disabled">
                <a class="page-link waves-effect waves-effect" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        <!--Numbers-->
            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

            <!--Arrow right-->
            <li class="page-item">
                <a class="page-link waves-effect waves-effect" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        <!--First-->
            <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>
        </ul>
    </nav>
    <!--/Pagination -->
</div>
</section>
</div>

<!-- /.Table Section -->
<br>

    <!--Footer-->
    <footer class="page-footer blue center-on-small-only unique-color-dark pt-0">

        <!-- Social buttons -->
        <div class="unique-color">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5">
                        <h6 class="mb-0 white-text my-2">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-md-right">
                        <!--Facebook-->
                        <a class="icons-sm fb-ic"><i class="fa fa-facebook white-text mr-4"> </i></a>
                        <!--Twitter-->
                        <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-4"> </i></a>
                        <!--Google +-->
                        <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-4"> </i></a>
                        <!--Linkedin-->
                        <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-4"> </i></a>
                        <!--Instagram-->
                        <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-4"> </i></a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                    <h6 class="title font-bold"><strong>Company name</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold"><strong>Products</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">MDBootstrap</a></p>
                    <p><a href="#!">MDWordPress</a></p>
                    <p><a href="#!">BrandFlow</a></p>
                    <p><a href="#!">Bootstrap Angular</a></p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 class="title font-bold"><strong>Useful links</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="title font-bold"><strong>Contact</strong></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="#"> MDBootstrap</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>