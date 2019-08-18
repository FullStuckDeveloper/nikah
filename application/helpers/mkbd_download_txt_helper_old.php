<?php
if (!function_exists('setDownloadTxt'))
{
	function setDownloadTxt($parameter)
    {
		$gagal=0;
		$sukses=0;
		include_once ( APPPATH."libraries/excel_reader2.php");
		$data_xls = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
		$tanggal_file = $data_xls->val(1,2,0);
		// $tanggal_file = '2016-03-02';
		$tglan = $tanggal_file;
		$namaFile = "U6".date('ymd', strtotime($tglan)).".mkb";
		
		$template_txt = '';
		// karakter separator
		$separator = "|";
		$tanggal_generate = date('Ymd', strtotime($tglan));
		
		if (isset($parameter['data_company'])) {
			foreach ($parameter['data_company'] as $data) {
				$template_txt .= "Kode AB|$data->kode_c|||||||||"."\r\n";
				$template_txt .= "Tanggal|$tanggal_generate|||||||||"."\r\n";
				$template_txt .= "Direktur|$data->dir_c|||||||||"."\r\n";
			}
		}

		if (isset($parameter['data_tb'])) {
			foreach ($parameter['data_tb'] as $data) {
				$akun=$data->no_akun;
				$tgl=$data->tanggal;
				if (stristr($akun, "VD51")) {
					$template_txt .= $data->no_akun.$separator.$data->saldo.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";
				}
				if (stristr($akun,"VD52")){
			    	$template_txt .= $data->no_akun.$separator.$data->saldo.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";	
			    }
			    if (stristr($akun,"VD53")){
			    	$template_txt .= $data->no_akun.$separator.$data->saldo.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";		
			    }
			    if (stristr($akun,"VD54")){
					foreach ($parameter['data_VD54'] as $row) {
						$template_txt .= $row->no_akun.$separator.$row->kode_rd.$separator.$row->fund_id.$separator.$row->afiliasi.$separator.$row->saldo.$separator.$row->saldo1.$separator.$separator.$row->saldo2.$separator.$row->saldo3.$separator.$separator."\r\n";
					}
			    }
			    if (stristr($akun,"VD55")){
			    	$template_txt .= "VD55.8".$separator.$separator."0.00".$separator.$separator."0.00".$separator."0.00".$separator."0.00".$separator."0.00".$separator."0.00".$separator.$separator."\r\n";
			    	$template_txt .= "VD55.9".$separator.$separator."0.00".$separator.$separator."0.00".$separator."0.00".$separator."0.00".$separator."0.00".$separator."0.00".$separator.$separator."\r\n";
			    	$template_txt .= "VD55.10".$separator.$separator."0.00".$separator.$separator."0.00".$separator."0.00".$separator."0.00".$separator ."0.00".$separator."0.00".$separator.$separator."\r\n";
			    	$template_txt .= "VD55.t".$separator.$separator.$separator.$separator.$separator.$separator.$separator.$separator."0.00".$separator.$separator."\r\n";
			   	}
			   	if (stristr($akun,"VD56")){
			   		$template_txt .= $data->no_akun.$separator.$data->saldo.$separator.$data->saldo1.$separator.$data->saldo2.$separator.$data->saldo3.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";
			   	}
			   	if (stristr($akun,"VD56.p")){
		            foreach ($parameter['data_VD56'] as $row1) {
						$template_txt .= $row1->no_akun.$separator.$row1->kode_bank.$separator.$row1->own.$separator.$row1->no_rek.$separator.$row1->kode_curr.$separator.$row1->saldo1.$separator.$row1->saldo2.$separator.$separator.$separator.$separator."\r\n";
					}
		   		}
		   		if (stristr($akun,"VD57")){
			   		$template_txt .= $data->no_akun.$separator.$data->saldo.$separator.$data->saldo1.$separator.$data->saldo2.$separator.$data->saldo3.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";
			   	}
			   	if (stristr($akun,"VD58")){
			   		$template_txt .= $data->no_akun.$separator.$separator.$separator.$separator.$data->saldo.$separator.$separator.$separator.$separator.$separator.$separator."\r\n";
			   	}
			   	if (stristr($akun, "VD59")){
			   		$template_txt .= $data->no_akun.$separator.$separator.$separator.$separator.$data->saldo.$separator.$separator.$data->saldo1.$separator.$separator.$separator.$separator."\r\n";
			   	}
			   	if (stristr($akun,"VD5X.")){
					foreach ($parameter['data_TB10'] as $val) {
						$template_txt .= $val->no_akun.$separator.$val->nama_akun."\r\n";
					}
				}
			}
		}
		return $template_txt;
	}
}