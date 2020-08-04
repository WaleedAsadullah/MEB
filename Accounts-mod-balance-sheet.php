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

        <style>
            th,td{
                text-align: center;
            }
        </style>
</head>
<body class="smallscreen fixed-left-void">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Accounts-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Accounts-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->



            <!-- Income form end -->


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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px">Balance Sheet<br></h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="3"></th>
                                                    <th>Previous Year</th>
                                                    <th>Current Year</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th colspan="1" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-left"></i></button></a></th>
                                                    <th colspan="3" style="text-align: center;"><span>2019</span><span> / </span><span>2020</span></th>
                                                    <th colspan="1" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-right"></i></button></a></th>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td colspan="3" style="text-align: center;"><span style="margin: 0px 20px 0px"><i class="zmdi zmdi-edit"></i></span><span style="margin: 0px 20px 0px">
                                                    <i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></span>
                                                    <a href="print-expenditure.php"><span  style="margin: 0px 20px 0px"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></span></a>
                                                    <span style="margin: 0px 20px 0px"><i class="zmdi zmdi-copy"></i></span></td>
                                                    <td colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    


                                                </tr>
                                                
                                                <tr>
                                                    <th rowspan="13" style="vertical-align: middle;">Assets</th>
                                                    <th rowspan="7" style="vertical-align: middle;">Current Assets</th>
                                                    <td>Cash</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Investments</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Inventories</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Accounts receivable</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Pre-paid expenses</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Other</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <th>Total current assets</th>
                                                    <th>245,898</th>
                                                    <th>245,898</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="5"  style="vertical-align: middle;">Fixed Assets</th>
                                                    <td>Property and equipment</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Leashold Improvements</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Equity and other investments</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Less accumulated depreciatio</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <th>Total fixed assets</th>
                                                    <th>245,898</th>
                                                    <th>245,898</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="vertical-align: middle;"><u>Total Assets</u></th>
                                                    <th><u>498,098</u></th>
                                                    <th><u>498,098</u></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="5"><hr></th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="13"  style="vertical-align: middle;">Laibilities and owner's equity</th>
                                                    <th rowspan="7"  style="vertical-align: middle;">Current Assets</th>
                                                    <td>Accounts payable</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Accrued wages</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Accrued compensation</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Income taxes payable</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Uneamed revenue</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Other</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <th>Total current liabilities</th>
                                                    <th>245,898</th>
                                                    <th>245,898</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2"  style="vertical-align: middle;">Long-term liabilities</th>
                                                    <td>Mortgage payable</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <th>Total long-term liabilities</th>
                                                    <th>245,898</th>
                                                    <th>245,898</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="3"  style="vertical-align: middle;"> Owner's equity</th>
                                                    <td>Investments equity</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <td>Accumulated reained earning</td>
                                                    <td>54,980</td>
                                                    <td>56,756</td>
                                                </tr>
                                                <tr>
                                                    <th>Total owner's equity</th>
                                                    <th>245,898</th>
                                                    <th>245,898</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2"  style="vertical-align: middle;"><u>Total liabilities and owner's equity</u></th>
                                                    <th><u>498,098</u></th>
                                                    <th><u>498,098</u></th>
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