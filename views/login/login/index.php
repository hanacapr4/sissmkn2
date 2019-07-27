<?php $siteurl="http://localhost:8080/SISSMKN2";
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMKN 2 MALANG</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/bootstrap-select.less">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/scss/style.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/chosen/chosen.min.css">

</head>
<body style="background-color:#343a40;">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo $siteurl; ?>/views/login/login/index.php">
                        <img class="align-content" src="<?php echo $siteurl; ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="form-control">
                    <form action="<?php echo $siteurl; ?>/config/Masuk.php" method="post">
                        <div class="form-group">
                            <div class="checkbox">
                                    <label class="pull-right"><a href="<?php echo $siteurl; ?>/views/login/login/lupa_sandi.php" class="pull-right" width:150px; height:20px:; ">Forgotten Password?</a></label>
                            </div>
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="username" name="username" placeholder="Username" class="form-control" required="" oninvalid="this.setCustomValidity('Input Username')" oninput="setCustomValidity('')" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required=""oninvalid="this.setCustomValidity('Input Password.')" oninput="setCustomValidity('')" autocomplete="off">
                                  <span class="input-group-addon" onclick="return showHide()"><span class="fa fa-eye"></span></span>
                            </div>
                        </div>
                        <div class="form-actions form-group">
                                <center><button type="submit" class="btn btn-success btn-sm" style='width:250px; height:50px;'>Sign In</button></center>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function showHide()
    {
        var x = document.getElementById("password");
        if (x.type === "password")
        {
            x.type = "text";
        }
        else
        {
            x.type = "password";
        }
    };
    </script>
    <script>
    jQuery(document).ready(function($)
    {
        document.onreadystatechange = function ()
        {
            var state = document.readyState
            if (state == 'complete')
            {
                $('div.hidden').fadeIn(1000).removeClass('hidden');
            }
        }
    });
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
