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
        <div class="form-image">
            <img src="logo.png">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="tittle">
                        <h1>Cadastro de veículos</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">continuar</a></button>
                    </div>
                    <div class="login-button">
                        <button><a href="#">cancelar</a></button>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="name">Nome:</label>
                            <input id="name" type="text" name="name" placeholder="digite seu nome" required>
                        </div>

                        <div class="input-box">
                            <label for="email">Email:</label>
                            <input id="email" type="email" name="email" placeholder="digite seu email" required>
                        </div>

                        <div class="input-box">
                            <label for="placa">Placa:</label>
                            <input id="placa" type="text" name="placa" placeholder="digite a placa" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Celular:</label>
                            <input id="number" type="tel" name="number" placeholder="(xx) xxxxx-xxxx" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Modelo:</label>
                            <input id="number" type="tel" name="number" placeholder="digite o modelo" required>
                        </div>

                        <div class="input-box">
                            <label for="cor">Cor:</label>
                            <select name="cor" id="cor">
                                <option>escolha uma cor</option>
                                <option value="preto">preto</option>
                                <option value="cinza">cinza</option>
                                <option value="verde">verde</option>
                                <option value="branco">branco</option>
                                <option value="azul">azul</option>
                                <option value="roxo">roxo</option>
                                <option value="rosa">rosa</option>
                                <option value="vermelho">vermelho</option>
                                <option value="amarelo">amarelo</option>
                                <option value="laranja">laranja</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <label for="number">Vagas:</label>
                            <select name="cor" id="cor">
                                <option value="preto">vagas</option>
                                <option value="preto">A1</option>
                                <option value="cinza">A2</option>
                                <option value="verde">A3</option>
                                <option value="branco">A4</option>
                                <option value="azul">A5</option>
                                <option value="roxo">A6</option>
                                <option value="rosa">A7</option>
                                <option value="vermelho">A8</option>
                                <option value="amarelo">A9</option>
                                <option value="laranja">A10</option>
                            </select>                       
                         </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>