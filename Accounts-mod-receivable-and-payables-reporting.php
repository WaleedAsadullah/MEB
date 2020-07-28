<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

          <title>The Brainic School</title>


        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />


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
                            <div class="col-lg-12">
                                <div class="card-box table-responsive">
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Chart Of Account </h4>

                                    <div class="table-responsive">
                                        <!-- tablesaw table m-b-0 tablesaw-columntoggle table-bordered -->
                                        <table id="datatable" class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered ">
                                            <?php
                                            // ---------------
                                            if (isset($_REQUEST['submit'])) {
                                            $sql = 'INSERT INTO `ac_receivable_chart_of_account` (`char_of_account_id`, `user_id`, `user_date`, `account`, `acount_name`, `type`, `detail`, `report_data`) VALUES (NULL,\'';
                                            $sql .= get_curr_user();
                                            $sql .= '\', CURRENT_TIMESTAMP, \''.$_REQUEST['account'].'\', \''.$_REQUEST['acount_name'].'\', \''.$_REQUEST['type'].'\', \''.$_REQUEST['detail'].'\', \''.$_REQUEST['report_data'].'\')';
                                            insert_query($sql);
                                                }
                                            // -------------------

                                            ///edit code
                                            check_edit("ac_receivable_chart_of_account","char_of_account_id");
                                            edit_display("ac_receivable_chart_of_account","char_of_account_id");
                                            //end of edit code -shift view below delete

                                            // -------------------

                                            if(isset($_REQUEST['deleteid']) && is_numeric($_REQUEST['deleteid'])){ $sql = 'DELETE FROM `ac_receivable_chart_of_account` WHERE `ac_receivable_chart_of_account`.`char_of_account_id` = '.$_REQUEST['deleteid'];

                                            insert_query($sql);
                                            // echo "done deleting";
                                                }
                                            // $sql = "SELECT * FROM `ac_annual_appraisal`";

                                            $sql = 'SELECT `char_of_account_id`"ID", `account`"Account", `acount_name` "Account name", `type` "Type", `detail`"Detail", `report_data`"Report date" FROM `ac_receivable_chart_of_account` ';
                                            display_query($sql);

                                            ?>
                                        </table>
<!--                                         <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Account</th>
                                                <th>Account name</th>
                                                <th>Type</th>
                                                <th>Group</th>
                                                <th>Report Date</th>
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
                                              

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>1</td>
                                                    <td>Assets</td>
                                                    <td>Summary</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101</td>
                                                    <td>FIXED ASSETS</td>
                                                    <td>summary</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                <tr>
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101001</td>
                                                    <td>FIXED ASSETS</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101002</td>
                                                    <td>FURNITURE & FIXT MIP-NO:1</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101003</td>
                                                    <td>FURNITURE & FIXT MIP-NO.3</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>6</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101004</td>
                                                    <td>FURNITURE & FIXT MGC(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101005</td>
                                                    <td>FURNITURE & FIXT MGC(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101006</td>
                                                    <td>FURNITURE & FIXT MSS(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101007</td>
                                                    <td>FURNITURE & FIXT MONT(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101008</td>
                                                    <td>FURNITURE & FIXT CIT(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101009</td>
                                                    <td>FURNITURE & FIXT MCC</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101010</td>
                                                    <td>FURNITURE & FIXT MDBC_CLIFTON</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101011</td>
                                                    <td>COMPUTER MIS-A</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101012</td>
                                                    <td>COMPUTER MIS-B</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101013</td>
                                                    <td>COMPUTER MIP NO.1</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101014</td>
                                                    <td>COMPUTER MGC/MSS(FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101013</td>
                                                    <td>COMPUTER MPS (FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101016</td>
                                                    <td>COMPUTER C.I.T (FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101017</td>
                                                    <td>COMPUTER MIS#03</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101018</td>
                                                    <td>COMPUTER CLIFTON</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101019</td>
                                                    <td>COMPUTER FURNITURE & FIXTURE MGDC, KHARADAR</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101019</td>
                                                    <td>COMPUTER FURNITURE & FIXTURE MGDC, KHARADAR</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101020</td>
                                                    <td>DECORATION GOODS(KHATIJA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101021</td>
                                                    <td>DECORATION GOODS(FBALAWN)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101022</td>
                                                    <td>BUILD CONST MIS-A/B</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101022</td>
                                                    <td>BUILD CONST MIP NO.1</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101022</td>
                                                    <td>BUILD CONST MIP NO.1</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101028</td>
                                                    <td>BUILD CONST MGC (FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101029</td>
                                                    <td>BUILD CONST MONT (FBA)</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101030</td>
                                                    <td>LAWN CONST A>B>C LAWN FBA</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101031</td>
                                                    <td>BUILD CONST CLIFTON PLOT (MBDC</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>101032</td>
                                                    <td>BUILDING CONST. MGDC</td>
                                                    <td>Detail</td>
                                                    <td>Asset</td>
                                                    <td>24/05/2020</td>
                                                </tr>
                                            </tbody>
                                        </table> -->
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
                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Chart Of Account </h4>

                                        <form action="Accounts-mod-receivable-and-payables-reporting.php" method="post">


                                            <div class="form-group">
                                                <label for="prID">Account</label>
                                                <input type="text" name="account" required="" placeholder="Enter account number" class="form-control" id="prID" value="<?php if(isset($_REQUEST['account'])) echo $_REQUEST['account'] ?>" >
                                            </div>
                                        
                                   
                                            <div class="form-group">
                                                <label for="prName">Account Name</label>
                                                <input type="text" name="acount_name" required="" placeholder="Enter account name" class="form-control" id="prName" value="<?php if(isset($_REQUEST['acount_name'])) echo $_REQUEST['acount_name'] ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="prRegular">Type</label>
                                                <select type="text" name="type" parsley-trigger="change" required="" class="form-control" id="zaPreviously">
                                                    <option <?php if (isset($_REQUEST['type']) && $_REQUEST['type']== "Assets" ) echo "selected";  ?>  value="Assets">Assets</option>
                                                    <option <?php if (isset($_REQUEST['type']) && $_REQUEST['type']== "Capital" ) echo "selected";  ?> value="Capital">Capital</option>
                                                    <option <?php if (isset($_REQUEST['type']) && $_REQUEST['type']== "Revenue" ) echo "selected";  ?> value="Revenue">Revenue</option>
                                                    <option <?php if (isset($_REQUEST['type']) && $_REQUEST['type']== "Expenses" ) echo "selected";  ?> value="Expenses">Expenses</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="prVacation">Group</label>
                                                <select type="text" name="detail" parsley-trigger="change" required="" class="form-control" id="zaPreviously">
                                                    <option <?php if (isset($_REQUEST['detail']) && $_REQUEST['detail']== "Detail" ) echo "selected";  ?> value="Detail">Detail</option>
                                                    <option <?php if (isset($_REQUEST['detail']) && $_REQUEST['detail']== "Summary" ) echo "selected";  ?> value="Summary">Summary</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="prSick">Report Date</label>
                                                <input type="date" name="report_data"  required="" placeholder="Enter report date" class="form-control" id="prSick" value="<?php if (isset($_REQUEST['report_data'])) echo $_REQUEST['report_data']; else echo (date("Y-m-d")); ?>" >
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <?php 
                                                code_submit();
                                                ?>
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
        <script src="assets/js/jquery.scrollTo.min.js"></script>

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
</body>
</html>