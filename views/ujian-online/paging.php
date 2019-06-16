<?php 
include '../koneksi.php';
class Pagination extends Koneksi{
	public function __construct(){
		parent::__construct();
	}

	public function getTableData($tableName, $page=1, $limit=20){
		$dataTable = array();
		$startRow = ($page-1)*$limit;
		$sql = 'SELECT * FROM "'.$tableName.'" LIMIT "'.$startRow.'", "'.$limit.'"';
		$query = $this->db->query($sql);

		while ($data=mysqli_fetch_assoc($query)) {
			array_push($dataTable, $data);
			return $dataTable;
		}
	}

	public function showPagination($tableName, $limit=20){
		$countTotalRow = 'SELECT COUNT(*) AS total FROM "'.$tableName.'"';
		$query = $this->db->query($countTotalRow);
		$queryResult = mysqli_fetch_assoc($query);
		$totalRow = $queryResult['result'];

		$totalPage = ceil($totalRow / $limit);
		$page = 1;
		while ($page <= $totalPage) {
			echo '<a href="?page='.$page.'&perPage='.$limit.'">'.$page.'</a>';
			if ($page < $totalPage) {
				echo " | ";

				$page++;
			}
		}
	}
}