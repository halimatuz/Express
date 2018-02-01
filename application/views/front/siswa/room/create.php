 <?php $this->load->view('front/siswa/head'); ?>
<?php $this->load->view('front/siswa/header'); ?>
<?php $this->load->view('front/siswa/leftbar'); ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
     
      
    </ol>
  </section>


  <section class='content'>


    
    <div class='row'>    
       <?php echo form_open("siswa/room/create");?>
        <div class="col-md-12">  </div> 
        <!-- kolom kiri -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <div class="form-group"><label>Pertanyaan</label>
                <textarea class="form-control" rows="3" placeholder="Masukkan Pertanyaan" name="pertanyaan"></textarea>
              </div>
                <div class="form-group"><label>Kategori Pertanyaan</label>
              
                  <select class="form-control" id="sel1" name="nama_kategori">
                      <?php
                foreach ($kategori as $k)
                {
                    echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
                }
                ?>
                  </select>
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