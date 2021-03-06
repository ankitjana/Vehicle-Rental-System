<?php 
  $page_title = isset($page_title) ? $page_title : COMPANY_NAME;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $page_title; ?></title>

  <!-- Bootstrap core CSS -->  

  <link href="<?php echo url_for('/stylesheets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    



  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900'); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo url_for('/stylesheets/css/home.min.css'); ?>" rel="stylesheet">


</head>

<body>

  <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/vendor/bootstrap/css/jquery.datetimepicker.min.css'); ?>"/>
  <script src="<?php echo url_for('/stylesheets/vendor/bootstrap/js/jquery.datetimepicker.full.js'); ?>"></script>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo url_for('/index.php'); ?>"><?php echo $page_title; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo url_for('/listyourcar.php'); ?>">List your car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img class="icon-user" src = "<?php echo url_for('/images/icon-user.png'); ?>"/></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>