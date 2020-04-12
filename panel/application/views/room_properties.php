<!doctype html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("room_properties/list/page_style"); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <?php $this->load->view("includes/header"); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php $this->load->view("includes/left_sidebar"); ?>


    <div class="content-wrapper">
        <?php $this->load->view("room_properties/list/breadcrumb"); ?>
        <!-- Content Wrapper. Contains page content -->
        <?php $this->load->view("room_properties/list/main_content"); ?>
        <!-- /.content-wrapper -->
    </div>

    <?php $this->load->view("includes/right_sidebar"); ?>

</div>

<?php $this->load->view("includes/footer"); ?>
<?php $this->load->view("room_properties/list/page_script"); ?>

</body>
</html>