<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(100deg, yellow, black);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid black;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-image: linear-gradient(to right, rgb(249, 255, 86), rgb(30, 27, 35));
        }
    </style>
</head>
<body>
<a href="index.html">Voltar</a>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="Cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>