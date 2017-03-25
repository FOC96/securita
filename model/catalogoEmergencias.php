<?php
	require_once 'conexion.php';
	$query = 'SELECT * FROM catalogoemergencias';

	$result = $conexion->query($query);

	if($result->num_rows > 0) {
		if($result->num_rows == 1){
			$response = $result->fetch_assoc();
		} else {
            while($row = $result->fetch_assoc()){
                $response[] = $row;
            }
        }
        $response;
	} else {
		$response = 'No se encontró ningún registro';
	}
	print_r($response);
?>