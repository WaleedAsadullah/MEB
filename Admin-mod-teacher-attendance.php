<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>Admin - The Brainic School</title>

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
                            include_once("Admin-mod-header.php")
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
                            <!-- input form -->

                            <div class="card-box">
                                <div class="form-group">
                                    <h5><b>Attendance Form</b></h5>
                                    <form style="display: inline-flex; margin-top: 15px ">

                                            <input  class="form-control" type="text" id="fname" name="student name" placeholder=" Teacher Name" style="margin-right: 8px">
                                            <input  class="form-control" type="text" id="fname" name="seat no." placeholder="ID no." style="margin-right:  8px">
                                            <input  class="form-control" type="Date" id="fname" name="student name"  style="margin-right: 8px">
                                            <select name="Status" class="form-control" style="margin-right:  8px">
                                                            <option value="Present">Present</option>
                                                            <option value="Absent">Absent</option>
                                                            <option value="Late">Late</option>
                                                            <option value="Excused">Excused</option>
                                                            <option value="Alerts on Absences">Alerts on Absences</option>
                                            </select>
                                            <!-- <input  class="form-control" type="text" id="fname" name="student name" placeholder="Class" style="margin-right:8px"> -->
                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" style="margin-left: 10%">
                                                    Submit
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>

                            <!-- input form -->
                                <div >
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

                                    <h4 class="header-title m-t-0 m-b-30">Attendance Sheet</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Teacher Name</th>
                                                <th>ID No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <!-- <th>Class</th> -->
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ali Haider</td>
                                                    <td>00001</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-danger">Absent</span></td>
                                                    <!-- <td>1st</td> -->
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Hamza Farooq</td>
                                                    <td>00006</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <!-- <td>3rd</td> -->
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fraooq Khan</td>
                                                    <td>00076</td>
                                                    <td>10/05/2016</td>
                                                    <td><span class="label label-pink">Late</span></td>
                                                    <!-- <td>10th</td> -->
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Fazal Khan</td>
                                                    <td>00087</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-success">Present</span>
                                                    </td>
                                                    <!-- <td>8th</td> -->
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Fazeel Ali</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-warning">Excused</span></td>
                                                    <!-- <td>4th</td> -->
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>Ammar Rauf</td>
                                                    <td>00949</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-primary">Alerts on Absences</span></td>
                                                    <!-- <td>7th</td> -->
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>Abdullah Asad</td>
                                                    <td>00753</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <!-- <td>5th</td> -->
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>
                       
                        
                            
                    </div>
                </div>
            </dir>
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll" tabindex="5001" style="overflow: hidden; outline: none;">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            <div id="ascrail2001" class="nicescroll-rails" style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 57px; left: 232px; height: 789px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 8px; z-index: 999; top: 838px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(152, 166, 173); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div></div>
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