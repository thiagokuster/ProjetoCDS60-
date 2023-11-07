<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTES</title>
    <link rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,100;8..144,600&display=swap"rel="stylesheet">
</head>
<body>
    <div id="menu">
        <div id="logo">
            <img src="Brasao_Governo_branco_500.png" width="150" alt="logo-aqui">
        </div>
        <nav>
            <a href="?page=inicio">Início</a>
            <a href="?page=novo">Cadastro</a>
            <a href="?page=consulta">Consulta</a>
        </nav>
    </div>
    <div class="container">
        <div class="row">
    <?php
    include("config.php");
    switch (@$_REQUEST["page"]){
        case "inicio":
            include("inicio.php");        
            break;
        case "novo":
            include("CDS1.php");
            break;
        case "consulta":
            include("CDS2.php");
            break;
        case "salvar":
            include("salvar.php");
            break;
        case "editar":
            include("editar.php");
            break;
            case "visualizar":
                include("visualizar.php");
                break;
            }?>
        </div>
    </div>
<style>
body{
    font-family: Arial, Helvetica, serif;
    background-color: white;
    margin: 0;
    padding: 0;
}
.container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    margin-inline: initial;
    padding-bottom: 20px;
}
#menu{
    width: 250px;
    height: 100%;
    background-color: #3498db;
    position: fixed;
    left: 0;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
    color: #fff;
    transition: all 0.3s;
}
#menu a {
    padding: 15px 25px;
    text-decoration: none;
    font-size: 20px;
    color: #fff;
    display: block;
    transition: 0.4s;
    }
#menu a:hover{
    background-color: #f392eb8a;
    transform: scale(0.9);
} 
#logo{
    margin: 20px 0;
    text-align: center;
}
#logo a{
    color: #333;
    text-decoration: none;
    font-size: 24px;
    }
#logo a:hover{
    color: #555;
}
#logo img{
    max-width: 100%;
    height: auto;
}
nav a{
    text-decoration: none;
    color: white;
    margin: 0 15px; 
}
#cadastro{
    background-color: #f2f2f2; 
    padding: 20px;
}
#consulta{
    background-color: #f9f9f9;
    padding: 20px;
}
</style>
</body>
</html>