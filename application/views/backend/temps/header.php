<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="<?php echo base_url() ;?>assets/layouts/layout/img/avatar3_small.jpg" />
                        <span class="username username-hide-on-mobile">
                            <?php
                            $username = $this->db->get_where('tbl_users', array('id' => $u_id))->row('username');
                            echo $username;
                            ?>
                        </span>
                    </a>
                </li>
                <li class="dropdown dropdown-quick-sidebar-toggler">

                </li>
                <li class="dropdown dropdown-user">
                    <a href="<?php echo base_url('auth/logout')?>">
                        <i class="icon-logout"></i>
                        <span class="username username-hide-on-mobile">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
