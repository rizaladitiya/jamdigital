<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar5.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?=$nama;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form --><!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
            <li class="header">Navigasi</li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-dashboard" ></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="<?=$this->uri->segment('1')=="dashboard"?'active':'';?>"><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-bolt"></i>Alarm</a></li>
                    <li class="<?=$this->uri->segment('1')=="setting"?'active':'';?>"><a href="<?php echo site_url('setting') ?>"><i class="fa fa-cog"></i> Pengaturan</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">