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

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fees Table</h4>

                                    <div class="table-responsive">
                                        <!-- tablesaw table m-b-0 tablesaw-columntoggle table-bordered -->
                                        <table id="datatable" class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered ">
                                            <?php

                                                if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ac_fee_module` WHERE `ac_fee_module`.`fee_id` = '.$_REQUEST['deleteid'];

                                                    insert_query($sql);
                                                    // echo "done deleting";
                                                    }
                                               // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                                $sql = 'SELECT `fee_id`"ID", `category` "Category", `name`"name", `class`"Class", `gr_num`"Gr No.", `fees_month`"Fees for the Month", `admission_fee`"Admission Fee", `exam`"Exams and Other Activities", `fine`"Fine", `mics`"Mics", `total`"Total", `date`"Date", `cashier`"Cashier" FROM `ac_fee_module`';
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

                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fee Form </h4>
                                        <br>
                                        <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit'])){
                                                // print_r($_REQUEST);
                                                $sql = 'INSERT INTO `ac_fee_module` (`fee_id`, `user_id`, `user_date`, `category`, `s_no`,`name`,`class`, `gr_num`, `fees_month`, `admission_fee`, `exam`, `fine`, `mics`, `total`, `date`, `cashier`) VALUES (NULL,\'';
                                                $sql .= get_curr_user();
                                                $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['category'].'\', \''.$_REQUEST['s_no'].'\', \''.$_REQUEST['name'].'\', \''.$_REQUEST['class'].'\', \''.$_REQUEST['gr_num'].'\', \''.$_REQUEST['fees_month'].'\', \''.$_REQUEST['admission_fee'].'\', \''.$_REQUEST['exam'].'\', \''.$_REQUEST['fine'].'\', \''.$_REQUEST['mics'].'\', \''.$_REQUEST['total'].'\', \''.$_REQUEST['date'].'\', \''.$_REQUEST['cashier'].'\')';
                                                // echo $sql;
                                                insert_query($sql);
                                            }
                                        ?>

                                        <form action="Accounts-mod-fee-modulet.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-9"></div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="feCategory">Category</label>
                                                        <select type="text" name="category" required="" placeholder="category" class="form-control" id="feCategory">
                                                            <option value="montessori" <?php if (isset($_REQUEST['category']) && $_REQUEST['category']== "montessori" ) echo "selected";  ?> >Montessori</option>
                                                            <option value="girl" <?php if (isset($_REQUEST['category']) && $_REQUEST['category']== "girl" ) echo "selected";  ?> >Girl</option>
                                                            <option value="boy" <?php if (isset($_REQUEST['category']) && $_REQUEST['category']== "boy" ) echo "selected";  ?> >Boy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feSno">S No.</label>
                                                        <input type="text" name="s_no" required="" class="form-control" id="feSno"
                                                         value="<?php if(isset($_REQUEST['s_no'])) echo $_REQUEST['s_no']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feRollNo">Roll No. </label>
                                                        <input type="text" name="gr_num" required="" placeholder="Enter roll no." class="form-control" id="feRollNo"  value="<?php if(isset($_REQUEST['gr_num'])) echo $_REQUEST['gr_num']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Name of Student</label>
                                                        <input id="feNameOfStudent" name="name" type="text" placeholder="Enter name of student" required="" class="form-control"  value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Class</label>
                                                        <input id="feClass" name="class" type="text" placeholder="Enter class" required="" class="form-control"  value="<?php if(isset($_REQUEST['class'])) echo $_REQUEST['class']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Fees for the Month</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="fees_month" placeholder="Enter amount" required="" class="form-control"  value="<?php if(isset($_REQUEST['fees_month'])) echo $_REQUEST['fees_month']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Admission Fee</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="admission_fee" placeholder="Enter amount" class="form-control" value="<?php if(isset($_REQUEST['admission_fee'])) echo $_REQUEST['admission_fee']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Exams and Other Activities</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="exam" placeholder="Enter amount"  class="form-control"  value="<?php if(isset($_REQUEST['exam'])) echo $_REQUEST['exam']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Fine</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="fine" placeholder="Enter amount"  class="form-control"  value="<?php if(isset($_REQUEST['fine'])) echo $_REQUEST['fine']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Mics</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="mics" placeholder="Enter amount"  class="form-control"  value="<?php if(isset($_REQUEST['mics'])) echo $_REQUEST['mics']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label><h3>Total</h3></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" name="total" placeholder="Total amount" required="" class="form-control"  value="<?php if(isset($_REQUEST['total'])) echo $_REQUEST['total']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Date</label>
                                                        <input id="feNameOfStudent" name="date" type="date" placeholder="Enter name of student" required="" class="form-control" value="<?php if (isset($_REQUEST['date'])) echo $_REQUEST['date']; else echo (date("Y-m-d")); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Cashier</label>
                                                        <input id="feClass" name="cashier" type="text" placeholder="Enter class" required="" class="form-control"  value="<?php if (isset($_REQUEST['cashier'])) echo $_REQUEST['cashier'] ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0 m-t-10">
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



    <!-- table discounted fee -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px;"> Brother/Sister Discount ON Fee Table </h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>SNo.</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Name of the student of the top class</th>
                                                <th>Class</th>
                                                <th>School</th>
                                                <th>GR#</th>
                                                <th>Full Fee</th>
                                                <th>Name of the student</th>
                                                <th>Class</th>
                                                <th>School</th>
                                                <th>GR#</th>
                                                <th>Full Fee</th>
                                                <th>Discounted Fee</th>
                                                <th>Name of the student</th>
                                                <th>Class</th>
                                                <th>School</th>
                                                <th>GR#</th>
                                                <th>Full Fee</th>
                                                <th>Discounted Fee</th>
                                                <th>Name of the student</th>
                                                <th>Class</th>
                                                <th>School</th>
                                                <th>GR#</th>
                                                <th>Full Fee</th>
                                                <th>Discounted Fee</th>
                                                <th>Name of the student</th>
                                                <th>Class</th>
                                                <th>School</th>
                                                <th>GR#</th>
                                                <th>Full Fee</th>
                                                <th>Discounted Fee</th>   
                                            </tr>
                                            <tr>
                                                <th colspan="5"></th>
                                                <th colspan="5" style="text-align: center;">1</th>
                                                <th colspan="6" style="text-align: center;">2</th>
                                                <th colspan="6" style="text-align: center;">3</th>
                                                <th colspan="6" style="text-align: center;">4</th>
                                                <th colspan="6" style="text-align: center;">5</th>
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
                                                    <td><a href="print-brother-sister-discount.php"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <th>abdullah asad</th>
                                                    <td>9th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr >
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><a href="print-brother-sister-discount.php"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <th>abdullah asad</th>
                                                    <td>9th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr >
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><a href="print-brother-sister-discount.php"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <th>abdullah asad</th>
                                                    <td>9th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
                                                    <th>waleed asad</th>
                                                    <td>7th</td>
                                                    <td>MEB school</td>
                                                    <td>0908</td>
                                                    <td>1500</td>
                                                    <td>1000</td>
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
    <!-- table discounted fee end -->


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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px;"> Brother/Sister Discount ON Fee </h4>
                                    <hr>

                                    <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit2'])){
                                                // print_r($_REQUEST);
                                                $sql2 = 'INSERT INTO `ac_bro_sis_discount` (`bro_sis_discount_id`, `user_id`, `user_date`, `gr_num_1`, `gr_num_2`, `discounted_fee_2`, `gr_num_3`, `discounted_fee_3`, `gr_num_4`, `discounted_fee_4`, `gr_num_5`, `discounted_fee_5`, `school_1`, `school_2`, `school_3`, `school_4`, `school_5`)VALUES (NULL,\'';
                                                $sql2 .= get_curr_user();
                                                $sql2 .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['gr_num_1'].'\', \''.$_REQUEST['gr_num_2'].'\', \''.$_REQUEST['discounted_fee_2'].'\', \''.$_REQUEST['gr_num_3'].'\', \''.$_REQUEST['discounted_fee_3'].'\', \''.$_REQUEST['gr_num_4'].'\', \''.$_REQUEST['discounted_fee_4'].'\', \''.$_REQUEST['gr_num_5'].'\', \''.$_REQUEST['discounted_fee_5'].'\', \''.$_REQUEST['school_1'].'\', \''.$_REQUEST['school_2'].'\', \''.$_REQUEST['school_3'].'\', \''.$_REQUEST['school_4'].'\', \''.$_REQUEST['school_5'].'\')';
                                                // echo $sql;
                                                insert_query($sql2);
                                            }
                                        ?>


                                    <form action="Accounts-mod-fee-modulet.php" method="post">

                                        <div class="row">
                                            <div class="col-lg-2"><h4 class="header-title" style="text-align: center; font-size: 50px; padding: 10px; font-weight: 300 ; margin-top: 70px"> 1 </h4></div>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                     <div class="form-group">
                                                        <label for="deNAmeTop">Name of the student of the top class</label>
                                                        <input type="text" name="name1" required placeholder="" class="form-control"
                                                         value="<?php if(isset($_REQUEST['name1'])) echo $_REQUEST['name1']?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Class</label>
                                                                <input type="text" name="class1" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['class1'])) echo $_REQUEST['class1']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">School</label>
                                                                <input type="text" name="school_1" required="" placeholder="" class="form-control" value="<?php if(isset($_REQUEST['school_1'])) echo $_REQUEST['school_1']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">GR #</label>
                                                                <input type="text" name="gr_num_1" required="" placeholder="" class="form-control" id="lcnName" value="<?php if(isset($_REQUEST['gr_num_1'])) echo $_REQUEST['gr_num_1']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4"> <div class="form-group">
                                                            <label for="lcName">Full Fee</label>
                                                            <input type="text" name="fee1" required="" class="form-control" id="lcnName"value="<?php if(isset($_REQUEST['fee1'])) echo $_REQUEST['fee1']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                        
                                        <div class="row">
                                            <div class="col-lg-2"><h4 class="header-title" style="text-align: center; font-size: 50px; padding: 10px; font-weight: 300 ; margin-top: 70px"> 2 </h4></div>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                     <div class="form-group">
                                                        <label for="lcName">Name of the student</label>
                                                        <input type="text" name="name2" required placeholder="" class="form-control"
                                                        value="<?php if(isset($_REQUEST['name2'])) echo $_REQUEST['name2']?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Class</label>
                                                                <input type="text" name="class2" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['class2'])) echo $_REQUEST['class2']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">School</label>
                                                                <input type="text" name="school_2" parsley-trigger="change" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['school_2'])) echo $_REQUEST['school_2']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">GR #</label>
                                                                <input type="text" name="gr_num_2" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['gr_num_2'])) echo $_REQUEST['gr_num_2']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4"> 
                                                            <div class="form-group">
                                                            <label for="lcName">Full Fee</label>
                                                            <input type="text" name="fee2" parsley-trigger="change" required
                                                                   placeholder="" class="form-control" value="<?php if(isset($_REQUEST['fee2'])) echo $_REQUEST['fee2']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                            <label for="lcName">Discounted Fee</label>
                                                            <input type="text" name="discounted_fee_2" required
                                                                   placeholder="" class="form-control"value="<?php if(isset($_REQUEST['discounted_fee_2'])) echo $_REQUEST['discounted_fee_2']?>">
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <hr>
                                    <div class="row">
                                            <div class="col-lg-2"><h4 class="header-title" style="text-align: center; font-size: 50px; padding: 10px; font-weight: 300 ; margin-top: 70px"> 3 </h4></div>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                     <div class="form-group">
                                                        <label for="lcName">Name of the student</label>
                                                        <input type="text" name="name3" parsley-trigger="change" required
                                                               placeholder="" class="form-control"value="<?php if(isset($_REQUEST['name3'])) echo $_REQUEST['name3']?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Class</label>
                                                                <input type="text" name="class3" required
                                                                       placeholder="" class="form-control"value="<?php if(isset($_REQUEST['class3'])) echo $_REQUEST['class3']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">School</label>
                                                                <input type="text" name="school_3" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['school_3'])) echo $_REQUEST['school_3']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">GR #</label>
                                                                <input type="text" name="gr_num_3"  required
                                                                       placeholder="" class="form-control"
                                                                       value="<?php if(isset($_REQUEST['gr_num_3'])) echo $_REQUEST['gr_num_3']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                            <label for="lcName">Full Fee</label>
                                                            <input type="text" name="fee3" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['fee3'])) echo $_REQUEST['fee3']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                            <label for="lcName">Discounted Fee</label>
                                                            <input type="text" name="discounted_fee_3" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['discounted_fee_3'])) echo $_REQUEST['discounted_fee_3']?>" >

                                                           </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                            <div class="col-lg-2"><h4 class="header-title" style="text-align: center; font-size: 50px; padding: 10px; font-weight: 300 ; margin-top: 70px"> 4 </h4></div>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                     <div class="form-group">
                                                        <label for="lcName">Name of the student</label>
                                                        <input type="text" name="name4" parsley-trigger="change" required
                                                               placeholder="" class="form-control"value="<?php if(isset($_REQUEST['name4'])) echo $_REQUEST['name4']?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Class</label>
                                                                <input type="text" name="class4"  required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['class4'])) echo $_REQUEST['class4']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">School</label>
                                                                <input type="text" name="school_4" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['school_4'])) echo $_REQUEST['school_4']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">GR #</label>
                                                                <input type="text" name="gr_num_4" parsley-trigger="change" required
                                                                       placeholder="" class="form-control" value="<?php if(isset($_REQUEST['gr_num_4'])) echo $_REQUEST['gr_num_4']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Full Fee</label>
                                                                <input type="text" name="fee4" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['fee4'])) echo $_REQUEST['fee4']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                            <label for="lcName">Discounted Fee</label>
                                                            <input type="text" name="discounted_fee_4"required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['discounted_fee_4'])) echo $_REQUEST['discounted_fee_4']?>">
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr>
                                    <div class="row">
                                            <div class="col-lg-2"><h4 class="header-title" style="text-align: center; font-size: 50px; padding: 10px; font-weight: 300 ; margin-top: 70px"> 5 </h4></div>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                     <div class="form-group">
                                                        <label for="lcName">Name of the student</label>
                                                        <input type="text" name="name5" required placeholder="" class="form-control"
                                                        value="<?php if(isset($_REQUEST['name5'])) echo $_REQUEST['name5']?>">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Class</label>
                                                                <input type="text" name="class5" required placeholder="" class="form-control"value="<?php if(isset($_REQUEST['class5'])) echo $_REQUEST['class5']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">School</label>
                                                                <input type="text" name="school_5" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['school_5'])) echo $_REQUEST['school_5']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">GR #</label>
                                                                <input type="text" name="gr_num_5" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['gr_num_5'])) echo $_REQUEST['gr_num_5']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="lcName">Full Fee</label>
                                                                <input type="text" name="fee5" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['fee5'])) echo $_REQUEST['fee5']?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="lcName">Dsicounted Fee</label>
                                                                <input type="text" name="discounted_fee_5" required placeholder="" class="form-control" value="<?php if(isset($_REQUEST['discounted_fee_5'])) echo $_REQUEST['discounted_fee_5']?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit2">
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
            <!-- table end -->



            <!-- fee card -->

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

                            <!-- input form -->


                            <!-- input form -->
                                <div class="col-lg-12">
                                    <div class="card-box">
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fees Card Table</h4>

                                    <div class="table-responsive">
                                        <table id="datatable2" class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered ">
                                            <?php

                                                if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ac_fee_card` WHERE `ac_fee_card`.`fee_card_id` = '.$_REQUEST['deleteid'];

                                                    insert_query($sql);
                                                    // echo "done deleting";
                                                    }
                                               // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                                $sql = 'SELECT `fee_card_id`"ID", `from_year`"From year", `till_year`"Till year", `name`"Student\'s Name", `father_name`"Father\'s Name", `class`"Class", `section`"Section", `address`"Address", `phone`"Phone", `cell`"Cell" FROM `ac_fee_card';
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
            </dir>
        </div>


             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div>
                                        <div>

                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fee card Form </h4>
                                        <br>
                                        <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit3'])){
                                                // print_r($_REQUEST);
                                                $sql3 = 'INSERT INTO `ac_fee_card` (`fee_card_id`, `user_id`, `user_date`, `from_year`, `till_year`, `name`, `father_name`, `class`, `section`, `address`, `phone`, `cell`) VALUES (NULL,\'';
                                                $sql3 .= get_curr_user();
                                                $sql3 .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['from_year'].'\', \''.$_REQUEST['till_year'].'\', \''.$_REQUEST['name'].'\', \''.$_REQUEST['father_name'].'\', \''.$_REQUEST['class'].'\', \''.$_REQUEST['section'].'\', \''.$_REQUEST['address'].'\', \''.$_REQUEST['phone'].'\', \''.$_REQUEST['cell'].'\')';
                                                // echo $sql;
                                                insert_query($sql3);
                                            }
                                        ?>

                                        <form action="Accounts-mod-fee-modulet.php" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feSno">From year </label>
                                                        <input type="number" name="from_year" required="" placeholder="Enter start year" class="form-control" id="feSno" value="<?php if(isset($_REQUEST['from_year'])) echo $_REQUEST['from_year']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feRollNo">Till year </label>
                                                        <input type="number" name="till_year" required="" placeholder="Enter till valid year" class="form-control" id="feRollNo" value="<?php if(isset($_REQUEST['till_year'])) echo $_REQUEST['till_year']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Student's Name</label>
                                                        <input id="feNameOfStudent" name="name" type="text" placeholder="Enter name of student" required="" class="form-control"  value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Father's Name</label>
                                                        <input id="feClass" name="father_name" type="text" placeholder="Enter name of father" class="form-control" value="<?php if(isset($_REQUEST['father_name'])) echo $_REQUEST['father_name']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feSno">Class </label>
                                                        <input type="text" name="class" required="" placeholder="Enter class" class="form-control" id="feSno" value="<?php if(isset($_REQUEST['class'])) echo $_REQUEST['class']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feRollNo">Section</label>
                                                        <input type="text" name="section" placeholder="Enter section" class="form-control"   value="<?php if(isset($_REQUEST['section'])) echo $_REQUEST['section']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="feClass">Address</label>
                                                <input id="feClass" type="text" name="address" placeholder="Enter address" class="form-control"  value="<?php if(isset($_REQUEST['address'])) echo $_REQUEST['address']?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Phone No.</label>
                                                        <input id="feNameOfStudent" name="phone" type="tel" placeholder="Enter phone number"  class="form-control" value="<?php if(isset($_REQUEST['phone'])) echo $_REQUEST['phone']?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Cell</label>
                                                        <input id="feClass" name="cell" type="tel" placeholder="Enter cell number" class="form-control" value="<?php if(isset($_REQUEST['cell'])) echo $_REQUEST['cell']?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0 m-t-10">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit3">
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
                <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').dataTable();
                $('#datatable2-keytable').DataTable( { keys: true } );
                $('#datatable2-responsive').DataTable();
                $('#datatable2-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatabl2e-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>



</body>
</html>