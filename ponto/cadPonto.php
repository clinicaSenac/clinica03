<html>
<head>
<meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center> <h1> PONTO</h1> </center>
<?php

date_default_timezone_set('America/Sao_Paulo');
$data = date('d-m-Y');

$hora = date('H:i:s');

?>

<form method="POST" action="inserirPonto.php">
   
    Data:  <input type="text" value="<?php echo $data; ?>" name="data"> 


    Hora:  <input type="text" value="<?php echo $hora; ?>" name="hora"> 

    Status: 
    Entrada: <input type="radio" id="huey" name="status" value="entrada" checked /> 
    Saída: <input type="radio" id="huey" name="status" value="saida" checked /> 
    </br>
   <a><center> <input type="submit" value="Registrar"> </center> </a>
</form>

</body>
</html>