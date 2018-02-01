<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>      

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
     
      
    </ol>
  </section>


  <section class='content'>
    <div class='row'>    
       <?php echo form_open("admin/mapel/post");?>
        <div class="col-md-12">  </div> 
        <!-- kolom kiri -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <div class="form-group"><label>Nama Mapel</label>
                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Mapel" name="nama_mapel">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>
        </div>
  <?php echo form_close(); ?>
      
    </div>
  </section>
</div>