 <?php $this->load->view('front/siswa/head'); ?>
<?php $this->load->view('front/siswa/header'); ?>
<?php $this->load->view('front/siswa/leftbar'); ?>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href='<?php echo base_url('assets/css/style2.css') ?>'>
<div class="content-wrapper">
  <section class="content-header">
   <h1><?php echo $title ?></h1>
   
  </section>



   <section class="content">
       <a href="<?php echo base_url('index.php/siswa/room/create') ?>">
          <button class="btn btn-success"><i class="fa fa-plus"></i> Buat Pertanyaan</button>
        </a> 
        
       
        
        <p></p>
      <?php foreach ($pertanyaan as $r): ?>
     <div class="col-md-3">
   <div class="box card" style="color:black;height:200px;overflow:hidden">
        <div class="box-header with-border">
          <h3 class="box-title">oleh <?php echo $r->username  ?></h3>
           <br>
                <span class="label label-danger" style="text-align:center"><i ><?php echo $r->nama_kategori?></i></span>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
             
          </div>
        </div>
        <div class="box-body">
          <?php echo $r->pertanyaan  ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo base_url('index.php/siswa/room/detail/'.$r->id_pertanyaan) ?>">
          <button class="btn btn-success">Selengkapnya</button>
         
        </a> 
        </div>
        <!-- /.box-footer-->
      </div>
       </div>

        <?php endforeach;?>