<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>      

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
      
    </ol>
  </section>
    <?php echo validation_errors(); ?>
  <section class="content">
    <div class="box box-primary">
      <div class="box-body table-responsive padding">
        <a href="<?php echo base_url('index.php/admin/mapel/post') ?>">
          <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Mapel Baru</button>
        </a> 
        
       
        
        <p></p>
      <?php if($this->session->flashdata('message')==TRUE){ ?>  
     <div class="alert alert-info">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>  
     </div>  
     
    <?php } ?>  


       
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th style="text-align: center">No.</th>
              <th style="text-align: center">Nama Mapel</th>
              <th style="text-align: center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            
             <?php foreach ($mapel as $r):?>
            <tr>
              <td style="text-align:center"><?php echo $r->id_mapel ?></td>
              <td style="text-align:left"><?php echo $r->nama_mapel ?></td>
              <td style="text-align:center">
              <?php 
              echo anchor(site_url('admin/mapel/edit/'.$r->id_mapel),'<i class="glyphicon glyphicon-pencil"></i>','title="Edit", class="btn btn-sm btn-warning"'); echo ' ';
              echo anchor(site_url('admin/mapel/delete/'.$r->id_mapel),'<i class="glyphicon glyphicon-trash"></i>','title="Hapus", class="btn btn-sm btn-danger", onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');  
              ?>
              </td>
            </tr>
            <?php endforeach;?>
           
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

