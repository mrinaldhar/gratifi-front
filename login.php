<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Gratifi | Log In</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="../gratifi-back/v1/index.php/login" method="POST">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email Address"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    <span id="response" class="error"></span><br />
                    
                    <a href="register.php" class="text-center">Register for a new account</a>
                </div>
            </form>

            
        </div>

        <script src="./js/plugins/jquery.min.js"></script>
        <script src="./js/plugins/bootstrap.min.js" type="text/javascript"></script>

    </body>
    <script>
// function dosubmit() {
//         $.ajax({
//   type: "POST",
//   url: "../gratifi-back/v1/index.php/login",
//   data: { 
//     email: $('#email').val(), 
//     password: $('#password').val() },
// })
//   .done(function( msg ) {
//     if (msg['error']==true) {
//         alert(msg.message);
//     }
//     else {
//         alert('Login successful.');
//     }
//   });
//      return false;
// }

    </script>
</html>