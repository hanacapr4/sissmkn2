<?php

class t_prakerin_siswa extends Database {
    var $table = 't_prakerin_siswa';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
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

function tampilidprs() {
        $date = date('dmHi');
        $id = "PRS".$date;
        return $id;
    }

    function inserttbl_pendaftaran_prakerin($id_siswa_prakerin, $id_tmp_prakerin, $id_pembimbing, $no_induk, $nama_prakerin, $alamat_prakerin, $pembimbing, $nip, $lama_bln, $tgl_start, $tgl_akhir, $tapel, $kelas, $prakerinke, $program) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_siswa_prakerin.'", "'.$id_tmp_prakerin.'", "'.$id_pembimbing.'", "'.$no_induk.'", "'.$nama_prakerin.'", "'.$alamat_prakerin.'", "'.$pembimbing.'", "'.$nip.'", "'.$lama_bln.'", "'.$tgl_start.'", "'.$tgl_akhir.'", "'.$tapel.'", "'.$kelas.'", "'.$prakerinke.'", "'.$program.'")';
        $query = mysqli_query($con,$sql);
    }
    function getdetail_pendaftaran_prakerin($id_siswa_prakerin){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_siswa_prakerin = "'.$id_siswa_prakerin.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

   function updatetbl_perusahaan($id_siswa_prakerin, $id_tmp_prakerin, $id_pembimbing, $no_induk, $nama_prakerin, $alamat_prakerin, $pembimbing, $nip, $lama_bln, $tgl_start, $tgl_akhir, $tapel, $kelas, $prakerinke, $program)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_tmp_prakerin="'.$id_tmp_prakerin.'", id_pembimbing="'.$id_pembimbing.'", no_induk="'.$no_induk.'", nama_prakerin="'.$nama_prakerin.'", alamat_prakerin="'.$alamat_prakerin.'", pembimbing="'.$pembimbing.'", nip="'.$nip.'", lama_bln="'.$lama_bln.'", tgl_start="'.$tgl_start.'", tgl_akhir="'.$tgl_akhir.'", tapel="'.$tapel.'", kelas="'.$kelas.'", prakerinke="'.$prakerinke.'", program="'.$program.'"  where id_siswa_prakerin= "'.$id_siswa_prakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

   function deletetbl_perusahaan($id_siswa_prakerin)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_siswa_prakerin = "'.$id_siswa_prakerin.'"';
        $query = mysqli_query($con,$sql);
    }
}
    ?>