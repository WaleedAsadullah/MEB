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

          <?php include_once("title.php") ?>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />


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
        <script >
            var today = new Date();
            console.log(today)
        </script>

    </head>


<body class="fixed-left">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("header.php");
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
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px">Student attendance sheet</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <?php

                                            //echo "test";
                                            if(isset($_REQUEST['submit'])){
                                            //print_r($_REQUEST);
                                            $sql = 'INSERT INTO `ad_std_attendance`(`std_attendance_id`, `user_id`, `user_date`, `name`, `gr_no`, `status`, `class`, `date`)VALUES (NULL, \'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['gr_no'].'\', \''.$_REQUEST['status'].'\', \''.$_REQUEST['class'].'\', \''.$_REQUEST['date'].'\')';
                                            //echo $sql;
                                            insert_query($sql);
                                            }

                                            ///edit code
                                       
                                            check_edit("ad_std_attendance","std_attendance_id");

                                            edit_display("ad_std_attendance","std_attendance_id");
                                     
                                            //end of edit code -shift view below delete

                                            if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ad_std_attendance` WHERE `ad_std_attendance`.`std_attendance_id` = '.$_REQUEST['deleteid'];

                                                insert_query($sql);
                                                // echo "done deleting";
                                                }
                                           // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                            $sql = 'SELECT `std_attendance_id`"ID", `name`"Name", `gr_no`"Gr No.", `status`"Status", `class`"Class", `date`"Date" FROM `ad_std_attendance` ';
                                            display_query_attendance($sql);

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
                                                    <th>
                                                    <th>
                                                        <label for="zaEligible">Class</label>
                                                        <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Eligible or not" class="form-control" id="zaEligible">
                                                            <option value="montessori">Montessori</option>
                                                            <option value="KG 1">KG 1</option>
                                                            <option value="KG 2">KG 2</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">Matric</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <label for="saDate">Date</label>
                                                        <input type="date" class="form-control" ">
                                                    </th>
                                                </tr>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Student Name</th>
                                                <th>GR No.</th>
                                                <th>Status</th>
                                                <th>Class</th>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
                                                    <td>1st</td>
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
            </dir>
        </div>




             <div class="content-page">
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <?php
                                    ?>
                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Student attendance </h4>
                                        <br>

                                        <form action="Admin-mod-student-attendance.php" method="post">

                                            <div class="form-group">
                                                <label for="zaStudentsName">Student's Name </label>
                                                <input type="text" name="name" required="" value="<?php if (isset($_REQUEST['name'])) echo $_REQUEST['name'];  ?>" placeholder="Enter student's name" class="form-control" id="zaStudentsName">
                                            </div>
                                            <div class="form-group">
                                                <label for="zaClass">Class </label>
                                                <select type="text" name="class" parsley-trigger="change" required="" placeholder="Eligible or not" class="form-control" id="zaEligible">
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "montessori" ) echo "selected";  ?> value="montessori">Montessori</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "KG 1" ) echo "selected";  ?> value="KG 1">KG 1</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "KG 2" ) echo "selected";  ?> value="KG 2">KG 2</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "1" ) echo "selected";  ?> value="1">1</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "2" ) echo "selected";  ?> value="2">2</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "3" ) echo "selected";  ?> value="3">3</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "4" ) echo "selected";  ?> value="4">4</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "5" ) echo "selected";  ?> value="5">5</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "6" ) echo "selected";  ?> value="6">6</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "7" ) echo "selected";  ?> value="7">7</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "8" ) echo "selected";  ?> value="8">8</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "9" ) echo "selected";  ?> value="9">9</option>
                                                    <option <?php if (isset($_REQUEST['Class']) && $_REQUEST['Class']== "10" ) echo "selected";  ?> value="10">Matric</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">GR #</label>
                                                <input type="text" name="gr_no" parsley-trigger="change" required="" value="<?php if (isset($_REQUEST['gr_no'])) echo $_REQUEST['gr_no'];  ?>"placeholder="Enter GR#" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">Status</label>
                                                <select type="text" name="status" parsley-trigger="change" required="" placeholder="Eligible or not" class="form-control" id="zaEligible">
                                                    <option value="Present">Present</option>
                                                    <option value="Absent">Absent</option>
                                                    <option value="Late">Late</option>
                                                    <option value="Excused">Excused</option>
                                                    <option value=" Alerts on Absence">  Alerts on Absence</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date"  name="date" value="<?php if (isset($_REQUEST['date'])) echo $_REQUEST['date']; else echo (date("Y-m-d")); ?>" parsley-trigger="change" required="" placeholder="Enter GR#" class="form-control" >
                                            </div>
                                            <div class="form-group text-right m-b-0">
                                                <?php 
                                                code_submit();
                                                ?>
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
                $('#datatable3').dataTable();
                $('#datatable3-keytable').DataTable( { keys: true } );
                $('#datatable3-responsive').DataTable();
                $('#datatable3-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable3-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>

</body>
</html>