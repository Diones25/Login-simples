<?php

    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <img class="usuario" src="img/usuario.png" width="100px" alt="">
            <h4>ACESSO DE MEMBROS</h4>
            <span>
                <img class="email" src="img/email.png" width="26px" alt="">
            </span>
            <input type="email" name="email" id="" placeholder="E-mail"><br>
            <span>
                <img class="senha" src="img/senha.png" width="26px" alt="">
            </span>
            <input type="password" name="senha" id="" placeholder="Senha"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 490px;
            height: 460px;
            padding-bottom: 15px;
            margin: 10vh auto;
            background: linear-gradient(-105deg, rgba(243,85,110,1) 0%, rgba(243,85,110,1) 35%, rgba(250,128,79,1) 100%);
            border-radius: 20px;
            box-shadow: 2px 2px 4px #95a5a6;
        }
        H4{
            margin: 0;
            text-align: center;
            padding: 15px 0 15px 0;
            color: #fff;
        }
        .usuario{
            display: block;
            margin: 0 auto;
        }
        .email{
            position: relative;
            left: 50px;
            top: 6px;
        }
        .senha{
            position: relative;
            left: 50px;
            top: 6px;
        }
        input[type="email"],input[type="password"],input[type="submit"]{
            width: 300px; 
            height: 46px;  
        }
        input[type="email"],input[type="password"]{
            border: 0;
            outline: none;
            text-align: center;
            border-radius: 40px;
            margin-bottom: 10px;
            border: solid 4px #fff;
            background: #febfb0;
            color: #d82f34;
            font-weight: bold;
            font-size: 18px;
        }
        input[type="submit"]{
            border: 0;  
            border-radius: 40px; 
            width: 310px;
            margin-left: 30px;
            font-weight: bold;
            font-size: 18px;
            background: #3d3d59;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            background: #585879;
        }
    </style>
</body>
</html>