<?php
include_once('../model/masterModel.php');

class Persona extends MasterModel{


	function crearPersona(){

		$array=array(
			'PERSONA_ID'=>$persona_id,
			'TIPO_IDENTIFICACION_ID'=>$tipo_identificacion_id,
			'NUM_IDENT'=>$num_ident,
			'FIRSTNAME'=>$firstname,
			'LASTNAME'=>$lastname,
			'PHONE_NUMBER1'=>$phone_number1,
			'PHONE_NUNMBER2'=>$phone_nunmber2
		);

		$insert = "INSERT INTO PERSONA (PERSONA_ID,TIPO_IDENTIFICACION_ID,NUM_IDENT,FIRSTNAME,LASTNAME,PHONE_NUMBER1,PHONE_NUNMBER2) values ()";
	}

	function listar(){

		$list="SELECT * FROM PERSONA";

	}

	function consultar(){
    $array=array(
      'PERSONA_ID'=>$persona_id
    );
		$cosult="SELECT PERSONA_ID,TIPO_IDENTIFICACION_ID,NUM_IDENT,FIRSTNAME,LASTNAME,PHONE_NUMBER1,PHONE_NUNMBER2 
				 FROM PERSONA 
				 WHERE PERSONA_ID=";
	}

	function actualizarPersona(){

			$array=array(
			'PERSONA_ID'=>$persona_id,
			'TIPO_IDENTIFICACION_ID'=>$tipo_identificacion_id,
			'NUM_IDENT'=>$num_ident,
			'FIRSTNAME'=>$firstname,
			'LASTNAME'=>$lastname,
			'PHONE_NUMBER1'=>$phone_number1,
			'PHONE_NUNMBER2'=>$phone_nunmber2
		);

		$update = "UPDATE PERSONA  SET TIPO_IDENTIFICACION_ID,
										FIRSTNAME,
										LASTNAME,
										PHONE_NUMBER1,
										PHONE_NUNMBER2 WHERE NUM_IDENT=";
	}

	function eliminarPesona(){
		$array=array(
			'PERSONA_ID'=>$persona_id,
			'NUM_IDENT'=>$num_ident,		
		);
		$delete="DELETE FROM PERSONA WHERE NUM_IDENT=";
	}
   
}
?>
