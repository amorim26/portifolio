<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>

    <style>
        :root {
            font-size: 16px;
        }

       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
           /* background-image:url('imagens/logo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: 100%;*/

            border: 10px solid purple;
            width: 70vw;
            height: 100vw;
            overflow: hidden;
        }    
        p {
           /*border: 10px solid red;*/
            border-width: 10px;
            border-color: purple;
            border-style: solid;
            font-size: 3rem;
            
        }

        h1 {
            background: purple;
            display:block;
        }

        H1:hover {
            background-color: violet;
            display: block;
        }

        .logo{
            position: absolute;
            bottom: calc(100vh/2);
            right: 0;
        }
    </style>
</head>
<body>

<div class="interface">

    <header class="cabecalho">

        <nav class="menu">

            <div class="logo">

                <img src="imagens/logo.png" alt="LOGO" width="150" />

            </div>
            <ul>
                    <li>Home</li>
                    <li>Serviços</li>
                    <li>Produtos</li>
                    <li>Portifolio</li>
                    <li>Sobre</li>
                    <li>Contato</li>
             </ul>

             <ol>

            </ol>

        </nav>
        <div class="title">

            <h1 class="titulo">Entregando serviços de qualidade</h1>
            <h1 class="subtitulo">Soluçoes em Ti</h1>
            <p class="paragrafo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta placeat reiciendis distinctio sapiente asperiores fuga!</p>

        </div>

        <div class="socialIcons">
            <a href="#">Twitter</a>
            <a href="#">FaceBook</a>
            <a href="#">Linkedin</a>
            <a href="#">Instagram</a>
        </div>

    </header>
</div>
    
</body>
</html>