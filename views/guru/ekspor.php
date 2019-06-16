<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$db = new Pengajuan();

if (!empty($_GET['azmulai']) AND !empty($_GET['azhingga']) AND !empty($_GET['azperiode'])) {
    foreach($db->tampilajuaz($_GET['azmulai'],$_GET['azhingga'],$_GET['azperiode']) as $item){
        $content = '<html>
        <body>
        <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$item['thnAjaran'].' </h5>
        <br>
        <table border="1">
        <thead style="text-align:center">
          <tr style="background-color:#faba97">
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>Alamat</th>
            <th>Pekerjaan Wali</th>
            <th>Penghasilan Wali</th>
            <th>Nomor HP Wali</th>
            <th>Pengajuan SPP</th>
            <th>Pengajuan SBPP</th>
          </tr>
        </thead>
        <tbody>
                    <tr>
                        <td>'.$item['nis'].'</td>
                        <td>'.$item['namaSiswa'].'</td>
                        <td>'.$item['psCode'].'</td>
                        <td>'.$item['kelas'].'</td>
                        <td>'.$item['namaWali'].'</td>
                        <td>'.$item['alamatWali'].'</td>
                        <td>'.$item['pekerjaanWali'].'</td>
                        <td>'.$item['penghasilanWali'].'</td>
                        <td>'.$item['noHPWali'].'</td>
                        <td>'.$item['pengajuanSpp'].'</td>
                        <td>'.$item['pengajuanSbpp'].'</td>
                    </tr>
        </tbody>
        </table>
        </body>
        </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('coba.pdf');

    }
}else if (!empty($_GET['zamulai']) AND !empty($_GET['zahingga']) AND !empty($_GET['zaperiode'])) {
    foreach($db->tampilajuza($_GET['zamulai'],$_GET['zahingga'],$_GET['zaperiode']) as $item){
        $content = '<html>
        <body>
        <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$item['thnAjaran'].' </h5>
        <br>
        <table border="1">
        <thead style="text-align:center">
          <tr style="background-color:#faba97">
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>Alamat</th>
            <th>Pekerjaan Wali</th>
            <th>Penghasilan Wali</th>
            <th>Nomor HP Wali</th>
            <th>Pengajuan SPP</th>
            <th>Pengajuan SBPP</th>
          </tr>
        </thead>
        <tbody>
                    <tr>
                        <td>'.$item['nis'].'</td>
                        <td>'.$item['namaSiswa'].'</td>
                        <td>'.$item['psCode'].'</td>
                        <td>'.$item['kelas'].'</td>
                        <td>'.$item['namaWali'].'</td>
                        <td>'.$item['alamatWali'].'</td>
                        <td>'.$item['pekerjaanWali'].'</td>
                        <td>'.$item['penghasilanWali'].'</td>
                        <td>'.$item['noHPWali'].'</td>
                        <td>'.$item['pengajuanSpp'].'</td>
                        <td>'.$item['pengajuanSbpp'].'</td>
                    </tr>
        </tbody>
        </table>
        </body>
        </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('coba.pdf');
    }
}else if (!empty($_GET['byperiode'])) {
    foreach($db->tampilajuperiode($_GET['byperiode']) as $item){
        $content = '<html>
        <body>
        <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$item['thnAjaran'].' </h5>
        <br>
        <table border="1">
        <thead style="text-align:center">
          <tr style="background-color:#faba97">
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Nama Wali</th>
            <th>Alamat</th>
            <th>Pekerjaan Wali</th>
            <th>Penghasilan Wali</th>
            <th>Nomor HP Wali</th>
            <th>Pengajuan SPP</th>
            <th>Pengajuan SBPP</th>
          </tr>
        </thead>
        <tbody>
                    <tr>
                        <td>'.$item['nis'].'</td>
                        <td>'.$item['namaSiswa'].'</td>
                        <td>'.$item['psCode'].'</td>
                        <td>'.$item['kelas'].'</td>
                        <td>'.$item['namaWali'].'</td>
                        <td>'.$item['alamatWali'].'</td>
                        <td>'.$item['pekerjaanWali'].'</td>
                        <td>'.$item['penghasilanWali'].'</td>
                        <td>'.$item['noHPWali'].'</td>
                        <td>'.$item['pengajuanSpp'].'</td>
                        <td>'.$item['pengajuanSbpp'].'</td>
                    </tr>
        </tbody>
        </table>
        </body>
        </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Pengajuan Beasiswa.pdf');
    }
}     
?>