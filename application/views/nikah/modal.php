<div class="modal fade" id="tambah_helpdesk" tabindex="-1" role="dialog">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Tambah Data Helpdesk</h4>
      		</div>
      		<form class="form-horizontal" action="<?php echo site_url('helpdesk/tambah_datahelpdesk')?>" method="post">
        		<div class="modal-body">
        			<div class="form-group">
		                <div class="col-sm-12">
                            <input type="text" class="form-control" name="tanggal_pelaporan" placeholder="Tanggal Pelaporan" id="datepicker" autocomplete="off">
		                </div>
		            </div>
		            <div class="form-group">
		                <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_pelapor" placeholder="Nama Pelapor" autocomplete="off">
		                </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="divisi_pelapor" style="width: 100%;">
                                <option disabled selected>Divisi Pelapor</option>
                                <?php
                                    if (isset($refDivisi)){
                                    foreach ($refDivisi as $data){
                                ?>
                                <option value="<?php echo $data->kode?>"><?php echo $data->deskripsi?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="permasalahan" placeholder="Permasalahan">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select class="form-control select2" name="identifikasi_permasalahan" style="width: 100%;">
                                <option disabled selected>Indetifikasi Permsalahan</option>
                                <?php
                                    if (isset($refIdentifikasi)){
                                    foreach ($refIdentifikasi as $data){
                                ?>
                                <option value="<?php echo $data->id?>"><?php echo $data->deskripsi?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="analisa_dampak" style="width: 100%;">
                                <option disabled selected>Analisa Dampak</option>
                                <?php
                                    if (isset($refDampak)){
                                    foreach ($refDampak as $data){
                                ?>
                                <option value="<?php echo $data->id?>"><?php echo $data->deskripsi?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select class="form-control select2" name="skala_prioritas" style="width: 100%;">
                                <option disabled selected>Skala Prioritas</option>
                                <?php
                                    if (isset($refPrioritas)){
                                    foreach ($refPrioritas as $data){
                                ?>
                                <option value="<?php echo $data->id?>"><?php echo $data->deskripsi?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="rencana_penyelesaian" style="width: 100%;">
                                <option disabled selected>Rencana Penyelesaian</option>
                                <?php
                                    if (isset($refRencanaPenyelesaian)){
                                    foreach ($refRencanaPenyelesaian as $data){
                                ?>
                                <option value="<?php echo $data->id?>"><?php echo $data->deskripsi?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="tanggal_penyelesaian" placeholder="Tanggal Penyelesaian" id="datepicker2" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="penyelesaian" placeholder="Penyelesaian">
                        </div>
                    </div>
        		</div>
        		<div class="modal-footer">
		        	<button type="submit" class="btn btn-primary">Simpan</button>
		        </div>
      		</form>
        </div>
	</div>
</div>

<?php
    if (isset($dataHelpdesk)) {
        foreach ($dataHelpdesk as $data) {
?>
<div class="modal fade" id="edit_datahelpdesk<?php echo $data->id?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Helpdesk</h4>
            </div>
            <form class="form-horizontal" action="<?php echo site_url('helpdesk/edit_datahelpdesk')?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $data->id ?>"/>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- <input type="text" class="form-control" name="tanggal_pelaporan" value="<?php echo $data->tanggal_pelaporan ?>" id="datepicker3"> -->
                            <input type="date" class="form-control" name="tanggal_pelaporan" value="<?php echo $data->tanggal_pelaporan ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama_pelapor" value="<?php echo $data->nama_pelapor ?>">
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="divisi_pelapor" style="width: 100%;">
                                <?php
                                    foreach ($refDivisi as $divisi){
                                        $selected=($data->divisi_pelapor == $divisi->kode)?"selected":"";
                                        echo "<option value='$divisi->kode' $selected>$divisi->deskripsi</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="permasalahan" value="<?php echo $data->permasalahan ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select class="form-control select2" name="identifikasi_permasalahan" style="width: 100%;">
                                <option disabled selected>Identifikasi Permasalahan</option>
                                <?php
                                    foreach ($refIdentifikasi as $identifikasi){
                                        $selected=($data->identifikasi_permasalahan == $identifikasi->id)?"selected":"";
                                        echo "<option value='$identifikasi->id' $selected>$identifikasi->deskripsi</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="analisa_dampak" style="width: 100%;">
                                <option disabled selected>Analisa Dampak</option>
                                <?php
                                    foreach ($refDampak as $dampak){
                                        $selected=($data->analisa_dampak == $dampak->id)?"selected":"";
                                        echo "<option value='$dampak->id' $selected>$dampak->deskripsi</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <select class="form-control select2" name="skala_prioritas" style="width: 100%;">
                                <option disabled selected>Skala Prioritas</option>
                                <?php
                                    foreach ($refPrioritas as $prioritas){
                                        $selected=($data->skala_prioritas == $prioritas->id)?"selected":"";
                                        echo "<option value='$prioritas->id' $selected>$prioritas->deskripsi</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control select2" name="rencana_penyelesaian" style="width: 100%;">
                                <option disabled selected>Rencana Penyelesaian</option>
                                <?php
                                    foreach ($refRencanaPenyelesaian as $rencana){
                                        $selected=($data->rencana_penyelesaian == $rencana->id)?"selected":"";
                                        echo "<option value='$rencana->id' $selected>$rencana->deskripsi</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- <input type="text" class="form-control" name="tanggal_penyelesaian" value="<?php echo $data->tanggal_penyelesaian ?>" 
                                id="datepicker4"> -->
                                <input type="date" class="form-control" name="tanggal_penyelesaian" value="<?php echo $data->tanggal_penyelesaian ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="penyelesaian" value="<?php echo $data->penyelesaian ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" alt="Edit">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
        }
    }
?>

<?php
    if (isset($dataHelpdesk)) {
        foreach ($dataHelpdesk as $data) {
?>
<div class="modal fade" id="hapus_datahelpdesk<?php echo $data->id?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data Lembur</h4>
            </div>
            <form class="form-horizontal" action="<?php echo site_url('helpdesk/hapus_datahelpdesk')?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $data->id ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal Pelaporan</label>
                        <div class="col-sm-7">
                          <label class="col-sm-12 control-label"><?php echo date("l, d F Y", strtotime($data->tanggal_pelaporan)) ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Permasalahan</label>
                        <div class="col-sm-9">
                          <label class="col-sm-12 control-label"><?php echo $data->permasalahan ?></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
        }
    }
?>