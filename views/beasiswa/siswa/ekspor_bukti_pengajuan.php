<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$db = new Pengajuan();

        $content = '<pege backimg="bg_kartu_karsa.jpg">';

        $content .='
            <body>';

        $content .= '
            <h3 style="text-align:center"> BUKTI PENGAJUAN BEASISWA </h3>
            ';

        foreach ($db->cetakbuktipengajuan($_SESSION['nis']) as $data) {
            $content .= '
            <h4 style="text-align:center">'.$data['idBea'].'</h4><br>
            <table style="margin-left:20px;color:grey">
            <tr>
                <td><h4 style="text-align:leftmargin-bottom:-20px"> SISWA </h4></td>
                <td><h4 style="text-align:leftmargin-bottom:-20px">: '.$data['nis'].'/'.$data['namaSiswa'].'</h4></td>
            </tr>
            <tr>
                <td><h4 style="text-align:leftmargin-bottom:-20px"> Pengajuan SPP & SBPP </h4></td>
                <td><h4 style="text-align:leftmargin-bottom:-20px">: '.$data['pengajuanSpp'].'/'.$data['pengajuanSbpp'].'</h4></td>
            </tr>
            </table>
            ';
        }
        
            $content .='
            </body>
            </pege>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A7','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Pengajuan Beasiswa.pdf');
    
?>