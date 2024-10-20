<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <style>
        body {
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #101014;
        }
        .pai {
            display: flex;
            flex-direction: column;
        }
        .filho {
            display: flex;
            align-items: center;
        }

        img {
            border-width: 10px;
            border-color: black;
            border-style: solid;
            margin: 10px;
        }
        .img1 {     
            width: 250px    ;
            height: auto;
        }

        .img2 {
            width: 500px    ;
            height: 300px;
            margin-left: 200px; 
        }

        .text {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
            margin-top: 15px; 
            color:white;
            padding-left: 30px;
            
        }
    </style>
</head>
<body>
<div class="pai">
    <div class="filho">
        <img src="../img/gta.png" class="img1" alt="Imagem principal">
        <img src="../img/a.jpg" class="img2" alt="Segunda imagem">
    </div>
    <div class="text">
        <h2>Descrição</h2>
        <p>Sua desc</p>
    </div>
</div>
</body>
</html>
