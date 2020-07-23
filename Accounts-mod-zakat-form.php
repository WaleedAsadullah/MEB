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

                            <!-- input form -->


                            <!-- input form -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fees Concession Table</h4>

                                    <div class="table-responsive">
                                        <!-- tablesaw table m-b-0 tablesaw-columntoggle table-bordered -->
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>S <span>No.</span></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Student's Name</th>
                                                <th>Class</th>
                                                <th>G.R. No.</th>
                                                <th>Father's Name</th>
                                                <th>Grand Father's Name</th>
                                                <th>Surname</th>
                                                <th>Community Name</th>
                                                <th>Guardian's CNIC</th>
                                                <th>Contact / Phone Number</th>
                                                <th>Guardian's Occupation</th>
                                                <th>Monthly Income</th>
                                                <th>Is the Eligible For Zakat</th>
                                                <th>Guardian's Name & Relationship</th>
                                                <th>Residential Address of Guardian</th>
                                                <th>Previously granted free ship?</th>
                                                <th>Number of Dependents</th>
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

                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>waleedasad</td>
                                                    <td>8th</td>
                                                    <td>EP1866051</td>
                                                    <td>M.Asadullah</td>
                                                    <td>M.ShahkirUllah</td>
                                                    <td>Ullah</td>
                                                    <td>Muslim</td>
                                                    <td>42101-8383129-0</td>
                                                    <td>03174721487</td>
                                                    <td>supervisor</td>
                                                    <td>50,000</td>
                                                    <td>No</td>
                                                    <td>Father</td>
                                                    <td>F.B area, Karchi</td>
                                                    <td>No</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr >
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>waleed asad</td>
                                                    <td>8th</td>
                                                    <td>EP1866051</td>
                                                    <td>M.Asadullah</td>
                                                    <td>M.ShahkirUllah</td>
                                                    <td>Ullah</td>
                                                    <td>Muslim</td>
                                                    <td>42101-8383129-0</td>
                                                    <td>03174721487</td>
                                                    <td>supervisor</td>
                                                    <td>50,000</td>
                                                    <td>No</td>
                                                    <td>Father</td>
                                                    <td>F.B area, Karchi</td>
                                                    <td>No</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr >
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>waleed asad</td>
                                                    <td>8th</td>
                                                    <td>EP1866051</td>
                                                    <td>M.Asadullah</td>
                                                    <td>M.ShahkirUllah</td>
                                                    <td>Ullah</td>
                                                    <td>Muslim</td>
                                                    <td>42101-8383129-0</td>
                                                    <td>03174721487</td>
                                                    <td>supervisor</td>
                                                    <td>50,000</td>
                                                    <td>No</td>
                                                    <td>Father</td>
                                                    <td>F.B area, Karchi</td>
                                                    <td>No</td>
                                                    <td>6</td>
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
            </dir>
        </div>





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

                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fees Concession Form </h4>

                                        <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit'])){
                                                // print_r($_REQUEST);
                                                $sql = 'INSERT INTO `ac_zakat_form` (`zakat_form_id`, `user_id`, `user_date`, `gr_num`, `grand_father`, `community_name`, `grandian_cnic`, `contact`, `grandian_occupation`, `grandian_salary`, `eligible`, `relationship`, `address`, `free_ship`, `dependents`) VALUES (NULL,\'';
                                                $sql .= get_curr_user();
                                                $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['gr_num'].'\', \''.$_REQUEST['grand_father'].'\', \''.$_REQUEST['community_name'].'\', \''.$_REQUEST['grandian_cnic'].'\', \''.$_REQUEST['contact'].'\', \''.$_REQUEST['grandian_occupation'].'\', \''.$_REQUEST['grandian_salary'].'\', \''.$_REQUEST['eligible'].'\', \''.$_REQUEST['relationship'].'\', \''.$_REQUEST['address'].'\', \''.$_REQUEST['free_ship'].'\', \''.$_REQUEST['dependents'].'\')';
                                                // echo $sql;
                                                insert_query($sql);
                                            }
                                        ?>

                                        <form action="Accounts-mod-zakat-form.php" method="post">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaStudentsName">Student's Name </label>
                                                        <input type="text" name="name" placeholder="Enter student's name" class="form-control" id="zaStudentsName" value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="zaClass">Class </label>
                                                        <input type="text" name="class" required="" placeholder="Enter your class" class="form-control" id="emailAddress" value="<?php if(isset($_REQUEST['class'])) echo $_REQUEST['class']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="userName">GR #</label>
                                                        <input type="text" name="gr_num" required="" placeholder="Enter GR#" class="form-control" value="<?php if(isset($_REQUEST['gr_num'])) echo $_REQUEST['gr_num']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaFathersName">Father's Name</label>
                                                        <input id="zaFathersName" name="father_name" type="text" placeholder="Enter father's name" required="" class="form-control" value="<?php if(isset($_REQUEST['father_name'])) echo $_REQUEST['father_name']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="zaGrandFathersName">Grand Father's Name</label>
                                                        <input id="zaGrandFathersName" name="grand_father" type="text" placeholder="Enter grand father's name" class="form-control" value="<?php if(isset($_REQUEST['grand_father'])) echo $_REQUEST['grand_father']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaSurname">Surname</label>
                                                        <input id="zaSurname" name="surname" type="text" placeholder="Enter surname"  class="form-control" data-parsley-id="8" value="<?php if(isset($_REQUEST['surname'])) echo $_REQUEST['surname']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaCommunityName">Community Name</label>
                                                        <input id="zaCommunityName" name="community_name" type="text" placeholder="Enter grand father's name" class="form-control" value="<?php if(isset($_REQUEST['community_name'])) echo $_REQUEST['community_name']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaGrandiansCnic">Grandian's CNIC</label>
                                                        <input id="zaGrandiansCnic" name="grandian_cnic" type="text" placeholder="Enter grandian CNIC" required="" class="form-control" value="<?php if(isset($_REQUEST['grandian_cnic'])) echo $_REQUEST['grandian_cnic']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaContactPhoneNumber">Contact / Phone Number</label>
                                                        <input id="zaContactPhoneNumber" name="contact" type="tel" placeholder="Enter contact number" required="" class="form-control" value="<?php if(isset($_REQUEST['contact'])) echo $_REQUEST['contact']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaGrandiansCnic">Grandian's Occupation</label>
                                                        <input id="zaGrandiansOccupation" name="grandian_occupation" type="text" placeholder="Enter grandian's occupation" required="" class="form-control" value="<?php if(isset($_REQUEST['grandian_occupation'])) echo $_REQUEST['grandian_occupation']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaMonthlyIncome">Monthly Income</label>
                                                        <input id="zaMonthlyIncome" name="grandian_salary" type="number" placeholder="Enter monthly income" required="" class="form-control" value="<?php if(isset($_REQUEST['grandian_salary'])) echo $_REQUEST['grandian_salary']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaEligible">Is the Student Eligible For Zakat ?</label>
                                                        <select type="text" name="eligible" required="" placeholder="Eligible or not" class="form-control" id="zaEligible">
                                                            <option value="yes" <?php if(isset($_REQUEST['eligible']) && $_REQUEST['eligible'] == 'yes') echo "selected" ?>>Yes</option>
                                                            <option value="no" <?php if (isset($_REQUEST['eligible']) && $_REQUEST['eligible']== "no" ) echo "selected";  ?>>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaGradiansNameAndRelationship">Gradian's Name and Relationship</label>
                                                        <input id="zaGradiansNameAndRelationship" name="relationship"  type="text" placeholder="Enter grandian's name and relationship" required="" class="form-control" value="<?php if(isset($_REQUEST['relationship'])) echo $_REQUEST['relationship']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="zaAddressOfGuardian">Residential Address of Guardian</label>
                                                <input id="zaAddressOfGuardian" name="address" type="text" placeholder="Enter residential address of guardian" class="form-control" value="<?php if(isset($_REQUEST['address'])) echo $_REQUEST['address']?>">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaPreviously">Previously granted free ship ?</label>
                                                        <select type="text" name="free_ship" parsley-trigger="change" required="" placeholder="Eligible or not" class="form-control" id="zaPreviously">
                                                            <option value="yes" <?php if (isset($_REQUEST['free_ship']) && $_REQUEST['free_ship']== "yes" ) echo "selected";  ?> >Yes</option>
                                                            <option value="no" <?php if (isset($_REQUEST['free_ship']) && $_REQUEST['free_ship']== "no" ) echo "selected";  ?>>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="zaNumberOfDependents">Number of Dependents </label>
                                                        <input id="zaNumberOfDependents" name="dependents" type="number" placeholder="Enter Monthly Income" class="form-control" value="<?php if(isset($_REQUEST['dependents'])) echo $_REQUEST['dependents']?>">
                                                    </div>
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

        <!-- isotope filter plugin -->
        <script type="text/javascript" src="assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

        <!-- Magnific popup -->
        <script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>

</body>
</html>