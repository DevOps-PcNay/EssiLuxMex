  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SUBIR INVENTARIO I.T. - CSV
      </h1>
      <ol class="breadcrumb">
        <li><a href="Inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Reportes</li>
      </ol>
    </section>

		<div class="panel panel-default">
			<div class="panel-body">
			<br>
				<div class="row">
					<form action="" method="post" enctype="multipart/form-data" id="import_form">
						<div class="col-md-3">
							<input type="file" name="file" />
						</div>
						<div class="col-md-5">
							<input type="submit" class="btn btn-primary" name="import_inv" value="IMPORTAR">
						</div>
					</form>
				</div>
  		</div>
		</div>	
  <!-- /.content-wrapper -->

<?php

	// Obtener los Modelos, Marcas, Perifericos.
	$tabla = "t_Modelo";
	$item = null;
	$valor = null;
	$Arreglo_modelos = ModeloModelos::mdlMostrarModelos($tabla,$item,$valor);
	
	/*
	print_r("<br>");
	print_r("<br>");
	print_r("Imprimiendo los modelos");
	var_dump($Arreglo_modelos);
	exit;
	return;
	*/
	

	$tabla = "t_Marca";
	$item = null;
	$valor = null;
	$Arreglo_marcas = ModeloMarcas::mdlMostrarMarcas($tabla,$item,$valor);
	
	/*
	print_r("<br>");
	print_r("<br>");
	print_r("Imprimiendo las Marcas");
	var_dump($Arreglo_marcas);
	exit;
	return;
	*/


	$tabla = "t_Periferico";
	$item = null;
	$valor = null;
	$Arreglo_perifericos = ModeloPerifericos::mdlMostrarPerifericos($tabla,$item,$valor);
	
	/*
	print_r("<br>");
	print_r("<br>");
	print_r("Imprimiendo los Perifericos");
	var_dump($Arreglo_perifericos);
	exit;
	return;
	*/

	$tabla = "t_Ubicacion";
	$item = null;
	$valor = null;
	$Arreglo_ubicaciones = ModeloUbicaciones::mdlMostrarUbicaciones($tabla,$item,$valor);
	
	/*
	print_r("<br>");
	print_r("<br>");
	print_r("Imprimiendo las Ubicaciones");
	var_dump($Arreglo_ubicaciones);
	exit;
	return;
	*/

	$tabla = "t_Linea";
	$item = null;
	$valor = null;
	$Arreglo_linea = ModeloLineas::mdlMostrarLineas($tabla,$item,$valor);
	
	/*
	print_r("<br>");
	print_r("<br>");
	print_r("Imprimiendo las Lineas");
	var_dump($Arreglo_linea);
	exit;
	return;
	*/


	// Pasandolo a un arreglo bidimencional los Modelos obtenidos
	$Modelos_Obtenidos = array();
	for ($q=0;$q<count($Arreglo_modelos);$q++)
	{
		//print_r("Valor = ".$Arreglo_modelos[$q]["id_modelo"]);
		//print("<br>");
		//print_r("Valor = ".$Arreglo_modelos[$q]["descripcion"]);
		//print("<br>");

		$contador = 0;
		for ($a=0;$a<2;$a++)
		{
			if ($a == 0)
				$Modelos_Obtenidos[$q][$a] = $Arreglo_modelos[$q]["id_modelo"];
			if ($a == 1)
				$Modelos_Obtenidos[$q][$a] = strtolower($Arreglo_modelos[$q]["descripcion"]);
		}
		
	}

	// Pasandolo a un arreglo bidimencional las Marcas obtenidas
	$Marcas_Obtenidas = array();
	for ($q=0;$q<count($Arreglo_marcas);$q++)
	{
		//print_r("Valor = ".$Arreglo_modelos[$q]["id_modelo"]);
		//print("<br>");
		//print_r("Valor = ".$Arreglo_modelos[$q]["descripcion"]);
		//print("<br>");

		$contador = 0;
		for ($a=0;$a<2;$a++)
		{
			if ($a == 0)
				$Marcas_Obtenidas[$q][$a] = $Arreglo_marcas[$q]["id_marca"];
			if ($a == 1)
				$Marcas_Obtenidas[$q][$a] = strtolower($Arreglo_marcas[$q]["descripcion"]);
		}
		
	}

	// var_dump($Marcas_Obtenidas);



	// Pasandolo a un arreglo bidimencional los Perifericos obtenidos
	$Perifericos_Obtenidos = array();
	for ($q=0;$q<count($Arreglo_perifericos);$q++)
	{
		//print_r("Valor = ".$Arreglo_modelos[$q]["id_modelo"]);
		//print("<br>");
		//print_r("Valor = ".$Arreglo_modelos[$q]["descripcion"]);
		//print("<br>");

		$contador = 0;
		for ($a=0;$a<2;$a++)
		{
			if ($a == 0)
				$Perifericos_Obtenidos[$q][$a] = $Arreglo_perifericos[$q]["id_periferico"];
			if ($a == 1)
				$Perifericos_Obtenidos[$q][$a] = strtolower($Arreglo_perifericos[$q]["nombre"]);
		}
		
	}

	// Pasandolo a un arreglo bidimencional las Ubicaciones obtenidas
	$Ubicaciones_Obtenidas = array();
	for ($q=0;$q<count($Arreglo_ubicaciones);$q++)
	{
		//print_r("Valor = ".$Arreglo_modelos[$q]["id_modelo"]);
		//print("<br>");
		//print_r("Valor = ".$Arreglo_modelos[$q]["descripcion"]);
		//print("<br>");

		$contador = 0;
		for ($a=0;$a<2;$a++)
		{
			if ($a == 0)
				$Ubicaciones_Obtenidas[$q][$a] = $Arreglo_ubicaciones[$q]["id_ubicacion"];
			if ($a == 1)
				$Ubicaciones_Obtenidas[$q][$a] = strtolower($Arreglo_ubicaciones[$q]["descripcion"]);
		}
		
	}

	//var_dump($Ubicaciones_Obtenidas);
	//exit;
	//return;


	// Pasandolo a un arreglo bidimencional las Lineas obtenidas
	$Lineas_Obtenidas = array();
	for ($q=0;$q<count($Arreglo_linea);$q++)
	{
		$contador = 0;
		for ($a=0;$a<2;$a++)
		{
			if ($a == 0)
				$Lineas_Obtenidas[$q][$a] = $Arreglo_linea[$q]["id_linea"];
			if ($a == 1)
				$Lineas_Obtenidas[$q][$a] = strtolower($Arreglo_linea[$q]["descripcion"]);
		}
		
	}
	
	// Obtener la Marca.
	function Obtener_IdMarca($Arreglo_marca,$reg_csv_marca)
	{
		$columna_1 = 0;					
		
		//var_dump($Arreglo_marca[0]["id_modelo"]);
		
		$separar_cadena = explode(" ",$reg_csv_marca);
		//print ("Tamaño -separar_cadena- : ".count($separar_cadena));

		$Marcas = 'Sin Marcas';
		// $reg_csv_marca = Es la descripcion de Marca se captura en el archivo de Excel.

		// $Arreglo_marca = Arreglo bidimensional.
		for ($l=0;$l<count($Arreglo_marca);$l++)
		{
			for ($n=0;$n<2;$n++)
			{
				$cadena = trim($Arreglo_marca[$l][$n]);

				// if ( $cadena == $reg_csv_marca) // 'dell' ) // )
				if ( strcmp($cadena,trim($reg_csv_marca)) == 0)
				{
					//print_r('CUMPLE CONDICION');
					$Marcas = $Arreglo_marca[$l][0];
				}
				else
				{
					//print_r('NO Cumple Condicion');
				}

				//print_r('Contenido De reg_cvs = '.$reg_csv_marca);
				//print_r('<br>');

				//print_r('Las marcas = '.$cadena);
				//print_r('<br>');
				////////////////////
				/*
				$contador_pal = 0;
				for ($k=0;$k<count($separar_cadena);$k++)
				{
					// n = 0 ; obtiene el Id de la Marca
					// n = 1 ; Obtiene la descripcion de la Marca
					 //print_r($Arreglo_marca[$l][$n]);
					 //print_r(' n '.$n);
					 //print_r('<br>');

					$encontro = strpos($Arreglo_marca[$l][$n],$separar_cadena[$k]);

					if ($encontro === false)
					{
						//print_r("Valor NO encontrado ");
					}
					else
					{
						$contador_pal++;
					}
				} // for ($k=0;$k<count($separar_cadena);$k++)

				if ($contador_pal == count($separar_cadena))
				{
					$Marcas = $Arreglo_marca[$l][$n-1];
					return $Marcas;
				}
				*/
				/////////////////


			} // for ($n=0;$n<2;$n++)


		} // for ($l=0;$l<count($Arreglo_marca);$l++)

		return $Marcas;

	} // function Obtener_IdMarca() 

	// Obtener el Modelo	
	function Obtener_IdModelo($Arreglo_modelos,$reg_csv_modelo)
	{
		$columna_1 = 0;					

		$separar_cadena = explode(" ",$reg_csv_modelo);

		$Modelos = "Sin Modelos";
		for ($l=0;$l<count($Arreglo_modelos);$l++)
		{
			for ($n=0;$n<2;$n++)
			{
				$cadena = trim($Arreglo_modelos[$l][$n]);

				// if ( $cadena == $reg_csv_marca) // 'dell' ) // )
				if ( strcmp($cadena,trim($reg_csv_modelo)) == 0)
				{
					//print_r('CUMPLE CONDICION');
					$Modelos = $Arreglo_modelos[$l][0];
				}
				else
				{
					//print_r('NO Cumple Condicion');
				}


			} // for ($n=0;$n<2;$n++)

		} // for ($l=0;$l<count($Arreglo_modelo);$l++)

		return $Modelos;

	} // function Obtener_IdModelo() 


	// Obtener el periferico.
	function Obtener_IdPeriferico($Arreglo_perifericos,$reg_csv_perif)
	{
		$columna_1 = 0;					
		$Perifericos = "Sin Perifericos";
		$separar_cadena = explode(" ",$reg_csv_perif);
		for ($l=0;$l<count($Arreglo_perifericos);$l++)
		{
			for ($n=0;$n<2;$n++)
			{
				$contador_pal = 0;
	
				$cadena = trim($Arreglo_perifericos[$l][$n]);

				// if ( $cadena == $reg_csv_marca) // 'dell' ) // )
				if ( strcmp($cadena,trim($reg_csv_perif)) == 0)
				{					
					$Perifericos = $Arreglo_perifericos[$l][0];
					print_r('Periferico',$Perifericos);
				}
				else
				{
					//print_r('NO Cumple Condicion');
				}

			} // for ($n=0;$n<2;$n++)			

		} // for ($l=0;$l<count($Arreglo_periferico);$l++)

		return $Perifericos;

	} // function Obtener_IdPerifericos() 


// Obtener la Ubicacion.
function Obtener_IdUbicacion($Arreglo_ubicaciones,$reg_csv_ubic)
{
	$columna_1 = 0;					
	$Ubicacion = "Sin Ubicacion";
	$separar_cadena = explode(" ",$reg_csv_ubic);
	for ($l=0;$l<count($Arreglo_ubicaciones);$l++)
	{
		for ($n=0;$n<2;$n++)
		{
			$contador_pal = 0;
			for ($k=0;$k<count($separar_cadena);$k++)
			{				
				$encontro = strpos($Arreglo_ubicaciones[$l][$n],$separar_cadena[$k]);
				
				if ($encontro === false)
				{
					//print_r("Valor NO encontrado ");
				}
				else
				{
					$contador_pal++;
				}

			} // for ($k=0;$k<2;$k++)

				if ($contador_pal == count($separar_cadena))
				{
					//print_r("Valor NO encontrado ");
						$Ubicacion = $Arreglo_ubicaciones[$l][$n-1];
					return $Ubicacion;					
				}				

		} // for ($n=0;$n<2;$n++)			

	} // for ($l=0;$l<count($Arreglo_ubicaciones);$l++)
	return $Ubicacion;

} // function Obtener_IdUbicaciones() 

// Obtener la Linea.
function Obtener_IdLinea($Arreglo_linea,$reg_csv_linea)
{
	$columna_1 = 0;					
	$Linea = "Sin Linea";
	$separar_cadena = explode(" ",$reg_csv_linea);
	for ($l=0;$l<count($Arreglo_linea);$l++)
	{
		for ($n=0;$n<2;$n++)
		{
			$contador_pal = 0;
			for ($k=0;$k<count($separar_cadena);$k++)
			{				
				$encontro = strpos($Arreglo_linea[$l][$n],$separar_cadena[$k]);
				
				if ($encontro === false)
				{
					//print_r("Valor NO encontrado ");
				}
				else
				{
					$contador_pal++;
				}

			} // for ($k=0;$k<2;$k++)

				if ($contador_pal == count($separar_cadena))
				{
						$Linea = $Arreglo_linea[$l][$n-1];
					return $Linea;					
				}				

		} // for ($n=0;$n<2;$n++)			

	} // for ($l=0;$l<count($Arreglo_linea);$l++)
	return $Linea;

} // function Obtener_IdLinea() 

function ObtenerPrecio($Periferico)
{
	switch ($Periferico)
	{
		case (1):	// Laptop
			$Precio = 1000;
			break;
		case (2): //Desktop
			$Precio = 800;
			break;
		case (3):	// Impresora
			$Precio = 1000;
			break;
	

			case (6): // Monitor	
			$Precio = 220;
			break;
		case (13): // Docking Station 
			$Precio = 220;
			break;								
		default:
			$Precio = 0;
			break;
		}
		return $Precio;
	}

function Eliminar_Espacios($cadena)
{
  $sin_espacios = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $cadena);
  return $sin_espacios;
}


function nombreMes ($mes)
{

	if (($mes == '1') or ($mes == '01') or ($mes == 'Jan') or ($mes == 'Ene'))
		{
			$nombre_mes = "Ene";						
		}
	elseif (($mes == '2') or ($mes == '02') or ($mes == 'Feb') or ($mes == 'Feb'))
		{
			$nombre_mes = "Feb";	
		}
	elseif (($mes == '3') or ($mes == '03') or ($mes == 'Mar') or ($mes == 'Mar'))
		{
			$nombre_mes = "Mar";	
		}
	elseif (($mes == '4') or ($mes == '04') or ($mes == 'Apr') or ($mes == 'Abr'))
		{
			$nombre_mes = "Abr";	
		}
	elseif (($mes == '5') or ($mes == '05') or ($mes == 'May'))
		{
			$nombre_mes = "May";	
		}
	elseif (($mes == '6') or ($mes == '06') or ($mes == 'Jun'))
		{
			$nombre_mes = "Jun";	
		}
	elseif (($mes == '7') or ($mes == '07') or ($mes == 'Jul'))
		{
			$nombre_mes = "Jul";	
		}
	elseif (($mes == '8') or ($mes == '08') or ($mes == 'Aug') or ($mes == 'Ago'))
		{
			$nombre_mes = "Ago";	
		}
	elseif (($mes == '9') or ($mes == '09') or ($mes == 'Sep'))
		{
			$nombre_mes = "Sep";	
		}
	elseif (($mes == '10') or ($mes == 'Oct')) 
		{
			$nombre_mes = "Oct";	
		}
	elseif (($mes == '11') or ($mes == 'Nov')) 
		{
			$nombre_mes = "Nov";	
		}
	elseif (($mes == '12') or ($mes == 'Dec') or ($mes == 'Dic'))
		{
			$nombre_mes = "Dic";	
		}
	else
		{
			$nombre_mes = "0";	
		}

		return $nombre_mes;

}

// Se debe teclear el nombre del MES a tres caracteres
// Por defecto se tomara el formato mexicano "DD/MMM/AAAA"
// $fecha_separada = Esta en arreglo separado 12 10 2026

function Valida_mes($fecha_separada)
{

// Se mostrara siempre en formato Mexicano , independientemente si la escriben en formato Americano.

$meses = Array('Ene','Jan','Feb','Mar','Apr','Abr','May','Jun','Jul','Agu','Ago','Sep','Oct','Nov','Dec','Dic');

	

	//$dia = Null;
	$mes = 0;
	$anno = 0; //$fecha_separada[2];

	// Validando el año
	// $anno_actual = date("Y"); // Obtiene el Año actual
	

	if (intval($fecha_separada[2]) > 2020 || intval($fecha_separada[2]) <= 2050) // Fecha Americana
	{
			$anno = $fecha_separada[2];
	}
	else
	{
		$anno = '1970';
	}

	// Cuando es Formato de fecha Mexicano
	if ((intval($fecha_separada[0]) > 0 && intval($fecha_separada[0]) <= 31))
	{
		/*
		// Cuando el mes es con tres caracteres

		// Formato americano, el nombre de mes escrito
		if (in_array($fecha_separada[0],$meses))
		{
			$mes_letra = 'S';
			$mes = nombreMes($fecha_separada[0]);
			$indice_dia = 1;
			$indice_mes = 0;
		}

		// Formato mexicano, el nombre de mes escrito
		if (in_array($fecha_separada[1],$meses))
		{
			$mes_letra = 'S';
			$mes = nombreMes($fecha_separada[1]);
			$indice_dia = 0;
			$indice_mes = 1;
		}

		*/

			$dia = $fecha_separada[0];
			$mes = nombreMes($fecha_separada[1]);

	}
	else
	{
		$dia = 0;
		$mes = nombreMes($fecha_separada[1]);
	}

	/*

	// Validando la fecha cuando mes sea "Febrero"
	if ($mes == 'Feb' || $mes == '02' || $mes == '2')
	{
		if (intval($fecha_separada[$indice_dia]) > 0 && intval($fecha_separada[$indice_dia]) <= 29) // Fecha Americana
		{
				$dia = $fecha_separada[$indice_dia];
				
		}
		else
		{
			$dia = 0; // $fecha_separada[0];	
		}
	}
	else 
	{
			if (intval($fecha_separada[$indice_dia]) > 0 && intval($fecha_separada[$indice_dia]) <= 31) // Fecha Americana
			{
					$dia = $fecha_separada[$indice_dia];

			}
			else
			{
				$dia = 0; // $fecha_separada[0];
			
			}

	} // if ($mes == 'Feb')

*/

	$fecha = $dia.'/'.$mes.'/'.$anno;			

	/*
	if ($indice_dia == 0)
		{
			$fecha = $dia.'/'.$mes.'/'.$anno;			
		}
	else
		{
			$fecha = $mes.'/'.$dia.'/'.$anno;
		}
	
	*/

/*

	if (intval($fecha_separada[0]) > 12) // Fecha Mexicana
	{
		if (intval($fecha_separada[0]) < 31)
		{
			$fecha["fecha_mex"] = 'S';
			//print_r("Esta en el formato de Mexicano de DD/MM/AA");	
			//print_r($fecha_separada);
		} 
		else
		{			
			$fecha["fecha_mex"] = 'N';
		}

		
	}
	// Validando Mes (Formato Americano)
	if (intval($fecha_separada[0]) < 12) 
	{
		if (intval($fecha_separada[0]) > 1)
		{
			//print_r("Esta en el formato de Americano de MM/DD/AA");
			//print_r($fecha_separada);
			//print_r(" ");
			//print_r($fecha_separada[1]);

			$fecha["fecha_americ"] = 'S';
		}
		else
		{
			$fecha["fecha_americ"] = 'N';
		}

	}
	*/

	return $fecha;
}


// Cambiar el numero de mes a nombre mes

function CambiarMes($fecha)
{
	$fecha_cadena = $fecha;
	$buscar1 = "/";
	$buscar2 = "-";
	
	if (str_contains($fecha_cadena,$buscar1))
	{
		$fecha_separada = explode("/",$fecha_cadena);	
	}

	if (str_contains($fecha_cadena,$buscar2))
	{
		$fecha_separada = explode("-",$fecha_cadena);	
	}



		$fecha = Valida_mes($fecha_separada);

		//print_r($fecha_validada);
		//die;
/*
		if ($fecha_validada["fecha_mex"] == 'S')
		{
			$indice = 1; // Fecha Mexicana
		}
		elseif ($fecha_validada["fecha_americ"] == 'S')
		{
			$indice = 0;			// Fecha Americana
		}
		else
		{
			$indice = 1;
			$fecha_separada[0] = '1';
			$fecha_separada[2] = '1970';
		}

		//print_r($fecha_validada);
		//print_r($indice);
		//die();

*/

	
	/*
	

		
	/*
	
	//print_r($fecha_separada[1]);
	//die();

	if ($indice == 1) // Fecha Mexicana
	{
		$fecha = $fecha_separada[0].'/'.$nombre_mes.'/'.$fecha_separada[2];		
	}
	else // Fecha Americana
	{
		$fecha = $nombre_mes.'/'.$fecha_separada[1].'/'.$fecha_separada[2];
	}


*/

	print_r($fecha);
	die();

	return $fecha;

}

function Depurar_Caracter_mac($cadena_Mac)
{
	if (empty ($cadena_Mac))
		{
			$Mac_Address = null;
		}
	else
	{
		$mac_caracter = $cadena_Mac;
		$buscar_mac = ":";
		if (str_contains($mac_caracter,$buscar_mac))
		{
			$Mac_Address = str_replace(":","-",$cadena_Mac);
		}
	}

	return $Mac_Address;
}

	/*
	//Desṕlegando el contenido  del arrenglo recien creado 
	for ($q=0;$q<count($Arreglo_modelos);$q++)
	{
		for($a=0;$a<2;$a++)
		{
			print_r("Contenido de -arreglo-".$arreglo[$q][$a]);
			print_r("<br>");
		}
	}
*/

	//var_dump($Arreglo_modelos);

// Importando el archivo CSV
// ================================================================
// Importante que cuando se exporte desde Excel sea a formato : CSV delimeted Solamente
// ================================================================


		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
		if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes))
		{
			if(is_uploaded_file($_FILES['file']['tmp_name']))
			{
				$csv_file_it = fopen($_FILES['file']['tmp_name'], 'r');
				//fgetcsv($csv_file);
				// get data records from csv file
				
				$datos_grabar = array();
				$num_reg_no_existen = 0;
				$num_reg_existen = 0;
				$num_reg_act = 0;
				$contador = 0;
				$ruta = "vistas/img/productos/default/anonymous.png";

				while(($inv_it = fgetcsv($csv_file_it)) !== FALSE)
				{
					// **** Para subir el inventario de IT
								
					// Para convertirlo a forma de "YYYY-MM-DD" para poderlo gabar en MySQL.
					// $fecha_inicio = date("Y-m-d",strtotime($cinta_record[1]));

					// Revisando si el Serial esta vacio.
					if (!empty($inv_it[3])) 
					{
						$contador++;
						//echo "Serial No vacio";

						//print_r ("Procesando registro .. \n ".$contador);
	
						$valor = $inv_it[3]; // Serial
						$item = "num_serie";
						$tabla = "t_Productos";
						$orden = "nombre";

						// Descomentar para que determinar si existe el producto.
						$existe_prod = ModeloProductos::mdlMostrarProductos($tabla,$item,$valor,$orden);
												
						// if (!empty($exite_prod))
						// if (!$exite_prod)
						/*
							Marca 		-> $inv[0] 
							Modelo	-> $inv[1] 
							Periferico	-> $inv[2]
							Serial		-> $inv[3] reemplazo de $inv[8]
							Precio Compra 	->$inv[4] 	NO se utiliza 
							Precio Venta	-> $inv[5]	NO se utiliza 	
							Hostname 			-> $inv[6]
							Ubicacion 		-> $inv[7]
							Estacion 			-> $inv[8]
							IP						-> $inv[9]
							Mac Address		-> $inv[10]
							Garantia			-> $inv[11]
							PO						-> $inv[12]


					*/


						// Verifica si ya existe el serial en la tabla
						$eXiste_prod = "S";
						$modelo_sinEspacios = Eliminar_Espacios($inv_it[1]);												
						$marca_sinEspacios = Eliminar_Espacios($inv_it[0]);
	
						$periferico_sinEspacios = Eliminar_Espacios($inv_it[2]);
						

				
						if ($eXiste_prod=="S")
						{
							//echo "existe producto \r"; Eliminar_Espacios
							
							$Modelo = Obtener_IdModelo($Modelos_Obtenidos,strtolower($modelo_sinEspacios));

							$Marca = Obtener_IdMarca($Marcas_Obtenidas,strtolower($marca_sinEspacios));

							$Periferico = Obtener_IdPeriferico($Perifericos_Obtenidos,strtolower($periferico_sinEspacios));

							if (empty($inv_it[7]))
							{
									$ubicacion = 22; // 22 = Sistemas IT
							}
							else
							{
								$ubicacion_sinEspacios = Eliminar_Espacios($inv_it[7]);
								$ubicacion = Obtener_IdUbicacion($Ubicaciones_Obtenidas,strtolower($ubicacion_sinEspacios));
							}
							
							//print_r ($ubicacion);
							//die();

												
							if (empty($inv_it[4]))
								{
									$precio_compra = null;
								}
							else
								{
									$precio_compra = $inv_it[4];
								}

							if (empty($inv_it[5]))
								{
									$precio_venta = null;
								}
							else
								{
									$precio_venta = $inv_it[5];
								}


								$hostname = $inv_it[6] ?? null;
							
							$estacion = $inv_it[8] ?? null;
							$IP = $inv_it[9] ?? null;

							$Mac_Address = Depurar_Caracter_mac($inv_it[10]);


							//$Mac_Address = $inv_it[10] ?? null;
							$garantia_fecha = $inv_it[11] ?? null;
							$po = $inv_it[12] ?? null;
							$comentarios_tabla = $inv_it[13] ?? null;

							//$garantia = $inv_it[11] ?? null;

							if (!empty($garantia_fecha))
							{
								// $garantia = date("d-m-Y",strtotime($_POST["nuevaFechaDevolucion"]));
								$garantia = CambiarMes($garantia_fecha);
							}
							else
								{
									$garantia = null;
								}

							
							//print_r($Mac_Address."\n");
							print_r($garantia. "\n");							
							//print_r($ubicacion. "\n");							
							die();
							

							$Seriales = trim($inv_it[3]);

							$tabla = "t_Empleados";
							$item = "ntid";
							$valor = '000'; // $inv_it[11]; // NTID Empleado.
							$orden = "apellidos";
							$empleado = 0;
							

							if (empty($valor))
							{
								$EncontroEmpleado = "No asignado";
								$Id_Empleado = 1; // Id Sistemas
							}
							else
							{	
								/*
								$empleado = ModeloEmpleados::mdlMostrarEmpleados($tabla,$item,$valor,$orden); 
								if ($empleado)
								{
									$EncontroEmpleado = Eliminar_Espacios($inv_it[11]);	// NTID Empleado							
									$Id_Empleado = $empleado['id_empleado'];									
								}
								else
								{
									$EncontroEmpleado = 'NO encontrado '.Eliminar_Espacios($inv_it[11]);
									echo "<br>";
									echo "Empleado no Encontrado ".Eliminar_Espacios($inv_it[11]);
									$Id_Empleado = 1;
									$num_reg_no_existen++;
								}
								*/

							}

							//die();

							$Id_Empleado = 1;  // Sistemas IT 
							// $Precio = ObtenerPrecio($Periferico);
				
							$datos_grabar = array("id_modelo"=>$Modelo,		
																		"id_marca"=>$Marca,
																		"id_periferico"=>$Periferico,
																		"nomenclatura"=>$hostname,																		
																		"num_serie"=>$Seriales,
																		"asset"=>'',
																		"id_telefonia" =>1,
																		"id_plan_tel" =>1,
																		"num_tel" =>'',
																		"cuenta" =>'',
																		"direcc_mac_tel" =>$Mac_Address,
																		"imei_tel" =>'',
																		"num_ip" =>$IP,
																		"edo_tel" =>'NO Aplica',
																		"id_empleado" =>$Id_Empleado,
																		"id_almacen" =>3, // Almacen Idf5
																		"id_edo_epo" =>3, // Nuevo
																		"stock" =>1,
																		"precio_compra" =>$precio_compra,
																		"precio_venta" =>$precio_venta,
																		"comentarios" =>rtrim(" "),
																		"loftware" =>'',
																		"id_ubicacion" =>$ubicacion,  // 22, // Sistemas - IT
																		"id_linea" =>1, // Sin Linea
																		"estacion" =>$estacion,
																		"npa" =>'',
																		"idf" =>'',
																		"patch_panel" =>'',
																		"puerto" =>'',
																		"funcion" =>'',
																		"jls" =>$garantia,
																		"qdc" =>$po,
																		"cuantas_veces" =>1,
																		"imagen"=>$ruta
																	);

							if (($datos_grabar["id_modelo"] != "Sin Modelos") && ($datos_grabar["id_marca"] != "Sin Marcas") && ($datos_grabar["id_periferico"] != "Sin Perifericos"))
							{
								//$respuesta = "error";
								$respuesta = "ok";
								$tabla = "t_Productos";
								
								if ($existe_prod)
								{									
									$num_reg_existen++;
									$valor2 = $existe_prod["id_producto"];

									// $item1 = Es el nombre del campo de la tabla que se quiere modificar :  Stok, precio, descripcion,
									// $valor1 = Es el valor del campo($item1) a modificar
									// $valor2 = Es el valor del "id" del campo a modificar, que ppor lo general es el "Id_producto" 

									// Se tiene que colocar cada uno de los campos a modificar
									$valor2 = $existe_prod["id_producto"];

									//$item1 = "id_periferico";
									//$valor1 = $datos_grabar["id_periferico"];

									//$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);


									if (!empty($datos_grabar["nomenclatura"]))
										{
											$item1 = "nomenclatura";
											$valor1 = $datos_grabar["nomenclatura"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

									if (!empty($datos_grabar["id_ubicacion"]))
										{
											$item1 = "id_ubicacion";
											$valor1 = $datos_grabar["id_ubicacion"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

									if (!empty($datos_grabar["estacion"]))
										{
											$item1 = "estacion";
											$valor1 = $datos_grabar["estacion"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

									if (!empty($datos_grabar["num_ip"]))
										{
											$item1 = "num_ip";
											$valor1 = $datos_grabar["num_ip"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}


									if (!empty($datos_grabar["direcc_mac_tel"]))
										{
											$item1 = "direcc_mac_tel";
											$valor1 = $datos_grabar["direcc_mac_tel"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

										// PO
									if (!empty($datos_grabar["qdc"]))
										{
											$item1 = "qdc";
											$valor1 = $datos_grabar["qdc"];
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

										// Garantia
									if (!empty($datos_grabar["jls"]))
										{
											$item1 = "jls";
											$valor1 = $datos_grabar["jls"];											
											$ActualizarReg = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);
										}

									if ($ActualizarReg == "ok")
									{
										$num_reg_act++;
									}


								}
								else 
								{
									// Descomentarla para que grabe en la tabla
									$tabla = "t_Productos";
									$respuesta = ModeloProductos::mdlIngresarProducto($tabla,$datos_grabar);
									$num_reg_no_existen++;							

									$valor = $inv_it[3]; // Serial
									$item = "num_serie";
									$tabla = "t_Productos";
									$orden = "nombre";
									$existe_prod = ModeloProductos::mdlMostrarProductos($tabla,$item,$valor,$orden);
								} 

								if ($respuesta == "ok")
								{										
									// Se le asigna al empleado el componente de computo, en la tabla de "Productos"

									// $item1 = Actualizar de forma dinamica, Stok, precio, descripcion,
									// $valor1 = Es el valor del campo($item1) a modificar
									// $valor2 = Es el valor del "id" que se quiere modificar.

									$tabla = "t_Productos";
									$item1 = "id_empleado";
									$valor1 = $datos_grabar["id_empleado"];									
									$valor2 = $existe_prod["id_producto"];
									//$valor2 = empty($existe_prod["id_producto"])?$datos_grabar["id_empleado"]:$existe_prod["id_producto"];
									/*
									print_r("<pre>");
									print_r("Id Empleado : ".$valor1);
									echo ("<br>");
									print_r("Id Producto : ".$valor2);
									echo ("<br>");
									print_r("Id Empleado en tabla de Producto : ".$existe_prod["id_empleado"]);
									print_r("</pre>");									
									exit;
									*/

									if ($existe_prod["id_empleado"] != $datos_grabar["id_empleado"])
									{
										 $AsignarEpo = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);

										 // Actualizando la existencia(Stock) del producto
										 $tabla = "t_Productos";
										 $item1 = "stock";
										 if ( $datos_grabar["id_empleado"] == 1 ) // Sistemas
										 {
											 $valor1 = 1;	 								
										 }
										 else
										 {
											$valor1 = 0;
										 }

										 $valor2 = $existe_prod["id_producto"];
	 
										 $ActExist = ModeloProductos::mdlActualizarProducto($tabla,$item1,$valor1,$valor2);

									 	if ($AsignarEpo != "ok")
										{
												echo "<br>";
												echo "Error al Asignar Equipo .".$inv_it[3];
										}
										else
										{
											// Actualizar el centro de costos.
											//Es el empleado que se encuentra en el archivo “CSV”
											// datos_grabar[‘id_empleado’]
											// CC        ->$inv_it[13]

											// Verificando si existe el centro de costos, pero antes revisar que no este vacio
											/*
												if (!empty($inv_it[13]))
												{
													$tabla = 't_Centro_Costos';
													$item = "num_centro_costos";
													$valor = trim($inv_it[13]);
													$Verif_CC = ModeloCentro_Costos::mdlMostrarCentro_Costos($tabla,$item,$valor);
		
													if ($Verif_CC)
													{						
														// $tabla = La tabla a utilizar					
														// $item1 = Campo a Modificar
														// $campoValidar = Campo que se usara para validar la condicion.
														// $valor1 = Es el contenido de "$item1" el valor a Grabar en la tabla
														// $valor2 = Es el valor de la condicion a validar
														// 
														$tabla = 't_Empleados';												
														$item1 = "id_centro_costos";
														$campoValidar = "id_empleado";
														$valor1 = $Verif_CC['id_centro_costos'];
														$valor2 =  $datos_grabar["id_empleado"];
														$Act_CC = ModeloEmpleados::mdlActualizarEmpCualquierCampo($tabla,$item1,$campoValidar,$valor1,$valor2);
														if (!$Act_CC)
														{
															echo "<br>";
															echo "Error al Actualizar el Centro de Costos en tabla Empleados";
														}
														
													}
													else
													{
														echo "<br>";
														echo "NO se encontro el Centro de Costos = ".$inv_it[13]." NTID Empleado = ".$inv_it[11];
													}
												} // if (!$inv_it[13])

											*/

											//echo "Producto Asignado al Empleado : ".$valor1;
										}
										if ($ActExist != "ok")
										{
												echo "<br>";
												echo "Error al Actualizar -Stock Producto ".$inv_it[3];
										}
										else
										{
											//echo "Producto Asignado al Empleado : ".$valor1;
										}


									}
								}
								else // if ($respuesta == "ok")
								{
									print_r ("error al grabar el registros en la Base de Datos  : ".$datos_grabar["num_serie"]);
									print ("<br>");									
								}
							}
							else   // if ($datos_grabar["id_modelo"] != "Sin Modelos") ....
							{
								print_r("Registros NO GRABADOS ===> : ");
								// print_r('Asset = '.$inv_it[0].' ; ');
								//print_r('Current Hostname = '.$inv_it[4].' ; ');
								print_r('Periferico  Kind = '.$datos_grabar["id_periferico"].' ; ');		
								print_r('Brand  Marca = '.$datos_grabar["id_marca"].' ; ');
								print_r('Modelo = '.$datos_grabar["id_modelo"].' ; ');						
								print_r('Serial = '.$inv_it[3].' ; ');
								//print_r('Numero Empleado = '.$EncontroEmpleado.' ; ');				
								print "<br>";
							}
							
						}
						else // if (empty($exite_prod))
						{
							//$num_reg_existen++;							
						}

					} // if (!empty($inv_it[3]))

				} //while(($inv_it = fgetcsv($csv_file_inv)) !== FALSE)

				print_r('<br>');
				print_r("Seriales Grabados =  ".$num_reg_no_existen);
				print_r('<br>');
				print_r("Seriales Actualizados =  ".$num_reg_act);
				print_r('<br>');
				print_r("Seriales Existentes = ".$num_reg_existen);

				fclose($csv_file_it);


			} // if(is_uploaded_file($_FILES['file']['tmp_name']))

		} //if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes))


?>