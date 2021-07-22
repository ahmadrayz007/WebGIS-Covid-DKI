<?php
  $title="CRUD";
  $judul=$title;
  $url='CRUD';
if(isset($_POST['simpan'])){
	$file=upload('geojson_kecamatan','geojson');
	if($file!=false){
		$data['geojson_kecamatan']=$file;
	}
	if($_POST['ID']==""){
        $data['TANGGAL']=$_POST['TANGGAL'];
        $data['NAMA']=$_POST['NAMA'];
        $data['ALAMAT']=$_POST['ALAMAT'];
        $data['KOTA']=$_POST['KOTA'];
        $data['BIAYA']=$_POST['BIAYA'];
        $data['LUNAS']=$_POST['LUNAS'];
		$exec=$db->insert("pendaftaran",$data);
		$info='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Data Sukses Ditambah </div>';
		
	}
	else{
        $data['NOREG']=$_POST['NOREG'];
        $data['TANGGAL']=$_POST['TANGGAL'];
        $data['NAMA']=$_POST['NAMA'];
        $data['ALAMAT']=$_POST['ALAMAT'];
        $data['KOTA']=$_POST['KOTA'];
        $data['BIAYA']=$_POST['BIAYA'];
        $data['LUNAS']=$_POST['LUNAS'];
        $data['Personil_berwenang']=$_POST['Personil_berwenang'];
		$db->where('ID',$_POST['id']);
		$exec=$db->update("pendaftaran",$data);
		$info='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Data Sukses diubah </div>';
	}

	if($exec){
		$session->set('info',$info);
	}
	else{
      $session->set("info",'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> Proses gagal dilakukan
              </div>');
	}
	redirect(url($url));
}

if(isset($_GET['hapus'])){
	$setTemplate=false;
	$db->where("ID",$_GET['id']);
	$exec=$db->delete("pendaftaran");
	$info='<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Data Sukses dihapus </div>';
	if($exec){
		$session->set('info',$info);
	}
	else{
      $session->set("info",'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> Proses gagal dilakukan
              </div>');
	}
	redirect(url($url));
}

elseif(isset($_GET['tambah']) OR isset($_GET['ubah'])){
    $ID="";
    $NOREG="";
    $TANGGAL="";
    $NAMA="";
    $ALAMAT="";
    $KOTA="";
    $BIAYA="";
    $LUNAS="";
    if(isset($_GET['ubah']) AND isset($_GET['id'])){
        $ID=$_GET['id'];
        $db->where('ID',$ID);
      $row=$db->ObjectBuilder()->getOne('pendaftaran');
      if($db->count>0){
          $ID=$row->ID;
          $NOREG=$row->NOREG;
          $TANGGAL=$row->TANGGAL;
          $NAMA=$row->NAMA;
          $ALAMAT=$row->ALAMAT;
          $KOTA=$row->KOTA;
          $BIAYA=$row->BIAYA;
          $LUNAS=$row->LUNAS;
      }
    }
    // value ketika validasi
    if($session->get('error_value')){
        extract($session->pull('error_value'));
    }
  ?>
  <?=content_open('Form Data Covid-19')?>
      <form method="post" enctype="multipart/form-data">
          <?php
              // menampilkan error validasi
                if($session->get('error_validation')){
                    foreach ($session->pull('error_validation') as $key => $value) {
                        echo '<div class="alert alert-danger">'.$value.'</div>';
                    }
                }
          ?>
          <?=input_hidden('ID',$ID)?>
          <div class="form-group">
              <label>Nomor</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('ID',$ID)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>No Reg</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('NOREG',$NOREG)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Tanggal</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_date('TANGGAL',$TANGGAL)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Nama</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('NAMA',$NAMA)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('ALAMAT',$ALAMAT)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Kota</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('KOTA',$KOTA)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Biaya</label>
              <div class="row">
                  <div class="col-md-4">
                      <?=input_text('BIAYA',$BIAYA)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label>Lunas</label> 
              <div class="row">
                  <div class="col-md-3">
                      <?=input_text('LUNAS',$LUNAS)?>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <button type="submit" name="simpan" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?=url($url)?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
          </div>
      </form>
  <?=content_close()?>
  
  <?php  } else { ?>
  <?=content_open('Data Covid-19 Kecamatan DKI Jakarta')?>
  
  <a href="<?=url($url.'&tambah')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
  <hr>
  <?=$session->pull("info")?>
  
  <table id="example1" class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>No</th>
              <th>No Reg</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Biaya</th>
              <th>Lunas</th>
          </tr>
      </thead>
      <tbody>
          <?php
              $no=1;
              $getdata=$db->ObjectBuilder()->get('pendaftaran');
              foreach ($getdata as $row) {
                  ?>
                      <tr>
                          <td><?=$no?></td>
                          <td><?=$row->NOREG?></td>
                          <td><?=$row->TANGGAL?></td>
                          <td><?=$row->NAMA?></td>
                          <td><?=$row->ALAMAT?></td>
                          <td><?=$row->KOTA?></td>
                          <td><?=$row->BIAYA?></td>
                          <td><?=$row->LUNAS?></td>
                          <td>
                              <a href="<?=url($url.'&ubah&id='.$row->ID)?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                              <a href="<?=url($url.'&hapus&id='.$row->ID)?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                          </td>
                      </tr>
                  <?php
                  $no++;
              }
  
          ?>
      </tbody>
  </table>
  <?=content_close()?>
  <?php } ?>