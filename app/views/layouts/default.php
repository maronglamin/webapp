<?php
use Core\Session;
use Core\FH;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$this->siteTitle(); ?></title>

    <!-- Favicons -->
  <link href="<?=PROOT?>assets/img/favicon.png" rel="icon">
  <link href="<?=PROOT?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=PROOT?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=PROOT?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=PROOT?>assets/css/style.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="css/bootstrap4/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/custom.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/alertMsg.min.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8"> -->

    <?= $this->content('head'); ?>

  </head>
  <body>
    <?php include 'main_menu.php' ?>
    <div class="container-fluid pb-5" style="min-height: calc(100vh - 72px);">
      <?= Session::displayMsg() ?>
      <?= $this->content('body'); ?>
    </div>
    <!-- <script src="<?=PROOT?>js/jQuery-3.3.1.min.js"></script>
    <script src="<?=PROOT?>js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="<?=PROOT?>js/bootstrap4/bootstrap.min.js"></script>
    <script src="<?=PROOT?>js/alertMsg.min.js?v=<?=VERSION?>"></script> -->

    <script src="<?=PROOT?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=PROOT?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=PROOT?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=PROOT?>assets/js/main.js"></script>

  </body>
</html>
