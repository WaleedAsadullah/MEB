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
<body class="smallscreen fixed-left-void">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Accounts-mod-header.php");
                            include_once("db_functions.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Accounts-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->



            <!--  -->
            <!--  -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div class="m-t-5 m-b-5" style="text-align: center" >
                                         <a  href="admin-mod-student-addmission-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light"  >+ Add</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > Export </button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <?php

                                    if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){  echo $sql = 'DELETE FROM `ac_annual_appraisal` WHERE `ac_annual_appraisal`.`increment_form_id` = '.$_REQUEST['deleteid'];

                                        insert_query($sql);
                                        // echo "done deleting";
                                        }
                                   $sql = "SELECT * FROM `ac_annual_appraisal`";

                                     // echo $sql = 'SELECT `increment_form_id` "ID" , `user_id` "user inputted", `user_date` "Date of increment", `gr_number`, `salary_increment`, `new_salary`, `comment` FROM `ac_annual_appraisal`' ;
                                    display_query($sql);

                                ?>
                                
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

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px; padding: 10px">Increment Form</h4>
                                    <br>
                                    <?php

                                        // echo "test";
                                        if(isset($_REQUEST['submit'])){
                                            // print_r($_REQUEST);
                                            $sql = 'INSERT INTO `ac_annual_appraisal` (`increment_form_id`, `user_id`, `user_date`, `gr_number`, `salary_increment`, `new_salary`, `comment`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['gr_number'].'\', \''.$_REQUEST['salary_increment'].'\', \''.$_REQUEST['new_salary'].'\', \''.$_REQUEST['comment'].'\')';
                                            // echo $sql;
                                            insert_query($sql);
                                        }
                                    ?>

                                    <form action="Accounts-mod-annual-appraisal-for-bonus-and-increment.php" method="post">

                                        <div class="form-group">
                                            <label for="emailAddress">Employee ID *</label>
                                            <input type="text" name="gr_number"  required="" placeholder="Enter teacher ID" class="form-control" value="<?php if(isset($_REQUEST['gr_number'])) echo $_REQUEST['gr_number']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Employee Name</label>
                                            <input type="text" name="name"  required="" placeholder="Enter employee name" class="form-control" id="userName" value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="userName">old salary*</label>
                                            <input type="number" name="old_salary"required="" placeholder="Enter tacher old salary" class="form-control" value="<?php if(isset($_REQUEST['old_salary'])) echo $_REQUEST['old_salary']?>">
                                        </div>

                                        <div class="form-group">
                                            <label >Salary increment *</label>
                                            <input type="number" name="salary_increment" placeholder="Enter salary increment" required="" class="form-control" value="<?php if(isset($_REQUEST['salary_increment'])) echo $_REQUEST['salary_increment']?>" >
                                        </div>

                                        <div class="form-group">
                                            <label >New salary *</label>
                                            <input type="number"  name="new_salary" placeholder="Enter teacher new salary" required="" class="form-control" value="<?php if(isset($_REQUEST['new_salary'])) echo $_REQUEST['new_salary']?>">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="">Comments</label>
                                            <div >
                                                <textarea class="form-control" rows="3" name="comment" placeholder="feedback area ....."><?php if(isset($_REQUEST['comment'])) echo $_REQUEST['comment']?></textarea>
                                            </div>
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
             <!-- footer -->
            <?php 
                include_once("footer.php")
            ?>

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