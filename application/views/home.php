<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEER</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

<script 
src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script 
src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script 
src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.js">
</script>
<link rel="stylesheet" 
href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" 
href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/jqueryui/dataTables.jqueryui.css">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PEER Data Management</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">       
       
       <div class="row">
        <div class
       </div>

       <h2> List Of Patient </h2>


       <table id="myTable" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Participant_ID</th>
                    <th>Name</th>
                    <th>Date Admission </th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>CMP0001</td>
                    <td>Vasko Dagamass</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0003</td>
                    <td>Vasko Dagamaxxrrt</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0004</td>
                    <td>Vasko Dagamaxx</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CRP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>

                <tr>
                    <td>CMP0005</td>
                    <td>Vasko Dagamasss</td>
                    <td>January 26, 2016</td>
                </tr>
            </tbody>
       </table>

    </div>
    <!-- /.container -->
    <script type="text/JavaScript">
        $(document).ready(function(){
        $('#myTable').DataTable();
    });
    </script>
    <!-- jQuery Version 1.11.1 -->
    


     

</body>

</html>
