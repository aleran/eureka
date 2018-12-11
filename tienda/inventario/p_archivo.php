<?php
	include("conexion.php");
	include("PHPExcel.php");
	//set_time_limit(300);
	header("Content-Type:text/html;charset=utf-8");	
	$dir_subida = 'excel/';
	$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);
	if($_FILES["archivo"]["type"]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
			echo '<pre>';
		if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {

				    //leer excel

			$archivo = $fichero_subido;
			$inputFileType = PHPExcel_IOFactory::identify($archivo);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($archivo);
			$sheet = $objPHPExcel->getSheet(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();

			$libro= array();
			for ($row = 2; $row <= $highestRow; $row++){
				
					list($isbn)= explode(" ",$sheet->getCell("D".$row)->getValue());
					$existencia=$sheet->getCell("F".$row)->getValue();
					$precio=$sheet->getCell("G".$row)->getValue();

					$sql="UPDATE ps_stock_available i INNER JOIN ps_product p on i.id_product=p.id_product INNER JOIN ps_product_shop s on i.id_product=s.id_product SET i.quantity='".$existencia."', s.price='".$precio."', p.price='".$precio."' WHERE p.reference='".$isbn."'";

					$rs=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

					//echo $isbn."-".$existencia."<br>";
			

				//echo $sheet->getCell("A".$row)->getValue()." - ";
				//echo $isbn." - ";
				//echo $existencia." - ";
				//echo $sheet->getCell("C".$row)->getValue();
				//echo "<br>";
				
				
				
			}

			echo "<script>alert('El Inventario Se actualizo con Exito');window.location='e_archivo.php'</script>";

		} else {
		    echo "Ha ocurrido un error, vuelva a intentarlo, si el error persiste comuniquese con los desarrolladores";
		}

		//echo 'Más información de depuración:';
		//print_r($_FILES);
	}

	else {
		echo "No es un archivo Excel Soportado por el sistema";
	

	}

	
	
		



	
	

?>
