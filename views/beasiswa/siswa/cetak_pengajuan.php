<?php  
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$db = new Beasiswa();
?>
<html>
<head>
  <title>Cetak Daftar Pengajuan Beasiswa</title>
  <style type="text/css" media="print">
  @page { size: landscape; }
  </style>
</head>
<body onload="window.print()">
<h2><center>Daftar Garansi</center></h2>
<center><table border="1">
            <thead>
              <tr>
                <th>ID Garansi</th>
                <th>Judul PO</th>
                <th>ID Customer</th>
              </tr>    
            </thead>
            <tbody> 
              <?php
              foreach($db->tampilaju() as $item){
              ?>
              <tr>
                <td><?php echo $item['idBea']; ?></td>
                <td><?php echo $item['namaWali']; ?></td>
                <td><?php echo $item['alamatWali']; ?></td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table></center>
</body>

</html>