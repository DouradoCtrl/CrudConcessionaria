<div class="container d-flex justify-content-center">
    
</div>
<?php

    switch(@$_REQUEST["entendo"]) {
        case 'Cadastrar':
            $VeiculoID = $_POST["VeiculoID"];
            $Modelo = $_POST["Modelo"];
            $Marca = $_POST["Marca"];
            $Ano = $_POST["Ano"];
            $Preco = $_POST["Preco"];
            $Estoque = $_POST["Estoque"];

            $sql = "INSERT INTO Veiculo (VeiculoID, Modelo, Marca, Ano, Preco, Estoque) VALUES ({$VeiculoID}, '{$Modelo}', '{$Marca}', {$Ano}, {$Preco}, {$Estoque});";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Cadastrado com sucesso, volte ao menu de veículos.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./veiculo.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível cadastrar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;

        case 'Editar':
            $VeiculoID = $_POST["VeiculoID"];
            $Modelo = $_POST["Modelo"];
            $Marca = $_POST["Marca"];
            $Ano = $_POST["Ano"];
            $Preco = $_POST["Preco"];
            $Estoque = $_POST["Estoque"];

            $sql = "UPDATE Veiculo SET VeiculoID = {$VeiculoID} ,Modelo = '{$Modelo}', Marca = '{$Marca}', Ano = {$Ano}, Preco = {$Preco}, Estoque = {$Estoque} WHERE VeiculoID =".$_REQUEST["id"].";";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Editado com sucesso, volte ao menu de veículos.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./veiculo.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível Editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM Veiculo WHERE VeiculoID=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true) {
    
                echo("

                <h1 class=\"text-center m-5\">Excluído com sucesso, volte ao menu de veículo.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./veiculo.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível Editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;
    }