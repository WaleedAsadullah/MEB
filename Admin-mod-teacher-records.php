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
                            include_once("Admin-mod-header.php");
                            include_once("db_functions.php");
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php");
                    ?>

                    <!-- Sidebar -->





            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div class="m-t-5 m-b-5" style="text-align: center" >
                                         <a  href="admin-mod-student-addmission-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light"  >+ Addmission</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > Export </button></a>
                                    </div>
                                </div>
                            </div>
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Teacher Records </h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>CNIC</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>

                                            </tr>
                                            </thead>
                                            <tbody>
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
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Sir Aslam</td>
                                                    <td>Teacher</td>
                                                    <td>Class</td>
                                                    <td>29</td>
                                                    <td>23/5/2020</td>
                                                    <td>2,515</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Sir Aslam</td>
                                                    <td>Teacher</td>
                                                    <td>Class</td>
                                                    <td>29</td>
                                                    <td>23/5/2020</td>
                                                    <td>2,515</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Sir Aslam</td>
                                                    <td>Teacher</td>
                                                    <td>Class</td>
                                                    <td>29</td>
                                                    <td>23/5/2020</td>
                                                    <td>2,515</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Sir Aslam</td>
                                                    <td>Teacher</td>
                                                    <td>Class</td>
                                                    <td>29</td>
                                                    <td>23/5/2020</td>
                                                    <td>2,515</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Teacher Records </h4>

                                        <?php

                                            //echo "test";
                                            if(isset($_REQUEST['submit'])){
                                                //print_r($_REQUEST);
                                                $sql = 'INSERT INTO `teacher_records` (`Teacher_records_id`, `user_id`, `user_date`, `name`, `cnic`, `Position`, `Office`, `Age`, `start`, `salary`, `phone_number`, `address`, `comments`) VALUES (NULL,\'';
                                                $sql .= get_curr_user();
                                                $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['cnic'].'\', \''.$_REQUEST['position'].'\', \''.$_REQUEST['office'].'\', \''.$_REQUEST['age'].'\', \''.$_REQUEST['start'].'\', \''.$_REQUEST['salary'].'\', \''.$_REQUEST['phone_number'].'\', \''.$_REQUEST['address'].'\', \''.$_REQUEST['comment'].'\')';
                                                // echo $sql;
                                                insert_query($sql);
                                            }
                                        ?>

                                        <form action="Admin-mod-teacher-records.php" method="post">


                                            <div class="form-group">
                                                <label for="name">Name </label>
                                                <input type="text" name="name" required="" placeholder="Enter name" class="form-control" id="prID"
                                                value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                            </div>
                                        
                                   
                                            <div class="form-group">
                                                <label for="cnic">CNIC </label>
                                                <input type="number" name="cnic" required="" placeholder="Enter CNIC" class="form-control"
                                                value="<?php if(isset($_REQUEST['cnic'])) echo $_REQUEST['cnic']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="phone_number">Phone No. </label>
                                                <input type="tel" name="phone_number" required="" placeholder="Enter phone number" class="form-control"
                                                value="<?php if(isset($_REQUEST['phone_number'])) echo $_REQUEST['phone_number']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="position">Position</label>
                                                <input type="text" name="position" placeholder="Enter position" class="form-control" 
                                                value="<?php if(isset($_REQUEST['position'])) echo $_REQUEST['position']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="office">Office</label>
                                                <input type="number" name="office" placeholder="Enter office" class="form-control" id="prVacation"
                                                value="<?php if(isset($_REQUEST['office'])) echo $_REQUEST['office']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="number" name="age" placeholder="Enter age" class="form-control"
                                                value="<?php if(isset($_REQUEST['age'])) echo $_REQUEST['age']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="start">Start date</label>
                                                <input type="date" name="start" required class="form-control" 
                                                value="<?php if (isset($_REQUEST['start'])) echo $_REQUEST['start']; else echo (date("Y-m-d")); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="salary">Salary</label>
                                                <input type="number" name="salary" required="" placeholder="Enter salary" class="form-control" 
                                                value="<?php if(isset($_REQUEST['salary'])) echo $_REQUEST['salary']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" placeholder="Enter address" class="form-control"  
                                                value="<?php if(isset($_REQUEST['address'])) echo $_REQUEST['address']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="comment">Comment</label>
                                                <textarea name="comment" rows="4" placeholder="comments........." class="form-control"data-parsley-id="6" value="<?php if(isset($_REQUEST['comment'])) echo $_REQUEST['comment']?>"></textarea>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
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
            <!-- Form end -->

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

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

</body>
</html>