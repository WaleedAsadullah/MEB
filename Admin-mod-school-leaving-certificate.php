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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px; font-weight: 300"> School leaving certificate </h4>
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
                                                <th>Serial no.</th>
                                                <th>General register no.</th>
                                                <th>Name of the pupil in full</th>
                                                <th>Race and caste with surname</th>
                                                <th>Place of birth</th>
                                                <th>Date of birth(in figures)</th>
                                                <th>Date of birth(in words)</th>
                                                <th>last school attended</th>
                                                <th>Date of Admission</th>
                                                <th>Progress in studies</th>
                                                <th>Conduct</th>
                                                <th>date of leaving school</th>
                                                <th>Class in which studying</th>
                                                <th>and since when</th>
                                                <th>Reason of leaving school</th>
                                                <th>Remarks</th>
                                                <th>Date</th>
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
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
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
                                                    <td>651</td>
                                                    <td>8976</td>
                                                    <td>Fazal khan</td>
                                                    <td>Khan</td>
                                                    <td>Karachi</td>
                                                    <td>12/25/1998</td>
                                                    <td>december twelve nineteen ninety-eight</td>
                                                    <td>the smart school</td>
                                                    <td>6/8/2015</td>
                                                    <td>normal</td>
                                                    <td>sir aslam</td>
                                                    <td>7/6/2020</td>
                                                    <td>6th</td>
                                                    <td>2015</td>
                                                    <td>transport issue</td>
                                                    <td>thhek hai</td>
                                                    <td>8/6/2020</td>

                                                    <th></th>
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px; font-weight: 300"> School leaving certificate Form </h4>
                                    <?php


                                        // echo "test";
                                        if(isset($_REQUEST['submit'])){
                                            // print_r($_REQUEST);
                                            
                                            $sql = 'INSERT INTO `ad_school_leaving_certificate` (`school_leaving_certificate_id`, `user_id`, `user_date`, `name`, `surname`, `place_birth`, `date_of_birth`, `birth_word`, `last_school`, `date_of_admission`, `progress`, `conduct`, `leaving_date`, `class_studing`, `since`, `reason`, `remarks`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['surname'].'\', \''.$_REQUEST['place_birth'].'\', \''.$_REQUEST['date_of_birth'].'\', \''.$_REQUEST['birth_word'].'\', \''.$_REQUEST['last_school'].'\', \''.$_REQUEST['date_of_admission'].'\', \''.$_REQUEST['progress'].'\', \''.$_REQUEST['conduct'].'\', \''.$_REQUEST['leaving_date'].'\', \''.$_REQUEST['class_studing'].'\', \''.$_REQUEST['since'].'\', \''.$_REQUEST['reason'].'\', \''.$_REQUEST['remarks'].'\')';
                                            // echo $sql;

                                        insert_query($sql);
                                    }

                                    ?>

                                    <form action="Admin-mod-school-leaving-certificate.php" method="post" >

                                        <div class="form-group">
                                            <label for="lcName">1. Name of the pupil in full</label>
                                            <input type="text" name="name" required placeholder="Enter name of the pupil in full" class="form-control" id="lcnName" parsley-trigger="change"
                                            value="<?php if(isset($_REQUEST['name'])) echo$_REQUEST['name'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="father'sname">2. Race and caste with surname</label>
                                            <input type="text" name="surname" required
                                                   placeholder="Enter race and caste with surname" class="form-control" id="adfathersname" value="<?php if(isset($_REQUEST['surname'])) echo $_REQUEST['surname'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcPlaceOfBirth">3. Place of birth</label>
                                            <input id="lcPlaceOfBirth" type="text" name="place_birth" placeholder="Enter place of birth"
                                                   class="form-control"  value="<?php if(isset($_REQUEST['place_birth'])) echo $_REQUEST['place_birth']  ?>" >
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcDateOfBirthF">4. Date of birth (in figures)</label>
                                                    <input type="date" name="date_of_birth" required  placeholder="Enter date of birth" class="form-control" id="lcDateOfBirthF"
                                                    value="<?php if(isset($_REQUEST['date_of_birth'])) echo $_REQUEST['date_of_birth'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcDateOfBirthW">Date of birth (in words)</label>
                                                    <input type="text" required name="birth_word" placeholder="Enter in words" class="form-control" id="lcDateOfBirthW"
                                                           value="<?php if(isset($_REQUEST['birth_word'])) echo $_REQUEST['birth_word']  ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lcLastSchool">5.Last school attended</label>
                                            <input  type="text" required name="last_school" placeholder="Enter last school attended " class="form-control" id="lcLastSchool" value="<?php if(isset($_REQUEST['last_school'])) echo $_REQUEST['last_school'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="lcDAteAdmission">6. Date of Admission</label>
                                            <input type="date" name="date_of_admission" required placeholder="Enter date of admission" class="form-control" id="lcDAteAdmission" value="<?php if(isset($_REQUEST['date_of_admission'])) echo $_REQUEST['date_of_admission']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcLastSchool">7.progress in studies</label>
                                            <input  type="text" name="progress" placeholder="Enter progress in studies" class="form-control" id="lcLastSchool" value="<?php if(isset($_REQUEST['progress'])) echo $_REQUEST['progress']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcConduct">8. Conduct</label>
                                            <input  type="text" name="conduct" placeholder="Enter conduct" class="form-control" id="lcConduct" value="<?php if(isset($_REQUEST['conduct'])) echo $_REQUEST['conduct'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcDateOfLeaving">9. Date of leaving school</label>
                                            <input  type="date" name="leaving_date" required placeholder="Enter date of leaving school" class="form-control" id="lcConduct"   value="<?php if (isset($_REQUEST['leaving_date'])) echo $_REQUEST['leaving_date']; else echo (date("Y-m-d")); ?>">
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcClassInWhich">10. Class in which studying</label>
                                                    <input type="text" name="class_studing" required placeholder="Enter class in which studying" class="form-control" id="lcClassInWhich" value="<?php if(isset($_REQUEST['class_studing'])) echo $_REQUEST['class_studing']  ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcWhen">and since when</label>
                                                    <input type="text" name="since" required placeholder="Enter since when" class="form-control" id="lcWhen"
                                                           value="<?php if(isset($_REQUEST['since'])) echo $_REQUEST['since'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lcReason">11. Reason of leaving school</label>
                                            <input  type="text" name="reason" required placeholder="Enter reason of leaving school" class="form-control" id="lcReason" value="<?php if(isset($_REQUEST['reason'])) echo $_REQUEST['reason'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcRemarks">12. Remarks</label>
                                            <textarea id="lcRemarks" name="remarks" class="form-control" rows="2" placeholder="Enter remarks ...."><?php if(isset($_REQUEST['remarks'])) echo $_REQUEST['remarks'] ?></textarea>
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"  name="submit">
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
