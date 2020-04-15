<!DOCTYPE html>
<html lang="id">


<!-- Mirrored from plasa.tr6.my.id/out/operational by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 14:30:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="manifest" href="<?php echo base_url();?>assets/manifest.json">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/indihome-favicon.png" type="image/x-icon">

    <title>Feedback Virtual XL Center</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/plugins/sb-admin2/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/noty/lib/noty.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <style>
    .bg-login-image-now {
        width: 25em;
        margin-left: 50px;
        align-self: center;
    }

    #loginFormContainer {
        position: relative;
        margin-top: 50px;
    }
</style>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/plugins/sb-admin2/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/noty/lib/noty.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/gasparesganga-jquery-loading-overlay/dist/loadingoverlay.min.js"></script>
</head>

<body class="bg-gradient-danger">
    <div class="content">
    <div class="container-fluid top">
        <br><br>
    </div>
    <div class="container" id="loginFormContainer">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-9">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5 mt-3">
                                    <div class="text-center">
                                        <img style="width: 300px; height: 190px;" class="img-fluid"
                                    src="<?php echo base_url();?>assets/images/antri.jpg" alt="Logo">
                                    <h1 class="h4 text-gray-900 mt-3 mb-4 vp-text">Mohon tunggu, Anda telah masuk dalam antrian</h1>
                                    <hr>
                                    <h3 class="h5 text-gray-900 ">Nomor antrian Anda adalah : </h3>
                                    <h2><?= $jumlah_gangguan; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="sticky bottom">
        <footer class="sticky-footer bg-transparent">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <h6 class="text-dark font-weight-bold">Copyright &copy; Virtual XL Center
                        <script>
                            var date = new Date()
                            document.write(date.getFullYear())
                        </script>
                    </h6>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#buttonSubmit').click(function(){
            window.location.href = '<?php echo base_url();?>'
        })
    });
</script>
</body>


<!-- Mirrored from plasa.tr6.my.id/out/operational by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 14:30:15 GMT -->
</html>