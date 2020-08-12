<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

          <?php include_once("title.php") ?>

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
            .mainpage{
                text-align: center;

            }
            .halfpage{
                width:1200px;
                height: 820px;
                margin: auto;
                padding: 50px;
                border :2px solid #95B9C7;
                box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                display: inline-block;
                text-align: left;
                
            }
            body{
                background-color: white;
                font-family: 'Roboto', sans-serif;
            }
            table>thead>tr>th,table>tbody>tr>td,th{
                
                padding: 5px 20px 5px;
            }
            }
            th,td{
                width: 100px;
            }
            table{
                margin: auto;
                border-collapse: collapse
            }
            table,th,td{

                border: 1px solid black;
            }
            th{
                color:#264a7d;
            }
            td{
                color: rgb(50,50,50);
            }
        </style>

    </head>
    <body>
        <div class="mainpage">
            <div class="halfpage">
                <div class="center">
                    <div class="row" >
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <h4 style="color:#264a7d;text-align: center; font-size: 22px; padding: 0px 0px 10px; margin: 0px 0px 10px"><u><strong>Income</strong></u></h4>
                        </div>
                        <div class="col-lg-4"><h4 style="color:#264a7d;text-align: center; font-size: 18px; padding: 0px 0px 10px; margin: 0px 0px 10px"><u><strong>july 2020</strong></u></h4>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2"></th>
                                <!-- <th></th> -->
                                <th>SEC-A</th>
                                <th>PRY-A</th>
                                <th>PRY-B</th>
                                <th>MCC</th>
                                <th>MIS#01</th>
                                <th>MIS#03</th>
                                <th>MDC</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                        
                                <th colspan="2">Fees Income</th>
                                <td>12,340</td>
                                <td>12,340</td>
                                <td>12,340</td>
                                <td>12,340</td>
                                <td>12,340</td>
                                <td>12,340</td>
                                <td>12,340</td>
                                <th>84,000</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
</html>