<?php session_start(); 
    // Aqui se inicia o nosso PHP
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Nimble Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="./css/pageStyleLogin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <center>
                <form action="session.php" method="POST">
                <div class="bloco col-md-6">
                    <center>
                        <h1>Login</h1>
                    </center>
                    <hr class="linha" />
                    <h5>Nome de usuário</h5>
                    <div class="input-group mb-3">
                        <input name="user" type="text" class="form-control" placeholder="Digite seu nome de usuário" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <h5>Senha</h5>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Digite sua senha" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <div class="botao">
                        <center>
                            <a><button type="submit" class="btn-lg btn-primary mb-2"
                            name="submit" id="btn">Login</button></a>
                        </center>
                    </div>
                </form>
                </div>
            <center>
        </div>
    </div>
</body>
</html>