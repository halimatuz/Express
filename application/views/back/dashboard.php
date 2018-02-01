<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>

<div class="content-wrapper">
  <div class="box-body">
    <div class="callout callout-success "><i class='fa fa-bullhorn'></i> Selamat Datang <b><?php echo $this->session->userdata('username') ?></b>
    </div>
  </div>


  <section class='content'>
    
        <div class="col-md-4">
        <div class='small-box bg-yellow'>
          <div class='inner'><h3> <?php echo $total_materi ?> </h3><p>Materi</p></div>
          <div class='icon'><i class='fa fa-file-pdf-o'></i></div>
          <a href='<?php echo base_url('index.php/admin/materi/lihat_materi') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
        </div>
       <div class='small-box bg-purple'>
          <div class='inner'><h3> <?php echo $total_video ?> </h3><p>Video</p></div>
          <div class='icon'><i class='fa fa-play-circle'></i></div>
          <a href='<?php echo base_url('index.php/admin/video/lihat_video') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
        </div>

         
        <div class='small-box bg-purple'>
          <div class='inner'><h3> <?php echo $total_video ?> </h3><p>Video</p></div>
          <div class='icon'><i class='fa fa-play-circle'></i></div>
          <a href='<?php echo base_url('index.php/admin/video/lihat_video') ?>' class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
        </div>
      
     

       
        
      
              
      </div>
    </div>
  </section>
</div>

