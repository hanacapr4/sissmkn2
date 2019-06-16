<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/phpmailer/PHPMailerAutoload.php"); 
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/fpdf/fpdf.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];
 if($aksi == "edit"){
	$db->editdu(
        $_POST['nis'],
        $_POST['nisn'],
        $_POST['namaSiswa'],
        $_POST['jk'],
        $_POST['tempatLahirSiswa'],
        $_POST['tanggalLahirSiswa'],
        $_POST['agamaSiswa'],
        $_POST['emailSiswa'],
        $_POST['hpSiswa'],
        $_POST['teleponSiswa'],
        $_POST['pass'],
        $_POST['anakKe'],
        $_POST['bahasa'],
        $_POST['jenisAnak'],
        $_POST['jsa'],
        $_POST['jsk'],
        $_POST['jst'],
        $_POST['kewarganegaraanSiswa'],
        $_POST['thnAjaranSiswa'],
        '0',
        '1',
        '1',

        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',

        $_POST['citacita'],
        $_POST['hobi'],
        $_POST['kesenian'],
        $_POST['olahraga'],
        $_POST['organisasi'],
        $_POST['prestasi'],

        $_POST['namaA'],
        $_POST['agamaA'],
        $_POST['alamatA'],
        $_POST['kewarganegaraanA'],
        $_POST['noKTPA'],
        $_POST['teleponA'],
        $_POST['pekerjaanA'],
        $_POST['pendidikanA'],
        $_POST['penghasilanA'],
        $_POST['tglLahirA'],
        $_POST['tmptLahirA'],
        $_POST['ketHidupA'],

        $_POST['namaI'],
        $_POST['agamaI'],
        $_POST['alamatI'],
        $_POST['kewarganegaraanI'],
        $_POST['noKTPI'],
        $_POST['teleponI'],
        $_POST['pekerjaanI'],
        $_POST['pendidikanI'],
        $_POST['penghasilanI'],
        $_POST['tglLahirI'],
        $_POST['tmptLahirI'],
        $_POST['ketHidupI'],

        $_POST['namaW'],
        $_POST['agamaW'],
        $_POST['alamatW'],
        $_POST['kewarganegaraanW'],
        $_POST['noKTPW'],
        $_POST['teleponW'],
        $_POST['pekerjaanW'],
        $_POST['pendidikanW'],
        $_POST['penghasilanW'],
        $_POST['tglLahirW'],
        $_POST['tmptLahirW'],

        $_POST['berat'],
        $_POST['tinggi'],
        $_POST['golDarah'],
        $_POST['kelainan'],
        $_POST['rPenyakit'],

        '',
        '',
        '',

        $_POST['alamatSiswa'],
        $_POST['jarak'],
        $_POST['kabupatenSiswa'],
        $_POST['kecamatanSiswa'],
        $_POST['kelurahanSiswa'],
        $_POST['provinsiSiswa'],
        $_POST['rt'],
        $_POST['rw'],
        $_POST['tinggalDgn'],
        $_POST['alamatM'],
        $_POST['kecamatanM'],
        $_POST['kabupatenM'],
        $_POST['kondisiRumah'],
        $_POST['kondisiFisik'],
        $_POST['transportasi'],

        $_POST['tamatanDari'],
        $_POST['lamaBelajar'],
        $_POST['noPesertaUAN'],
        $_POST['noIjazahSMP'],
        $_POST['noSKHUNSMP'],
        $_POST['tglIjazahSMP'],
        $_POST['tglSKHUNSMP']


        );
    // print_r($_POST['tinggalDgn']);
    //     die();
 	header("location:http://localhost:8080/sissmkn2/views/kesiswaan/biodata/index.php");
	 
 }elseif ($aksi == "tambah") {
    $db->tambahdu(
    	$_POST['nis'],
    	$_POST['nisn'],
    	$_POST['namaSiswa'],
        $_POST['namaPanggilan'],
    	$_POST['jk'],
    	$_POST['tempatLahirSiswa'],
    	$_POST['tanggalLahirSiswa'],
    	$_POST['agamaSiswa'],
    	$_POST['emailSiswa'],
    	$_POST['hpSiswa'],
    	$_POST['teleponSiswa'],
    	$_POST['pass'],
    	$_POST['anakKe'],
    	$_POST['bahasa'],
    	$_POST['jenisAnak'],
    	$_POST['jsa'],
    	$_POST['jsk'],
    	$_POST['jst'],
    	$_POST['kewarganegaraanSiswa'],
        $_POST['jurusan'],
    	$_POST['thnAjaranSiswa'],
    	'0',

		addslashes(file_get_contents($_FILES['foto']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanAkte']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanIjazah']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKIP']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKK']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKPS']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKTPOrtu']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanNISN']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanSKHUN']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanSKHUS']['tmp_name'])),

    	$_POST['citacita'],
    	$_POST['hobi'],
    	$_POST['kesenian'],
    	$_POST['olahraga'],
    	$_POST['organisasi'],
    	$_POST['prestasi'],

    	'',
    	'',
    	'',
    	'',
    	'',
    	'',
    	'',

    	$_POST['namaA'],
    	$_POST['agamaA'],
    	$_POST['alamatA'],
    	$_POST['kewarganegaraanA'],
    	$_POST['noKTPA'],
    	$_POST['teleponA'],
    	$_POST['pekerjaanA'],
    	$_POST['pendidikanA'],
    	$_POST['penghasilanA'],
    	$_POST['tglLahirA'],
    	$_POST['tmptLahirA'],
    	$_POST['ketHidupA'],

    	$_POST['namaI'],
    	$_POST['agamaI'],
    	$_POST['alamatI'],
    	$_POST['kewarganegaraanI'],
    	$_POST['noKTPI'],
    	$_POST['teleponI'],
    	$_POST['pekerjaanI'],
    	$_POST['pendidikanI'],
    	$_POST['penghasilanI'],
    	$_POST['tglLahirI'],
    	$_POST['tmptLahirI'],
    	$_POST['ketHidupI'],

    	$_POST['namaW'],
    	$_POST['agamaW'],
    	$_POST['alamatW'],
    	$_POST['kewarganegaraanW'],
    	$_POST['noKTPW'],
    	$_POST['teleponW'],
    	$_POST['pekerjaanW'],
    	$_POST['pendidikanW'],
    	$_POST['penghasilanW'],
    	$_POST['tglLahirW'],
    	$_POST['tmptLahirW'],

    	$_POST['berat'],
    	$_POST['tinggi'],
    	$_POST['golDarah'],
    	$_POST['kelainan'],
    	$_POST['rPenyakit'],

    	'',
    	'',
    	'',
    	'',

    	'',
    	'',

    	$_POST['alamatSiswa'],
    	$_POST['jarak'],
    	$_POST['kabupatenSiswa'],
    	$_POST['kecamatanSiswa'],
    	$_POST['kelurahanSiswa'],
    	$_POST['provinsiSiswa'],
    	$_POST['rt'],
    	$_POST['rw'],
    	$_POST['tinggalDgn'],
    	$_POST['alamatM'],
    	$_POST['kecamatanM'],
    	$_POST['kabupatenM'],
    	$_POST['kondisiRumah'],
    	$_POST['kondisiFisik'],
    	$_POST['transportasi'],

    	$_POST['tamatanDari'],
    	$_POST['lamaBelajar'],
    	$_POST['noPesertaUAN'],
    	$_POST['noIjazahSMP'],
    	$_POST['noSKHUNSMP'],
    	$_POST['tglIjazahSMP'],
    	$_POST['tglSKHUNSMP'],
        '2'
    	);
 	header("location:http://localhost:8080/sissmkn2/views/siswa/biodata/index.php");
}elseif ($aksi == "tambahp") {
    $db->tambahdu(
        $_POST['nis'],
        $_POST['nisn'],
        $_POST['namaSiswa'],
        $_POST['namaPanggilan'],
        $_POST['jk'],
        $_POST['tempatLahirSiswa'],
        $_POST['tanggalLahirSiswa'],
        $_POST['agamaSiswa'],
        $_POST['emailSiswa'],
        $_POST['hpSiswa'],
        $_POST['teleponSiswa'],
        $_POST['pass'],
        $_POST['anakKe'],
        $_POST['bahasa'],
        $_POST['jenisAnak'],
        $_POST['jsa'],
        $_POST['jsk'],
        $_POST['jst'],
        $_POST['kewarganegaraanSiswa'],
        $_POST['jurusan'],
        $_POST['thnAjaranSiswa'],
        '0',

        addslashes(file_get_contents($_FILES['foto']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanAkte']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanIjazah']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKIP']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKK']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKPS']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanKTPOrtu']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanNISN']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanSKHUN']['tmp_name'])),
        addslashes(file_get_contents($_FILES['scanSKHUS']['tmp_name'])),

        $_POST['citacita'],
        $_POST['hobi'],
        $_POST['kesenian'],
        $_POST['olahraga'],
        $_POST['organisasi'],
        $_POST['prestasi'],

        '',
        '',
        '',
        '',
        '',
        '',
        '',

        $_POST['namaA'],
        $_POST['agamaA'],
        $_POST['alamatA'],
        $_POST['kewarganegaraanA'],
        $_POST['noKTPA'],
        $_POST['teleponA'],
        $_POST['pekerjaanA'],
        $_POST['pendidikanA'],
        $_POST['penghasilanA'],
        $_POST['tglLahirA'],
        $_POST['tmptLahirA'],
        $_POST['ketHidupA'],

        $_POST['namaI'],
        $_POST['agamaI'],
        $_POST['alamatI'],
        $_POST['kewarganegaraanI'],
        $_POST['noKTPI'],
        $_POST['teleponI'],
        $_POST['pekerjaanI'],
        $_POST['pendidikanI'],
        $_POST['penghasilanI'],
        $_POST['tglLahirI'],
        $_POST['tmptLahirI'],
        $_POST['ketHidupI'],

        $_POST['namaW'],
        $_POST['agamaW'],
        $_POST['alamatW'],
        $_POST['kewarganegaraanW'],
        $_POST['noKTPW'],
        $_POST['teleponW'],
        $_POST['pekerjaanW'],
        $_POST['pendidikanW'],
        $_POST['penghasilanW'],
        $_POST['tglLahirW'],
        $_POST['tmptLahirW'],

        $_POST['berat'],
        $_POST['tinggi'],
        $_POST['golDarah'],
        $_POST['kelainan'],
        $_POST['rPenyakit'],

        '',
        '',
        '',
        '',

        $_POST['alasan'],
        $_POST['dariSekolah'],

        $_POST['alamatSiswa'],
        $_POST['jarak'],
        $_POST['kabupatenSiswa'],
        $_POST['kecamatanSiswa'],
        $_POST['kelurahanSiswa'],
        $_POST['provinsiSiswa'],
        $_POST['rt'],
        $_POST['rw'],
        $_POST['tinggalDgn'],
        $_POST['alamatM'],
        $_POST['kecamatanM'],
        $_POST['kabupatenM'],
        $_POST['kondisiRumah'],
        $_POST['kondisiFisik'],
        $_POST['transportasi'],

        $_POST['tamatanDari'],
        $_POST['lamaBelajar'],
        $_POST['noPesertaUAN'],
        $_POST['noIjazahSMP'],
        $_POST['noSKHUNSMP'],
        $_POST['tglIjazahSMP'],
        $_POST['tglSKHUNSMP'],
        '2'
        );

foreach ($db->getdetaildu($_POST['nis']) as $item) {
        
    $pdf=new FPDF('P','cm','Legal');

        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        
        //HEADER//
        $pdf->Image('http://localhost:8080/SISSMKN2/fpdf/smkn2.PNG',1,0.5,3,3.5);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'PEMERINTAH KOTA MALANG',0,'C');
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'DINAS PENDIDIKAN',0,'C');
        $pdf->SetFont('Arial','B',19);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,1,'SMKN 2 MALANG',0,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'Jalan Veteran No 17 Malang (0341) , Faks. (0341) 0341 Malang 65154 ',0,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'Website : http://www.smkn2malang.sch.id | Email :smkn2malang@yahoo.com',0,'C');
        $pdf->Line(1,4.2,20.5,4.2);
        $pdf->SetLineWidth(0.1);
        $pdf->Line(1,4.3,20.5,4.3);
        $pdf->SetLineWidth(0);

        //ISI//
        $pdf->SetFont('Arial','B',14);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,2,'SURAT PERNYATAAN CALON PESERTA DIDIK',0,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Saya yang bertanda tangan di bawah ini :',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Nama Lengkap              : '.$item['namaSiswa'],0,'L');
        $pdf->SetFont('Arial','',12);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Tempat/Tanggal Lahir   : '.$item['tempatLahir'].'/'.$item['tanggalLahir'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Jenis Kelamin              : '.$item['jk'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Agama                        : '.$item['agama'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Alamat di Malang           : '.$item['alamat'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'No. Telepon & HP       : '.$item['hp'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Jurusan                : '.$item['kk'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Nama Orang Tua         : '.$item['namaA'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Agama Orang Tua        : '.$item['agamaA'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Pendidikan Orang Tua   : '.$item['pendidikanA'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Pekerjaan Orang Tua    : '.$item['pekerjaanA'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Nama Wali              : '.$item['namaW'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Agama Wali             : '.$item['agamaW'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Pendidikan Wali        : '.$item['pendidikanW'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Pekerjaan Wali         : '.$item['pekerjaanW'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'No. Telepon Orang Tua  : '.$item['teleponA'],0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.8,'Email                  : '.$item['email'],0,'L');
        
        $pdf->SetFont('Arial','B',14);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,1.5,'MENYATAKAN',0,'C');

        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'1. Akan belajar dengan tekun dan penuh semangat',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'2. Akan menjaga nama baik diri sendiri, keluarga dan sekolah',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'3. Akan mengikuti pendidikan agama',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'4. Akan mengikuti kegiatan Ekstra Kurikuler yang dilaksanakan oleh sekolah',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'5. Sanggup mentaati dan mengikuti kegiatan sekolah',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'6. Apabila tidak mentaati ketentuan yang ditetapkan, saya sanggup menerima sanksi antara lain :',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'- Dikembalikan ke Orang Tua/Wali',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'- Tidak diperkenankan mengikuti pelajaran selama jangka waktu tertentu',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'7. Apabila saya tidak masuk sekolah tanpa keterangan/Alpa selama 33 hari, maka saya menyatakan keluar dari SMK Negeri 2 Malang',0,'L');
        $pdf->SetFont('Arial','',11);
        $pdf->SetX(2);
        $pdf->MultiCell(19.5,0.5,'Pernyataan ini saya buat dengan sebenar-benarnya dan penuh tanggung jawab serta diketahui dan disetujui oleh Orang Tua/Wali saya.',0,'L');
        $pdf->SetFont('Arial','',5);
        $pdf->SetX(0);
        $pdf->MultiCell(19.5,0.2,'',0,'R');

        $pdf->SetFont('Arial','',11);
        $pdf->SetX(0);
        $pdf->MultiCell(19.5,0.8,'Malang, '.date("d-m-Y"),0,'R');

        $pdf->SetFont('Arial','',11);
        $pdf->SetX(6);
        $pdf->MultiCell(19.5,0.8,'Yang Membuat Pernyataan',0,'C');

        $pdf->SetFont('Arial','',11);
        $pdf->SetX(4.7);
        $pdf->MultiCell(19.5,0.8,'Calon Siswa',0,'C');

        $pdf->SetFont('Arial','',11);
        $pdf->SetX(6);
        $pdf->MultiCell(19.5,1,'',0,'C');

        $pdf->SetFont('Arial','B',11);
        $pdf->SetX(6);
        $pdf->MultiCell(19.5,2,$item['namaSiswa'],0,'C');
        $pdf->Ln();
}
    $message = "Username = "."'".$_POST['nis']."'"." Password = "."'".$_POST['pass']."'";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Daftar Ulang Siswa SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');
            $attachment= $pdf->Output('attachment.pdf', 'S');
            $mail->AddStringAttachment($attachment, 'attachment.pdf');

            $emailto = $_POST['emailSiswa'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }

    header("location:http://localhost:8080/sissmkn2/views/siswa/biodata/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }elseif ($aksi == "send") {
    
        foreach($db->tampildujr('ps') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/SISSMKN2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('upw') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('ap') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('kpr') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('jb') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('tkj') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
        foreach($db->tampildujr('sti') as $item){

            $message = "Selamat Anda Diterima Sebagai Siswa SMK Negeri 2 Malang";

            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'arvin.fairuz.af@gmail.com';
            $mail->Password = 'arvin1q2w3e4r5t';
            $mail->Subject = 'Hasil Tes Bidang Keahlian SMK Negeri 2 Malang';
            $mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

            $emailto = $item['email'];
            $mail->AddAddress($emailto);

            // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
            //$mail->AddAddress('tosend@domain.com');

            // jika kamu ingin mengirim Carbon copy (Cc)
            //$mail->AddCC('tosend@domain.com');

            // jika kamu ingin mengirim Blind carbon copy (Bcc)
            //$mail->AddBCC('tosend@domain.com');

            $mail->MsgHTML($message);

            // tambahkan lampiran jika ada
            // $mail->AddAttachment('time.png');

            try {
                $mail->Send();
                $msg = "Email berhasil dikirim";
            } catch (phpmailerException $e) {
                $msg = $e->getMessage();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/daftarulang/index_tambah.php");
        }
    }
?>