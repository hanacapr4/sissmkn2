<?php

class Kesiswaan extends Database {

    var $table = 'pendaftaran';
    //var $tablejoin = 'master_produk';
	//var $tablejoin2 = 'form_so';
	var $table2 = 't_siswa';
	var $table3 = 'kuotajurusan';
	//var $tablejoin3 = 'master_barang';

function show_jurusan(){
        $con = $this->dbconnect();
		$sql = "SELECT * FROM jurusan";
        $query = mysqli_query($con,$sql);
		return $query;
	}

function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	    print_r($randomString);
	    die();

}


////////PENDATAAN/////////
    function tampilpendaftarans(){
        $con = $this->dbconnect();
        $sql = "select * from pendaftaran";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function tampilidpdfs() {
        $date = date('dmHi');
        $id = "PDS".$date;
        return $id;
    }

    function tambahpdfs($idPendaftaran,$nisn,$nama,$jk,$email,$tglLahir,$tempatLahir,$alamat,$kecamatan,$kabupaten,$telepon,$agama,$sekolahAsal,$noPesertaSLTP,$jurusan,$nilaiUN,$nilaiRapot,$nilaiSeleksi,$status,$privilage){
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES ("'.$idPendaftaran.'","'.$nisn.'","'.$nama.'","'.$jk.'","'.$email.'","'.$tglLahir.'","'.$tempatLahir.'","'.$alamat.'","'.$kecamatan.'","'.$kabupaten.'","'.$telepon.'","'.$agama.'","'.$sekolahAsal.'","'.$noPesertaSLTP.'","'.$jurusan.'","'.$nilaiUN.'","'.$nilaiRapot.'","'.$nilaiSeleksi.'","'.$status.'","'.$privilage.'")';
        // print_r($sql);
        // die();
        mysqli_query($con,$sql);
    }

    function getdetailpdfs($idPendaftaran){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where idPendaftaran = "'.$idPendaftaran.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

    function editpdfs($idPendaftaran,$nisn,$nama,$jk,$email,$tglLahir,$tempatLahir,$alamat,$kecamatan,$kabupaten,$telepon,$agama,$sekolahAsal,$noPesertaSLTP,$jurusan,$nilaiUN,$nilaiRapot){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table.' SET nisn= "'.$nisn.'", nama = "'.$nama.'", jk = "'.$jk.'", email = "'.$email.'", tglLahir = "'.$tglLahir.'", tempatLahir = "'.$tempatLahir.'", alamat = "'.$alamat.'", kecamatan = "'.$kecamatan.'", kabupaten = "'.$kabupaten.'", telepon = "'.$telepon.'", agama = "'.$agama.'", sekolahAsal = "'.$sekolahAsal.'", noPesertaSLTP = "'.$noPesertaSLTP.'", jurusan = "'.$jurusan.'", nilaiUN = "'.$nilaiUN.'",nilaiRapot = "'.$nilaiRapot.'" where idPendaftaran = "'.$idPendaftaran.'"';
        $query = mysqli_query($con,$sql);
    }

    function hapuspendaftarans($idPendaftaran)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where idPendaftaran = "'.$idPendaftaran.'"';
        $query = mysqli_query($con,$sql);
    }

        ////////SELEKSI/////////

    function editseleksi($idPendaftaran,$nisn,$nama,$jk,$email,$tglLahir,$tempatLahir,$alamat,$kecamatan,$kabupaten,$telepon,$agama,$sekolahAsal,$noPesertaSLTP,$jurusan,$nilaiUN,$nilaiRapot,$nilaiSeleksi,$status){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table.' SET nisn= "'.$nisn.'", nama = "'.$nama.'", jk = "'.$jk.'", email = "'.$email.'", tglLahir = "'.$tglLahir.'", tempatLahir = "'.$tempatLahir.'", alamat = "'.$alamat.'", kecamatan = "'.$kecamatan.'", kabupaten = "'.$kabupaten.'", telepon = "'.$telepon.'", agama = "'.$agama.'", sekolahAsal = "'.$sekolahAsal.'", noPesertaSLTP = "'.$noPesertaSLTP.'", jurusan = "'.$jurusan.'", nilaiUN = "'.$nilaiUN.'",nilaiRapot = "'.$nilaiRapot.'",nilaiSeleksi = "'.$nilaiSeleksi.'",status = "'.$status.'" where idPendaftaran = "'.$idPendaftaran.'"';
        $query = mysqli_query($con,$sql);
    }


	
////////PENDAFTARAN/////////

    function tampilpendaftaran(){
        $con = $this->dbconnect();
        $sql = "select * from t_siswa";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilidpdf() {
		$date = date('dmHi');
		$id = "ID".$date;
		return $id;
	}

   

	function tambahpendaftaran($user_id,
$no_induk,
$sis_email,
$nama,
$sis_nma_pnggln,
$kelamin,
$tmp_lahir,
$tgl_lahir,
$agama,
$sis_kwarganegraan,
$sis_anak_ke,
$sis_jml_sdr_kndung,
$sis_jml_sdr_tiri,
$sis_jml_sdr_angkat,
$sis_status,
$sis_bhs_shari_hri,
$alat_transport,
$sis_kps,
$sis_kip,
$sis_nokk,
$sis_nik,
$alamat_tinggal,
$alamat_kec_tngl,
$alamat_kab_tngl,
$sis_jrak_ke_skul,
$sis_tggal_dgn,
$telp,
$rumah_kondisi,
$rumah_fisik,
$alamat,
$alamat_rt,
$alamat_rw,
$alamat_lurah,
$alamat_camat,
$alamat_kodya,
$alamat_prop,
$sis_tmt_dri,
$sttb,
$sttb_tgl,
$nem,
$nem_tgl,
$sis_lma_blajar,
$sis_no_psrta_unas,
$sis_dtrm_kelas,
$sis_dtrm_bdng_khlian,
$sis_dtrm_komp_khlian,
$sis_dtrm_tgl,
$ayah,
$ayah_ktp,
$ayh_tmpt_lhir,
$ayh_tgl_lhir,
$ayh_agama,
$ayh_kwarganegraan,
$ayh_pndidikan,
$ayh_pkrjaan,
$ayh_pnghasilan_bln,
$ayh_almat,
$ayh_tlp,
$ayh_status,
$ibu,
$ibu_ktp,
$ibu_tmpt_lhir,
$ibu_tgl_lhir,
$ibu_agama,
$ibu_kwarganegraan,
$ibu_pndidikan,
$ibu_pkrjaan,
$ibu_pnghasilan_bln,
$ibu_almat,
$ibu_tlp,
$ibu_status,
$wali,
$wali_ktp,
$wali_tmpt_lhir,
$wali_tgl_lhir,
$wali_agama,
$wali_kwarganegraan,
$wali_pndidikan,
$wali_pkrjaan,
$wali_pnghasilan_bln,
$wali_almat,
$wali_tlp,
$hub_wali_siswa,
$sis_gol_darah,
$sis_penyakit,
$sis_kel_jasmani,
$sis_tinggi_berat,
$sis_ksenian,
$sis_olahrga,
$sis_kmasyaraktn,
$sis_organisasi,
$sis_hobby,
$prestasi,
$sis_lain2,
$no_daftar,
$foto_daftar,
$sis_nisn,
$kode_prog,
$no_urut,
$ind_prog,
$kelas,
$tgl_input,
$sis_pndahn_seklah,
$sis_pndahn_alasan,
$sis_dtrm_prog_khlian,
$sis_cita2,
$sis_kks,
$sis_beasiswa,
$sis_pndah_seklah,
$sis_pndah_alsn,
$sis_luls_thn,
$sis_lnjut_ke,
$sis_krja_tgl,
$sis_krja_tmpt,
$sis_krja_pnghsilan,
$ijz_fc_lg,
$ijz_fc_bs,
$skhun_fc_lg,
$skhun_fc_bs,
$kk,
$akte,
$alat_tansport,
$th_ajar,
$n_unas,
$no_unas,
$n_raport,
$n_test,
$n_minat,
$n_akhir,
$p_unas,
$p_raport,
$p_test,
$p_minat,
$p_akhir,
$sis_luls_ijazah,
$sis_luls_skhu,
$petugas,
$th_daftar){  
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->table2.' VALUES ("'.$user_id.'",
"'.$no_induk.'",
"'.$sis_email.'",
"'.$nama.'",
"'.$sis_nma_pnggln.'",
"'.$kelamin.'",
"'.$tmp_lahir.'",
"'.$tgl_lahir.'",
"'.$agama.'",
"'.$sis_kwarganegraan.'",
"'.$sis_anak_ke.'",
"'.$sis_jml_sdr_kndung.'",
"'.$sis_jml_sdr_tiri.'",
"'.$sis_jml_sdr_angkat.'",
"'.$sis_status.'",
"'.$sis_bhs_shari_hri.'",
"'.$alat_transport.'",
"'.$sis_kps.'",
"'.$sis_kip.'",
"'.$sis_nokk.'",
"'.$sis_nik.'",
"'.$alamat_tinggal.'",
"'.$alamat_kec_tngl.'",
"'.$alamat_kab_tngl.'",
"'.$sis_jrak_ke_skul.'",
"'.$sis_tggal_dgn.'",
"'.$telp.'",
"'.$rumah_kondisi.'",
"'.$rumah_fisik.'",
"'.$alamat.'",
"'.$alamat_rt.'",
"'.$alamat_rw.'",
"'.$alamat_lurah.'",
"'.$alamat_camat.'",
"'.$alamat_kodya.'",
"'.$alamat_prop.'",
"'.$sis_tmt_dri.'",
"'.$sttb.'",
"'.$sttb_tgl.'",
"'.$nem.'",
"'.$nem_tgl.'",
"'.$sis_lma_blajar.'",
"'.$sis_no_psrta_unas.'",
"'.$sis_dtrm_kelas.'",
"'.$sis_dtrm_bdng_khlian.'",
"'.$sis_dtrm_komp_khlian.'",
"'.$sis_dtrm_tgl.'",
"'.$ayah.'",
"'.$ayah_ktp.'",
"'.$ayh_tmpt_lhir.'",
"'.$ayh_tgl_lhir.'",
"'.$ayh_agama.'",
"'.$ayh_kwarganegraan.'",
"'.$ayh_pndidikan.'",
"'.$ayh_pkrjaan.'",
"'.$ayh_pnghasilan_bln.'",
"'.$ayh_almat.'",
"'.$ayh_tlp.'",
"'.$ayh_status.'",
"'.$ibu.'",
"'.$ibu_ktp.'",
"'.$ibu_tmpt_lhir.'",
"'.$ibu_tgl_lhir.'",
"'.$ibu_agama.'",
"'.$ibu_kwarganegraan.'",
"'.$ibu_pndidikan.'",
"'.$ibu_pkrjaan.'",
"'.$ibu_pnghasilan_bln.'",
"'.$ibu_almat.'",
"'.$ibu_tlp.'",
"'.$ibu_status.'",
"'.$wali.'",
"'.$wali_ktp.'",
"'.$wali_tmpt_lhir.'",
"'.$wali_tgl_lhir.'",
"'.$wali_agama.'",
"'.$wali_kwarganegraan.'",
"'.$wali_pndidikan.'",
"'.$wali_pkrjaan.'",
"'.$wali_pnghasilan_bln.'",
"'.$wali_almat.'",
"'.$wali_tlp.'",
"'.$hub_wali_siswa.'",
"'.$sis_gol_darah.'",
"'.$sis_penyakit.'",
"'.$sis_kel_jasmani.'",
"'.$sis_tinggi_berat.'",
"'.$sis_ksenian.'",
"'.$sis_olahrga.'",
"'.$sis_kmasyaraktn.'",
"'.$sis_organisasi.'",
"'.$sis_hobby.'",
"'.$prestasi.'",
"'.$sis_lain2.'",
"'.$no_daftar.'",
"'.$foto_daftar.'",
"'.$sis_nisn.'",
"'.$kode_prog.'",
"'.$no_urut.'",
"'.$ind_prog.'",
"'.$kelas.'",
"'.$tgl_input.'",
"'.$sis_pndahn_seklah.'",
"'.$sis_pndahn_alasan.'",
"'.$sis_dtrm_prog_khlian.'",
"'.$sis_cita2.'",
"'.$sis_kks.'",
"'.$sis_beasiswa.'",
"'.$sis_pndah_seklah.'",
"'.$sis_pndah_alsn.'",
"'.$sis_luls_thn.'",
"'.$sis_lnjut_ke.'",
"'.$sis_krja_tgl.'",
"'.$sis_krja_tmpt.'",
"'.$sis_krja_pnghsilan.'",
"'.$ijz_fc_lg.'",
"'.$ijz_fc_bs.'",
"'.$skhun_fc_lg.'",
"'.$skhun_fc_bs.'",
"'.$kk.'",
"'.$akte.'",
"'.$alat_tansport.'",
"'.$th_ajar.'",
"'.$n_unas.'",
"'.$no_unas.'",
"'.$n_raport.'",
"'.$n_test.'",
"'.$n_minat.'",
"'.$n_akhir.'",
"'.$p_unas.'",
"'.$p_raport.'",
"'.$p_test.'",
"'.$p_minat.'",
"'.$p_akhir.'",
"'.$sis_luls_ijazah.'",
"'.$sis_luls_skhu.'",
"'.$petugas.'",
"'.$th_daftar.'")'; 
        // print_r($sql);
        // die();
        
        mysqli_query($con,$sql);   
    }

    function getdetailpendaftaran($user_id){
		$con = $this->dbconnect();
		$sql = "select * from ".$this->table2.' where user_id = "'.$user_id.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function editpendaftaran($user_id,$no_induk,$sis_email,$nama,$sis_nma_pnggln,$kelamin,$tmp_lahir,$tgl_lahir,$agama,$sis_kwarganegraan,$sis_anak_ke,$sis_jml_sdr_kndung,$sis_jml_sdr_tiri,$sis_jml_sdr_angkat,$sis_status,$sis_bhs_shari_hri,$alat_transport,$sis_kps,$sis_kip,$sis_nokk,$sis_nik,$alamat_tinggal,$alamat_kec_tngl,$alamat_kab_tngl,$sis_jrak_ke_skul,$sis_tggal_dgn,$telp,$rumah_kondisi,$rumah_fisik,$alamat,$alamat_rt,$alamat_rw,$alamat_lurah,$alamat_camat,$alamat_kodya,$alamat_prop,$sis_tmt_dri,$sttb,$sttb_tgl,$nem,$nem_tgl,$sis_lma_blajar,$sis_no_psrta_unas,$sis_dtrm_kelas,$sis_dtrm_bdng_khlian,$sis_dtrm_komp_khlian,$sis_dtrm_tgl,$ayah,$ayah_ktp,$ayh_tmpt_lhir,$ayh_tgl_lhir,$ayh_agama,$ayh_kwarganegraan,$ayh_pndidikan,$ayh_pkrjaan,$ayh_pnghasilan_bln,$ayh_almat,$ayh_tlp,$ayh_status,$ibu,$ibu_ktp,$ibu_tmpt_lhir,$ibu_tgl_lhir,$ibu_agama,$ibu_kwarganegraan,$ibu_pndidikan,$ibu_pkrjaan,$ibu_pnghasilan_bln,$ibu_almat,$ibu_tlp,$ibu_status,$wali,$wali_ktp,$wali_tmpt_lhir,$wali_tgl_lhir,$wali_agama,$wali_kwarganegraan,$wali_pndidikan,$wali_pkrjaan,$wali_pnghasilan_bln,$wali_almat,$wali_tlp,$hub_wali_siswa,$sis_gol_darah,$sis_penyakit,$sis_kel_jasmani,$sis_tinggi_berat,$sis_ksenian,$sis_olahrga,$sis_kmasyaraktn,$sis_organisasi,$sis_hobby,$prestasi,$sis_lain2,$no_daftar,$foto_daftar,$sis_nisn,$kode_prog,$no_urut,$ind_prog,$kelas,$tgl_input,$sis_pndahn_seklah,$sis_pndahn_alasan,$sis_dtrm_prog_khlian,$sis_cita2,$sis_kks,$sis_beasiswa,$sis_pndah_seklah,$sis_pndah_alsn,$sis_luls_thn,$sis_lnjut_ke,$sis_krja_tgl,$sis_krja_tmpt,$sis_krja_pnghsilan,$ijz_fc_lg,$ijz_fc_bs,$skhun_fc_lg,$skhun_fc_bs,$kk,$akte,$alat_tansport,$th_ajar,$n_unas,$no_unas,$n_raport,$n_test,$n_minat,$n_akhir,$p_unas,$p_raport,$p_test,$p_minat,$p_akhir,$sis_luls_ijazah,$sis_luls_skhu,$petugas,$th_daftar){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table2.' SET no_induk= "'.$no_induk.'", sis_email = "'.$sis_email.'", nama = "'.$nama.'", sis_nma_pnggln = "'.$sis_nma_pnggln.'", kelamin = "'.$kelamin.'", tmp_lahir = "'.$tmp_lahir.'", tgl_lahir = "'.$tgl_lahir.'", agama = "'.$agama.'", sis_kwarganegraan = "'.$sis_kwarganegraan.'", sis_anak_ke = "'.$sis_anak_ke.'", sis_jml_sdr_kndung= "'.$sis_jml_sdr_kndung.'", sis_jml_sdr_tiri = "'.$sis_jml_sdr_tiri.'", sis_jml_sdr_angkat= "'.$sis_jml_sdr_angkat.'", sis_status = "'.$sis_status.'", sis_bhs_shari_hri = "'.$sis_bhs_shari_hri.'", alat_transport = "'.$alat_transport.'", sis_kps = "'.$sis_kps.'", sis_kip = "'.$sis_kip.'", sis_nokk = "'.$sis_nokk.'", sis_nik = "'.$sis_nik.'", alamat_tinggal = "'.$alamat_tinggal.'",  alamat_kec_tngl = "'.$alamat_kec_tngl.'", alamat_kab_tngl = "'.$alamat_kab_tngl.'", sis_jrak_ke_skul = "'.$sis_jrak_ke_skul.'", sis_tggal_dgn = "'.$sis_tggal_dgn.'", telp = "'.$telp.'", rumah_kondisi = "'.$rumah_kondisi.'", rumah_fisik = "'.$rumah_fisik.'", alamat = "'.$alamat.'", alamat_rt = "'.$alamat_rt.'", alamat_rw = "'.$alamat_rw.'", alamat_lurah = "'.$alamat_lurah.'", alamat_camat = "'.$alamat_camat.'", alamat_kodya = "'.$alamat_kodya.'", alamat_prop = "'.$alamat_prop.'", sis_tmt_dri = "'.$sis_tmt_dri.'", sttb = "'.$sttb.'", sttb_tgl = "'.$sttb_tgl.'", nem = "'.$nem.'", nem_tgl = "'.$nem_tgl.'", sis_lma_blajar = "'.$sis_lma_blajar.'", sis_no_psrta_unas = "'.$sis_no_psrta_unas.'", sis_dtrm_kelas = "'.$sis_dtrm_kelas.'", sis_dtrm_bdng_khlian = "'.$sis_dtrm_bdng_khlian.'", sis_dtrm_komp_khlian = "'.$sis_dtrm_komp_khlian.'", sis_dtrm_tgl = "'.$sis_dtrm_tgl.'", ayah = "'.$ayah.'", ayah_ktp = "'.$ayah_ktp.'", ayh_tmpt_lhir = "'.$ayh_tmpt_lhir.'", ayh_tgl_lhir = "'.$ayh_tgl_lhir.'", ayh_agama = "'.$ayh_agama.'", ayh_kwarganegraan = "'.$ayh_kwarganegraan.'", ayh_pndidikan = "'.$ayh_pndidikan.'", ayh_pkrjaan = "'.$ayh_pkrjaan.'", ayh_pnghasilan_bln = "'.$ayh_pnghasilan_bln.'", ayh_almat = "'.$ayh_almat.'", ayh_tlp = "'.$ayh_tlp.'", ayh_status = "'.$ayh_status.'" , ibu = "'.$ibu.'", ibu_ktp = "'.$ibu_ktp.'", ibu_tmpt_lhir = "'.$ibu_tmpt_lhir.'", ibu_tgl_lhir = "'.$ibu_tgl_lhir.'", ibu_agama = "'.$ibu_agama.'", ibu_kwarganegraan = "'.$ibu_kwarganegraan.'", ibu_pndidikan = "'.$ibu_pndidikan.'", ibu_pkrjaan = "'.$ibu_pkrjaan.'", ibu_pnghasilan_bln = "'.$ibu_pnghasilan_bln.'", ibu_almat = "'.$ibu_almat.'", ibu_tlp = "'.$ibu_tlp.'", ibu_status = "'.$ibu_status.'", wali = "'.$wali.'", wali_ktp = "'.$wali_ktp.'", wali_tmpt_lhir = "'.$wali_tmpt_lhir.'", wali_tgl_lhir = "'.$wali_tgl_lhir.'", wali_agama = "'.$wali_agama.'", wali_kwarganegraan = "'.$wali_kwarganegraan.'", wali_pndidikan = "'.$wali_pndidikan.'", wali_pkrjaan = "'.$wali_pkrjaan.'", wali_pnghasilan_bln = "'.$wali_pnghasilan_bln.'", wali_almat = "'.$wali_almat.'", wali_tlp = "'.$wali_tlp.'", hub_wali_siswa = "'.$hub_wali_siswa.'", sis_gol_darah = "'.$sis_gol_darah.'", sis_penyakit = "'.$sis_penyakit.'", sis_kel_jasmani = "'.$sis_kel_jasmani.'", sis_tinggi_berat = "'.$sis_tinggi_berat.'", sis_ksenian = "'.$sis_ksenian.'", sis_olahrga = "'.$sis_olahrga.'", sis_kmasyaraktn = "'.$sis_kmasyaraktn.'", sis_organisasi = "'.$sis_organisasi.'", sis_hobby = "'.$sis_hobby.'", prestasi = "'.$prestasi.'", sis_lain2 = "'.$sis_lain2.'", no_daftar = "'.$no_daftar.'"  where user_id = "'.$user_id.'"';
            $query = mysqli_query($con,$sql);
    }
    
    function hapuspendaftaran($user_id)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table2.' where user_id = "'.$user_id.'"';
        $query = mysqli_query($con,$sql);
    }


    

	   


////////DAFTARULANG/////////

	function tampildu(){
        $con = $this->dbconnect();
        $sql = "SELECT 
        siswa.nis, 
        siswa.nisn, 
        siswa.namaSiswa, 
        siswa.jk, 
        siswa.tempatLahir, 
        siswa.tanggalLahir, 
        siswa.agama, 
        siswa.email, 
        siswa.hp, 
        siswa.telepon, 
        siswa.pass, 
        siswa.anakKe, 
        siswa.bahasa, 
        siswa.jenisAnak, 
        siswa.jsa, 
        siswa.jsk, 
        siswa.jst, 
        siswa.kewarganegaraan, 
        siswa.kodeJurusan, 
        siswa.thnAjaran, 
        siswa.status, 

        filelampiran.foto, 
        filelampiran.scanAkte, 
        filelampiran.scanIjazah, 
        filelampiran.scanKIP, 
        filelampiran.scanKK, 
        filelampiran.scanKPS, 
        filelampiran.scanKTPOrtu, 
        filelampiran.scanNISN, 
        filelampiran.scanSKHUN, 
        filelampiran.scanSKHUS, 
        filelampiran.scanSuratKet, 

        kegemaran.citacita, 
        kegemaran.hobi, 
        kegemaran.kesenian, 
        kegemaran.olahraga, 
        kegemaran.organisasi, 

        ketakhirsiswa.tglKeluar, 
        ketakhirsiswa.alasan, 
        ketakhirsiswa.noIjazah, 
        ketakhirsiswa.noSKHUN, 
        ketakhirsiswa.tglIjazah, 
        ketakhirsiswa.tglSKHUN, 
        ketakhirsiswa.tahunLulus, 

        ketayah.nama as namaAyah, 
        ketayah.agama as agamaAyah, 
        ketayah.alamat as alamatAyah, 
        ketayah.kewarganegaraan as kewarganegaraanAyah, 
        ketayah.noKTP as noKTPAyah, 
        ketayah.telepon as teleponAyah, 
        ketayah.pekerjaan as pekerjaanAyah, 
        ketayah.pendidikan as pendidikanAyah, 
        ketayah.penghasilan as penghasilanAyah, 
        ketayah.tglLahir as tglLahirAyah, 
        ketayah.tmptLahir as tmptLahirAyah, 
        ketayah.ketHidup as ketHidupAyah, 

        ketibu.nama as namaIbu, 
        ketibu.agama as agamaIbu, 
        ketibu.alamat as alamatIbu, 
        ketibu.kewarganegaraan as kewarganegaraanIbu, 
        ketibu.noKTP as nnoKTPIbu, 
        ketibu.telepon as teleponIbu, 
        ketibu.pekerjaan as pekerjaanIbu, 
        ketibu.pendidikan as pendidikanIbu, 
        ketibu.penghasilan as penghasilanIbu, 
        ketibu.tglLahir as tglLahirIbu, 
        ketibu.tmptLahir as tmptLahirIbu, 
        ketibu.ketHidup as ketHidupIbu, 

        ketwali.nama as namaWali, 
        ketwali.agama as agamaWali, 
        ketwali.alamat as alamatWali, 
        ketwali.kewarganegaraan as kewarganegaraanWali, 
        ketwali.noKTP as noKTPWali, 
        ketwali.telepon as teleponWali, 
        ketwali.pekerjaan as pekerjaanWali, 
        ketwali.pendidikan as pendidikanWali, 
        ketwali.penghasilan as penghasilanWali, 
        ketwali.tglLahir as tglLahirWali, 
        ketwali.tmptLahir as tmptLahirWali, 

        ketkesehatan.berat, 
        ketkesehatan.tinggi, 
        ketkesehatan.golDarah, 
        ketkesehatan.kelainan, 
        ketkesehatan.rPenyakit, 

        ketlulus.kelanjutan, 
        ketlulus.namaInstansi, 
        ketlulus.penghasilan, 
        ketlulus.tglMulai, 

        ketpindahan.alasan, 
        ketpindahan.dariSekolah, 

        kettmpttinggal.alamat, 
        kettmpttinggal.jarak, 
        kettmpttinggal.kabupaten, 
        kettmpttinggal.kecamatan, 
        kettmpttinggal.kelurahan,
        kettmpttinggal.provinsi, 
        kettmpttinggal.rt, 
        kettmpttinggal.rw, 
        kettmpttinggal.tinggalDgn, 
        kettmpttinggal.alamatM, 
        kettmpttinggal.kabupatenM, 
        kettmpttinggal.kecamatanM, 
        kettmpttinggal.kondisiRumah,
        kettmpttinggal.kondisiFisik,
        kettmpttinggal.transportasi,

        rpendidikan.tamatanDari, 
        rpendidikan.lamaBelajar, 
        rpendidikan.noPesertaUAN, 
        rpendidikan.noIjazah as noIjazahSMP, 
        rpendidikan.noSKHUN as noSKHUNSMP, 
        rpendidikan.tglIjazah as tglIjazahSMP, 
        rpendidikan.tglSKHUN as tglSKHUNSMP 
        FROM `siswa` 
			LEFT JOIN kettmpttinggal on kettmpttinggal.nis = siswa.nis 
			LEFT JOIN ketayah on ketayah.nis = siswa.nis 
			LEFT JOIN ketibu on ketibu.nis = siswa.nis 
			LEFT JOIN ketwali on ketwali.nis = siswa.nis
			LEFT JOIN kegemaran on kegemaran.nis = siswa.nis
			LEFT JOIN filelampiran on filelampiran.nis = siswa.nis
			LEFT JOIN ketakhirsiswa on ketakhirsiswa.nis = siswa.nis
			LEFT JOIN ketkesehatan on ketkesehatan.nis = siswa.nis
			LEFT JOIN ketlulus on ketlulus.nis = siswa.nis
			LEFT JOIN ketpindahan on ketpindahan.nis = siswa.nis
			LEFT JOIN rpendidikan on rpendidikan.nis = siswa.nis";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

    function tampilnis() {
		$year = date('y');
		$a = date('dmHi');
		$id = $year.$a;
		return $id;
	}

	function getdetaildu($id){
        $con = $this->dbconnect();
        $sql = "SELECT 
        siswa.nis, 
        siswa.nisn, 
        siswa.namaSiswa, 
        siswa.namaPanggilan, 
        siswa.jk, 
        siswa.tempatLahir, 
        siswa.tanggalLahir, 
        siswa.agama, 
        siswa.email, 
        siswa.hp, 
        siswa.telepon, 
        siswa.pass, 
        siswa.anakKe, 
        siswa.bahasa, 
        siswa.jenisAnak, 
        siswa.jsa, 
        siswa.jsk, 
        siswa.jst, 
        siswa.kewarganegaraan, 
        siswa.kodeJurusan, 
        siswa.thnAjaran, 
        siswa.status, 

        filelampiran.foto, 
        filelampiran.scanAkte, 
        filelampiran.scanIjazah, 
        filelampiran.scanKIP, 
        filelampiran.scanKK, 
        filelampiran.scanKPS, 
        filelampiran.scanKTPOrtu, 
        filelampiran.scanNISN, 
        filelampiran.scanSKHUN, 
        filelampiran.scanSKHUS, 
        filelampiran.scanSuratKet, 

        kegemaran.citacita, 
        kegemaran.hobi, 
        kegemaran.kesenian, 
        kegemaran.olahraga, 
        kegemaran.organisasi, 
        kegemaran.prestasi, 

        ketakhirsiswa.tglKeluar, 
        ketakhirsiswa.alasan, 
        ketakhirsiswa.noIjazah, 
        ketakhirsiswa.noSKHUN, 
        ketakhirsiswa.tglIjazah, 
        ketakhirsiswa.tglSKHUN, 
        ketakhirsiswa.tahunLulus, 

        ketayah.nama as namaA, 
        ketayah.agama as agamaA, 
        ketayah.alamat as alamatA, 
        ketayah.kewarganegaraan as kewarganegaraanA, 
        ketayah.noKTP as noKTPA, 
        ketayah.telepon as teleponA, 
        ketayah.pekerjaan as pekerjaanA, 
        ketayah.pendidikan as pendidikanA, 
        ketayah.penghasilan as penghasilanA, 
        ketayah.tglLahir as tglLahirA, 
        ketayah.tmptLahir as tmptLahirA, 
        ketayah.ketHidup as ketHidupA, 

        ketibu.nama as namaI, 
        ketibu.agama as agamaI, 
        ketibu.alamat as alamatI, 
        ketibu.kewarganegaraan as kewarganegaraanI, 
        ketibu.noKTP as noKTPI, 
        ketibu.telepon as teleponI, 
        ketibu.pekerjaan as pekerjaanI, 
        ketibu.pendidikan as pendidikanI, 
        ketibu.penghasilan as penghasilanI, 
        ketibu.tglLahir as tglLahirI, 
        ketibu.tmptLahir as tmptLahirI, 
        ketibu.ketHidup as ketHidupI, 

        ketwali.nama as namaW, 
        ketwali.agama as agamaW, 
        ketwali.alamat as alamatW, 
        ketwali.kewarganegaraan as kewarganegaraanW, 
        ketwali.noKTP as noKTPW, 
        ketwali.telepon as teleponW, 
        ketwali.pekerjaan as pekerjaanW, 
        ketwali.pendidikan as pendidikanW, 
        ketwali.penghasilan as penghasilanW, 
        ketwali.tglLahir as tglLahirW, 
        ketwali.tmptLahir as tmptLahirW, 

        ketkesehatan.berat, 
        ketkesehatan.tinggi, 
        ketkesehatan.golDarah, 
        ketkesehatan.kelainan, 
        ketkesehatan.rPenyakit, 

        ketlulus.kelanjutan, 
        ketlulus.namaInstansi, 
        ketlulus.penghasilan, 
        ketlulus.tglMulai, 

        ketpindahan.alasan, 
        ketpindahan.dariSekolah, 

        kettmpttinggal.alamat, 
        kettmpttinggal.jarak, 
        kettmpttinggal.kabupaten, 
        kettmpttinggal.kecamatan, 
        kettmpttinggal.kelurahan,
        kettmpttinggal.provinsi, 
        kettmpttinggal.rt, 
        kettmpttinggal.rw, 
        kettmpttinggal.tinggalDgn, 
        kettmpttinggal.alamatM, 
        kettmpttinggal.kabupatenM, 
        kettmpttinggal.kecamatanM, 
        kettmpttinggal.kondisiRumah,
        kettmpttinggal.kondisiFisik,
        kettmpttinggal.transportasi,

        rpendidikan.tamatanDari, 
        rpendidikan.lamaBelajar, 
        rpendidikan.noPesertaUAN, 
        rpendidikan.noIjazah as noIjazahSMP, 
        rpendidikan.noSKHUN as noSKHUNSMP, 
        rpendidikan.tglIjazah as tglIjazahSMP, 
        rpendidikan.tglSKHUN as tglSKHUNSMP 
        FROM `siswa` 
			LEFT JOIN kettmpttinggal on kettmpttinggal.nis = siswa.nis 
			LEFT JOIN ketayah on ketayah.nis = siswa.nis 
			LEFT JOIN ketibu on ketibu.nis = siswa.nis 
			LEFT JOIN ketwali on ketwali.nis = siswa.nis
			LEFT JOIN kegemaran on kegemaran.nis = siswa.nis
			LEFT JOIN filelampiran on filelampiran.nis = siswa.nis
			LEFT JOIN ketakhirsiswa on ketakhirsiswa.nis = siswa.nis
			LEFT JOIN ketkesehatan on ketkesehatan.nis = siswa.nis
			LEFT JOIN ketlulus on ketlulus.nis = siswa.nis
			LEFT JOIN ketpindahan on ketpindahan.nis = siswa.nis
			LEFT JOIN rpendidikan on rpendidikan.nis = siswa.nis where siswa.nis=".$id;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		
        return $hasil;
        
    }

	function tambahdu(
		$nis, 
		$nisn, 
		$namaSiswa, 
		$namaPanggilan, 
		$jk, 
		$tempatLahirSiswa, 
		$tanggalLahirSiswa, 
		$agamaSiswa, 
		$emailSiswa, 
		$hpSiswa, 
		$teleponSiswa, 
		$pass, 
		$anakKe, 
		$bahasa, 
		$jenisAnak,
		 $jsa, 
		 $jsk, 
		 $jst,
		 $kewarganegaraanSiswa, 
		 $jurusan, 
		 $thnAjaranSiswa, 
		 $statusSiswa, 

		 $foto, 
		 $scanAkte, 
		 $scanIjazah, 
		 $scanKIP, 
		 $scanKK, 
		 $scanKPS, 
		 $scanKTPOrtu, 
		 $scanNISN, 
		 $scanSKHUN, 
		 $scanSKHUS, 
		 $scanSuratKet, 

		 $citacita, 
		 $hobi, 
		 $kesenian, 
		 $olahraga, 
		 $organisasi, 
		 $prestasi, 

		 $tglKeluar, 
		 $alasan, 
		 $noIjazah, 
		 $noSKHUN, 
		 $tglIjazah, 
		 $tglSKHUN, 
		 $tahunLulus, 

		 $namaAyah, 
		 $agamaAyah, 
		 $alamatAyah, 
		 $kewarganegaraanAyah, 
		 $noKTPAyah, 
		 $teleponAyah, 
		 $pekerjaanAyah, 
		 $pendidikanAyah, 
		 $penghasilanAyah, 
		 $tglLahirAyah, 
		 $tmptLahirAyah, 
		 $ketHidupAyah, 

		 $namaIbu, 
		 $agamaIbu, 
		 $alamatIbu, 
		 $kewarganegaraanIbu, 
		 $noKTPIbu, 
		 $teleponIbu, 
		 $pekerjaanIbu, 
		 $pendidikanIbu, 
		 $penghasilanIbu, 
		 $tglLahirIbu, 
		 $tmptLahirIbu, 
		 $ketHidupIbu, 

		 $namaWali, 
		 $agamaWali, 
		 $alamatWali, 
		 $kewarganegaraanWali, 
		 $noKTPWali, 
		 $teleponWali, 
		 $pekerjaanWali, 
		 $pendidikanWali, 
		 $penghasilanWali, 
		 $tglLahirWali, 
		 $tmptLahirWali, 

		 $berat, 
		 $tinggi, 
		 $golDarah, 
		 $kelainan, 
		 $rPenyakit, 

		 $kelanjutan, 
		 $namaInstansi, 
		 $penghasilan, 
		 $tglMulai, 

		 $alasanpindah, 
		 $dariSekolah, 

		 $alamatSiswa, 
		 $jarakSiswa, 
		 $kabupatenSiswa, 
		 $kecamatanSiswa, 
		 $kelurahanSiswa, 
		 $provinsiSiswa, 
		 $rt, 
		 $rw, 
		 $tinggalDgn, 
		 $alamatM, 
		 $kecamatanM, 
		 $kabupatenM, 
		 $kondisiRumah, 
		 $kondisiFisik, 
		 $transportasi, 

		 $tamatanDari, 
		 $lamaBelajar, 
		 $noPesertaUAN, 
		 $noIjazahSMP, 
		 $noSKHUNSMP, 
		 $tglIjazahSMP, 
		 $tglSKHUNSMP,
		 $privilage
		 ){
		$conn = $this->dbconnect();
		$sql1 = 'INSERT INTO siswa VALUES ("'.$nis.'","'.$nisn.'","'.$namaSiswa.'","'.$namaPanggilan.'","'.$jk.'","'.$tempatLahirSiswa.'","'.$tanggalLahirSiswa.'","'.$agamaSiswa.'","'.$emailSiswa.'","'.$hpSiswa.'","'.$teleponSiswa.'","'.$pass.'","'.$anakKe.'","'.$bahasa.'","'.$jenisAnak.'","'.$jsa.'","'.$jsk.'","'.$jst.'","'.$kewarganegaraanSiswa.'","'.$jurusan.'","'.$thnAjaranSiswa.'","'.$statusSiswa.'")';
		$sql2 = 'INSERT INTO kegemaran VALUES ("'.$nis.'","'.$citacita.'","'.$hobi.'","'.$kesenian.'","'.$olahraga.'","'.$organisasi.'","'.$prestasi.'")';
		$sql3 = 'INSERT INTO filelampiran VALUES ("'.$nis.'","'.$foto.'","'.$scanAkte.'","'.$scanIjazah.'","'.$scanKIP.'","'.$scanKK.'","'.$scanKPS.'","'.$scanKTPOrtu.'","'.$scanNISN.'","'.$scanSKHUN.'","'.$scanSKHUS.'","'.$scanSuratKet.'")';
		$sql4 = 'INSERT INTO ketakhirsiswa VALUES ("'.$nis.'","'.$tglKeluar.'","'.$alasan.'","'.$noIjazah.'","'.$noSKHUN.'","'.$tglIjazah.'","'.$tglSKHUN.'","'.$tahunLulus.'")';
		$sql5 = 'INSERT INTO ketayah VALUES ("'.$nis.'","'.$namaAyah.'","'.$agamaAyah.'","'.$alamatAyah.'","'.$kewarganegaraanAyah.'","'.$noKTPAyah.'","'.$teleponAyah.'","'.$pekerjaanAyah.'","'.$pendidikanAyah.'","'.$penghasilanAyah.'","'.$tglLahirAyah.'","'.$tmptLahirAyah.'","'.$ketHidupAyah.'")';
		$sql6 = 'INSERT INTO ketibu VALUES ("'.$nis.'","'.$namaIbu.'","'.$agamaIbu.'","'.$alamatIbu.'","'.$kewarganegaraanIbu.'","'.$noKTPIbu.'","'.$teleponIbu.'","'.$pekerjaanIbu.'","'.$pendidikanIbu.'","'.$penghasilanIbu.'","'.$tglLahirIbu.'","'.$tmptLahirIbu.'","'.$ketHidupIbu.'")';
		$sql7 = 'INSERT INTO ketwali VALUES ("'.$nis.'","'.$namaWali.'","'.$agamaWali.'","'.$alamatWali.'","'.$kewarganegaraanWali.'","'.$noKTPWali.'","'.$teleponWali.'","'.$pekerjaanWali.'","'.$pendidikanWali.'","'.$penghasilanWali.'","'.$tglLahirWali.'","'.$tmptLahirWali.'")';
		$sql8 = 'INSERT INTO ketkesehatan VALUES ("'.$nis.'","'.$berat.'","'.$tinggi.'","'.$golDarah.'","'.$kelainan.'","'.$rPenyakit.'")';
		$sql10 = 'INSERT INTO ketpindahan VALUES ("'.$nis.'","'.$alasanpindah.'","'.$dariSekolah.'")';
		$sql11 = 'INSERT INTO kettmpttinggal VALUES ("'.$nis.'","'.$alamatSiswa.'","'.$jarakSiswa.'","'.$kabupatenSiswa.'","'.$kecamatanSiswa.'","'.$kelurahanSiswa.'","'.$provinsiSiswa.'","'.$rt.'","'.$rw.'","'.$tinggalDgn.'","'.$alamatM.'","'.$kecamatanM.'","'.$kabupatenM.'","'.$kondisiRumah.'","'.$kondisiFisik.'","'.$transportasi.'")';
		$sql12 = 'INSERT INTO rpendidikan VALUES ("'.$nis.'","'.$tamatanDari.'","'.$lamaBelajar.'","'.$noPesertaUAN.'","'.$noIjazahSMP.'","'.$noSKHUNSMP.'","'.$tglIjazahSMP.'","'.$tglSKHUNSMP.'")';
		$sql13 = 'INSERT INTO ketlulus VALUES ("'.$nis.'","'.$kelanjutan.'","'.$namaInstansi.'","'.$penghasilan.'","'.$tglMulai.'")';
		$sql14 = 'UPDATE pendaftaran SET privilage = "'.$privilage.'" where nisn = "'.$nisn.'"';
        // print_r($scanSuratKet);
        // die();

        mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        mysqli_query($conn, $sql4);
        mysqli_query($conn, $sql5);
        mysqli_query($conn, $sql6);
        mysqli_query($conn, $sql7);
        mysqli_query($conn, $sql8);
        mysqli_query($conn, $sql10);
        mysqli_query($conn, $sql11);
        mysqli_query($conn, $sql12);
        mysqli_query($conn, $sql13);
        mysqli_query($conn, $sql14);
    }

    function editdu(
		$nis, 
		$nisn, 
		$namaSiswa, 
		$jk, 
		$tempatLahirSiswa, 
		$tanggalLahirSiswa, 
		$agamaSiswa, 
		$emailSiswa, 
		$hpSiswa, 
		$teleponSiswa, 
		$pass, 
		$anakKe, 
		$bahasa, 
		$jenisAnak,
		 $jsa, 
		 $jsk, 
		 $jst,
		 $kewarganegaraanSiswa, 
		 $thnAjaranSiswa, 
		 $statusSiswa, 

		 $foto, 
		 $scanAkte, 
		 $scanIjazah, 
		 $scanKIP, 
		 $scanKK, 
		 $scanKPS, 
		 $scanKTPOrtu, 
		 $scanNISN, 
		 $scanSKHUN, 
		 $scanSKHUS, 
		 $scanSuratKet, 

		 $citacita, 
		 $hobi, 
		 $kesenian, 
		 $olahraga, 
		 $organisasi, 
		 $prestasi,  

		 $namaAyah, 
		 $agamaAyah, 
		 $alamatAyah, 
		 $kewarganegaraanAyah, 
		 $noKTPAyah, 
		 $teleponAyah, 
		 $pekerjaanAyah, 
		 $pendidikanAyah, 
		 $penghasilanAyah, 
		 $tglLahirAyah, 
		 $tmptLahirAyah, 
		 $ketHidupAyah, 

		 $namaIbu, 
		 $agamaIbu, 
		 $alamatIbu, 
		 $kewarganegaraanIbu, 
		 $noKTPIbu, 
		 $teleponIbu, 
		 $pekerjaanIbu, 
		 $pendidikanIbu, 
		 $penghasilanIbu, 
		 $tglLahirIbu, 
		 $tmptLahirIbu, 
		 $ketHidupIbu, 

		 $namaWali, 
		 $agamaWali, 
		 $alamatWali, 
		 $kewarganegaraanWali, 
		 $noKTPWali, 
		 $teleponWali, 
		 $pekerjaanWali, 
		 $pendidikanWali, 
		 $penghasilanWali, 
		 $tglLahirWali, 
		 $tmptLahirWali, 

		 $berat, 
		 $tinggi, 
		 $golDarah, 
		 $kelainan, 
		 $rPenyakit, 

		 $bsCode, 
		 $kkCode, 
		 $psCode, 

		 $alamatSiswa, 
		 $jarakSiswa, 
		 $kabupatenSiswa, 
		 $kecamatanSiswa, 
		 $kelurahanSiswa, 
		 $provinsiSiswa, 
		 $rt, 
		 $rw, 
		 $tinggalDgn, 
		 $alamatM, 
		 $kecamatanM, 
		 $kabupatenM, 
		 $kondisiRumah, 
		 $kondisiFisik, 
		 $transportasi, 

		 $tamatanDari, 
		 $lamaBelajar, 
		 $noPesertaUAN, 
		 $noIjazahSMP, 
		 $noSKHUNSMP, 
		 $tglIjazahSMP, 
		 $tglSKHUNSMP
		 ){
		$conn = $this->dbconnect();
		$sql1 = 'UPDATE siswa SET nisn = "'.$nisn.'", namaSiswa = "'.$namaSiswa.'", jk = "'.$jk.'", tempatLahir = "'.$tempatLahirSiswa.'", tanggalLahir = "'.$tanggalLahirSiswa.'", agama = "'.$agamaSiswa.'", email = "'.$emailSiswa.'", hp = "'.$hpSiswa.'", telepon = "'.$teleponSiswa.'", pass = "'.$pass.'", anakKe = "'.$anakKe.'", bahasa = "'.$bahasa.'", jenisAnak = "'.$jenisAnak.'", jsa = "'.$jsa.'", jsk = "'.$jsk.'", jst = "'.$jst.'", kewarganegaraan = "'.$kewarganegaraanSiswa.'", thnAjaran = "'.$thnAjaranSiswa.'", status = "'.$statusSiswa.'" where nis = "'.$nis.'"';
		$sql2 = 'UPDATE kegemaran SET citacita = "'.$citacita.'", hobi = "'.$hobi.'", kesenian = "'.$kesenian.'", olahraga = "'.$olahraga.'", organisasi = "'.$organisasi.'", prestasi = "'.$prestasi.'" where nis = "'.$nis.'"';
		$sql3 = 'UPDATE filelampiran SET foto = "'.$foto.'", scanAkte = "'.$scanAkte.'", scanIjazah = "'.$scanIjazah.'", scanKIP = "'.$scanKIP.'", scanKK = "'.$scanKK.'", scanKPS = "'.$scanKPS.'", scanKTPOrtu = "'.$scanKTPOrtu.'", scanNISN = "'.$scanNISN.'", scanSKHUN = "'.$scanSKHUN.'", scanSKHUS = "'.$scanSKHUS.'", scanSuratKet = "'.$scanSuratKet.'" where nis = "'.$nis.'"';
		
		$sql5 = 'UPDATE ketayah SET nama = "'.$namaAyah.'", agama = "'.$agamaAyah.'", alamat = "'.$alamatAyah.'", kewarganegaraan = "'.$kewarganegaraanAyah.'", noKTP = "'.$noKTPAyah.'", telepon = "'.$teleponAyah.'", pekerjaan = "'.$pekerjaanAyah.'", pendidikan = "'.$pendidikanAyah.'", penghasilan = "'.$penghasilanAyah.'", tglLahir = "'.$tglLahirAyah.'", tmptLahir = "'.$tmptLahirAyah.'", ketHidup = "'.$ketHidupAyah.'" where nis = "'.$nis.'"';
		$sql6 = 'UPDATE ketibu SET nama = "'.$namaIbu.'", agama = "'.$agamaIbu.'", alamat = "'.$alamatIbu.'", kewarganegaraan = "'.$kewarganegaraanIbu.'", noKTP = "'.$noKTPIbu.'", telepon = "'.$teleponIbu.'", pekerjaan = "'.$pekerjaanIbu.'", pendidikan = "'.$pendidikanIbu.'", penghasilan = "'.$penghasilanIbu.'", tglLahir = "'.$tglLahirIbu.'", tmptLahir = "'.$tmptLahirIbu.'", ketHidup = "'.$ketHidupIbu.'" where nis = "'.$nis.'"';
		$sql7 = 'UPDATE ketwali SET nama = "'.$namaWali.'", agama = "'.$agamaWali.'", alamat = "'.$alamatWali.'", kewarganegaraan = "'.$kewarganegaraanWali.'", noKTP = "'.$noKTPWali.'", telepon = "'.$teleponWali.'", pekerjaan = "'.$pekerjaanWali.'", pendidikan = "'.$pendidikanWali.'", penghasilan = "'.$penghasilanWali.'", tglLahir = "'.$tglLahirWali.'", tmptLahir = "'.$tmptLahirWali.'" where nis = "'.$nis.'"';
		$sql8 = 'UPDATE ketkesehatan SET berat = "'.$berat.'", tinggi = "'.$tinggi.'", golDarah = "'.$golDarah.'", kelainan = "'.$kelainan.'", rPenyakit = "'.$rPenyakit.'" where nis = "'.$nis.'"';
		$sql9 = 'UPDATE ketkompetensi SET bsCode = "'.$bsCode.'", kkCode = "'.$kkCode.'", psCode = "'.$psCode.'" where nis = "'.$nis.'"';
		$sql11 = 'UPDATE kettmpttinggal SET alamat = "'.$alamatSiswa.'", jarak = "'.$jarakSiswa.'", kabupaten = "'.$kabupatenSiswa.'", kecamatan = "'.$kecamatanSiswa.'", kelurahan = "'.$kelurahanSiswa.'", provinsi = "'.$provinsiSiswa.'", rt = "'.$rt.'", rw = "'.$rw.'", tinggalDgn = "'.$tinggalDgn.'", alamatM = "'.$alamatM.'", kecamatanM = "'.$kecamatanM.'", kabupatenM = "'.$kabupatenM.'", kondisiRumah = "'.$kondisiRumah.'", kondisiFisik = "'.$kondisiFisik.'", transportasi = "'.$transportasi.'" where nis = "'.$nis.'"';
		$sql12 = 'UPDATE rpendidikan SET tamatanDari = "'.$tamatanDari.'",lamaBelajar = "'.$lamaBelajar.'", noPesertaUAN = "'.$noPesertaUAN.'", noIjazah = "'.$noIjazahSMP.'", noSKHUN = "'.$noSKHUNSMP.'", tglIjazah = "'.$tglIjazahSMP.'", tglSKHUN = "'.$tglSKHUNSMP.'" where nis = "'.$nis.'"';
        // print_r($sql1);
        // print_r($sql2);
        // print_r($sql3);
        // print_r($sql5);
        // print_r($sql6);
        // print_r($sql7);
        // print_r($sql8);
        // print_r($sql9);
        // print_r($sql11);
        // print_r($sql12);

        // die();

        mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        mysqli_query($conn, $sql5);
        mysqli_query($conn, $sql6);
        mysqli_query($conn, $sql7);
        mysqli_query($conn, $sql8);
        mysqli_query($conn, $sql9);
        mysqli_query($conn, $sql11);
        mysqli_query($conn, $sql12);
    }

////////KUOTAJURUSAN/////////

    function tampilkuota(){
        $con = $this->dbconnect();
        $sql = "select * from kuotajurusan";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

     function tampilidkt() {
		$date = date('dmHi');
		$id = "KT".$date;
		return $id;
	}

    function tampildetailkuota($id){
		$con = $this->dbconnect();
		$sql = "select * from ".$this->table3.' where idKuota = "'.$id.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }


////////PINDAHAN/////////
    function tampilpindahan(){
        $con = $this->dbconnect();
        $sql = "SELECT 
        siswa.nis, 
        siswa.nisn, 
        siswa.namaSiswa, 
        siswa.jk, 
        siswa.tempatLahir, 
        siswa.tanggalLahir, 
        siswa.agama, 
        siswa.email, 
        siswa.hp, 
        siswa.telepon, 
        siswa.pass, 
        siswa.anakKe, 
        siswa.bahasa, 
        siswa.jenisAnak, 
        siswa.jsa, 
        siswa.jsk, 
        siswa.jst, 
        siswa.kewarganegaraan, 
        siswa.thnAjaran, 
        siswa.status, 

        filelampiran.foto, 
        filelampiran.scanAkte, 
        filelampiran.scanIjazah, 
        filelampiran.scanKIP, 
        filelampiran.scanKK, 
        filelampiran.scanKPS, 
        filelampiran.scanKTPOrtu, 
        filelampiran.scanNISN, 
        filelampiran.scanSKHUN, 
        filelampiran.scanSKHUS, 
        filelampiran.scanSuratKet, 

        kegemaran.citacita, 
        kegemaran.hobi, 
        kegemaran.kesenian, 
        kegemaran.olahraga, 
        kegemaran.organisasi, 

        ketakhirsiswa.tglKeluar, 
        ketakhirsiswa.alasan, 
        ketakhirsiswa.noIjazah, 
        ketakhirsiswa.noSKHUN, 
        ketakhirsiswa.tglIjazah, 
        ketakhirsiswa.tglSKHUN, 
        ketakhirsiswa.tahunLulus, 

        ketayah.nama as namaAyah, 
        ketayah.agama as agamaAyah, 
        ketayah.alamat as alamatAyah, 
        ketayah.kewarganegaraan as kewarganegaraanAyah, 
        ketayah.noKTP as noKTPAyah, 
        ketayah.telepon as teleponAyah, 
        ketayah.pekerjaan as pekerjaanAyah, 
        ketayah.pendidikan as pendidikanAyah, 
        ketayah.penghasilan as penghasilanAyah, 
        ketayah.tglLahir as tglLahirAyah, 
        ketayah.tmptLahir as tmptLahirAyah, 
        ketayah.ketHidup as ketHidupAyah, 

        ketibu.nama as namaIbu, 
        ketibu.agama as agamaIbu, 
        ketibu.alamat as alamatIbu, 
        ketibu.kewarganegaraan as kewarganegaraanIbu, 
        ketibu.noKTP as nnoKTPIbu, 
        ketibu.telepon as teleponIbu, 
        ketibu.pekerjaan as pekerjaanIbu, 
        ketibu.pendidikan as pendidikanIbu, 
        ketibu.penghasilan as penghasilanIbu, 
        ketibu.tglLahir as tglLahirIbu, 
        ketibu.tmptLahir as tmptLahirIbu, 
        ketibu.ketHidup as ketHidupIbu, 

        ketwali.nama as namaWali, 
        ketwali.agama as agamaWali, 
        ketwali.alamat as alamatWali, 
        ketwali.kewarganegaraan as kewarganegaraanWali, 
        ketwali.noKTP as noKTPWali, 
        ketwali.telepon as teleponWali, 
        ketwali.pekerjaan as pekerjaanWali, 
        ketwali.pendidikan as pendidikanWali, 
        ketwali.penghasilan as penghasilanWali, 
        ketwali.tglLahir as tglLahirWali, 
        ketwali.tmptLahir as tmptLahirWali, 

        ketkesehatan.berat, 
        ketkesehatan.tinggi, 
        ketkesehatan.golDarah, 
        ketkesehatan.kelainan, 
        ketkesehatan.rPenyakit, 

        ketkompetensi.bsCode, 
        ketkompetensi.kkCode, 
        ketkompetensi.psCode, 

        ketlulus.kelanjutan, 
        ketlulus.namaInstansi, 
        ketlulus.penghasilan, 
        ketlulus.tglMulai, 

        ketpindahan.alasan as alasanpindah, 
        ketpindahan.dariSekolah, 

        kettmpttinggal.alamat, 
        kettmpttinggal.jarak, 
        kettmpttinggal.kabupaten, 
        kettmpttinggal.kecamatan, 
        kettmpttinggal.kelurahan,
        kettmpttinggal.provinsi, 
        kettmpttinggal.rt, 
        kettmpttinggal.rw, 
        kettmpttinggal.tinggalDgn, 
        kettmpttinggal.alamatM, 
        kettmpttinggal.kabupatenM, 
        kettmpttinggal.kecamatanM, 
        kettmpttinggal.kondisiRumah,
        kettmpttinggal.kondisiFisik,
        kettmpttinggal.transportasi,

        rpendidikan.tamatanDari, 
        rpendidikan.lamaBelajar, 
        rpendidikan.noPesertaUAN, 
        rpendidikan.noIjazah as noIjazahSMP, 
        rpendidikan.noSKHUN as noSKHUNSMP, 
        rpendidikan.tglIjazah as tglIjazahSMP, 
        rpendidikan.tglSKHUN as tglSKHUNSMP 
        FROM `siswa` 
			LEFT JOIN kettmpttinggal on kettmpttinggal.nis = siswa.nis 
			LEFT JOIN ketayah on ketayah.nis = siswa.nis 
			LEFT JOIN ketibu on ketibu.nis = siswa.nis 
			LEFT JOIN ketwali on ketwali.nis = siswa.nis
			LEFT JOIN kegemaran on kegemaran.nis = siswa.nis
			LEFT JOIN filelampiran on filelampiran.nis = siswa.nis
			LEFT JOIN ketakhirsiswa on ketakhirsiswa.nis = siswa.nis
			LEFT JOIN ketkesehatan on ketkesehatan.nis = siswa.nis
			LEFT JOIN ketkompetensi on ketkompetensi.nis = siswa.nis
			LEFT JOIN ketlulus on ketlulus.nis = siswa.nis
			LEFT JOIN ketpindahan on ketpindahan.nis = siswa.nis
			LEFT JOIN rpendidikan on rpendidikan.nis = siswa.nis where not ketpindahan.dariSekolah = '' ";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

////////AKHIRSISWA/////////
    function tampilakhirsiswa(){
        $con = $this->dbconnect();
        $sql = "SELECT 
        siswa.nis, 
        siswa.nisn, 
        siswa.namaSiswa, 
        siswa.jk, 
        siswa.tempatLahir, 
        siswa.tanggalLahir, 
        siswa.agama, 
        siswa.email, 
        siswa.hp, 
        siswa.telepon, 
        siswa.pass, 
        siswa.anakKe, 
        siswa.bahasa, 
        siswa.jenisAnak, 
        siswa.jsa, 
        siswa.jsk, 
        siswa.jst, 
        siswa.kewarganegaraan, 
        siswa.kodeJurusan, 
        siswa.thnAjaran, 
        siswa.status, 

        filelampiran.foto, 
        filelampiran.scanAkte, 
        filelampiran.scanIjazah, 
        filelampiran.scanKIP, 
        filelampiran.scanKK, 
        filelampiran.scanKPS, 
        filelampiran.scanKTPOrtu, 
        filelampiran.scanNISN, 
        filelampiran.scanSKHUN, 
        filelampiran.scanSKHUS, 
        filelampiran.scanSuratKet, 

        kegemaran.citacita, 
        kegemaran.hobi, 
        kegemaran.kesenian, 
        kegemaran.olahraga, 
        kegemaran.organisasi, 

        ketakhirsiswa.tglKeluar, 
        ketakhirsiswa.alasan, 
        ketakhirsiswa.noIjazah, 
        ketakhirsiswa.noSKHUN, 
        ketakhirsiswa.tglIjazah, 
        ketakhirsiswa.tglSKHUN, 
        ketakhirsiswa.tahunLulus, 

        ketayah.nama as namaAyah, 
        ketayah.agama as agamaAyah, 
        ketayah.alamat as alamatAyah, 
        ketayah.kewarganegaraan as kewarganegaraanAyah, 
        ketayah.noKTP as noKTPAyah, 
        ketayah.telepon as teleponAyah, 
        ketayah.pekerjaan as pekerjaanAyah, 
        ketayah.pendidikan as pendidikanAyah, 
        ketayah.penghasilan as penghasilanAyah, 
        ketayah.tglLahir as tglLahirAyah, 
        ketayah.tmptLahir as tmptLahirAyah, 
        ketayah.ketHidup as ketHidupAyah, 

        ketibu.nama as namaIbu, 
        ketibu.agama as agamaIbu, 
        ketibu.alamat as alamatIbu, 
        ketibu.kewarganegaraan as kewarganegaraanIbu, 
        ketibu.noKTP as nnoKTPIbu, 
        ketibu.telepon as teleponIbu, 
        ketibu.pekerjaan as pekerjaanIbu, 
        ketibu.pendidikan as pendidikanIbu, 
        ketibu.penghasilan as penghasilanIbu, 
        ketibu.tglLahir as tglLahirIbu, 
        ketibu.tmptLahir as tmptLahirIbu, 
        ketibu.ketHidup as ketHidupIbu, 

        ketwali.nama as namaWali, 
        ketwali.agama as agamaWali, 
        ketwali.alamat as alamatWali, 
        ketwali.kewarganegaraan as kewarganegaraanWali, 
        ketwali.noKTP as noKTPWali, 
        ketwali.telepon as teleponWali, 
        ketwali.pekerjaan as pekerjaanWali, 
        ketwali.pendidikan as pendidikanWali, 
        ketwali.penghasilan as penghasilanWali, 
        ketwali.tglLahir as tglLahirWali, 
        ketwali.tmptLahir as tmptLahirWali, 

        ketkesehatan.berat, 
        ketkesehatan.tinggi, 
        ketkesehatan.golDarah, 
        ketkesehatan.kelainan, 
        ketkesehatan.rPenyakit, 

        ketlulus.kelanjutan, 
        ketlulus.namaInstansi, 
        ketlulus.penghasilan, 
        ketlulus.tglMulai, 

        ketpindahan.alasan, 
        ketpindahan.dariSekolah, 

        kettmpttinggal.alamat, 
        kettmpttinggal.jarak, 
        kettmpttinggal.kabupaten, 
        kettmpttinggal.kecamatan, 
        kettmpttinggal.kelurahan,
        kettmpttinggal.provinsi, 
        kettmpttinggal.rt, 
        kettmpttinggal.rw, 
        kettmpttinggal.tinggalDgn, 
        kettmpttinggal.alamatM, 
        kettmpttinggal.kabupatenM, 
        kettmpttinggal.kecamatanM, 
        kettmpttinggal.kondisiRumah,
        kettmpttinggal.kondisiFisik,
        kettmpttinggal.transportasi,

        rpendidikan.tamatanDari, 
        rpendidikan.lamaBelajar, 
        rpendidikan.noPesertaUAN, 
        rpendidikan.noIjazah as noIjazahSMP, 
        rpendidikan.noSKHUN as noSKHUNSMP, 
        rpendidikan.tglIjazah as tglIjazahSMP, 
        rpendidikan.tglSKHUN as tglSKHUNSMP 
        FROM `siswa` 
			LEFT JOIN kettmpttinggal on kettmpttinggal.nis = siswa.nis 
			LEFT JOIN ketayah on ketayah.nis = siswa.nis 
			LEFT JOIN ketibu on ketibu.nis = siswa.nis 
			LEFT JOIN ketwali on ketwali.nis = siswa.nis
			LEFT JOIN kegemaran on kegemaran.nis = siswa.nis
			LEFT JOIN filelampiran on filelampiran.nis = siswa.nis
			LEFT JOIN ketakhirsiswa on ketakhirsiswa.nis = siswa.nis
			LEFT JOIN ketkesehatan on ketkesehatan.nis = siswa.nis
			LEFT JOIN ketlulus on ketlulus.nis = siswa.nis
			LEFT JOIN ketpindahan on ketpindahan.nis = siswa.nis
			LEFT JOIN rpendidikan on rpendidikan.nis = siswa.nis where not ketakhirsiswa.tglKeluar = '' ";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }


////////AKHIRSISWA/////////
    function tampillulus(){
        $con = $this->dbconnect();
        $sql = "SELECT 
        siswa.nis, 
        siswa.nisn, 
        siswa.namaSiswa, 
        siswa.jk, 
        siswa.tempatLahir, 
        siswa.tanggalLahir, 
        siswa.agama, 
        siswa.email, 
        siswa.hp, 
        siswa.telepon, 
        siswa.pass, 
        siswa.anakKe, 
        siswa.bahasa, 
        siswa.jenisAnak, 
        siswa.jsa, 
        siswa.jsk, 
        siswa.jst, 
        siswa.kewarganegaraan, 
        siswa.thnAjaran, 
        siswa.status, 

        filelampiran.foto, 
        filelampiran.scanAkte, 
        filelampiran.scanIjazah, 
        filelampiran.scanKIP, 
        filelampiran.scanKK, 
        filelampiran.scanKPS, 
        filelampiran.scanKTPOrtu, 
        filelampiran.scanNISN, 
        filelampiran.scanSKHUN, 
        filelampiran.scanSKHUS, 
        filelampiran.scanSuratKet, 

        kegemaran.citacita, 
        kegemaran.hobi, 
        kegemaran.kesenian, 
        kegemaran.olahraga, 
        kegemaran.organisasi, 

        ketakhirsiswa.tglKeluar, 
        ketakhirsiswa.alasan, 
        ketakhirsiswa.noIjazah, 
        ketakhirsiswa.noSKHUN, 
        ketakhirsiswa.tglIjazah, 
        ketakhirsiswa.tglSKHUN, 
        ketakhirsiswa.tahunLulus, 

        ketayah.nama as namaAyah, 
        ketayah.agama as agamaAyah, 
        ketayah.alamat as alamatAyah, 
        ketayah.kewarganegaraan as kewarganegaraanAyah, 
        ketayah.noKTP as noKTPAyah, 
        ketayah.telepon as teleponAyah, 
        ketayah.pekerjaan as pekerjaanAyah, 
        ketayah.pendidikan as pendidikanAyah, 
        ketayah.penghasilan as penghasilanAyah, 
        ketayah.tglLahir as tglLahirAyah, 
        ketayah.tmptLahir as tmptLahirAyah, 
        ketayah.ketHidup as ketHidupAyah, 

        ketibu.nama as namaIbu, 
        ketibu.agama as agamaIbu, 
        ketibu.alamat as alamatIbu, 
        ketibu.kewarganegaraan as kewarganegaraanIbu, 
        ketibu.noKTP as nnoKTPIbu, 
        ketibu.telepon as teleponIbu, 
        ketibu.pekerjaan as pekerjaanIbu, 
        ketibu.pendidikan as pendidikanIbu, 
        ketibu.penghasilan as penghasilanIbu, 
        ketibu.tglLahir as tglLahirIbu, 
        ketibu.tmptLahir as tmptLahirIbu, 
        ketibu.ketHidup as ketHidupIbu, 

        ketwali.nama as namaWali, 
        ketwali.agama as agamaWali, 
        ketwali.alamat as alamatWali, 
        ketwali.kewarganegaraan as kewarganegaraanWali, 
        ketwali.noKTP as noKTPWali, 
        ketwali.telepon as teleponWali, 
        ketwali.pekerjaan as pekerjaanWali, 
        ketwali.pendidikan as pendidikanWali, 
        ketwali.penghasilan as penghasilanWali, 
        ketwali.tglLahir as tglLahirWali, 
        ketwali.tmptLahir as tmptLahirWali, 

        ketkesehatan.berat, 
        ketkesehatan.tinggi, 
        ketkesehatan.golDarah, 
        ketkesehatan.kelainan, 
        ketkesehatan.rPenyakit, 

        ketkompetensi.bsCode, 
        ketkompetensi.kkCode, 
        ketkompetensi.psCode, 

        ketlulus.kelanjutan, 
        ketlulus.namaInstansi, 
        ketlulus.penghasilan, 
        ketlulus.tglMulai, 

        ketpindahan.alasan as alasanpindah, 
        ketpindahan.dariSekolah, 

        kettmpttinggal.alamat, 
        kettmpttinggal.jarak, 
        kettmpttinggal.kabupaten, 
        kettmpttinggal.kecamatan, 
        kettmpttinggal.kelurahan,
        kettmpttinggal.provinsi, 
        kettmpttinggal.rt, 
        kettmpttinggal.rw, 
        kettmpttinggal.tinggalDgn, 
        kettmpttinggal.alamatM, 
        kettmpttinggal.kabupatenM, 
        kettmpttinggal.kecamatanM, 
        kettmpttinggal.kondisiRumah,
        kettmpttinggal.kondisiFisik,
        kettmpttinggal.transportasi,

        rpendidikan.tamatanDari, 
        rpendidikan.lamaBelajar, 
        rpendidikan.noPesertaUAN, 
        rpendidikan.noIjazah as noIjazahSMP, 
        rpendidikan.noSKHUN as noSKHUNSMP, 
        rpendidikan.tglIjazah as tglIjazahSMP, 
        rpendidikan.tglSKHUN as tglSKHUNSMP 
        FROM `siswa` 
			LEFT JOIN kettmpttinggal on kettmpttinggal.nis = siswa.nis 
			LEFT JOIN ketayah on ketayah.nis = siswa.nis 
			LEFT JOIN ketibu on ketibu.nis = siswa.nis 
			LEFT JOIN ketwali on ketwali.nis = siswa.nis
			LEFT JOIN kegemaran on kegemaran.nis = siswa.nis
			LEFT JOIN filelampiran on filelampiran.nis = siswa.nis
			LEFT JOIN ketakhirsiswa on ketakhirsiswa.nis = siswa.nis
			LEFT JOIN ketkesehatan on ketkesehatan.nis = siswa.nis
			LEFT JOIN ketkompetensi on ketkompetensi.nis = siswa.nis
			LEFT JOIN ketlulus on ketlulus.nis = siswa.nis
			LEFT JOIN ketpindahan on ketpindahan.nis = siswa.nis
			LEFT JOIN rpendidikan on rpendidikan.nis = siswa.nis where not ketlulus.kelanjutan = '' ";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }


////////DAFTARULANGPS/////////

	function tampildups(){
        $con = $this->dbconnect();

	    $db = new Kesiswaan();
	    $kuotaps = $db->jumlahkuotaps();
	    $jumlah = $kuotaps[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'PS' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

    function jumlahkuotaps(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'PS'";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function getdetailps($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

////////DAFTARULANGUPW/////////

	function tampilduupw(){
        $con = $this->dbconnect();

	    $db = new Kesiswaan();
	    $kuotapw = $db->jumlahkuotapw();
	    $jumlah = $kuotapw[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'upw' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

    function jumlahkuotapw(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'upw'";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function getdetailupw($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

        return $hasil;
        
    }

////////DAFTARULANGAP/////////

    function tampilduap(){
        $con = $this->dbconnect();

        $db = new Kesiswaan();
        $kuotaap = $db->jumlahkuotaap();
        $jumlah = $kuotaap[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'ap' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

    function jumlahkuotaap(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'ap'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function getdetailap($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

////////DAFTARULANGKPR/////////

    function tampildukpr(){
        $con = $this->dbconnect();

        $db = new Kesiswaan();
        $kuotakpr = $db->jumlahkuotakpr();
        $jumlah = $kuotakpr[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'kpr' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

    function jumlahkuotakpr(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'kpr'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function getdetailkpr($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

////////DAFTARULANGJSB/////////

    function tampildujsb(){
        $con = $this->dbconnect();

        $db = new Kesiswaan();
        $kuotajsb = $db->jumlahkuotajsb();
        $jumlah = $kuotajsb[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'jsb' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

    function jumlahkuotajsb(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'jsb'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function getdetailjsb($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

////////DAFTARULANGTKJ/////////

    function tampildutkj(){
        $con = $this->dbconnect();

        $db = new Kesiswaan();
        $kuotatkj = $db->jumlahkuotatkj();
        $jumlah = $kuotatkj[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'tkj' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

    function jumlahkuotatkj(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'tkj'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function getdetailtkj($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

////////DAFTARULANGSTI/////////

    function tampildusti(){
        $con = $this->dbconnect();

        $db = new Kesiswaan();
        $kuotasti = $db->jumlahkuotasti();
        $jumlah = $kuotasti[0]['kuota'];
        $sql = "SELECT *, kuotajurusan.kuota as kuota FROM `pendaftaran` LEFT JOIN kuotajurusan on kuotajurusan.kodeJurusan = pendaftaran.jurusan WHERE jurusan = 'sti' AND status != 'Seleksi' ORDER BY status DESC LIMIT ".$jumlah;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }

    function jumlahkuotasti(){
        $con = $this->dbconnect();
        $sql = "select kuota from kuotajurusan where kodeJurusan = 'sti'";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function getdetailsti($nisn){
        $con = $this->dbconnect();
        $sql = "SELECT * FROM `pendaftaran` WHERE nisn=".$nisn;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
        
    }



}
?>
