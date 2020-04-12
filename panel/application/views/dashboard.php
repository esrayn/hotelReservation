<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("includes/head.php"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php $this->load->view("includes/header.php"); ?>

    <?php $this->load->view("includes/left_sidebar.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php $this->load->view("dashboard/breadcrumb.php"); ?>

    <?php $this->load->view("dashboard/main_content.php"); ?>

    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("includes/footer.php"); ?>