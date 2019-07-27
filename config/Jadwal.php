     <?php

class Jadwal extends Database {
    var $table = 'guru';

    function select_guru() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }
    function select_hari() {
        $con = $this->dbconnect();
        $sql = "select * from hari";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
    function select_mapel() {
        $con = $this->dbconnect();
        $sql = "select * from mata_pelajaran ";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
     function select_jam() {
        $con = $this->dbconnect();
        $sql = "select * from jadwal ";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;


}
}

?>