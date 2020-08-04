<?php
include_once('session_end.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

          <title>The Brainic School</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
    </head>

<body class="fixed-left">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Admin-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->


            <!-- Form teacher -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px"> Student's Form</h4>

                                    <form action="#" data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <label for="userName">Student's Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter your name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Class *</label>
                                            <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter your class" class="form-control" id="emailAddress" data-parsley-id="6">
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Subject *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Roll Number *</label>
                                            <input id="pass1" type="password" placeholder="Roll number" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown1 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown2 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="passWord2">Feedback *</label>
                                            <div >
                                                <textarea class="form-control" rows="5" placeholder="feedback area ....."></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                <!-- se form-->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px"> Parent's Form</h4>

                                    <form action="#" data-parsley-validate="" novalidate="">
                                        <div class="form-group">
                                            <label for="userName">Parent's Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter your name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Student's Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter your name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Class *</label>
                                            <input type="email" name="number" parsley-trigger="change" required="" placeholder="Enter your class" class="form-control" id="emailAddress" data-parsley-id="6">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Roll Number *</label>
                                            <input id="pass1" type="password" placeholder="Roll number" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown1 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown2 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="passWord2">Feedback *</label>
                                                <div >
                                                    <textarea class="form-control" rows="5" placeholder="feedback area ....."></textarea>
                                                </div>
                                        </div>
                                       
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

</body>
</html>