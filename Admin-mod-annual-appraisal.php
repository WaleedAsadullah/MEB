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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px;"> Annual appraisal </h4>
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
                                                <th>Empolyee Name</th>
                                                <th>Employee ID</th>
                                                <th>Position Held</th>
                                                <th>Work to full potential</th>
                                                <th>Honesty</th>
                                                <th>Productivity</th>
                                                <th>Attendance</th>
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
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>

                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fazal</td>
                                                    <td>00983</td>
                                                    <td>Admin</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>

                                                </tr>
                                                <tr >
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fazal</td>
                                                    <td>00983</td>
                                                    <td>Admin</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>

                                                </tr>
                                                <tr >
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fazal</td>
                                                    <td>00983</td>
                                                    <td>Admin</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>
                                                    <td>Excellent</td>

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
             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div >
                                        <div>
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

                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Annual appraisal form</h4>
                                        <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit'])){
                                                // print_r($_REQUEST);
                                                $sql = 'INSERT INTO `ad_annual_appraisal` (`annual_appraisal`, `user_id`, `user_date`, `id_num`, `position`, `potential`, `honesty`, `productivity`, `atendance`) VALUES (NULL,\'';
                                                $sql .= get_curr_user();
                                                $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['id_num'].'\', \''.$_REQUEST['position'].'\', \''.$_REQUEST['potential'].'\', \''.$_REQUEST['honesty'].'\', \''.$_REQUEST['productivity'].'\', \''.$_REQUEST['attendance'].'\')';
                                                // echo $sql;
                                                insert_query($sql);
                                            }
                                        ?>
                                        <br>

                                    <form action="Admin-mod-annual-appraisal.php" method="post">
                                        <div class="form-group">
                                            <label for="">Employee ID *</label>
                                            <input type="text" name="id_num" required placeholder="Enter employee ID" class="form-control" value="<?php if(isset($_REQUEST['id_num'])) echo $_REQUEST['id_num']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Employee Name *</label>
                                            <input type="text" name="name" required placeholder="Enter employee Name" class="form-control" id="userName" value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="pass1">Position Held</label>
                                            <input  type="text" name="position" placeholder="Enter position held" class="form-control"
                                            value="<?php if(isset($_REQUEST['position'])) echo $_REQUEST['position']?>">
                                        <!-- radio button -->
                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Works to full potential</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio11" value="Unsatisfactory" name="potential"  <?php if (isset($_REQUEST['potential']) && $_REQUEST['potential']== "unsatisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio11"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio12" value="Satisfactory" name="potential" <?php if (isset($_REQUEST['potential']) && $_REQUEST['potential']== "satisfactory" ) echo "checked";  ?> >
                                                <label for="inlineRadio12"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio13" value="Good" name="potential" <?php if (isset($_REQUEST['potential']) && $_REQUEST['potential']== "Good" ) echo "checked";  ?> >
                                                <label for="inlineRadio13"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio14" value="Excellent" name="potential" <?php if (isset($_REQUEST['potential']) && $_REQUEST['potential']== "Excellent" ) echo "checked";  ?> >
                                                <label for="inlineRadio14"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Honesty</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio21" value="Unsatisfactory" name="honesty" <?php if (isset($_REQUEST['honesty']) && $_REQUEST['honesty']== "Unsatisfactory" ) echo "checked";  ?> >
                                                <label for="inlineRadio21"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio22" value="Satisfactory" name="honesty"
                                                <?php if (isset($_REQUEST['honesty']) && $_REQUEST['honesty']== "Satisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio22"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio23" value="Good" name="honesty"
                                                <?php if (isset($_REQUEST['honesty']) && $_REQUEST['honesty']== "Good" ) echo "checked";  ?>>
                                                <label for="inlineRadio23"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio24" value="Excellent" name="honesty"
                                                <?php if (isset($_REQUEST['honesty']) && $_REQUEST['honesty']== "Excellent" ) echo "checked";  ?> >
                                                <label for="inlineRadio24"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Productivity</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio31" value="Unsatisfactory" name="productivity" 
                                                 <?php if (isset($_REQUEST['productivity']) && $_REQUEST['productivity']== "Unsatisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio31"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio32" value="Satisfactory" name="productivity" 
                                                 <?php if (isset($_REQUEST['productivity']) && $_REQUEST['productivity']== "Satisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio32"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio33" value="Good" name="productivity"
                                                 <?php if (isset($_REQUEST['productivity']) && $_REQUEST['productivity']== "Good" ) echo "checked";  ?>>
                                                <label for="inlineRadio33"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio34" value="Excellent" name="productivity"
                                                 <?php if (isset($_REQUEST['productivity']) && $_REQUEST['productivity']== "Excellent" ) echo "checked";  ?>>
                                                <label for="inlineRadio34"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Attendance</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio41" value="Unsatisfactory" name="attendance"
                                                <?php if (isset($_REQUEST['attendance']) && $_REQUEST['attendance']== "Unsatisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio41"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio42" value="Satisfactory" name="attendance"
                                                <?php if (isset($_REQUEST['attendance']) && $_REQUEST['attendance']== "Satisfactory" ) echo "checked";  ?>>
                                                <label for="inlineRadio42"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio43" value="Good" name="attendance"
                                                <?php if (isset($_REQUEST['attendance']) && $_REQUEST['attendance']== "Good" ) echo "checked";  ?>>
                                                <label for="inlineRadio43"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio44" value="Excellent" name="attendance"
                                                <?php if (isset($_REQUEST['attendance']) && $_REQUEST['attendance']== "Excellent" ) echo "checked";  ?>>
                                                <label for="inlineRadio44"> Excellent </label>
                                            </div>
                                        </div>


                                        <!-- radoio button end -->

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
                            </div><!-- end col -->
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