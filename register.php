<!DOCTYPE html>
<html class="bg-black">
<head>
        <meta charset="UTF-8">
        <title>Gratifi | Register New Account</title>
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
            <div class="header">Register New Account</div>
             <form action="#" onsubmit="dosubmit(); return false;">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name"/>
                    </div>
                    <div class="form-group">
                        <select id="user_type" name="user_type" class="form-control">
                            <option>Wifi Provider</option>
                            <option>Advertiser</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="exist_business" name="exist_business"><option>Existing Business</option><option>New Business</option></select>
                        <select id="businessid" name="businessid" class="form-control" placeholder="Business Name">

                        </select>

                        <!-- <input type="text" id="businessid" name="businessid" class="form-control" placeholder="Business ID"/> -->
                    </div>
                    <div class="form-group" id="businessdetails">
                        <input type="text" id="business_name" class="form-control" name="business_name" placeholder="Business Name" />
                        <input type="text" id="business_city" class="form-control" name="business_city" placeholder="Business City" />
                        <input type="text" id="business_phone" class="form-control" name="business_phone" placeholder="Business Phone Number" />
                        <textarea id="business_address" class="form-control" name="business_address" placeholder="Address"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email Address"/>
                    </div>
                    <div class="form-group">
                        <input type="phone" id="mobile" name="mobile" class="form-control" placeholder="Phone Number"/>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password"/>
                    </div>
                   <!--  <div class="form-group">
                        <input type="text" id="age" name="age" class="form-control" placeholder="Age"/>
                    </div> -->
                  <!--   <div class="form-group">
                        <select class="form-control" id="gender" name="gender">
                            <option>Select Gender
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <input type="text" id="city" name="city" class="form-control" placeholder="City"/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="country" name="country" class="form-control" placeholder="Country"/>
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Sign me up</button>

                    <a href="login.php" class="text-center">I already have an account</a>
                </div>
            </form>

            
        </div>

        <script src="js/plugins/jquery.min.js"></script>
        <script src="js/plugins/bootstrap.min.js" type="text/javascript"></script>

    </body>
    <script>
            $('#businessdetails').slideUp();
    $.ajax({
                type: "GET",
                url: "../gratifi-back/v1/index.php/businesses",
            })
            .done(function( msg ) {
                $('#businessid').slideDown();
            var list = msg.result;
            for (var i=0; i<list.length; i++) {
                $('#businessid').append('<option>'+list[i].id+': '+list[i].name+', '+list[i].city+'</option>')
            }
        });
    $('#exist_business').change(function() {
        if ($('#exist_business').val() == 'Existing Business') {
            $('#businessdetails').slideUp();
            $('#businessid').slideDown();
            
        }
        else {
$('#businessid').slideUp();
$('#businessdetails').slideDown();
        }
    }); 
function dosubmit() {
// alert($('#businessid').val().split(':')[0]);

if ($('#exist_business').val() == 'Existing Business') {
        $.ajax({
  type: "POST",
  url: "../gratifi-back/v1/index.php/register",
  data: { 
    email: $('#email').val(), 
    password: $('#password').val(),
    name: $('#name').val(),
    country: $('#country').val(),
    city: $('#city').val(),
    age: 0,
    gender: 'Male',
    mobile: $('#mobile').val(),
    exist_business: $('#exist_business').val(),
    businessid: $('#businessid').val().split(':')[0],
    user_type: $('#user_type').val(),

     },
})
  .done(function( msg ) {
    if (msg['error']==true) {
        // alert(msg.message);
        // window.location = "./login.php";

    }
    else {
        window.location = "./login.php";

        // alert('Login successful.');
    }
  });
}
else {
    console.log($('#business_phone').val());
    $.ajax({
  type: "POST",
  url: "../gratifi-back/v1/index.php/register",
  data: { 
    email: $('#email').val(), 
    password: $('#password').val(),
    name: $('#name').val(),
    country: $('#country').val(),
    city: $('#city').val(),
    age: 0,
    gender: 'Male',
    mobile: $('#mobile').val(),
    exist_business: $('#exist_business').val(),
    businessname: $('#business_name').val(),
    businesscity: $('#business_city').val(),
    businessphone: $('#business_phone').val(),
    businessaddress: $('#business_address').val(),
    user_type: $('#user_type').val(),

     },
})
  .done(function( msg ) {
    if (msg['error']==true) {
        // alert(msg.message);
        // window.location = "./login.php";

    }
    else {
        window.location = "./login.php";
        
        // alert('Login successful.');
    }
  });
}
     return false;
}

    </script>
</html>