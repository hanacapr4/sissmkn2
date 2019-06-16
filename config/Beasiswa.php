<?php
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Log.php");	

class Pengajuan extends Database {

    var $table = 'pengajuan';
    var $table2 = 'beasiswa';
    var $table3 = 'siswa';
	

    ////////TAHUN AJARAN/////////

    function tampiltahunajaran(){
        $con = $this->dbconnect();
        $sql = "select * from thnajaran";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    ////////END TAHUN AJARAN/////////

    ////////PENGAJUAN/////////
    function cetakbuktipengajuan($nis){
        $con = $this->dbconnect();
        $sql = 'select * from pengajuan where nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function tampilaju(){
        $con = $this->dbconnect();
        $sql = "select * from pengajuan";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function tampilajuaz($azmulai,$azhingga,$azperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM pengajuan WHERE thnAjaran = "'.$azperiode.'" ORDER BY nis ASC LIMIT '.$azmulai.','.$azhingga.'';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilajuza($zamulai,$zahingga,$zaperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM pengajuan WHERE thnAjaran = "'.$zaperiode.'" ORDER BY nis DESC LIMIT '.$zamulai.','.$zahingga.'';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilajuperiode($byperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT * FROM pengajuan WHERE thnAjaran = "'.$byperiode.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampiloptionperiode(){
        $con = $this->dbconnect();
        $sql = "SELECT DISTINCT thnajaran FROM pengajuan";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function kombinasi1() {
		$id = "BEASISWA KARSA - ";
		return $id;
	}

	function kombinasi2() {
		$date = date('Hi');
		$id = $date;
		return $id;
	}

	function tampilwaktu() {
		$dayletter = date('l');
		$day = date('d');
		$month = date('n');
		$year = date('Y');
		$hour = date('H');
		$minute = date('i');
		$ampm = date('A');
		$id = $dayletter.",".$day."-".$month."-".$year." (".$hour.":".$minute." ".$ampm.")";
		return $month;
	}
    
    
    function tambahaju($idBea,$namaWali,$alamatWali,$noHPWali,$pekerjaanWali,$penghasilanWali,$namaSiswa,$nis,$psCode,$pengajuanSpp,$pengajuanSbpp,$waktu,$thnAjaran,$kelas,$sktm,$ktp,$kk,$lain,$tabel,$action,$idPeriode){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->table.' VALUES ("'.$idBea.'","'.$namaWali.'","'.$alamatWali.'","'.$noHPWali.'","'.$pekerjaanWali.'","'.$penghasilanWali.'","'.$namaSiswa.'","'.$nis.'","'.$psCode.'","'.$pengajuanSpp.'","'.$pengajuanSbpp.'","'.$waktu.'","'.$thnAjaran.'","'.$kelas.'","'.$idPeriode.'")';
        mysqli_query($con,$sql); 


        //////////////////// RELASI DENGAN LAMPIRAN ////////////////////
        $tambahlampiran = new Lampiran();
	    $data = $tambahlampiran->tambahfile($nis,$sktm,$ktp,$kk,$lain);
	    //////////////////// END RELASI DENGAN LAMPIRAN ////////////////////

	    //////////////////// RELASI DENGAN LOG ////////////////////
	    $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////////////// END RELASI DENGAN LOG ////////////////////
        
    }


    function getDetailaju($idBea){
		$con = $this->dbconnect();
		$sql = 'select pengajuan.idBea, pengajuan.namaWali, pengajuan.alamatWali, pengajuan.noHPWali, pengajuan.pekerjaanWali, pengajuan.penghasilanWali, pengajuan.namaSiswa, pengajuan.nis, pengajuan.psCode, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, pengajuan.waktu, pengajuan.thnAjaran, pengajuan.kelas, fileLampiran_beasiswa.sktm, fileLampiran_beasiswa.ktp, fileLampiran_beasiswa.kk, fileLampiran_beasiswa.lain from pengajuan 
		LEFT JOIN fileLampiran_beasiswa on pengajuan.nis = fileLampiran_beasiswa.nis 
		where idBea = "'.$idBea.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function siswagetDetailaju($nis){
		$con = $this->dbconnect();
		$sql = 'select pengajuan.idBea, pengajuan.namaWali, pengajuan.alamatWali, pengajuan.noHPWali, pengajuan.pekerjaanWali, pengajuan.penghasilanWali, pengajuan.namaSiswa, pengajuan.nis, pengajuan.psCode, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, pengajuan.waktu, pengajuan.thnAjaran, pengajuan.kelas, fileLampiran_beasiswa.sktm, fileLampiran_beasiswa.ktp, fileLampiran_beasiswa.kk, fileLampiran_beasiswa.lain from pengajuan 
		LEFT JOIN fileLampiran_beasiswa on pengajuan.nis = fileLampiran_beasiswa.nis 
		where pengajuan.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function getDetailpengajuan($nis){
		$con = $this->dbconnect();
		$sql = 'select pengajuan.idBea, pengajuan.namaWali, pengajuan.alamatWali, pengajuan.noHPWali, pengajuan.pekerjaanWali, pengajuan.penghasilanWali, pengajuan.namaSiswa, pengajuan.nis, pengajuan.psCode, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, pengajuan.waktu, pengajuan.thnAjaran, pengajuan.kelas, fileLampiran_beasiswa.sktm, fileLampiran_beasiswa.ktp, fileLampiran_beasiswa.kk, fileLampiran_beasiswa.lain from pengajuan 
		LEFT JOIN fileLampiran_beasiswa on pengajuan.nis = fileLampiran_beasiswa.nis 
		where pengajuan.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function editaju($idBea,$namaWali,$alamatWali,$noHPWali,$pekerjaanWali,$penghasilanWali,$namaSiswa,$nis,$psCode,$pengajuanSpp,$pengajuanSbpp,$waktu,$thnAjaran,$kelas,$sktm,$ktp,$kk,$lain,$tabel,$action)
	{

		$con = $this->dbconnect();
		$sql = 'UPDATE '.$this->table.' SET namaWali= "'.$namaWali.'", alamatWali= "'.$alamatWali.'", noHPWali= "'.$noHPWali.'",pekerjaanWali= "'.$pekerjaanWali.'", penghasilanWali= "'.$penghasilanWali.'", namaSiswa= "'.$namaSiswa.'", namaSiswa= "'.$namaSiswa.'", nis= "'.$nis.'", psCode= "'.$psCode.'",pengajuanSpp = "'.$pengajuanSpp.'",pengajuanSbpp = "'.$pengajuanSbpp.'",waktu = "'.$waktu.'",thnAjaran = "'.$thnAjaran.'",kelas = "'.$kelas.'" where idBea = "'.$idBea.'"';
		mysqli_query($con,$sql);
        
        //////////////////// RELASI DENGAN LAMPIRAN ////////////////////
        $updatelampiran = new Lampiran();
	    $data = $updatelampiran->updatefile($nis,$sktm,$ktp,$kk,$lain);
	    //////////////////// END RELASI DENGAN LAMPIRAN ////////////////////


	    //////////////////// RELASI DENGAN LOG ////////////////////
	    $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////////////// END RELASI DENGAN LOG ////////////////////
	}


	function deleteaju($idBea,$tabel,$action){
		$con = $this->dbconnect();
		$sql = 'DELETE from '.$this->table.' where idBea = "'.$idBea.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));

        //////////////////// RELASI DENGAN LOG ////////////////////
	    $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////////////// END RELASI DENGAN LOG ////////////////////

		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function tambahfile($nis,$sktm,$ktp,$kk,$lain){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO fileLampiran_beasiswa VALUES ("'.$nis.'","'.$sktm.'","'.$ktp.'","'.$kk.'","'.$lain.'")';
        $query = mysqli_query($con,$sql);
    }


    function getforalert(){
		$con = $this->dbconnect();
		$sql = 'select idBea from pengajuan where idBea = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    //////////////////// RELASI DENGAN SISWA ////////////////////
	function showgetDetailsiswa($nis) {
		$showdetailsiswa = new Siswa();
	    $data = $showdetailsiswa->getdetailsiswa($nis);
	    return $data;
	}
	//////////////////// END RELASI DENGAN SISWA ////////////////////


	//////////////////// RELASI DENGAN KESISWAAN ////////////////////
	function tampilsiswa() {
		$showsiswa = new Kesiswaan();
	    $data = $showsiswa->tampildu();
	    return $data;
	}
	//////////////////// END RELASI DENGAN KESISWAAN ////////////////////


	//////////////////// RELASI DENGAN PERIODE BEASISWA ////////////////////
	function showperiode() {
		$showperiode = new Periode();
	    $data = $showperiode->tampilperiode();
	    return $data;
	}
	
	function updateperiode($idPeriode,$mulai,$hingga,$tabel,$action) {
		$ubahperiode = new Periode();
	    $data = $ubahperiode->editperiode($idPeriode,$mulai,$hingga,$tabel,$action);
	    return $data;
	}
	//////////////////// END RELASI DENGAN PERIODE BEASISWA ///////////////////


}
    ////////END PENGAJUAN/////////











class Lampiran extends Database {

	function tambahfile($nis,$sktm,$ktp,$kk,$lain){
		$con = $this->dbconnect();
		$sql = 'INSERT INTO fileLampiran_beasiswa VALUES ("'.$nis.'","'.$sktm.'","'.$ktp.'","'.$kk.'","'.$lain.'")';
        $query = mysqli_query($con,$sql);
    }


    function updatefile($nis,$sktm,$ktp,$kk,$lain){
		$con = $this->dbconnect();
		
		if (!empty($sktm)) {
        $sql1 = 'UPDATE fileLampiran_beasiswa SET sktm= "'.$sktm.'" where nis = "'.$nis.'"';
        mysqli_query($con,$sql1);	
        }

        if (!empty($ktp)) {
        $sql1 = 'UPDATE fileLampiran_beasiswa SET ktp= "'.$ktp.'" where nis = "'.$nis.'"';
        mysqli_query($con,$sql1);	
        }

        if (!empty($kk)) {
        $sql1 = 'UPDATE fileLampiran_beasiswa SET kk= "'.$kk.'" where nis = "'.$nis.'"';
        mysqli_query($con,$sql1);	
        }

        if (!empty($lain)) {
        $sql1 = 'UPDATE fileLampiran_beasiswa SET lain= "'.$lain.'" where nis = "'.$nis.'"';
        mysqli_query($con,$sql1);	
        }
    }
}













    ////////BEASISWA/////////


class Beasiswa extends Database {

    function cetakkartu($nis){
		$con = $this->dbconnect();
		$sql = 'SELECT beasiswa.nis, beasiswa.namaSiswa, penilaian_beasiswa.kategori FROM beasiswa 
		LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
		WHERE beasiswa.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilbeaaz($azmulai,$azhingga,$azperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT beasiswa.nis, beasiswa.namaSiswa, pengajuan.kelas, beasiswa.thnAjaran, beasiswa.namaWali, beasiswa.alamatWali, beasiswa.survey, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp FROM beasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
		WHERE beasiswa.thnAjaran = "'.$azperiode.'" ORDER BY beasiswa.nis ASC LIMIT '.$azmulai.','.$azhingga.'';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilbeaza($zamulai,$zahingga,$zaperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT beasiswa.nis, beasiswa.namaSiswa, pengajuan.kelas, beasiswa.thnAjaran, beasiswa.namaWali, beasiswa.alamatWali, beasiswa.survey, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp FROM beasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
		WHERE beasiswa.thnAjaran = "'.$zaperiode.'" ORDER BY beasiswa.nis ASC LIMIT '.$zamulai.','.$zahingga.'';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilbeaperiode($byperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT beasiswa.nis, beasiswa.namaSiswa, pengajuan.kelas, beasiswa.thnAjaran, beasiswa.namaWali, beasiswa.alamatWali, beasiswa.survey, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp FROM beasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
		WHERE beasiswa.thnAjaran = "'.$byperiode.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampiloptionperiode(){
        $con = $this->dbconnect();
        $sql = "SELECT DISTINCT thnAjaran FROM beasiswa";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function tampilbea(){
        $con = $this->dbconnect();
        $sql = "select beasiswa.nis, beasiswa.namaSiswa, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, beasiswa.keringananSpp, beasiswa.keringananSbpp, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, beasiswa.status from beasiswa 
        LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
        LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function tampilbeaditerima(){
        $con = $this->dbconnect();
        $diterima = "diterima";
        $sql = 'select beasiswa.nis, beasiswa.namaSiswa, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, beasiswa.keringananSpp, beasiswa.keringananSbpp, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, beasiswa.status from beasiswa 
        LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
        LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
        where status = "'.$diterima.'"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }


    function tampilbeaditolak(){
        $con = $this->dbconnect();
        $ditolak = "ditolak";
        $sql = 'select beasiswa.nis, beasiswa.namaSiswa, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, beasiswa.keringananSpp, beasiswa.keringananSbpp, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, beasiswa.status from beasiswa 
        LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
        LEFT JOIN penilaian_beasiswa on penilaian_beasiswa.idBeasiswa = beasiswa.idBeasiswa 
        where status = "'.$ditolak.'"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }


    //////////////////// RELASI DENGAN SISWA ////////////////////
    function pengajuan() {
		$showpengajuan = new Pengajuan();
	    $data = $showpengajuan->tampilaju();
	    return $data;
	}
	//////////////////// END RELASI DENGAN SISWA ////////////////////


	//////////////////// RELASI DENGAN PERIODE ////////////////////
    function showperiode() {
		$lihatperiode = new Periode();
	    $data = $lihatperiode->tampilperiode();
	    return $data;
	}
	//////////////////// END RELASI DENGAN PERIODE ////////////////////


	//////////////////// RELASI DENGAN PENGAJUAN ////////////////////
    function thnajaran() {
		$showpengajuan = new Pengajuan();
	    $data = $showpengajuan->tampiltahunajaran();
	    return $data;
	}

	function showgetDetailaju($idBea) {
		$showdetailpengajuan = new Pengajuan();
	    $data = $showdetailpengajuan->getDetailaju($idBea);
	    return $data;
	}
	//////////////////// END RELASI DENGAN PENGAJUAN ////////////////////



    function survey($idBeasiswa,$idBea,$namaWali,$alamatWali,$noHPWali,$pekerjaanWali,$penghasilanWali,$namaSiswa,$nis,$keringananSpp,$keringananSbpp,$krit1,$krit2,$krit3,$krit4,$krit5,$krit6,$krit7,$krit8,$krit9,$krit10,$essay1,$essay2,$essay3,$essay4,$essay5,$essay6,$essay7,$essay8,$essay9,$thnAjaran,$survey,$tabel,$action){
		$con = $this->dbconnect();
		$status = "proses";
		$sql = 'INSERT INTO beasiswa VALUES ("'.$idBeasiswa.'","'.$idBea.'","'.$namaWali.'","'.$alamatWali.'","'.$noHPWali.'","'.$pekerjaanWali.'","'.$penghasilanWali.'","'.$namaSiswa.'","'.$nis.'","'.$keringananSpp.'","'.$keringananSbpp.'","'.$krit1.'","'.$krit2.'","'.$krit3.'","'.$krit4.'","'.$krit5.'","'.$krit6.'","'.$krit7.'","'.$krit8.'","'.$krit9.'","'.$krit10.'","'.$essay1.'","'.$essay2.'","'.$essay3.'","'.$essay4.'","'.$essay5.'","'.$essay6.'","'.$essay7.'","'.$essay8.'","'.$essay9.'","'.$thnAjaran.'","'.$survey.'","'.$status.'")';
        $query = mysqli_query($con,$sql);

        //////////////////// RELASI DENGAN LOG ////////////////////
	    $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////////////// END RELASI DENGAN LOG ////////////////////
    }

    function deletesurvey($nis){
		$con = $this->dbconnect();
		$sql = 'DELETE from beasiswa where nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function getDetailsurvey($nis){
		$con = $this->dbconnect();
		$sql = 'select beasiswa.idBea, beasiswa.namaWali, beasiswa.alamatWali, beasiswa.noHPWali, beasiswa.pekerjaanWali, beasiswa.penghasilanWali, beasiswa.namaSiswa, beasiswa.nis, beasiswa.keringananSpp, beasiswa.keringananSbpp, beasiswa.krit1, beasiswa.krit2, beasiswa.krit3, beasiswa.krit4, beasiswa.krit5, beasiswa.krit6, beasiswa.krit7, beasiswa.krit8, beasiswa.krit9, beasiswa.krit10, beasiswa.essay1, beasiswa.essay2, beasiswa.essay3, beasiswa.essay4, beasiswa.essay5, beasiswa.essay6, beasiswa.essay7, beasiswa.essay8, beasiswa.essay9, beasiswa.thnAjaran, beasiswa.survey, beasiswa.status, pengajuan.kelas, pengajuan.pengajuanSpp, pengajuan.pengajuanSbpp, penilaian_beasiswa.nilai, penilaian_beasiswa.totalKelayakan, penilaian_beasiswa.kategori, 
		(beasiswa.keringananSpp * 0.25) as disetujuiSpp1, (beasiswa.keringananSbpp * 0.25) as disetujuiSbpp1, 
		(beasiswa.keringananSpp * 0.5) as disetujuiSpp2, (beasiswa.keringananSbpp * 0.5) as disetujuiSbpp2, 
		(beasiswa.keringananSpp * 0.75) as disetujuiSpp3, (beasiswa.keringananSbpp * 0.75) as disetujuiSbpp3 
		from beasiswa 
		LEFT JOIN pengajuan on beasiswa.nis = pengajuan.nis 
		LEFT JOIN ketkompetensi on beasiswa.nis = ketkompetensi.nis
		LEFT JOIN penilaian_beasiswa on beasiswa.nis = penilaian_beasiswa.nis 
		where beasiswa.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function editsurvey($idBeasiswa,$namaWali,$alamatWali,$noHPWali,$pekerjaanWali,$penghasilanWali,$namaSiswa,$nis,$keringananSpp,$keringananSbpp,$krit1,$krit2,$krit3,$krit4,$krit5,$krit6,$krit7,$krit8,$krit9,$krit10,$essay1,$essay2,$essay3,$essay4,$essay5,$essay6,$essay7,$essay8,$essay9,$thnAjaran,$survey)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE beasiswa SET namaWali= "'.$namaWali.'", alamatWali= "'.$alamatWali.'", noHPWali= "'.$noHPWali.'",pekerjaanWali= "'.$pekerjaanWali.'", penghasilanWali= "'.$penghasilanWali.'", namaSiswa= "'.$namaSiswa.'", nis= "'.$nis.'",keringananSpp = "'.$keringananSpp.'",keringananSbpp = "'.$keringananSbpp.'",krit1 = "'.$krit1.'",krit2 = "'.$krit2.'",krit3 = "'.$krit3.'",krit4 = "'.$krit4.'",krit5 = "'.$krit5.'",krit6 = "'.$krit6.'",krit7 = "'.$krit7.'",krit8 = "'.$krit8.'",krit9 = "'.$krit9.'",krit10 = "'.$krit10.'",essay1 = "'.$essay1.'",essay2 = "'.$essay2.'",essay3 = "'.$essay3.'",essay4 = "'.$essay4.'",essay5 = "'.$essay5.'",essay6 = "'.$essay6.'",essay7 = "'.$essay7.'",essay8 = "'.$essay8.'",essay9 = "'.$essay9.'",thnAjaran = "'.$thnAjaran.'",survey = "'.$survey.'" where idBeasiswa = "'.$idBeasiswa.'"';
        $query = mysqli_query($con,$sql);
	}



	function updateStatus($nis,$keterangan){
        $count = count($nis);
        for ($i=0; $i < $count ; $i++) { 
        $con = $this->dbconnect();
        $sql = 'UPDATE beasiswa SET status = "'.$keterangan[$i].'" where nis = "'.$nis[$i].'"';
            $query = mysqli_query($con,$sql);
        }
    }



    function getforalert(){
		$con = $this->dbconnect();
		$sql = 'select idBeasiswa from beasiswa where idBeasiswa = "'.$_SESSION['alertbea'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }



    function showgetDetailpengajuan($nis) {
		$con = $this->dbconnect();
		$sql = 'select pengajuan.nis as nisaju, beasiswa.nis as nisbea, periode_beasiswa.mulai, periode_beasiswa.hingga, siswa.nis, 		from siswa 
		LEFT JOIN beasiswa on beasiswa.nis = siswa.nis 
		LEFT JOIN pengajuan on siswa.nis = pengajuan.nis 
		LEFT JOIN periode_beasiswa on siswa.idPeriode = periode_beasiswa.idPeriode 
		where siswa.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
	}


	function rekapisi($psCode,$kategori,$kelas,$byperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT pengajuan.psCode, COUNT(penilaian_beasiswa.kategori) as kategori FROM beasiswa 
		LEFT JOIN siswa on siswa.nis = beasiswa.nis 
		LEFT JOIN penilaian_beasiswa on beasiswa.idBeasiswa = penilaian_beasiswa.idBeasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		WHERE beasiswa.thnAjaran = "'.$byperiode.'" AND pengajuan.kelas LIKE "%'.$kelas.'%" AND penilaian_beasiswa.kategori = "'.$kategori.'" AND pengajuan.psCode = "'.$psCode.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function jumlahrekapisi($psCode,$byperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT COUNT(pengajuan.psCode) as psCode FROM beasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		WHERE beasiswa.thnAjaran = "'.$byperiode.'" AND pengajuan.psCode = "'.$psCode.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function totalrekapisi($kategori,$kelas,$byperiode){
		$con = $this->dbconnect();
		$sql = 'SELECT COUNT(penilaian_beasiswa.kategori) as kategori FROM penilaian_beasiswa 
		LEFT JOIN beasiswa on beasiswa.idBeasiswa = penilaian_beasiswa.idBeasiswa 
		LEFT JOIN pengajuan on pengajuan.idBea = beasiswa.idBea 
		WHERE beasiswa.thnAjaran = "'.$byperiode.'" AND pengajuan.kelas LIKE "%'.$kelas.'%" AND penilaian_beasiswa.kategori = "'.$kategori.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


    function totaljumlahrekap($byperiode){
        $con = $this->dbconnect();
        $sql = 'SELECT COUNT(penilaian_beasiswa.kategori) as kategori FROM penilaian_beasiswa 
        LEFT JOIN beasiswa on beasiswa.idBeasiswa = penilaian_beasiswa.idBeasiswa 
        WHERE beasiswa.thnAjaran = "'.$byperiode.'"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

}

	////////END BEASISWA/////////




















	////////SISWA/////////

class Siswa extends Database {
    function tampilsiswa(){
        $con = $this->dbconnect();
        $sql = "select * from siswa";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function getdetailsiswa($nis){
        $con = $this->dbconnect();
        $sql = 'select ketwali.nama, ketwali.telepon, ketwali.penghasilan, ketwali.alamat, ketwali.pekerjaan, siswa.namaSiswa, siswa.nis , jurusan.kk, kelas.nama_kelas from siswa 
        LEFT JOIN ketwali on ketwali.nis = siswa.nis 
        LEFT JOIN jurusan on jurusan.kodeJurusan = siswa.kodeJurusan 
        LEFT JOIN kelas on kelas.id_kelas = siswa.id_kelas 
        where siswa.nis = "'.$nis.'"';
  //       $sql = 'select ketwali.nama, ketwali.telepon, ketwali.penghasilan, ketwali.alamat, ketwali.pekerjaan, siswa.namaSiswa, siswa.nis, jurusan.kk from siswa 
  //       LEFT JOIN ketwali on ketwali.nis = siswa.nis 
		// LEFT JOIN jurusan on jurusan.idJurusan = siswa.idJurusan 
		// where siswa.nis = "'.$nis.'"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    } 

    ////////END SISWA/////////
}

























////////END PERIODE BEASISWA/////////
class Periode extends Database {


	function tampilperiode(){
        $con = $this->dbconnect();
        $sql = "select * from periode_beasiswa";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;    
    }

    function editperiode($idPeriode,$mulai,$hingga,$tabel,$action)
	{
		$con = $this->dbconnect();
		$sql = 'UPDATE periode_beasiswa SET mulai= "'.$mulai.'", hingga= "'.$hingga.'" where idPeriode = "'.$idPeriode.'"';
        $query = mysqli_query($con,$sql);

        //////////// log //////////////
        $addlog = new Log();
	    $data = $addlog->insertlog($tabel,$action);
	    //////////// log //////////////
	}
}
////////END PERIODE BEASISWA/////////






























////////PERIODE BEASISWA/////////
class Notifikasi extends Database {


	function getnotifikasi(){
		$con = $this->dbconnect();
		$sql = 'select notifikasi_beasiswa.status from siswa 
		LEFT JOIN beasiswa on beasiswa.nis = siswa.nis 
		LEFT JOIN notifikasi_beasiswa on beasiswa.idBeasiswa = notifikasi_beasiswa.idBeasiswa 
		where siswa.nis = "1824050855"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }
}
////////END PERIODE BEASISWA/////////
?>
