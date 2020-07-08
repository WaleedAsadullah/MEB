<!DOCTYPE html>
<htm>
<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

                <!-- form Uploads -->
        <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />


        <title>Admin - The Brainic School</title>
        <!-- App CSS -->
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
                            include_once("Admin-mod-header.php")
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

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Print</th>
                                                <th>Clone</th>
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
                                                    <td ><a href="print.php" class="zmdi zmdi-local-printshop"></a></td>
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

                                    <form action="#" >

                                        <div class="form-group">
                                            <label for="lcName">1. Name of the pupil in full</label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   placeholder="Enter name of the pupil in full" class="form-control" id="lcnName">
                                        </div>

                                        <div class="form-group">
                                            <label for="father'sname">2. Race and caste with surname</label>
                                            <input type="text" name="father'sname" parsley-trigger="change" required
                                                   placeholder="Enter father's name" class="form-control" id="adfathersname">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcPlaceOfBirth">3. Place of birth</label>
                                            <input id="lcPlaceOfBirth" type="text" placeholder="Enter place of birth" required
                                                   class="form-control">
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcDateOfBirthF">4. Date of birth (in figures)</label>
                                                    <input data-parsley-equalto="#pass1" type="date" required
                                                           placeholder="Enter date of birth" class="form-control" id="lcDateOfBirthF">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcDateOfBirthW">Date of birth (in words)</label>
                                                    <input data-parsley-equalto="#pass1" type="text" required
                                                           placeholder="Enter in words" class="form-control" id="lcDateOfBirthW">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lcLastSchool">5.Last school attended</label>
                                            <input  type="text" required
                                                           placeholder="Enter last school attended " class="form-control" id="lcLastSchool">
                                        </div>

                                        <div class="form-group">
                                                    <label for="lcDAteAdmission">6. Date of Admission</label>
                                                    <input data-parsley-equalto="#pass1" type="date" required
                                                           placeholder="Enter date of admission" class="form-control" id="lcDAteAdmission">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcLastSchool">7.progress in studies</label>
                                            <input  type="text" required
                                                           placeholder="Enter progress in studies" class="form-control" id="lcLastSchool">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcConduct">8. Conduct</label>
                                            <input  type="text" required
                                                           placeholder="Enter conduct" class="form-control" id="lcConduct">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcDateOfLeaving">9. Date of leaving school</label>
                                            <input  type="date" required
                                                           placeholder="Enter date of leaving school" class="form-control" id="lcConduct">
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcClassInWhich">10. Class in which studying</label>
                                                    <input data-parsley-equalto="#pass1" type="tel" required
                                                           placeholder="Enter class in which studying" class="form-control" id="lcClassInWhich">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="lcWhen">and since when</label>
                                                    <input data-parsley-equalto="#pass1" type="tel" required
                                                           placeholder="Enter since when" class="form-control" id="lcWhen">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lcReason">11. Reason of leaving school</label>
                                            <input  type="text" required
                                                           placeholder="Enter reason of leaving school" class="form-control" id="lcReason">
                                        </div>
                                        <div class="form-group">
                                            <label for="lcRemarks">12. Remarks</label>
                                            <textarea id="lcRemarks" class="form-control" rows="2" placeholder="Enter remarks ...."></textarea>
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light"  id="adsubmit" onclick ="addmissionFormAdd()">
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
