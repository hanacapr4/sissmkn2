<?php
            require('fpdf.php');


            $pdf=new FPDF('P','cm','Legal');


            $pdf->AddPage();
           
            $pdf->SetFont('Arial','B',14);
           
            $pdf->Image('smkn2.PNG',1,0.5,3,3.5);
           
           
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

            $pdf->SetFont('Arial','B',17);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,3,'SURAT PERINGATAN',0,'C');


            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(1);
            $pdf->MultiCell(19.5,1.5,'Yang bertanda tangan di bawah ini :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1.5,'Nama     :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1,'Jabatan :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1.5,'NIP        :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(1);
            $pdf->MultiCell(19.5,1,'Dengan ini SMKN 2 Malang terpaksa menyampaikan Surat peringatan pertama dikarenakan telah meninggalkan kelas / Alpha sebanyak 10 kali. Adapun siswa tersebut yaitu : ',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1.5,'Nama     :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1,'Nis         :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(2);
            $pdf->MultiCell(19.5,1.5,'Kelas     :',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(1);
            $pdf->MultiCell(19.5,1,'Demikian Surat peringatan pertama ini diterbitkan agar menjadi bahan perenungan dan bahan perhatian ',0,'L');


			$pdf->SetFont('Arial','B',12);
			$pdf->SetX(0);
            $pdf->MultiCell(19.5,5,'',0,'R');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(0);
            $pdf->MultiCell(19.5,1,'Malang, 9 Mei 2018',0,'R');


            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(6);
            $pdf->MultiCell(19.5,1,'Mengetahui',0,'C');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(3);
            $pdf->MultiCell(19.5,1,'Kesiwaan',0,'L');

            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(6);
            $pdf->MultiCell(19.5,1,'Kepala Sekolah',0,'C');


            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(3);
            $pdf->MultiCell(19.5,2,'Kesiwaan',0,'L');


            $pdf->SetFont('Arial','B',12);
			$pdf->SetX(6);
            $pdf->MultiCell(19.5,2,'Kepala Sekolah',0,'C');







            $pdf->Ln();

        $pdf->Output();
        ?> 
