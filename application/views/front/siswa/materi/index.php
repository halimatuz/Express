 <?php $this->load->view('front/siswa/head'); ?>
<?php $this->load->view('front/siswa/header'); ?>
<?php $this->load->view('front/siswa/leftbar'); ?>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href='<?php echo base_url('assets/css/style2.css') ?>'>
<div class="content-wrapper">
  <section class="content-header">
   <h1><?php echo $title?></h1>
   
  </section>

 <section class="content">
        <!-- Default box --> <p></p>
        <?php foreach ($materi as $r): ?>
      

<div class="col-md-3">
            <!-- komponen panel di sini  -->
            <div class="panel panel-default card">

    <div class="panel-heading post-thumb">
        <img class="img img-responsive" src='http://localhost/express/file/<?php echo $r->nama_gambar  ?>' />
    </div>

    <div class="panel-body post-body">
        <span class="label label-danger"><i ><?php echo $r->mapel_id  ?></i></span>
        <h3 class="post-title">
            <a href="#"><?php echo $r->deskripsi_materi  ?></a>
        </h3>

        <div class="post-author">
             <a href="<?php echo base_url('index.php/siswa/dashboard/download/'.$r->id_materi) ?>">
         <button class="btn btn-success">Download</button>
     </a>
           
        </div>
    </div>

</div>
        </div>
 <?php endforeach;?>



