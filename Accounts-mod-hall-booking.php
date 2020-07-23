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
                            include_once("Accounts-mod-header.php");
                            include_once("db_functions.php")
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Hall booking </h4>
                                    <br>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Date of booking</th>
                                                <th>Rent amount</th>
                                                <th>Advance paid</th>
                                                <th>Location</th>
                                                <th>Date of the event</th>
                                                <th>Number of guests</th>
                                                <th>Waiters are required?</th>
                                                <th>If female waiters are required?</th>
                                                <th>Advance that can given</th>
                                            </tr>
                                            </thead>
                                            <tbody>
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
                                                    

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Gulsahn-e-Iqbal</td>
                                                    <td>0324-7896543</td>
                                                    <td>7/16/2020</td>
                                                    <td>7,000</td>
                                                    <td>2,200</td>
                                                    <td>xyz location</td>
                                                    <td>8/14/2020</td>
                                                    <td>50</td>
                                                    <td>yes</td>
                                                    <td>no</td>
                                                    <td>yes</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Gulsahn-e-Iqbal</td>
                                                    <td>0324-7896543</td>
                                                    <td>7/16/2020</td>
                                                    <td>7,000</td>
                                                    <td>2,200</td>
                                                    <td>xyz location</td>
                                                    <td>8/14/2020</td>
                                                    <td>50</td>
                                                    <td>yes</td>
                                                    <td>no</td>
                                                    <td>yes</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Gulsahn-e-Iqbal</td>
                                                    <td>0324-7896543</td>
                                                    <td>7/16/2020</td>
                                                    <td>7,000</td>
                                                    <td>2,200</td>
                                                    <td>xyz location</td>
                                                    <td>8/14/2020</td>
                                                    <td>50</td>
                                                    <td>yes</td>
                                                    <td>no</td>
                                                    <td>yes</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Gulsahn-e-Iqbal</td>
                                                    <td>0324-7896543</td>
                                                    <td>7/16/2020</td>
                                                    <td>7,000</td>
                                                    <td>2,200</td>
                                                    <td>xyz location</td>
                                                    <td>8/14/2020</td>
                                                    <td>50</td>
                                                    <td>yes</td>
                                                    <td>no</td>
                                                    <td>yes</td>
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

            <!-- Form -->
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Hall booking form </h4>
                                    <br>

                                    <?php

                                            // echo "test";
                                            if(isset($_REQUEST['submit'])){
                                                // print_r($_REQUEST);
                                                $sql = 'INSERT INTO `ac_hall_booking` (`hall_booking`, `user_id`, `user_date`, `name`, `address`, `phone`, `date_booking`, `rent`, `advance`, `location`, `date_event`, `guest`, `waiter`, `female_waiter`, `is_adv_given`) VALUES (NULL,\'';
                                                $sql .= get_curr_user();
                                                $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['name'].'\', \''.$_REQUEST['address'].'\', \''.$_REQUEST['phone'].'\', \''.$_REQUEST['date_booking'].'\', \''.$_REQUEST['rent'].'\', \''.$_REQUEST['advance'].'\', \''.$_REQUEST['location'].'\', \''.$_REQUEST['date_event'].'\', \''.$_REQUEST['guest'].'\', \''.$_REQUEST['waiter'].'\', \''.$_REQUEST['female_waiter'].'\', \''.$_REQUEST['is_adv_given'].'\')';
                                                // echo $sql;
                                                insert_query($sql);
                                            }
                                        ?>

                                        <form action="Accounts-mod-hall-booking.php" method="post">


                                            <div class="form-group">
                                                <label for="hbName">Name</label>
                                                <input type="text" name="name" required="" placeholder="Enter name" class="form-control" id="hbName" value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']?>">
                                            </div>
                                        
                                   
                                            <div class="form-group">
                                                <label for="hbAddress">Address</label>
                                                <input type="text" name="address" required="" placeholder="Enter address" class="form-control" id="prName" value="<?php if(isset($_REQUEST['address'])) echo $_REQUEST['address']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbPhone">Phone</label>
                                                <input type="tel" name="phone" required="" placeholder="Enter phone" class="form-control" id="prRegular" value="<?php if(isset($_REQUEST['phone'])) echo $_REQUEST['phone']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbDateOfBooking">Date of booking</label>
                                                <input type="date" name="date_booking" required=""  class="form-control" id="prVacation" value="<?php if (isset($_REQUEST['date_booking'])) echo $_REQUEST['date_booking']; else echo (date("Y-m-d")); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbRentAmount">Rent amount</label>
                                                <input type="number" name="rent" required="" placeholder="Enter rent amount" class="form-control" id="hbRentAmount"value="<?php if(isset($_REQUEST['rent'])) echo $_REQUEST['rent']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbAdvance">Advance paid</label>
                                                <input type="number" name="advance"required="" placeholder="Enter advance paid" class="form-control" id="hbAdvance" value="<?php if(isset($_REQUEST['advance'])) echo $_REQUEST['advance']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbLocation">Location</label>
                                                <input type="text" name="location" required="" placeholder="Enter location" class="form-control" id="hbLocation" value="<?php if(isset($_REQUEST['location'])) echo $_REQUEST['location']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbDateOfEvent">Date of event</label>
                                                <input type="date" name="date_event" required="" placeholder="Enter location" class="form-control" id="hbDateOfEvent" value="<?php if(isset($_REQUEST['date_event'])) echo $_REQUEST['date_event']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbNumberOfGuest">Number of guest</label>
                                                <input type="text" name="guest" required="" placeholder="Enter date of event" class="form-control" id="hbDateOfEvent" value="<?php if(isset($_REQUEST['guest'])) echo $_REQUEST['guest']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="hbWaiter">Waiter are required ?</label>
                                                <select class="form-control" id="hbWaiter" name="waiter">
                                                    <option value="yes"<?php if(isset($_REQUEST['waiter']) && $_REQUEST['waiter'] == 'yes') echo "selected" ?>>Yes</option>
                                                    <option value="no" <?php if(isset($_REQUEST['waiter']) && $_REQUEST['waiter'] == 'no') echo "selected" ?> >No</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="hbFemaleWaiter">If female waiter required ?</label>
                                                <select class="form-control" id="hbFemaleWaiter" name="female_waiter">
                                                    <option value="yes" <?php if(isset($_REQUEST['female_waiter']) && $_REQUEST['female_waiter'] == 'yes') echo "selected" ?>>Yes</option>
                                                    <option value="no" <?php if(isset($_REQUEST['female_waiter']) && $_REQUEST['female_waiter'] == 'no') echo "selected" ?> >No</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="hbFemaleWaiter">Advance that can given</label>
                                                <select class="form-control" id="hbFemaleWaiter" name="is_adv_given">
                                                    <option value="yes" <?php if(isset($_REQUEST['is_adv_given']) && $_REQUEST['is_adv_given'] == 'yes') echo "selected" ?> >Yes</option>
                                                    <option value="no" <?php if(isset($_REQUEST['is_adv_given']) && $_REQUEST['is_adv_given'] == 'no') echo "selected" ?> >No</option>
                                                </select>
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