<!-- Kolom Sebelah Kiri -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image"><img src="<?php echo base_url()?>assets/images/admin.png" class="img-circle" alt="User Image"/></div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username'); ?></p>
          <p><?php echo $this->session->userdata('role'); ?></p>
        
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <li class="treeview">
        <a href="<?php echo base_url('index.php/admin/dashboard') ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-file-pdf-o'></i><span> Materi </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/admin/materi/index') ?>'><i class='fa fa-circle-o'></i> Tambah Materi </a></li>
          <li><a href='<?php echo base_url('index.php/admin/materi/lihat_materi') ?>'><i class='fa fa-circle-o'></i> Data Materi </a></li>
        </ul>
      </li>
       <li class='treeview'>
        <a href='#'><i class='  fa fa-play-circle'></i><span> Video </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/admin/video/index') ?>'><i class='fa fa-circle-o'></i> Tambah Video </a></li>
          <li><a href='<?php echo base_url('index.php/admin/video/lihat_video') ?>'><i class='fa fa-circle-o'></i> Data Video </a></li>
        </ul>
      </li>

      <li class='treeview'>
        <a href='#'><i class='fa fa-credit-card'></i><span> Mapel </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/admin/mapel/post') ?>'><i class='fa fa-circle-o'></i> Tambah Mapel </a></li>
          <li><a href='<?php echo base_url('index.php/admin/mapel/lihat_mapel') ?>'><i class='fa fa-circle-o'></i> Data Mapel </a></li>
        </ul>
      </li>
       <li class='treeview'>
        <a href='#'><i class='fa fa-comments'></i><span> Komentar </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/admin/auth/create') ?>'><i class='fa fa-circle-o'></i> Komentar Pending </a></li>
          <li><a href='<?php echo base_url('admin/kategori') ?>'><i class='fa fa-circle-o'></i> Data Komentar </a></li>
        </ul>
      </li>
      <li class='treeview'>
        <a href='#'><i class='fa fa-users'></i><span> User </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/admin/auth/create') ?>'><i class='fa fa-circle-o'></i> Tambah User </a></li>
          <li><a href='<?php echo base_url('admin/kategori') ?>'><i class='fa fa-circle-o'></i> Data User </a></li>
        </ul>
      </li>
       
     

     

  </section>
</aside>
