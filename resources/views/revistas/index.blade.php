<!DOCTYPE html>
<html>

<head>

    <title>Revistas de Moda</title>

    <style>

        body{
            font-family: Arial;
            background-color: #fff0f5;
            margin: 40px;
        }

        h1{
            text-align: center;
            color: hotpink;
            margin-bottom: 30px;
        }

        .botao-cadastro{
            display: inline-block;
            background-color: hotpink;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .botao-cadastro:hover{
            background-color: deeppink;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }

        th{
            background-color: hotpink;
            color: white;
            padding: 15px;
        }

        td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover{
            background-color: #ffe4ef;
        }

        .acoes a{
            text-decoration: none;
            color: deeppink;
            font-weight: bold;
            margin: 0 5px;
        }

        button{
            background-color: hotpink;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover{
            background-color: deeppink;
        }

        form{
            display: inline;
        }

    </style>

</head>

<body>

    <h1>Revistas de Moda</h1>

    <a href="/revistas/create" class="botao-cadastro">
        + Cadastrar Nova Revista
    </a>

    <table>

        <tr>

            <th>ID</th>
            <th>Título</th>
            <th>Editora</th>
            <th>Categoria</th>
            <th>Edição</th>
            <th>Ano</th>
            <th>Páginas</th>
            <th>Ações</th>

        </tr>

        @foreach($revistas as $revista)

        <tr>

            <td>{{$revista->id}}</td>

            <td>{{$revista->titulo}}</td>

            <td>{{$revista->editora}}</td>

            <td>{{$revista->categoria}}</td>

            <td>{{$revista->edicao}}</td>

            <td>{{$revista->ano_publicacao}}</td>

            <td>{{$revista->quantidade_paginas}}</td>

            <td class="acoes">

                <a href="/revistas/{{$revista->id}}">
                    Ver
                </a>

                <a href="/revistas/{{$revista->id}}/edit">
                    Editar
                </a>

                <form action="/revistas/{{$revista->id}}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Você quer mesmo excluir esta revista?')">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</body>

</html>