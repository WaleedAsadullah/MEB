<!DOCTYPE html>
<htm>
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
                            include_once("Admin-mod-header.php");
                            include_once("db_functions.php");
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->
    <!-- table -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div style="text-align: center" >
                                         <a  href="admin-mod-student-addmission-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light m-b-5"  >+ Add</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light m-b-5" > Export </button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- form -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px;"> Course planning </h4>
                                    <br>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>SNo.</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Details</th>
                                            </tr>
                                            </thead>
                                            <tbody id="addFrmPrint">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>

                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>5th</td>
                                                    <td>Maths</td>
                                                    <td>8/9/2020</td>
                                                    <td>Title</td>
                                                    <td>Details...........</td>
                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>5th</td>
                                                    <td>Maths</td>
                                                    <td>8/9/2020</td>
                                                    <td>Title</td>
                                                    <td>Details...........</td>
                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>5th</td>
                                                    <td>Maths</td>
                                                    <td>8/9/2020</td>
                                                    <td>Title</td>
                                                    <td>Details...........</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- form end -->
                        </div>
                    </div>
                </div>
            </div>
    <!-- table end -->


            <!-- table -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px;">Course planning</h4>
                                    <?php

                                        //echo "test";
                                        if(isset($_REQUEST['submit'])){
                                            //print_r($_REQUEST);
                                            $sql = 'INSERT INTO `ad_course_planning` (`course_planning_id`, `user_id`, `user_date`, `class`, `subject`, `date`, `title`, `details`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['class'].'\', \''.$_REQUEST['subject'].'\', \''.$_REQUEST['date'].'\', \''.$_REQUEST['title'].'\', \''.$_REQUEST['details'].'\')';
                                            // echo $sql;
                                            insert_query($sql);
                                        }
                                    ?>

                                    <form action="Admin-mod-course-planning.php" method="post">

                                        <div class="form-group">
                                            <label for="cpClass">Class</label>
                                            <input type="text" name="class" required placeholder="Enter class" class="form-control" id="cpClass"
                                            value="<?php if(isset($_REQUEST['class'])) echo $_REQUEST['class']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpSubject">Subject</label>
                                            <input type="text" name="subject" required
                                                   placeholder="Enter subject" class="form-control" id="cpSubject"
                                                   value="<?php if(isset($_REQUEST['subject'])) echo $_REQUEST['subject']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpDate">Date</label>
                                            <input id="cpDate" type="date" name="date" placeholder="Enter date" required
                                                   class="form-control"
                                                   value="<?php if (isset($_REQUEST['date'])) echo $_REQUEST['date']; else echo (date("Y-m-d")); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="cpTitle">Title</label>
                                            <input type="text" name="title" 
                                                   placeholder="Enter title" class="form-control" id="cpTitle"
                                                   value="<?php if(isset($_REQUEST['title'])) echo $_REQUEST['title']?>">
                                        </div>
                                          
                                        <div class="form-group">
                                            <label for="lcDateOfBirthW">Details</label>
                                            <textarea type="textarea" name="details" row = "2"placeholder="Enter details" 
                                            class="form-control" id="lcDateOfBirthW"
                                            ><?php if(isset($_REQUEST['details'])) echo $_REQUEST['details']?></textarea>
                                        </div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" name="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>

                    </div>
                </div>
            <!-- table end -->



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
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

</body>
</html>