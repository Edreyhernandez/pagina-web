<html>
	<head>
		<title>Edrey hernandez Dzib</title>
		<link href="Estilos/login.css" rel="stylesheet" type="text/css"/>
	</head>
	
	
<body>	
	<?php 

	
$Usuario="160300135";
$Contra="alumno";

//----------------//
$form_user=$_POST[Usuario];
$form_pass=$_POST[Contraseña];
//----------------//
	if($Usuario==$form_user){
	if($Contra==$form_pass){
		
	echo "estas dentro";
			
	}else{
		echo "La contraseña es erronea";
	}
}else{
	echo "El usuario es erroneo.";
}
?>
	</body>
	</html>