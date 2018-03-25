<?php 
	include("conexion.php");
	include("PHPExcel.php");
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getProperties()->setCreator("Reporte por niños");
	$objPHPExcel->getProperties()->setTitle("Reporte por niños");
	$objPHPExcel->createSheet(0);
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Reporte por niños");
	$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_LETTER);
	$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
	$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
	$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

	$estilo1 = new PHPExcel_Style();
	$estilo1->applyFromArray(
	  	array('fill' => array(
	      'type' => PHPExcel_Style_Fill::FILL_SOLID,
	      'color' => array('argb' => '104C00')
	    ),
	    'borders' => array( //bordes
	      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
	    )
	));

	$estilo2 = new PHPExcel_Style();
	$estilo2->applyFromArray(
	  	array('fill' => array(
	      'type' => PHPExcel_Style_Fill::FILL_SOLID,
	      'color' => array('argb' => 'DCDCDC')
	    ),
	    'borders' => array( //bordes
	      'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	      'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
	    )
	));

	$objPHPExcel->getActiveSheet()->SetCellValue("A1", "Nombre, colegio y curso");
	$objPHPExcel->getActiveSheet()->SetCellValue("B1", "Libro");

	$objPHPExcel->getActiveSheet()->setSharedStyle($estilo1, "A1:AM1");
	$objPHPExcel->getActiveSheet()->getStyle("A1:B1")->getFont()->getColor()->applyFromArray(
		array(
		'rgb' => 'FFFFFF'
		)
	);

	$sql="SELECT o.id_order FROM ps_orders o JOIN ps_order_detail i ON o.id_order=i.id_order WHERE (o.date_add BETWEEN '2018-01-01 00:00:00' AND '2018-12-31 23:59:00') AND o.valid='0'";
	$rs=mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));

	
	$conta=2;			
	while ( $row=mysqli_fetch_array($rs)) {

		$sql2="SELECT m.message, p.name FROM ps_message m JOIN ps_order_detail o ON m.id_order=o.id_order JOIN ps_product_lang p ON o.product_id=p.id_product WHERE m.id_order='".$row["id_order"]."'";

		$rs2=mysqli_query($mysqli,$sql2) or die (mysqli_error($mysqli));
		$row2=mysqli_fetch_array($rs2);

		$objPHPExcel->getActiveSheet()->SetCellValue("A$conta", "$row2[message]");
		$objPHPExcel->getActiveSheet()->SetCellValue("B$conta", "$row2[name]");			
		
		$conta++;


			
	}

	foreach (range('A', 'B') as $columnID) {
		$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);  
	}
	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); //Escribir archivo
	header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="Reporte_niños.xlsx"');
	$objWriter->save('php://output');


	


 ?>