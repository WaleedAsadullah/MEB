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
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->



            <!-- attendance table -->

            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div style="text-align: center" >
                                         <a  href="admin-mod-student-attendance-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light m-b-5"  >+  Add</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light m-b-5" > Export </button></a>
                                    </div>
                                </div>
                            </div>

                            <!-- input form -->


                            <!-- input form -->
                                <div class="col-lg-12">
                                    <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px">Teacher attendance sheet</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <?php
                                            // -------------------------
                                            //echo "test";
                                            if(isset($_REQUEST['submit'])){
                                            //print_r($_REQUEST);
                                            $sql = 'INSERT INTO `ad_teacher_attendance`(`teacher_attendance_id`, `user_id`, `user_date`, `name`, `id_num`, `status`, `date`) VALUES (NULL, \'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['id_num'].'\', \''.$_REQUEST['status'].'\', \''.$_REQUEST['date_td'].'\')';
                                            // echo $sql;
                                            insert_query($sql);
                                                }
                                            // -----------------------
                                                ///edit code
                                       
                                            check_edit("ad_teacher_attendance","teacher_attendance_id");
                                            edit_display("ad_teacher_attendance","teacher_attendance_id");
                                     
                                            //end of edit code -shift view below delete


                                            // -----------------------

                                            if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ad_teacher_attendance` WHERE `ad_teacher_attendance`.`teacher_attendance_id` = '.$_REQUEST['deleteid'];

                                            insert_query($sql);
                                                    // echo "done deleting";
                                                }
                                               // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                                $sql = 'SELECT `teacher_attendance_id`"ID",`name`"Name", `id_num`"Gr No.", `status` Status, `date`"Date" FROM `ad_teacher_attendance` ';
                                                display_query_attendance_teacher($sql);

                                            // -------------------------
                                            ?>
                                            <!-- <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>
                                                        <label for="saDate">Date</label>
                                                        <input id="zaAddressOfGuardian" type="date"  class="form-control" data-parsley-id="8">
                                                    </th>
                                                </tr>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Teacher's Name</th>
                                                <th>ID No.</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Ali Haider</td>
                                                    <td>00001</td>
                                                    <td><span class="label label-danger">Absent</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Hamza Farooq</td>
                                                    <td>00006</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Fraooq Khan</td>
                                                    <td>00076</td>
                                                    <td><span class="label label-pink">Late</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Fazal Khan</td>
                                                    <td>00087</td>                                                    
                                                    <td><span class="label label-success">Present</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Fazeel Ali</td>
                                                    <td>00889</td>
                                                    <td><span class="label label-warning">Excused</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Ammar Rauf</td>
                                                    <td>00949</td>                                                    
                                                    <td><span class="label label-primary">Alerts on Absences</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td></td>
                                                    <td>Abdullah Asad</td>
                                                    <td>00753</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <td>26/04/2016</td>
                                                </tr>

                                            </tbody> -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div >
                                        <div>
                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Teacher attendance </h4>
                                            <?php

                                                //echo "test";
                                                if(isset($_REQUEST['submit'])){
                                                    //print_r($_REQUEST);
                                                    $sql = 'INSERT INTO `ad_teacher_attendance`(`teacher_attendance_id`, `user_id`, `user_date`, `name`, `id_num`, `status`, `date`) VALUES (NULL, \'';
                                                    $sql .= get_curr_user();
                                                    $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['id_num'].'\', \''.$_REQUEST['status'].'\', \''.$_REQUEST['date_td'].'\')';
                                                    // echo $sql;
                                                    insert_query($sql);
                                                }
                                            ?>
                                        <form action="Admin-mod-teacher-attendance.php" method="post">

                                            <div class="form-group">
                                                <label for="zaStudentsName">Teacher's Name </label>
                                                <input type="text" name="name" required="" placeholder="Enter teacher's name" class="form-control" id="zaStudentsName" value="<?php if (isset($_REQUEST['name'])) echo $_REQUEST['name'];  ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="id_num">ID #</label>
                                                <input type="text" name="id_num" parsley-trigger="change" required="" placeholder="Enter ID#" class="form-control" value="<?php if(isset($_REQUEST['id_num'])) echo $_REQUEST['id_num']; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select type="text" name="status" parsley-trigger="change" required  class="form-control" id="zaEligible">
                                                    <option value="Present" <?php if (isset($_REQUEST['status']) && $_REQUEST['status']== "Present" ) echo "selected";  ?>>Present</option>
                                                    <option value="Absent" <?php if (isset($_REQUEST['status']) && $_REQUEST['status']== "Absent" ) echo "selected";  ?>>Absent</option>
                                                    <option value="Late"  <?php if (isset($_REQUEST['status']) && $_REQUEST['status']== "Late" ) echo "selected";  ?>>Late</option>
                                                    <option value="Excused"  <?php if (isset($_REQUEST['status']) && $_REQUEST['status']== "Excused" ) echo "selected";  ?>>Excused</option>
                                                    <option value="Alerts on Absences" <?php if (isset($_REQUEST['status']) && $_REQUEST['status']== "Alerts on Absences" ) echo "selected";  ?>>Alerts on Absences</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="data_td">Date</label>
                                                <input type="date"  name="date_td" value="<?php if (isset($_REQUEST['date_td'])) echo $_REQUEST['date_td']; else echo (date("Y-m-d")); ?>" parsley-trigger="change" required="" placeholder="Enter GR#" class="form-control" >
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