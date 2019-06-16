<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/jurnal.php");

$jurnal = new jurnal();
$cetak = $jurnal->cetakjurnalperkelas2($_GET['kelas'], $_GET['tgl']);

$hitung = $jurnal->jumlahsiswaperkelas($_GET['kelas']);

$content = '<!DOCTYPE html>
<html>
<head>
  <title>Jurnal Harian Kelas</title>
</head>
<body>
<table style="width: 100%; text-align: center; font-size: 14px;">
  <tr>
    <td style="width: 7%" rowspan="4">
      <img src="C:\xampp\htdocs\sissmkn2\images\logo_smk2.png" alt="Logo" width="80" height="78">
    </td>
    <td style="width: 93%">
      Jurnal Harian Kelas 
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
<h4 style="text-align: center;">JURNAL HARIAN KELAS</h4>
<table style="width: 80%; padding: 0px 100px;">';
  $kelas = $_GET['kelas'];

  $date = $_POST['tgl'];  
  $tgl = date_create($date);
  $hasil = date_format($tgl,"Y-m-d");

$content.='
  <tr>
    <td style="width: 12.5%">Kelas</td>
    <td style="width: 12.5%">:  '.$kelas.'</td>
  </tr>
  <tr>
    <td style="width: 12.5%">Tanggal</td>
    <td style="width: 12.5%">:  '.$hasil.'</td>
  </tr>';
  $content.='
</table>
<table border="1" align="center" style="width: 700px">
  <thead style="text-align: center;">
    <tr style="background-color: #faba97;">
      <th>No Jurnal</th>
      <th>Guru</th>
      <th>Kegiatan</th>
      <th style="width: 50px">Jam Mulai</th>
      <th style="width: 50px">Jam Selesai</th>
      <th>Selesai/Belum</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>';
      foreach ($cetak as $item) {
      $decodeidjurnal = base64_decode($item['id_jurnal']);
      $content.='
      
                    <tr>
                        <td>'.$decodeidjurnal.'</td>
                        <td>'.$item['nama'].'</td>
                        <td>'.$item['kegiatan'].'</td>
                        <td>'.$item['jam_mulai'].'</td>
                        <td>'.$item['jam_selesai'].'</td>
                        <td>'.$item['sdh_blm'].'</td>
                        <td>'.$item['ket'].'</td>
                    </tr>
                    ';
    }
$content.='</tbody>
</table><br>
<p style="padding: 0px 70px;">Keterangan</p><br>
<table style="width: 100%; padding: 0px 100px;">';
foreach ($hitung as $itemm) {
$content.='
  <tr>
    <td style="width: 12.5%">Jumlah Siswa</td>
    <td style="width: 12.5%">:  '.$itemm['total'].'</td>
  </tr>
  <tr>
    <td style="width: 12.5%">Masuk</td>
    <td style="width: 12.5%">:  '.$itemm['total'].'</td>
  </tr>
  <tr>
    <td style="width: 12.5%">Ijin</td>
    <td style="width: 12.5%">:  0</td>
  </tr>
  <tr>
    <td style="width: 12.5%">Sakit</td>
    <td style="width: 12.5%">:  0</td>
  </tr>
  <tr>
    <td style="width: 12.5%">Alpa</td>
    <td style="width: 12.5%">:  0</td>
  </tr>';
}
  $content.='
</table>
</body>
</html>';


require_once('../../html2pdf/html2pdf.class.php');
try {
  $html2pdf = new HTML2PDF('L','A4','en', false, 'ISO-8859-15');
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->WriteHTML($content, isset($_GET['vuehtml']));
  ob_end_clean();
  $html2pdf->Output('jurnalhariankelas.pdf');
} catch(HTML2PDF_exception $e) {
  echo $e;
}
        
        
        

?>

