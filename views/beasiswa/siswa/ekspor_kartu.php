<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$db = new Beasiswa();

        $content = '<pege backimg="bg_kartu_karsa.jpg">';

        $content .='
            <body>';

        $content .= '
            <h3 style="text-align:center"> KARTU BEASISWA KARSA </h3>
            <br>
            ';

        foreach ($db->cetakkartu($_SESSION['nis']) as $data) {
            $content .= '
            <table style="margin-left:20px;color:grey">
            <tr>
                <td><h4 style="text-align:leftmargin-bottom:-20px"> NIS </h4></td>
                <td><h4 style="text-align:leftmargin-bottom:-20px">: '.$data['nis'].'</h4></td>
            </tr>
            <tr>
                <td><h4 style="text-align:leftmargin-bottom:-20px"> NAMA </h4></td>
                <td><h4 style="text-align:leftmargin-bottom:-20px">: '.$data['namaSiswa'].'</h4></td>
            </tr>
            <tr>
                <td><h4 style="text-align:leftmargin-bottom:-20px"> KATEGORI </h4></td>
                <td><h4 style="text-align:leftmargin-bottom:-20px">: '.$data['kategori'].'</h4></td>
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