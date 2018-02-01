<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
   
  </section>

    
     <section class='content'>
    <div class='row'>
      <div id="infoMessage"></div>
      <?php echo form_open("admin/auth/create_user");?>
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-body">
            
              <div class="row">
                <div class="col-xs-6"><label>Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama">

                </div>
                <div class="col-xs-6"><label>Email</label>
               <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
              </div><br>
             
             
              <div class="form-group"><label>Tipe user</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="row">
                <div class="col-xs-6"><label>Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="col-xs-6"><label>Konfirmasi Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
          </div><!-- /.box -->
          <!-- left column -->
        </div>
      <?php echo form_close(); ?>
    </div>
  </section>
</div>

