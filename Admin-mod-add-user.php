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
                            include_once("db_functions.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->

            <!-- content -->
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
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px; font-weight: 300"> User </h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>SNo.</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>User name</th>
                                                <th>E-mail</th>
                                                <th>Class</th>
                                                <th>GR#</th>
                                                <th>Account</th>
                                                <th>Password</th>
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
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print-leaving-certificate.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>waleed asad</td>
                                                    <td>waleedasad27@gmail.com</td>
                                                    <td>7th</td>
                                                    <td>00987</td>
                                                    <td>Student</td>
                                                    <td>hu865j74</td>
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

            <!-- table -->
             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px; font-weight: 300"> Add user</h4>
                                    <?php

                                    if (isset($_POST['submit'])){
                                        $user = mysqli_real_escape_string(connect_db(), $_POST['name']);
                                        $e_mail = mysqli_real_escape_string(connect_db(), $_POST['e_mail']);
                                        $class = mysqli_real_escape_string(connect_db(), $_POST['class']);
                                        $account = mysqli_real_escape_string(connect_db(), $_POST['account']);
                                        $pass = mysqli_real_escape_string(connect_db(), $_POST['pass']);
                                         $cpass = mysqli_real_escape_string(connect_db(), $_POST['cpass']);

                                        $pas = password_hash($pass, PASSWORD_BCRYPT);
                                        $cpas = password_hash($cpass, PASSWORD_BCRYPT);

                                        $e_mailquary = " select * from ad_add_user where e_mail='$e_mail'";
                                        $query = mysqli_query(connect_db(),$e_mailquary);
                                        $e_mailcount = mysqli_num_rows($query);
                                        if($e_mailcount>0){
                                            echo 'already';
                                        }else{
                                            if( $pass ==  $pass){
                                                $insetquery = $sql = 'INSERT INTO `ad_course_planning` (`course_planning_id`, `user_id`, `user_date`, `class`, `subject`, `date`, `title`, `details`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['class'].'\', \''.$_REQUEST['subject'].'\', \''.$_REQUEST['date'].'\', \''.$_REQUEST['title'].'\', \''.$_REQUEST['details'].'\')';
                                                $iquery = insert_query($sql);
                                            }else{
                                                echo 'not same';
                                            }
                                        }
                                    }
                                    ?>

                                    <form action="Admin-mod-add-user.php" method="post" >

                                        <div class="form-group">
                                            <label for="lcName">User Name</label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   placeholder="Enter user name" class="form-control" id="lcnName">
                                        </div>

                                        <div class="form-group">
                                            <label for="father'sname">E-mail</label>
                                            <input type="email" required name="e_mail" 
                                                   placeholder="Enter e-mail" class="form-control" id="adfathersname">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcPlaceOfBirth">Class</label>
                                            <input id="lcPlaceOfBirth" name="class" type="text" placeholder="Enter class" required
                                                   class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="lcDateOfBirthF">GR#</label>
                                            <input data-parsley-equalto="#pass1" type="number" required
                                                   placeholder="Enter GR number" class="form-control" id="lcDateOfBirthF">
                                        </div>
                                        <div class="form-group">
                                            <label>Account</label>
                                            <select name="account" class="form-control">
                                                <option value="Student">Student</option>
                                                <option value="Parent">Parent</option>
                                            </select>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcDateOfBirthW">Password</label>
                                                    <input type="password" required name="pass" 
                                                           placeholder="Enter password" class="form-control" id="lcDateOfBirthW">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcLastSchool">Confirm password</label>
                                                    <input  type="password" required name="cpass" 
                                                                   placeholder="Confirm password " class="form-control" id="lcLastSchool">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light"  type="submit" name="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-3"></div>
                        </div>

                    </div>
                </div>
            <!-- table end -->

            <!-- content end -->

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
