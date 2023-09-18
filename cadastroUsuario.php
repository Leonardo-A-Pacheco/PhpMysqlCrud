<?php 
include("01-dboverflow.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro de Usuários:</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nome de Usuário: <br>
        <input type="text" name="usr"><br>
        Senha: <br>
        <input type="password" name="pwd"><br>
        <input type="submit" name="gravar" value="Gravar Usuário">
    </form>
    
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "usr", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Entre com o nome de usuário";
        } elseif (empty($password)) {
            echo "Entre com a senha de usuário";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (name, senha)
                    VALUES ('$username', '$hash')";
            
            try {
                mysqli_query($con, $sql);
                echo "Usuário registrado com sucesso.";
            } catch (mysqli_sql_exception $e) {
                echo "Erro ao registrar o usuário: " . $e->getMessage();
            }
        }
    }

    mysqli_close($con);
    ?>
</body>
</html>
