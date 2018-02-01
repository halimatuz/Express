<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>      

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
      
    </ol>
  </section>
  <section class="content">
    <div class="box box-primary">
      <div class="box-body table-responsive padding">
        <a href="<?php echo base_url('index.php/admin/video/index') ?>">
          <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Video Baru</button>
        </a> 
        
       
        <p></p>
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th style="text-align: center">No.</th>
              <th style="text-align: center">Judul Video</th>
              <th style="text-align: center">Mapel</th>
               <th style="text-align: center">Author</th>
                <th style="text-align: center">Role</th>
                 <th style="text-align: center">Aksi</th>
            </tr>
          </thead>
          <tbody>
     <?php foreach ($video as $r):?>
            <tr>
              <td style="text-align:center"><?php echo $r->id_video ?></td>
              <td style="text-align:left"><?php echo $r->judul_video ?></td>
               <td style="text-align:left"><?php echo $r->nama_mapel ?></td>
                <td style="text-align:left"><?php echo $r->username ?></td>
                 <td style="text-align:left"><?php echo $r->role ?></td>
              <td style="text-align:center">
              <?php 
              echo anchor(site_url('admin/video/update/'.$r->id_video),'<i class="glyphicon glyphicon-pencil"></i>','title="Edit", class="btn btn-sm btn-warning"'); echo ' ';
              echo anchor(site_url('admin/video/delete/'.$r->id_video),'<i class="glyphicon glyphicon-trash"></i>','title="Hapus", class="btn btn-sm btn-danger", onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');  
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

