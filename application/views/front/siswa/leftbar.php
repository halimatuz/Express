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
        <a href="dashboard/index">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class='treeview'>
        <a href='<?php echo base_url('index.php/siswa/materi/index') ?>'><i class='fa fa-newspaper-o'></i><span> Materi </span><i class='fa fa-angle-left pull-right'></i></a>
        <ul class='treeview-menu'>
          <li><a href='<?php echo base_url('index.php/siswa/materi/index') ?>'><i class='fa fa-circle-o'></i> Matematika </a></li>
          <li><a href='<?php echo base_url('index.php/admin/video/lihat_video') ?>'><i class='fa fa-circle-o'></i> Fisika </a></li>
           
          <li><a href='<?php echo base_url('index.php/admin/video/index') ?>'><i class='fa fa-circle-o'></i> Kimia </a></li>
          <li><a href='<?php echo base_url('index.php/admin/video/lihat_video') ?>'><i class='fa fa-circle-o'></i> Biologi </a></li>
        
        </ul>
      </li>
       <li class='treeview'>
        <a href='http://localhost/express/index.php/siswa/video/index'><i class='fa fa-users'></i><span> Video </span><i class='fa fa-angle-left pull-right'></i></a>
       
      </li>

      <li class='treeview'>
        <a href='<?php echo base_url('index.php/siswa/room') ?>'><i class='fa fa-credit-card'></i><span> Q & A Room </span><i class='fa fa-angle-left pull-right'></i></a>
       
      </li>
     
     

     

  </section>
</aside>
