<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RateHub</title>
    <link rel="stylesheet" href="../css/cad.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            if ($username == "admin" && $password == "1234") {
                echo "<p>Login realizado com sucesso!</p>";
            } else {
                echo "<p>Usuário ou senha incorretos!</p>";
            }
        }
        ?>
</body>
</html>
