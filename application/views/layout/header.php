<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WEBINAR 1</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/dist/css/contoh.css.php'); ?>">
    
    <!-- eonasdan-bootstrap-datetimepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css'); ?>">

    <!--
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/dist/css/AdminLTE.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css'); ?>">

    <!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/plugins/datepicker/bootstrap-datepicker.min.css'); ?>">

    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/select2/dist/css/select2.min.css'); ?>">

    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/select2-bootstrap4-theme/dist/select2.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/summernote/dist/summernote.css'); ?>">

    <!-- toast -->
	<link href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/toastr/toastr.min.css'); ?>" rel="stylesheet"/>

    <!-- boostrap tabs scrolling -->
    <link href="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/jquery-bootstrap-scrolling-tabs/dist/jquery.scrolling-tabs.min.css'); ?>" rel="stylesheet"/>

    <!-- Bootstrap time Picker -->
    <link href="<?php echo base_url('assets/AdminLTE-2.4.2/plugins/timepicker/bootstrap-timepicker.min.css'); ?>" rel="stylesheet">

    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- moment -->
    <script type="text/javascript" src="<?php echo base_url('assets\AdminLTE-2.4.2\bower_components\moment\min\moment.min.js'); ?>"></script>

    <!-- Bootstrap 3.3.7 -->
    <script type="text/javascript" src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

    <!-- eonasdan-bootstrap-datetimepicker -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'); ?>"></script>

    <!-- Highcharts
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/highcharts/highcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/highcharts/modules/data.js'); ?>"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/highcharts/modules/drilldown.js'); ?>"></script>
    -->

    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/ckeditor/ckeditor.js'); ?>"></script>

    <!-- fusion chart -->
    <script type="text/javascript" src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/fusionchart/js/fusioncharts.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/fusionchart/integrations/jquery/js/jquery-fusioncharts.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/fusionchart/js/themes/fusioncharts.theme.candy.js'); ?>"></script>
    <style>
    #maps {
        height: 100%;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<!-- Site wrapper -->
<div class="wrapper">
    <?php 
        $this->load->view('layout/topbar_sidebar');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">