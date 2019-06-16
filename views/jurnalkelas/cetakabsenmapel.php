<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/absensimapel.php");

$absenmapel = new absensimapel();

//tampil data
error_reporting(E_ALL ^ (E_NOTICE  | E_WARNING));
$call = $absenmapel->cetakabsenmapel($_GET['idabsenmapel']);
//tampil data

$content = '<!DOCTYPE html>
<html>
<head>
  <title>Pendataan Wali Kelas</title>
</head>
<body>
  <table style="width: 100%; text-align: center; font-size: 14px;">
  <tr>
    <td style="width: 7%" rowspan="4">
      <img src="C:\xampp\htdocs\sissmkn2\images\logo_smk2.png" alt="Logo" width="80" height="78">
    </td>
    <td style="width: 93%">
      SURAT PENUGASAN
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
  <h4 style="text-align: center;">SURAT IJIN MASUK / MENINGGALKAN KELAS</h4>
  <p style="padding: 0px 100px;">Diberitahukan dengan hormat bahwa siswa berikut ini untuk diijinkan masuk / meninggalkan kelas.</p>
  <table border="0" align="center" style="width: 100%; padding: 0px 0px 0px 150px;" >
  '; foreach ($call as $item) {
    $content.='
    <tr>
      <td style="width: 3.5%">1.</td>
      <td style="width: 25%">No Induk Siswa</td>
      <td style="width: 48.75%">: '.$item['no_induk'].'</td>
    </tr>
    <tr>
      <td style="width: 3.5%">2.</td>
      <td style="width: 25%">Nama</td>
      <td style="width: 48.75%">: '.$item['nama'].'</td>
    </tr>
    <tr>
      <td style="width: 3.5%">3.</td>
      <td style="width: 25%">Kelas</td>
      <td style="width: 48.75%">: '.$item['kelas'].'</td>
    </tr>
    <tr>
      <td style="width: 3.5%">4.</td>
      <td style="width: 25%">Pelajaran</td>
      <td style="width: 48.75%">: '.$item['pelajaran'].'</td>
    </tr>
    <tr>
      <td style="width: 3.5%">5.</td>
      <td style="width: 25%">Status Absen</td>
      <td style="width: 48.75%">: '.$item['stabsen2'].'</td>
    </tr>
    <tr>
      <td style="width: 3.5%">6.</td>
      <td style="width: 25%">Alasan</td>
      <td style="width: 48.75%">: '.$item['alasan'].'</td>
    </tr>
  </table>
  <p style="padding: 0px 500px;"></p>
  <br>
 <table border="0" align="center" style="width: 50%;">
    <tr>
      <td style="width: 90%"></td>
      <td style="width: 55%">Malang, '.$item['tglabsen'].'</td>
    </tr> 
  </table>
  <p style="padding: 0px 45px;"></p>
  <p style="padding: 40px 45px;"></p>
  <p style="padding: -130px 470px;">Guru Piket</p>
  <p style="padding: 165px 470px;">NIP. '.$item['nip'].'</p>'; }
    $content.='
</body>
</html>';

require_once('../../html2pdf/html2pdf.class.php');
try {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15');
  $html2pdf->WriteHTML($content, isset($_GET['vuehtml']));
  ob_end_clean();
  $html2pdf->Output('DataBeasiswa_'.$item['nama'].'.pdf');
} catch(HTML2PDF_exception $e) {
  echo $e;
}
?>