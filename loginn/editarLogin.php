<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtusuario = $_POST['usuario'];
    $txtsenha = $_POST['senha'];
    $txtacesso = $_POST['nivelAcesso'];
    
  
    $sql = "UPDATE loginP set usuario = '$txtusuario' , senha = '$txtsenha' , nivelAcesso = '$txtacesso'   where id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listarLogin.php");
    } else {
        echo "Falha Página Login: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM loginP where id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    //  $result = mysqli_query($conn, $sql);
    ?>
    <form method="POST" method="editarLogin.php">
        <label class="form-label">Usuário: </label>
        <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>"> </br>

        <label class="form-label">Senha: </label>
        <input type="text" class="form-control" name="senha" value="<?php echo $row['senha']; ?>"> </br>

        <label class="form-label">Nivel de Acesso: </label>
        <input type="text" class="form-control" name="nivelAcesso" value="<?php echo $row['nivelAcesso']; ?>"> </br>

        

        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>