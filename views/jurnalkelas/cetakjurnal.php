<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$conn = new jurnal();
$panggil = $conn->tampiljurnal();

$content = '<!DOCTYPE html>
<html>
<head>
	<title>Data Jurnal Harian Kelas</title>
</head>
<body>
<table style="width: 100%; text-align: center; font-size: 14px;">
	<tr>
		<td style="width: 7%" rowspan="4">
			<img src="logo_smk2.png" alt="Logo" width="80" height="78">
		</td>
		<td style="width: 93%">
			JURNAL HARIAN KELAS
		</td>
	</tr>
	<tr>
		<td style="font-size: 20px; font-weight: bold;">
			SMK NEGERI 2 MALANG
		</td>
	</tr>
	<tr>
		<td style="font-size: 12px;">
			Jl. Veteran No. 17 Malang, Telp. (0341)551504, Faks. (0341)551504 Malang 65145
		</td>
	</tr>
	<tr>
		<td style="font-size: 12px;">
			Website : http://www.smkn2malang.sch.id | Email : smkn2malang@gmail.com
		</td>
	</tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
</table><br>
<table border="1" align="center">
	<thead style="text-align: center;">
		<tr style="background-color: #faba97;">
			<th>No</th>
			<th>No Jurnal</th>
			<th>NIP</th>
			<th>Guru</th>
			<th>Hari</th>
			<th>Tanggal</th>
			<th>Kelas</th>
			<th>Jam Mulai</th>
			<th>Jam Selesai</th>
			<th>Kegiatan</th>
		</tr>
	</thead>
	<tbody>';
		$no = 1;
		foreach ($panggil as $item) {
			$decodeidjurnal = base64_decode($item['id_jurnal']);
			$content.='
                    <tr>
                        <td scope="row">'.$no++.'</td>
                        <td>'.$decodeidjurnal.'</td>
                        <td>'.$item['nip'].'</td>
                        <td>'.$item['nama'].'</td>
                        <td>'.$item['hari'].'</td>
                        <td>'.$item['tgl'].'</td>
                        <td>'.$item['kelas'].'</td>
                        <td>'.$item['jam_mulai'].'</td>
                        <td>'.$item['jam_selesai'].'</td>
                        <td>'.$item['kegiatan'].'</td>
                    </tr>
                    ';
		}
$content.='</tbody>
</table>
</body>
</html>';

ob_start();
require_once('../../html2pdf/html2pdf.class.php');
try {
	$html2pdf = new HTML2PDF('L','A4','en', false, 'ISO-8859-15');
	$html2pdf->WriteHTML($content, isset($_GET['vuehtml']));
	ob_end_clean();
	$html2pdf->Output('Jurnal Kelas.pdf');
} catch(HTML2PDF_exception $e) {
	echo $e;
}
        
        
        

?>

