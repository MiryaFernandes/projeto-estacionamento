<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <!-- login form -->
        <div class="login-form">
            <div class="title">Faça o login</div>
            <form action="#">

                <div class="input-box">
                    <i class='bx bx-envelope'></i>
                    <input type="text" placeholder="insira  seu email" required>
                </div>

                <div class="input-box">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" placeholder="insira sua senha" required>
                </div>

                <div class="forgot"><a href="#">esqueceu a senha?</a></div>
                    <div class="input-box">
                        <input type="submit" value="entrar">
                    </div> 

                <div class="signup-text">
                    não tem uma conta? <a href="#">crie uma agora</a>
                </div>    

            </form>
        </div>
        <!--end login form-->
        <!-- login img -->
        <div class="login-img">
            <img src="./img/logo.png" width="100%">
        </div>
    </div>
</body>
</html>