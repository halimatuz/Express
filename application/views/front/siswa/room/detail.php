 <?php $this->load->view('front/siswa/head'); ?>
<?php $this->load->view('front/siswa/header'); ?>
<?php $this->load->view('front/siswa/leftbar'); ?>


<div class="content-wrapper">
  <section class="content-header">
    <h1>Q and A Room</h1>
    <ol class="breadcrumb">
     
      
    </ol>
  </section>
<p></p>

<p></p>
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              
                <h3 class="box-title">oleh <?php echo  $pertanyaan['username']?></h3>
                <br>
                <span class="label label-danger" style="text-align:center"><i ><?php echo $pertanyaan['nama_kategori']?></i></span>
            </div>
              <div class="box-body">
              <h4><?php echo $pertanyaan['pertanyaan']?></h4>
            </div>
       </div>
         </div>

 <?php foreach ($jawaban as $r): ?>
          <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              
                <h3 class="box-title">oleh <?php echo $r->username ?></h3>
                <br>
               
            </div>
              <div class="box-body">
              <h4><?php echo $r->isi_jawaban ?></h4>
            </div>
       </div>
         </div>

          <?php endforeach;?>

   <div class="col-md-12">
         <div class="form-group">
  <label for="comment"></label>
  <textarea class="form-control" rows="5" id="comment" placeholder="Jawaban anda tulis disini....." style="border:2px solid DodgerBlue;"></textarea>
</div>
</div>

 <div class="col-md-12">
<button type="button" class="btn btn-success btn-block">Submit Jawaban</button>
</div>

