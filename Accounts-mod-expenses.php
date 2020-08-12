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
</head>
<body class="smallscreen fixed-left-void">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("header.php");
                            include_once("db_functions.php");
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Accounts-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->





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
                                <div class="card-box table-responsive">
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Expenses </h4>

                                    <div class="table-responsive">
                                        <!-- tablesaw table m-b-0 tablesaw-columntoggle table-bordered -->
                                        <table id="datatable" class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered ">
                                            <?php
                                            // ---------------
                                            if (isset($_REQUEST['submit'])) {
                                            $sql = 'INSERT INTO `ac_rev_exp`(`rev_exp_id`, `user_id`, `user_date`, `date_of_rev_exp`, `account_id`, `account_title`, `exp_by_scction`, `exp_amount`, `check_by`, `paid_using`, `paid_amount`, `comments`, `check_date`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['date_of_rev_exp'].'\', \''.$_REQUEST['account_id'].'\', \''.$_REQUEST['account_title'].'\', \''.$_REQUEST['exp_by_scction'].'\', \''.$_REQUEST['exp_amount'].'\', \''.$_REQUEST['check_by'].'\', \''.$_REQUEST['paid_using'].'\', \''.$_REQUEST['paid_amount'].'\', \''.$_REQUEST['comments'].'\', \''.$_REQUEST['check_date'].'\')';
                                            insert_query($sql);
                                                }
                                            // -------------------

                                            ///edit code
                                            check_edit("ac_rev_exp","rev_exp_id");
                                            edit_display("ac_rev_exp","rev_exp_id");
                                            //end of edit code -shift view below delete

                                            // -------------------

                                            if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ac_rev_exp` WHERE `ac_rev_exp`.`rev_exp_id` = '.$_REQUEST['deleteid'];

                                            insert_query($sql);
                                            // echo "done deleting";
                                                }
                                            // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                            $sql = 'SELECT `rev_exp_id`"ID", `date_of_rev_exp`"Date of Asset liability", `account_id`"Account ID", `account_title`"Account Title", `exp_by_scction`"Expenses by Section", `exp_amount` "Expenses Amount", `check_by`"Check By", `paid_using`"Paid Using", `paid_amount`"Paid Amount", `comments`"Comments", `check_date`"Check Date" FROM `ac_rev_exp`';
                                            display_query($sql);

                                            ?>
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
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Expenses Form </h4>

                                        <form action="Accounts-mod-expenses.php" method="post">


                                            <div class="form-group">
                                                <label for="prID">Date of Expenses </label>
                                                <input type="date" name="date_of_rev_exp" required="" placeholder="Enter date of asset liability" class="form-control" id="prID" value="<?php if(isset($_REQUEST['date_of_rev_exp  '])) echo $_REQUEST['date_of_rev_exp  '] ?>" >
                                            </div>
                                        
                                   
                                            <div class="form-group">
                                                <label for="prName">Account ID</label>
                                                <input type="text" name="account_id" required="" placeholder="Enter account id" class="form-control" id="prName" value="<?php if(isset($_REQUEST['account_id'])) echo $_REQUEST['account_id'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Account Title</label>
                                                <input type="text" name="account_title" required="" placeholder="Enter account title" class="form-control" id="prName" value="<?php if(isset($_REQUEST['account_title'])) echo $_REQUEST['account_title'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Expenses by Section</label>
                                                <input type="text" name="exp_by_scction" required="" placeholder="Enter section" class="form-control" id="prName" value="<?php if(isset($_REQUEST['exp_by_scction'])) echo $_REQUEST['exp_by_scction'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Expenses Amount</label>
                                                <input type="number" name="exp_amount" required="" placeholder="Enter account" class="form-control" id="prName" value="<?php if(isset($_REQUEST['exp_amount'])) echo $_REQUEST['exp_amount'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Check By</label>
                                                <input type="text" name="check_by" required="" placeholder="Enter check by" class="form-control" id="prName" value="<?php if(isset($_REQUEST['check_by'])) echo $_REQUEST['check_by'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Paid Using</label>
                                                <input type="text" name="paid_using" required="" placeholder="Enter paid using" class="form-control" id="prName" value="<?php if(isset($_REQUEST['paid_using'])) echo $_REQUEST['paid_using'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Paid Amount</label>
                                                <input type="number" name="paid_amount" required="" placeholder="Enter paid amount" class="form-control" id="prName" value="<?php if(isset($_REQUEST['paid_amount'])) echo $_REQUEST['paid_amount'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prName">Check Date</label>
                                                <input type="date" name="check_date" required="" placeholder="Enter check date" class="form-control" id="prName" value="<?php if(isset($_REQUEST['check_date'])) echo $_REQUEST['check_date'] ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="prName">Comments</label>
                                                <input type="text" name="comments" required="" placeholder="Enter comments" class="form-control" id="prName" value="<?php if(isset($_REQUEST['comments'])) echo $_REQUEST['comments'] ?>" >
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
            <!-- Form end -->


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