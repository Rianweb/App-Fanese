<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    require_once "conexao.php";

    $login = $_POST['username'];
    $senha = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_usuarios WHERE user_usuario = '$login' AND password_usuario = '$senha'") or die(mysqli_error($conn));

    if (mysqli_num_rows($sql) > 0) {
        $result = mysqli_fetch_assoc($sql);
        $_SESSION['nivel'] =    $result['nivel'];
        $_SESSION['usuario'] =  $result['user_usuario'];
        $_SESSION['company'] =  $result['tb_company'];
        header("Location:index.php");
    } else {
			header("Location:login.php");
    }
} else {
    echo json_encode("variavel não existe");
}
session_write_close();
mysqli_close($conn);
