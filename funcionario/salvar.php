<div class="container d-flex justify-content-center">
    
</div>
<?php

    switch(@$_REQUEST["entendo"]) {
        case 'Cadastrar':
            $FuncionarioID = $_POST["FuncionarioID"];
            $Nome = $_POST["Nome"];
            $Cargo = $_POST["Cargo"];
            $Salario = $_POST["Salario"];

            $sql = "INSERT INTO Funcionario (FuncionarioID, Nome, Cargo, Salario) VALUES ({$FuncionarioID}, '{$Nome}', '{$Cargo}', {$Salario});";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Cadastrado com sucesso, volte ao menu de clientes.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./funcionario.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível cadastrar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;

        case 'Editar':
            $FuncionarioID = $_POST["FuncionarioID"];
            $Nome = $_POST["Nome"];
            $Cargo = $_POST["Cargo"];
            $Salario = $_POST["Salario"];

            $sql = "UPDATE Funcionario SET FuncionarioID = {$FuncionarioID}, Nome = '{$Nome}', Cargo = '{$Cargo}', Salario = '{$Salario}' WHERE FuncionarioID =".$_REQUEST["id"].";";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Editado com sucesso, volte ao menu de funcionario.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./funcionario.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível Editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM Funcionario WHERE FuncionarioID=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true) {
    
                echo("

                <h1 class=\"text-center m-5\">Excluído com sucesso, volte ao menu de funcionario.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./funcionario.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível Editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;
    }