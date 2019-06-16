<?php $siteurl="http://localhost:8080/sissmkn2";
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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/scss/style.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/chosen/chosen.min.css">

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo $siteurl; ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form" style="border:1px solid green" >
                    <form action="proses.php" method="get">
                        
                        <div class="form-group">
                            <div class="col col-md-3"><label>NIS/NIK</label></div>
                            <div class="col col-md-9" style="margin-bottom:3%"><input type="text" class="form-control" placeholder="masukan NIS / NIK Anda" name="nomor" required></div>
                        </div>
                        <div class="form-group">
                            <div class="col col-md-3"><label><i class="ti-unlock"></i>&nbsp;&nbsp; Hint</label></div>
                            <div class="col col-md-9" style="margin-bottom:3%"><input type="password" class="form-control" placeholder="masukan password hint" name="passwordHint" required></div>
                        </div>
                        <div class="form-group">
                            <div class="col col-md-3"><label><i class="fa fa-envelope-o"></i>&nbsp;&nbsp; email</label></div>
                            <div class="col col-md-9" style="margin-bottom:3%"><input type="email" class="form-control" placeholder="masukan email" name="email" required></div>
                        </div>
                        <div class="form-group" >
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger pull-left col col-md-6"><a href="<?php echo $siteurl; ?>/views/login/login/index.php" style="color:white">cancel&nbsp;&nbsp;&nbsp;<i class="ti-close"></i></a></button>
                                <button type="submit" class="btn btn-warning pull-left col col-md-6">Jump to Sign in&nbsp;&nbsp;&nbsp;<i class="ti-share"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
