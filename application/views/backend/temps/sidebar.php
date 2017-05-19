<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <?php if ($this->uri->segment(2) == '') {?>
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> </div>
                    </li>

                    <li class="sidebar-search-wrapper">

                    </li>
                    <li class="nav-item start active ">
                        <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/customers')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Customers</span>
                            <span class="badge badge-primary">
                           <?php echo count($customers);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/debtors')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Debtors</span>
                            <span class="badge badge-primary">
                            <?php echo count($debtors);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                        </a>
                    </li>
                <?php }?>

                <?php if ($this->uri->segment(2) == 'dashboard') {?>
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> </div>
                    </li>

                    <li class="sidebar-search-wrapper">

                    </li>
                    <li class="nav-item start active ">
                        <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/customers')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Customers</span>
                            <span class="badge badge-primary">
                           <?php echo count($customers);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/debtors')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Debtors</span>
                            <span class="badge badge-primary">
                            <?php echo count($debtors);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                        </a>
                    </li>
                <?php }?>

                <?php if ($this->uri->segment(2) == 'customers') {?>
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> </div>
                    </li>

                    <li class="sidebar-search-wrapper">

                    </li>
                    <li class="nav-item start ">
                        <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item active ">
                        <a href="<?php echo base_url('admin/customers')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Customers</span>
                            <span class="badge badge-primary">
                           <?php echo count($customers);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/debtors')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Debtors</span>
                            <span class="badge badge-primary">
                            <?php echo count($debtors);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                        </a>
                    </li>
                <?php }?>

                <?php if ($this->uri->segment(2) == 'debtors') {?>
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> </div>
                    </li>

                    <li class="sidebar-search-wrapper">

                    </li>
                    <li class="nav-item start ">
                        <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/customers')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Customers</span>
                            <span class="badge badge-primary">
                           <?php echo count($customers);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item active ">
                        <a href="<?php echo base_url('admin/debtors')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Debtors</span>
                            <span class="badge badge-primary">
                            <?php echo count($debtors);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                        </a>
                    </li>
                <?php }?>

                <?php if ($this->uri->segment(2) == 'view_customer') {?>
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> </div>
                    </li>

                    <li class="sidebar-search-wrapper">

                    </li>
                    <li class="nav-item start  ">
                        <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a href="<?php echo base_url('admin/customers')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Customers</span>
                            <span class="badge badge-primary">
                           <?php echo count($customers);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo base_url('admin/debtors')?>" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">Debtors</span>
                            <span class="badge badge-primary">
                            <?php echo count($debtors);?>
                        </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
