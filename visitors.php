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
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="visitors.php">
                                <i class="fa fa-th"></i> <span>Visitors</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Hotspots</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="campaigns.php">
                                <i class="fa fa-envelope"></i> <span>Campaigns</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
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
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


<!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- small box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Monthly Usage Statistics</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="chart-monthly" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->
                    

                    </div><!-- /.row -->


                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- small box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Age Statistics</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="chart-age" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->
                        
                        <div class="col-md-6">
                            <!-- small box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Interests Statistics</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="chart-interests" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->

                        <div class="col-xs-6">
                            <!-- small box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Gender Statistics</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="chart-gender" style="height: 200px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->
                         <div class="col-md-6">
                            <!-- small box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Monthly Frequency Statistics</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="chart-timesamonth" style="height: 300px;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="col-xs-3">
                            <!-- small box -->

                            <div class="box box-solid bg-blue">
                                <div class="box-body">
                                    <h4>Total Visitors: <span id="totalvisitors"></span></h4>
                                    <h4>Visitors/Day: <span id="visitorsperday"></span></h4>
                                    <h4>Unique Visitors/Month: <span id="uniquevisitors"></span></h4>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- ./col -->

                    </div>

                   
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
<script type="text/javascript">
            $(function() {

                // var line = new Morris.Line({
                //     element: 'line-chart',
                //     resize: true,
                //     data: [
                //         {y: '2011 Q1', item1: 2666, item2:500},
                //         {y: '2011 Q2', item1: 2778},
                //         {y: '2011 Q3', item1: 4912, item2:10000},
                //         {y: '2011 Q4', item1: 3767},
                //         {y: '2012 Q1', item1: 6810},
                //         {y: '2012 Q2', item1: 5670},
                //         {y: '2012 Q3', item1: 4820},
                //         {y: '2012 Q4', item1: 15073},
                //         {y: '2013 Q1', item1: 10687},
                //         {y: '2013 Q2', item1: 8432}
                //     ],
                //     xkey: 'y',
                //     ykeys: ['item1', 'item2'],
                //     labels: ['Item 1', 'Item 2'],
                //     lineColors: ['#3c8dbc', '#8a8a8a'],
                //     hideHover: 'auto'
                // });
var jaxdata;
var AuthToken = "<?php echo $_SESSION['apikey']; ?>";
var userType = 'map_user';
        $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);
            },
  url: "../gratifi-back/v1/index.php/visitors/age",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
     var bar = new Morris.Bar({
                    element: 'chart-age',
                    resize: true,
                    data: [
                        {y: '<15', a: obj["l15"]},
                        {y: '15 - 20', a: obj["1520"]},
                        {y: '20 - 30', a: obj["2030"]},
                        {y: '>30', a: obj["g30"]}
                    ],
                    barColors: ['#00a65a'],
                    xkey: 'y',
                    ykeys: ['a'],
                    labels: ['Number of users'],
                    hideHover: 'auto'
                });

                });





  $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);

            },
  url: "../gratifi-back/v1/index.php/visitors/interests",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
    var ar = []
    jQuery.each(obj, function(index, value) {
        if (index!=''){
        ar.push({'int': index, 'val': value})
    }
    });
    // console.log(ar);
     var bar = new Morris.Bar({
                    element: 'chart-interests',
                    resize: true,
                    data: ar,
                    barColors: ['#00a65a'],
                    xkey: 'int',
                    ykeys: ['val'],
                    labels: ['Number of users'],
                    hideHover: 'auto'
                });

                });




 $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);

            },
  url: "../gratifi-back/v1/index.php/visitors/monthly",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
    var ar = []
    jQuery.each(obj, function(index, value) {
        if (index!=''){
        ar.push({'int': index, 'val': value})
    }
    });
    // console.log(ar);
      var line = new Morris.Line({
                    element: 'chart-monthly',
                    resize: true,
                    data: ar,
                    xkey: 'int',
                    ykeys: ['val'],
                    labels: ['Number of active users'],
                    lineColors: ['#3c8dbc'],
                    hideHover: 'auto'
                });

                });



 $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);

            },
  url: "../gratifi-back/v1/index.php/visitors/gender",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
    
  var donut = new Morris.Donut({
                    element: 'chart-gender',
                    resize: true,
                    colors: ["#3c8dbc", "#f56954"],
                    data: [
                        {label: "Male", value: obj.male},
                        {label: "Female", value: obj.female},
                    ],
                    hideHover: 'auto'
                });

                });


 $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);
                
            },
  url: "../gratifi-back/v1/index.php/visitors/total",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
    $('#totalvisitors').html(obj.total);

                });



   $.ajax({
  type: "GET",
  beforeSend: function (request)
            {
                request.setRequestHeader("Authorization", AuthToken);
                request.setRequestHeader("User_Type", userType);
                
            },
  url: "../gratifi-back/v1/index.php/visitors/timesamonth",

})
  .done(function( msg ) {
    var obj = msg["stats"][0];
    console.log(msg["stats"][0]);
    var ar = [0,0,0,0];
    var totalnum = 0;
    jQuery.each(obj, function(index, value) {
        if (value==1) {
            ar[0]++;
        }
        else if (value == 2 || value == 3) {
            ar[1]++;
        }
        else if (value == 4 || value == 5) {
            ar[2]++;
        }
        else if (value > 5) {
            ar[3]++;
        }
    
    totalnum++;
    });
console.log(ar);
var bar = new Morris.Bar({
                    element: 'chart-timesamonth',
                    resize: true,
                    data: [ {int: '1', val: ar[0]*100/totalnum},
                    {int: '2 or 3', val: ar[1]*100/totalnum},
                    {int: '4 or 5', val: ar[2]*100/totalnum},
                    {int: '>5', val: ar[3]*100/totalnum}
                    ],
                    barColors: ['#00a65a'],
                    xkey: 'int',
                    ykeys: ['val'],
                    labels: ['Percent of users'],
                    hideHover: 'auto'
                });
$('#uniquevisitors').html(totalnum);
                });




});



        </script>

    </body>
</html>
