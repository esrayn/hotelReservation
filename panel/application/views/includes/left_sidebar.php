<?php

$parent     = $this->session->userdata("parent");
$activeItem = $this->session->userdata("activeItem");

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/paradoks_logo.png'); ?>" alt="Paradoks Soft Logo" class="brand-image elevation-3"
             style="opacity: .8">
       <br> <span class="brand-text font-weight-light">OTEL REZERVASYON</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Rıdvan Uyan</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

               <!-- <li class="nav-item" id="dashboard">
                    <a href="dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>-->
                <li class="nav-item has-treeview <?php echo ($parent=="panel_folder") ? "menu-open" : "" ; ?>">
                    <a href="#" class="nav-link <?php echo ($parent=="panel_folder") ? "active" : "" ;?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Panel İşlemleri
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>



                    <ul class="nav nav-treeview" id="panel_folder">
                        <li class="nav-item" id="dashboard">
                            <a href="<?php echo base_url("dashboard");?>" class="nav-link <?php echo ($activeItem=="dashboard") ? "active" : "" ; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo ($parent=="room_folder") ? "menu-open" : "" ; ?>">
                    <a href="#" class="nav-link <?php echo ($parent=="room_folder") ? "active" : "" ; ?>">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Oda İşlemleri
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">4</span>
                        </p>
                    </a>



                    <ul class="nav nav-treeview" id="room_folder">
                        <li class="nav-item" id="room_category">
                            <a href="<?php echo base_url("roomcategory");?>" class="nav-link <?php echo ($activeItem=="room_category") ? "active" : "" ; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategoriler</p>
                            </a>
                        </li>
                        <li class="nav-item" id="room">
                            <a href="<?php echo base_url("room");?>" class="nav-link <?php echo ($activeItem=="room") ? "active" : "" ; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Odalar</p>
                            </a>
                        </li>
                        <li class="nav-item" id="room_properties">
                            <a href="<?php echo base_url("roomproperties");?>" class="nav-link <?php echo ($activeItem=="room_properties") ? "active" : "" ; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Özellikler</p>
                            </a>
                        </li>
                        <li class="nav-item" id="room_extraservices">
                            <a href="<?php echo base_url("roomextraservices");?>" class="nav-link <?php echo ($activeItem=="room_extraservices") ? "active" : "" ; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Extra Servisler</p>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->


    </div>
    <!-- /.sidebar -->
</aside>


