<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function meses($mes){
	switch ($mes) {
		case '1':$mes="Enero";break;
		case '2':$mes="Febrero";break;
		case '3':$mes="Marzo";break;
		case '4':$mes="Abril";break;
		case '5':$mes="Mayo";break;
		case '6':$mes="Junio";break;
		case '7':$mes="Julio";break;
		case '8':$mes="Agosto";break;
		case '9':$mes="Septiembre";break;
		case '10':$mes="Octubre";break;
		case '11':$mes="Noviembre";break;
		case '12':$mes="Diciembre";break;
	}
	return $mes;
}

function dia($dia){
	switch ($dia) {
		case '1':$dia="Lunes";break;
		case '2':$dia="Martes";break;
		case '3':$dia="Miercoles";break;
		case '4':$dia="Jueves";break;
		case '5':$dia="Viernes";break;
		case '6':$dia="Sabado";break;
		case '7':$dia="Domingo";break;

	}
	return $dia;
}

function fecha_to_str($fecha){
	$fecha1=explode('-',$fecha);
	$anio=$fecha1[0];  
	$mes=$fecha1[1];  
	$dia=$fecha1[2];  
	$dia_semana=date('w', strtotime($fecha));
	return dia($dia_semana).", ".$dia." de ".meses($mes)." de ".$anio;
}

function date_to_str($fecha){
	$fecha=explode('-',$fecha);
	$anio=$fecha[0];
	$mes=$fecha[1]; 
	$dia=$fecha[2]; 
	return $dia." de ".meses($mes);
}

function date_to_str_full($fecha){
	$fecha=explode('-',$fecha);
	$anio=$fecha[0];
	$mes=$fecha[1]; 
	$dia=$fecha[2]; 
	return $dia." de ".meses($mes)." del ".$anio;
}

 function anio($name=FALSE,$class=FALSE){
	 $date=date("Y");	
	 $año='<select name="'.$name.'" class="'.$class.'">';
		$año.='<option value="">Año</option>';
	 	$año.='<option value='.$date.'>'. $date.'</option>';
		$año.='<option value="2013">2013</option>';
	 $año.='</select>';
	 return $año;
}



 function generaMeses($name=FALSE,$class=FALSE){
	 $fecha='<select name="'.$name.'" class="'.$class.'">';	 
	 	$fecha.='<option value="">Mes</option>';
	 for ($i=1; $i <=12 ; $i++) { 
	 	$fecha.='<option value='.$i.'>'.meses($i).'</option>';
	 }
	 $fecha.='</select>';
	 return $fecha;
 }

/* End of file csv_helper.php */
/* Location: ./system/helpers/csv_helper.php */