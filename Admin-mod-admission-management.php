<!DOCTYPE html>
<htm>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

          <title>The Brainic School</title>

        <!-- form Uploads -->
        <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

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
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div style="text-align: center" >
                                         <a  href="admin-mod-student-addmission-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light m-b-5"  >+ Addmission</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light m-b-5" > Export </button></a>
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

                                    <h4 class="header-title m-t-0 m-b-30">Addmission Sheet</h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                                <tr>
                                                    <th>S No.</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Class</th>
                                                    <th>G.R. No.</th>
                                                    <th>Name of Student</th>
                                                    <th>Father's Name</th>
                                                    <th>Surname</th>
                                                    <th>Guardian's Name</th>
                                                    <th>Relationship</th>
                                                    <th>Religion</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Cell</th>
                                                    <th>E-mail</th>
                                                    <th>ICE</th>
                                                    <th>Occupation of Father / Gaurdian</th>
                                                    <th>Monthly Income</th>
                                                    <th>CNIC No of Father / Guardian</th>
                                                    <th>Date of Birth(in figures)</th>
                                                    <th>Place of Birth</th>
                                                    <th>Date of Birth(In words)</th>
                                                    <th>Addmission saught for class</th>
                                                    <th>Addmission grantted for class</th>
                                                    <th>Last School & Class Attended</th>
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
                                                    <td>5th</td>
                                                    <td>0987645</td>
                                                    <td>Fazal Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Father</td>
                                                    <td>islam</td>
                                                    <td>Gulshan Block 5</td>
                                                    <td>02136866543</td>
                                                    <td>03456789659</td>
                                                    <td>fazalkahna@gmail.com</td>
                                                    <td>03005678543</td>
                                                    <td>Clerk</td>
                                                    <td>50,000</td>
                                                    <td>4210178781244</td>
                                                    <td>12/25/1998</td>
                                                    <td>Karachi</td>
                                                    <td>december twelve nineteen ninety-eight</td>
                                                    <td>6th</td>
                                                    <td>5th</td>
                                                    <td>sun acadmey & 4th</td>
                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>5th</td>
                                                    <td>0987645</td>
                                                    <td>Fazal Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Father</td>
                                                    <td>islam</td>
                                                    <td>Gulshan Block 5</td>
                                                    <td>02136866543</td>
                                                    <td>03456789659</td>
                                                    <td>fazalkahna@gmail.com</td>
                                                    <td>03005678543</td>
                                                    <td>Clerk</td>
                                                    <td>50,000</td>
                                                    <td>4210178781244</td>
                                                    <td>12/25/1998</td>
                                                    <td>Karachi</td>
                                                    <td>december twelve nineteen ninety-eight</td>
                                                    <td>6th</td>
                                                    <td>5th</td>
                                                    <td>sun acadmey & 4th</td>
                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td ><a href="print.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>5th</td>
                                                    <td>0987645</td>
                                                    <td>Fazal Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Khan</td>
                                                    <td>Ali Khan</td>
                                                    <td>Father</td>
                                                    <td>islam</td>
                                                    <td>Gulshan Block 5</td>
                                                    <td>02136866543</td>
                                                    <td>03456789659</td>
                                                    <td>fazalkahna@gmail.com</td>
                                                    <td>03005678543</td>
                                                    <td>Clerk</td>
                                                    <td>50,000</td>
                                                    <td>4210178781244</td>
                                                    <td>12/25/1998</td>
                                                    <td>Karachi</td>
                                                    <td>december twelve nineteen ninety-eight</td>
                                                    <td>6th</td>
                                                    <td>5th</td>
                                                    <td>sun acadmey & 4th</td>
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
        <br>
        <br>

                    <!-- attendance form -->

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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Admission Form </h4>
                                    
                                    <?php

                                        // echo "test";
                                        if(isset($_REQUEST['submit'])){
                                            // print_r($_REQUEST);
                                            $sql = 'INSERT INTO `ad_admission` (`addmission_id`, `user_id`, `user_time`, `class`, `GR_No`, `name_of_student`, `father_name`, `surname`, `guardian_name`, `relationship`, `religion`, `address`, `phone`, `cell_no`, `e_mail`, `ice_no`, `occupation_of_father`, `monthly_income`, `cnic_guradian`, `date_of_birth`, `place_of_birth`, `date_of_birth_words`, `admission_saught`, `admission_granted`, `last_school_class`) VALUES (NULL,\'';
                                            $sql .= get_current_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['class']. '\',\''.$_REQUEST['GR_No'].'\', \''.$_REQUEST['name_of_student']. '\', \''.$_REQUEST['father_name']. '\', \''.$_REQUEST['surname']. '\', \''.$_REQUEST['guardian_name']. '\', \''.$_REQUEST['relationship']. '\', \''.$_REQUEST['religion']. '\', \''.$_REQUEST['address']. '\', \''.$_REQUEST['phone']. '\', \''.$_REQUEST['cell_no']. '\', \''.$_REQUEST['e_mail']. '\', \''.$_REQUEST['ice_no']. '\', \''.$_REQUEST['occupation_of_father']. '\', \''.$_REQUEST['monthly_income']. '\', \''.$_REQUEST['cnic_guradian']. '\', \''.$_REQUEST['date_of_birth']. '\', \''.$_REQUEST['place_of_birth']. '\', \''.$_REQUEST['date_of_birth_words']. '\', \''.$_REQUEST['admission_saught']. '\', \''.$_REQUEST['admission_granted']. '\', \''.$_REQUEST['last_school_class']. '\')';
                                            // echo $sql;
                                            insert_query($sql);
                                        }
                                    ?>
                                    <form action="Admin-mod-admission-management.php" method="post" >

                                        <div class="row ">
                                            <div class="col-md-8" style="padding-top: 6%;">
                                                <div class="row" >
                                                    <div class="col-md-12" >
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="class">Class</label>
                                                                <input type="text" name="class" required placeholder="Enter class" class="form-control" id="adclass"
                                                                value="<?php if (isset($_REQUEST['class'])) echo $_REQUEST['class'];  ?>">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="G.RNo">G.R No.</label>
                                                                <input type="text" name="GR_No" required
                                                                       placeholder="Enter G.R No." class="form-control" id="adG.RNo"
                                                                       value="<?php if (isset($_REQUEST['GR_No'])) echo $_REQUEST['GR_No'];  ?>">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <!-- <div class="dropdown pull-right">
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
                                                    </div> -->

                                                    <h4 class="header-title m-t-0 m-b-30">Max File size</h4>

                                                    <input type="file" class="dropify" data-max-file-size="1M" />
                                                 </div>
                                             </div>
                                         </div>

<!--                                         <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="class">Class</label>
                                                    <input type="text" name="nick" parsley-trigger="change" required
                                                           placeholder="Enter class" class="form-control" id="class">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="G.RNo">G.R No.</label>
                                                    <input type="email" name="number" parsley-trigger="change" required
                                                           placeholder="Enter G.R No." class="form-control" id="G.RNo">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="nameofthestudent">Name of the Student</label>
                                            <input type="text" name="name_of_student" required
                                                   placeholder="Enter name" class="form-control" id="adnameofthestudent"
                                                   value="<?php if (isset($_REQUEST['name_of_student'])) echo $_REQUEST['name_of_student'];  ?>">
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="father_name">Father's Name</label>
                                                    <input type="text" name="father_name" required
                                                           placeholder="Enter father's name" class="form-control" id="adfathersname"
                                                           value="<?php if (isset($_REQUEST['father_name'])) echo $_REQUEST['father_name'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="surname">Surname</label>
                                                    <input type="text" name="surname" placeholder="Enter surname" class="form-control"
                                                    value="<?php if (isset($_REQUEST['surname'])) echo $_REQUEST['surname'];  ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="guardian'sname">Guardian's Name</label>
                                                    <input type="text" name="guardian_name" required placeholder="Enter guardian's name" class="form-control"
                                                    value="<?php if (isset($_REQUEST['guardian_name'])) echo $_REQUEST['guardian_name'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="guardian'sname">Relationship</label>
                                                    <input type="text" name="relationship" required placeholder="Enter relationship" class="form-control"
                                                    value="<?php if (isset($_REQUEST['relationship'])) echo $_REQUEST['relationship'];  ?>" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" name="religion" required placeholder="Enter religion" class="form-control" id="adreligion" value="<?php if (isset($_REQUEST['religion'])) echo $_REQUEST['religion'];  ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input  type="text" name="address" required placeholder="Enter religion" class="form-control" id="adaddress"
                                            value="<?php if (isset($_REQUEST['religion'])) echo $_REQUEST['religion'];  ?>">
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone(Res.)</label>
                                                    <input type="tel" name="phone" required placeholder="Enter phone" class="form-control" id="adphone"
                                                    value="<?php if(isset($_REQUEST['phone'])) echo $_REQUEST['phone'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="cellno">Cell No.</label>
                                                    <input type="tel" name="cell_no" required placeholder="Enter cell no." class="form-control" id="adcellno" value="<?php if(isset($_REQUEST['cell_no'])) echo $_REQUEST['cell_no'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="e-mail">E-mail</label>
                                                    <input type="email" name="e_mail" placeholder="Enter e-mail" class="form-control"
                                                     value="<?php if(isset($_REQUEST['e_mail'])) echo $_REQUEST['e_mail'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="ice">ICE (In case Emergency) No.</label>
                                                    <input type="tel" name="ice_no" required placeholder="Enter ICE." class="form-control" id="adice"
                                                     value="<?php if(isset($_REQUEST['ice_no'])) echo $_REQUEST['ice_no'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="Occupation">Occupation of Father/Guardian</label>
                                                    <input type="text" name="occupation_of_father" placeholder="Enter occupation" class="form-control" id="adoccupation"  value="<?php if(isset($_REQUEST['occupation_of_father'])) echo $_REQUEST['occupation_of_father'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="income">Monthly Income Rs.</label>
                                                    <input type="number" name="monthly_income" placeholder="Enter income." class="form-control" id="adincome" value="<?php if(isset($_REQUEST['monthly_income'])) echo $_REQUEST['monthly_income'] ?>" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                    <label for="cnic">CNIC No. of Father / Guradian</label>
                                                    <input type="number" name="cnic_guradian" required placeholder="Enter CNIC" class="form-control" id="adcnic"
                                                     value="<?php if(isset($_REQUEST['cnic_guradian'])) echo $_REQUEST['cnic_guradian'] ?>">
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="dateofbirth">Date of Birth (In figures)</label>
                                                    <input type="date" name="date_of_birth" required placeholder="Enter date of birth" class="form-control" id="addateofbirth"
                                                    value="<?php if(isset($_REQUEST['date_of_birth'])) echo $_REQUEST['date_of_birth'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="placofbirth">Place of Birth</label>
                                                    <input type="text" name="place_of_birth" placeholder="Enter place of birth" class="form-control" id="adplaceofbirth"
                                                    value="<?php if(isset($_REQUEST['place_of_birth'])) echo $_REQUEST['place_of_birth'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="dateofbirthwords">Date of Birth (In words)</label>
                                            <input type="text" name="date_of_birth_words" required placeholder="Enter occupation" class="form-control" id="addateofbirthwords"
                                            value="<?php if(isset($_REQUEST['date_of_birth_words'])) echo $_REQUEST['date_of_birth_words']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="addmissionsaught">Addmission saught for class</label>
                                            <input type="text" name="admission_saught" required placeholder="Enter saught for class" class="form-control" id="adaddmissionsaught"
                                            value="<?php if(isset($_REQUEST['admission_saught'])) echo $_REQUEST['admission_saught']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="addmissiongranted">Addmission granted for class</label>
                                            <input type="text" name="admission_granted" required placeholder="Enter admission granted for class" class="form-control" id="adaddmissiongranted"
                                            value="<?php if(isset($_REQUEST['admission_granted'])) echo $_REQUEST['admission_granted']?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastclass">Last School & Class Attended</label>
                                            <input type="text" name="last_school_class" required placeholder="Enter occupation" class="form-control" id="adlastclass"
                                            value="<?php if(isset($_REQUEST['last_school_class'])) echo $_REQUEST['last_school_class']?>">
                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light"  id="adsubmit" name="submit">
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
                <!-- for office use only -->
                <div class="">
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> For Office Use Only </h4>

                                    <form action="#" >

                                        <div class="form-group">
                                            <label for="adAdmittedClass">Admitted Class</label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   placeholder="Enter admitted class" class="form-control" id="adAdmittedClass">
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="adAdmissionFeeRs">Admission Fee Rs</label>
                                                    <input type="number" name="father'sname" parsley-trigger="change" required
                                                           placeholder="Enter admission fee" class="form-control" id="adAdmissionFeeRs">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="adRNo">R No.</label>
                                                    <input id="adRNo" type="text" placeholder="Enter r no." required
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="adExamFee">Activities & Examination Fee Rs.</label>
                                            <input  type="text" required
                                                           placeholder="Enter activities & xamination fee" class="form-control" id="adExamFee">
                                        </div>
                                        <div class="form-group">
                                            <label for="adTutionFee">Tution Fee Rs.</label>
                                            <input  type="number" required
                                                           placeholder="Enter activities & xamination fee" class="form-control" id="adTutionFee">
                                        </div>
                                        <div class="form-group">
                                            <label for="adTotalFee">Total Rs.</label>
                                            <input  type="text" required
                                                           placeholder="Enter activities & xamination fee" class="form-control" id="adTotalFee">
                                        </div>
                                        <br>
                                        <label><strong>Document Submitted</strong></label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox checkbox-info">
                                                    <input id="adBirthCertificate" type="checkbox">
                                                    <label for="adBirthCertificate">1. Birth Certificate</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox checkbox-info">
                                                    <input id="adPhotographs" type="checkbox">
                                                    <label for="adPhotographs">2. Six Passport Size Photographs of Student (in school uniform)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox checkbox-info">
                                                    <input id="adTC" type="checkbox">
                                                    <label for="adTC">3. School Leaving Certificate</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox checkbox-info">
                                                    <input id="adCnicCopy" type="checkbox">
                                                    <label for="adCnicCopy">4. CNIC Photo Copy of Parents</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="adNadra" type="checkbox">
                                            <label for="adNadra">5. NADRA Regisration Certificate</label>
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
                <!-- for office use only -->
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
        <!-- print -->
            <script>
            function myPrint(addFrmPrint) {
                var printdata = document.getElementById(addFrmPrint);
                newwin = window.open("");
                newwin.document.write(printdata.outerHTML);
                newwin.print();
                newwin.close();
            }
            function deleteTable(addFrmPrint){
                var row = document.getElementById("addFrmPrint");
                row.deleteRow(0);
            }
    </script>


    <!-- for checking form -->
            <!-- file uploads js -->
        <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>
        <!-- forrm add in table -->
        <script>
            function addmissionFormAdd() {
                var table = document.getElementById("adadmissiontable"),
                    newRow = table.insertRow(-1),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2),
                    cell4 = newRow.insertCell(3),
                    cell5 = newRow.insertCell(4),
                    cell6 = newRow.insertCell(5),
                    cell7 = newRow.insertCell(6),
                    cell8 = newRow.insertCell(7),
                    cell9 = newRow.insertCell(8),
                    cell10 = newRow.insertCell(9),
                    cell11 = newRow.insertCell(10),
                    cell12 = newRow.insertCell(11),
                    cell13 = newRow.insertCell(12),
                    cell14 = newRow.insertCell(13),
                    cell15 = newRow.insertCell(14),
                    cell16 = newRow.insertCell(15),
                    cell17 = newRow.insertCell(16),
                    cell18 = newRow.insertCell(17),
                    cell19 = newRow.insertCell(18),
                    cell20 = newRow.insertCell(19),
                    cell21 = newRow.insertCell(20),
                    cell22 = newRow.insertCell(21),
                    cell23 = newRow.insertCell(22),
                    cell24 = newRow.insertCell(23),
                    cell25 = newRow.insertCell(24),
                    cell26 = newRow.insertCell(25),
                    cell27 = newRow.insertCell(26),
                    adclass =  document.getElementById("adclass").value,
                    adGRNo = document.getElementById("adG.RNo").value,
                    adnameofthestudent = document.getElementById("adnameofthestudent").value,
                    adfathersname = document.getElementById("adfathersname").value,
                    adsurname = document.getElementById("adsurname").value,
                    adguardiansname = document.getElementById("adguardiansname").value,
                    adrelationship = document.getElementById("adrelationship").value,
                    adreligion = document.getElementById("adreligion").value,
                    adaddress = document.getElementById("adaddress").value,
                    adphone = document.getElementById("adphone").value,
                    adcellno = document.getElementById("adcellno").value,
                    ademail = document.getElementById("ademail").value,
                    adice = document.getElementById("adice"),
                    adoccupation = document.getElementById("adoccupation").value,
                    adincome = document.getElementById("adincome").value,
                    adcnic = document.getElementById("adcnic").value,
                    addateofbirth = document.getElementById("addateofbirth").value,
                    adplaceofbirth = document.getElementById("adplaceofbirth").value,
                    addateofbirthwords = document.getElementById("addateofbirthwords").value,
                    adaddmissionsaught = document.getElementById("adaddmissionsaught").value,
                    adaddmissiongranted = document.getElementById("adaddmissiongranted").value,
                    adlastclass = document.getElementById("adlastclass").value;

                    var newElement  = document.createElement("i");
                    var newElement2  = document.createElement("i");
                    var newElement3  = document.createElement("i");
                    var newElement4  = document.createElement("i");

                cell1.innerHTML = 7;
                cell2.appendChild(newElement).className = "zmdi zmdi-edit";
                cell3.appendChild(newElement2).className = "zmdi zmdi-delete";
                cell3.setAttribute("onclick","deleteTable('addFrmPrint')");
                cell4.appendChild(newElement3).className = "zmdi zmdi-local-printshop";
                cell5.appendChild(newElement4).className = "zmdi zmdi-copy";
                cell6.innerHTML = adclass;
                cell7.innerHTML = adGRNo;
                cell8.innerHTML = adnameofthestudent;
                cell9.innerHTML = adfathersname;
                cell10.innerHTML = adsurname;
                cell11.innerHTML = adguardiansname;
                cell12.innerHTML = adrelationship;
                cell13.innerHTML = adreligion;
                cell14.innerHTML = adaddress;
                cell15.innerHTML = adphone;
                cell16.innerHTML = adcellno;
                cell17.innerHTML = ademail;
                cell18.innerHTML = adice;
                cell19.innerHTML = adoccupation;
                cell20.innerHTML = adincome;
                cell21.innerHTML = adcnic;
                cell22.innerHTML = addateofbirth;
                cell23.innerHTML = adplaceofbirth;
                cell24.innerHTML = addateofbirthwords;
                cell25.innerHTML = adaddmissionsaught;
                cell26.innerHTML = adaddmissiongranted;
                cell27.innerHTML = adlastclass;
                console.log(adclass);
               



            };
        </script>




</body>
</html>