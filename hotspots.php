<?php ob_start();
session_start();
if (!(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['apikey']))) {
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php'; 
header('Location: ' . $home_url); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gratifi</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="./css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="./css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="./css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="./css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="./css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="./css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="./css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="./css/morris/morris.css" rel="stylesheet" type="text/css" />
 <link href="./css/bootstrap-slider/slider.css" rel="stylesheet" type="text/css" />
       
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="home.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Gratifi
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['username']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php 
                                        echo $_SESSION['username'] . '<br /><small>' . $_SESSION['email'] . '</small>';
                                        ?>
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo split(' ', $_SESSION['username'])[0]; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                  <!--   <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                     <!--    <li>
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="visitors.php">
                                <i class="fa fa-th"></i> <span>Visitors</span><!--  <small class="badge pull-right bg-green">new</small> -->
                            </a>
                        </li>
                        
                        <li class="active">
                            <a href="hotspots.php">
                                <i class="fa fa-calendar"></i> <span>Hotspots</span>
                                <!-- <small class="badge pull-right bg-red">3</small> -->
                            </a>
                        </li>
                        <li>
                            <a href="campaigns.php">
                                <i class="fa fa-envelope"></i> <span>Campaigns</span>
                                <!-- <small class="badge pull-right bg-yellow">12</small> -->
                            </a>
                        </li>
                        <!-- <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Real-time</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Settings</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        
 -->                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Hotspots
                        <small>Manage your wifi hotspots</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Hotspots</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


<!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- small box -->

                            <!-- <div class="box box-info"> -->
                                
                                <!-- START CUSTOM TABS -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">View existing</a></li>
                                    <li><a href="#tab_2" data-toggle="tab">Create New</a></li>
                                   
                                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        
                                    <table id="table" class="table table-bordered table-hover">
                                    </table>
                                    </div><!-- /.tab-pane -->
                                  
                                    <div class="tab-pane" id="tab_2">
                                       <form style="width:50%" onsubmit="createHotspot(); return false;">
                                            <div class="box-body">
                                          <div class="form-group">
                                                <label>Enter Hotspot Details:</label>

                                            <input type="text" name="h_ssid" id="h_ssid" class="form-control" placeholder="Wifi SSID">
                                        </div>
                                          <div class="form-group">
                                            <input type="password" name="h_password" id="h_password" class="form-control" placeholder="Wifi Password">
                                        </div>
                                          <div class="form-group">
                                            <input type="text" name="h_loginurl" id="h_loginurl" class="form-control" placeholder="Hostpot Login URL">
                                        </div>
                                          <div class="form-group">
                                            <input type="text" name="h_loginuser" id="h_loginuser" class="form-control" placeholder="Hotspot Login User">
                                        </div>
                                          <div class="form-group">
                                            <input type="password" id="h_loginpwd" name="h_loginpwd" class="form-control" placeholder="Hotspot Login Password">
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Create this hotspot</button>
                                    </div>
                                </form>
                                </div><!-- /.tab-content -->
                      
                    <!-- END CUSTOM TABS -->
                            </div><!-- /.box -->

<!-- </div> -->
                        </div><!-- ./col -->
                    

                    </div><!-- /.row -->


                   
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="./js/plugins/jquery.min.js"></script>
        <script src="./js/plugins/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- Morris.js charts -->
        <script src="./js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="./js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="./js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="./js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="./js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="./js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="./js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="./js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="./js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="./js/AdminLTE/app.js" type="text/javascript"></script>

         <script src="./js/AdminLTE/demo.js" type="text/javascript"></script>
        <script src="./js/plugins/raphael-min.js"></script>

        <script src="./js/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="./js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="./js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="./js/plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>

    </body>

    <script>
                // $(function() {
                /* BOOTSTRAP SLIDER */
                // $('.slider').slider();

// });
    var AuthToken = "<?php echo $_SESSION['apikey']; ?>";
    var userType = "map_user";
$.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);

            },
  url: "../gratifi-back/v1/index.php/hotspots",

})
  .done(function( msg ) {
    // console.log(msg);
    $('#table').html('<thead><tr><th>SSID</th><th>Status</th><th>Login URL</th><th>Login Username</th></tr></thead>');
   
    var array = msg.list[0];
    console.log(array);
    for (var i=0; i<array.length; i++) {
        var item = array[i];
        console.log(item);
        var row = "<tr style='cursor: pointer;'><td>"+item.hname+"</td><td>"+item.hstatus+"</td><td>"+item.hurl+"</td><td>"+item.huname+"</td></tr>";
        $('#table').append(row);
    }
    $('#table').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
   

                });

function createHotspot() {
    $.ajax({
  type: "POST",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);

            },
  url: "../gratifi-back/v1/index.php/addhotspot",
  data: {
            h_ssid: $('#h_ssid').val(),
            h_password: $('#h_password').val(),
            h_loginurl: $('#h_loginurl').val(),
            h_loginpwd: $('#h_loginpwd').val(),
            h_loginuser: $('#h_loginuser').val(),
  },
})
  .done(function( msg ) {
    alert('Hotspot created successfully!');
    window.reload();
                });

}


// function createHotspot() {
//     // alert('works');
//     // console.log($('.slider').val());
//     // alert(document.getElementById('c_agegroup').data);
//    alert("This will create a new hotspot in real version.");

// //   return false;
// }
    </script>
</html>
