?php
include('connection.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login do Aluno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <a class="back-page" href="index.html"><i class="fa-solid fa-circle-chevron-left"></i></a> !-->
    <div class="main-geral">
    
        <div class="left-geral">
        
                <h1>Login do aluno</h1>
            
            <img src="../Sistema escolar/image/student.svg" class="img" alt="aluno">
        </div>

        <div class="right-geral">
            
            <div class="card-geral">
                <h1>login</h1>
                <form action="aluno-dashboard.html" method="post">
                    <div class="textfield">
                    <label for="matricula">Email:</label>
                    <input type="text" id="email"
                     name="email" required placeholder="email">
                    </div>
                    <div class="textfield">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required placeholder="8 caractéres">
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                </form>
            </div>

        </div>
        
    </div>
</body>
</html>
