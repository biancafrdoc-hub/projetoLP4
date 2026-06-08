<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Revista</title>
    <style>

        body{
            font-family: Arial;
            background-color: #fff0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card{
            background-color: white;
            width: 500px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }

        h1{
            text-align: center;
            color: hotpink;
            margin-bottom: 30px;
        }

        p{
            font-size: 18px;
            margin: 15px 0;
        }

        strong{
            color: deeppink;
        }

        a{
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: hotpink;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
        }

        a:hover{
            background-color: deeppink;
        }

    </style>
</head>

<body>

    <div class="card">

        <h1>Detalhes da Revista</h1>

        <p><strong>ID:</strong> {{$revista->id}}</p>

        <p><strong>Título:</strong> {{$revista->titulo}}</p>

        <p><strong>Editora:</strong> {{$revista->editora}}</p>

        <p><strong>Categoria:</strong> {{$revista->categoria}}</p>

        <p><strong>Edição:</strong> {{$revista->edicao}}</p>

        <p><strong>Ano:</strong> {{$revista->ano_publicacao}}</p>

        <p><strong>Páginas:</strong> {{$revista->quantidade_paginas}}</p>

        <a href="/revistas">
            Voltar
        </a>

    </div>

</body>

</html>