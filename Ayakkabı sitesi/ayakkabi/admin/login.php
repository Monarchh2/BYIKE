
<!DOCTYPE html>  
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
<title>Yönetici Girişi</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">


</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="new-login-register">
 
      <div class="new-login-box">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Yönetici Girişi</h3>
                    <small>
<?php if (@ $_GET['durum']=="no") { ?>
  <b style="color: red;">Kullanıcı adınız ya da şifreniz hatalı !!! </b>
<?php } else {
echo "Lütfen bilgileri girin...";
} ?>

                    </small>
                  <form class="form-horizontal new-lg-form" id="loginform" action="netting/islem-admin.php" method="POST">
                    
                    <div class="form-group  m-t-20">
                      <div class="col-xs-12">
                        <label>Kullanıcı Adınız</label>
                        <input class="form-control" type="text" name="admin_mail" required="required" placeholder="Kullanıcı Adınız">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <label>Şifreniz</label>
                        <input class="form-control" type="password" name="admin_sifre" required="required" placeholder="Şifreniz">
                      </div>
                    </div>
                    <div class="form-group">
                  
                    </div>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" name="admingiris" type="submit">Giriş Yap</button>
                      </div>
                    </div>
         
               
                  </form>
    
                </div>
      </div>            
  
  
</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
