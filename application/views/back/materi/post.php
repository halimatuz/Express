<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>      

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
     
      <li class="active"><a href="<?php echo current_url() ?>"><?php echo $title ?></a></li>
    </ol>
  </section>

  <?php echo validation_errors(); ?>
  
  <section class='content'>
    <div class='row'>    
       <?php echo form_open_multipart("admin/materi/do_upload");?>
        <div class="col-md-12">  </div> 
        <!-- kolom kiri -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <div class="form-group"><label>Judul Materi</label>
                  <input type="text" class="form-control" placeholder="Judul Materi" name="nama_judul">
              </div>
              <div class="form-group"><label>Deskripsi Materi</label>
                   <textarea class="form-control" rows="5" name="deskripsi_materi"></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- kolom kanan -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <div class="row">
          
               
              </div><br>


             <div class="form-group"><label>Mapel</label>
              
                  <select class="form-control" id="sel1" name="nama_mapel">
                      <?php
                foreach ($mapel as $k)
                {
                    echo "<option value='$k->id_mapel'>$k->nama_mapel</option>";
                }
                ?>
                  </select>
              </div>
              
              <div class="form-group"><label>Materi</label>
            <input type="file" class="form-control" name="userfile1" id="userfile">
             </div>

              <div class="form-group"><label>Gambar</label>
            <input type="file" class="form-control" name="userfile2" id="userfile">
             </div>

            </div>
            <div class="box-footer">
              <button type="submit" value="upload" class="btn btn-success">Submit</button>
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
          </div>
        </div>

      <?php echo form_close(); ?>
    </div>
  </section>
</div>



