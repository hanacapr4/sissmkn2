
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/phpmailer/PHPMailerAutoload.php"); ?>
<?php

$message = "TES";

// membuat obyek phpmailer
$mail = new PHPMailer(true);

// memberitahu class untuk menggunakan SMTP
$mail->IsSMTP();

// mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
$mail->SMTPDebug = 0;

// mengaktifkan otentikasi SMTP
$mail->SMTPAuth = true;

// menetapkan prefix ke server
$mail->SMTPSecure = 'ssl';

// atur Gmail sebagai server SMTP
$mail->Host = 'smtp.gmail.com';

// atur server SMTP untuk server Gmail
$mail->Port = 465;

// alamat gmail kamu
$mail->Username = 'arvin.fairuz.af@gmail.com';

// password Anda harus disertakan dalam tanda kutip tunggal
$mail->Password = 'arvin1q2w3e4r5t';

// tambahkan subjek
$mail->Subject = ' Contoh email - codingan.com ';

// alamat email pengirim dan nama
$mail->SetFrom('arvin.fairuz.af@gmail.com', 'Arvin Fairuz');

// alamat email penerima
$mail->AddAddress('nikenwidowatiputri@gmail.com');

// jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
//$mail->AddAddress('tosend@domain.com');

// jika kamu ingin mengirim Carbon copy (Cc)
//$mail->AddCC('tosend@domain.com');

// jika kamu ingin mengirim Blind carbon copy (Bcc)
//$mail->AddBCC('tosend@domain.com');

// tambahkan isi pesan
$mail->MsgHTML($message);

// tambahkan lampiran jika ada
// $mail->AddAttachment('time.png');

try {
    // kirim email
    $mail->Send();
    $msg = "Email berhasil dikirim";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
?>