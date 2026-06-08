<!DOCTYPE html>
<html>

<head>

    <title>Editar Revista</title>

    <style>

        body{
            font-family: Arial;
            background-color: #fff0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container{
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

        input{
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        button{
            width: 100%;
            background-color: hotpink;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover{
            background-color: deeppink;
        }

        a{
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: deeppink;
            font-weight: bold;
        }

        .erro{
            background-color: #ffd6e7;
            color: deeppink;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>Editar Revista</h1>

        @if($errors->any())

            @foreach($errors->all() as $erro)

                <div class="erro">
                    {{$erro}}
                </div>

            @endforeach

        @endif

        <form action="/revistas/{{$revista->id}}" method="POST">

            @csrf
            @method('PUT')

            <input type="text" name="titulo" value="{{$revista->titulo}}" placeholder="Título">

            <input type="text" name="editora" value="{{$revista->editora}}" placeholder="Editora">

            <input type="text" name="categoria" value="{{$revista->categoria}}" placeholder="Categoria">

            <input type="number" name="edicao" value="{{$revista->edicao}}" placeholder="Edição">

            <input type="number" name="ano_publicacao" value="{{$revista->ano_publicacao}}" placeholder="Ano">

            <input type="number" name="quantidade_paginas" value="{{$revista->quantidade_paginas}}" placeholder="Quantidade de páginas">

            <button type="submit">
                Atualizar Revista
            </button>

        </form>

        <a href="/revistas">
            ← Voltar
        </a>

    </div>

</body>

</html>