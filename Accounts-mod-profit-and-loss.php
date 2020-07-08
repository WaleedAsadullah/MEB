<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App title -->
        <title>Account - The Brainic School</title>

        <!-- App CSS -->
        <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.min.css">

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
    <style>
        table>thead>tr>th{
            text-align: center;
        }
    </style>
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


            <!-- Income form -->
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

                                    <h4 class="header-title m-t-0 m-b-30">Fees Income</h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>SEC-A</th>
                                                <th>PRY-A</th>
                                                <th>PRY-B</th>
                                                <th>MCC</th>
                                                <th>MIS#01</th>
                                                <th>MIS#03</th>
                                                <th>MDC</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th colspan="2" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-left"></i></button></a></th>
                                                    <th colspan="5" style="text-align: center;"><span>July</span><span> / </span><span>2020</span></th>
                                                    <th colspan="2" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-right"></i></button></a></th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="3" style="text-align: center;"><span style="margin: 0px 20px 0px"><i class="zmdi zmdi-edit"></i></span><span style="margin: 0px 20px 0px">
                                                    <i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></span>
                                                    <span style="margin: 0px 20px 0px"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></span>
                                                    <span style="margin: 0px 20px 0px"><i class="zmdi zmdi-copy"></i></span></td>
                                                    <td colspan="3"></td>
                                                </tr>
                                                <tr>
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
                                                    
                                                    <th>Fees Income</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
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

                                    <h4 class="header-title m-t-0 m-b-30">Expenditure</h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>SEC-A</th>
                                                <th>PRY-A</th>
                                                <th>PRY-B</th>
                                                <th>MCC</th>
                                                <th>MIS#01</th>
                                                <th>MIS#03</th>
                                                <th>MDC</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th colspan="2" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-left"></i></button></a></th>
                                                    <th colspan="5" style="text-align: center;"><span>July</span><span> / </span><span>2020</span></th>
                                                    <th colspan="2" style="text-align: center;"> <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > <i class="zmdi zmdi-arrow-right"></i></button></a></th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td colspan="3" style="text-align: center;"><span style="margin: 0px 20px 0px"><i class="zmdi zmdi-edit"></i></span><span style="margin: 0px 20px 0px">
                                                    <i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></span>
                                                    <span style="margin: 0px 20px 0px"><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></span>
                                                    <span style="margin: 0px 20px 0px"><i class="zmdi zmdi-copy"></i></span></td>
                                                    <td colspan="3"></td>
                                                </tr>
                                                <tr>
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
                                                    
                                                    <th>Salaries and benefits</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Medical</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>EOBI</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Social Security</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Telephone Expenses</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Utility Expenses</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Printing and Stationery</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Enterainment</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Conveyance</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Advertisment</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Repair and Maintence</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Games and Sports</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Labortaory Expenses</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>News Papers and Periodicals</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Water Tax</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Bank Charges</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Miscellaneous Expenses</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Electric equipments</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Property Tax</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Computer Equipments</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Internet</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th>Renewal of Recognition</th>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>12,340</td>
                                                    <td>84,000</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
                                                    <th>23,789</th>
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px">Income</h4>
                                    <br>

                                        <form action="#" novalidate="">
                                            <div class="row">
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-2"><label style="font-size: 16px; font-weight: 500 ; padding-bottom: 5px">Date (Month & Year)</label></div>
                                                <div class="col-lg-5"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="Month" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="Year" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500"> Fees Income</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Expenditure</h4>
                                    <br>

                                        <form action="#" novalidate="">
                                            <div class="row">
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-2"><label style="font-size: 16px; font-weight: 500 ; padding-bottom: 5px">Date (Month & Year)</label></div>
                                                <div class="col-lg-5"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="Month" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="Year" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500"> Salaries and Benefits</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500"> Medical </label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500"> EOBI</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Social Security</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Telephone Expenses</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Utility Expenses</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500"> Printing and Stationery</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Entertainment</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Conveyance</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Advertisement</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Repair and Maintenance</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Games and Sports</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Laboratory Expenses</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">News Paper and Periodicals</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Water Tax</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Bank Charges</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Miscellaneous Expenses</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Electric Equipments</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Property Tax</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Computer Equipments</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Internet</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label style="font-size: 16px; font-weight: 500">Renewal of Recognition</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="SEC-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="nmber"parsley-trigger="change"  placeholder="PRY-A" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change" placeholder="PRY-B" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text"  parsley-trigger="change"  placeholder="MCC" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number"parsley-trigger="change"  placeholder="MIS#01" class="form-control" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MIS#03" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="number" parsley-trigger="change"  placeholder="MDC" class="form-control"  data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            


                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
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

        <!--Chartist Chart-->
        <script src="assets/plugins/chartist/dist/chartist.min.js"></script>
        <script src="assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="assets/pages/jquery.chartist.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


</body>
</html>