<div class="container d-flex justify-content-center">
    
</div>
<?php

    switch(@$_REQUEST["entendo"]) {
        case 'Cadastrar':
            $FinanciamentoID = $_POST["FinanciamentoID"];
            $VendaID = $_POST["VendaID"];
            $Parcelas = $_POST["Parcelas"];
            $TaxaJuros = $_POST["TaxaJuros"];

            $sql = "INSERT INTO Financiamento (FinanciamentoID, VendaID, Parcelas, TaxaJuros) VALUES ({$FinanciamentoID}, {$VendaID}, {$Parcelas}, {$TaxaJuros});";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Cadastrado com sucesso, volte ao menu de financiamentos.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./financiamento.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível cadastrar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;

        case 'Editar':
            $FinanciamentoID = $_POST["FinanciamentoID"];
            $VendaID = $_POST["VendaID"];
            $Parcelas = $_POST["Parcelas"];
            $TaxaJuros = $_POST["TaxaJuros"];

            $sql = "UPDATE Financiamento SET FinanciamentoID = {$FinanciamentoID}, VendaID = {$VendaID}, Parcelas = {$Parcelas}, TaxaJuros = {$TaxaJuros} WHERE FinanciamentoID =".$_REQUEST["id"].";";

            $res = $conn->query($sql);

            if($res==true) {

                echo("

                <h1 class=\"text-center m-5\">Cadastrado com sucesso, volte ao menu de financiamentos.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./financiamento.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível cadastrar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;

        case 'excluir':
            $sql = "DELETE FROM Financiamento WHERE FinanciamentoID=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true) {
    
                echo("

                <h1 class=\"text-center m-5\">Excluído com sucesso, volte ao menu de financiamentos.</h1>

                <div class=\"container d-flex justify-content-center\">
                    <div class=\"tenor-gif-embed\" data-postid=\"7414586676150300212\" data-share-method=\"host\" data-aspect-ratio=\"0.948905\" data-width=\"50%\"><a href=\"https://tenor.com/view/shocked-shocked-cat-silly-cat-cat-kitten-gif-7414586676150300212\">Shocked Shocked Cat GIF</a>from <a href=\"https://tenor.com/search/shocked-gifs\">Shocked GIFs</a></div> <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                </div>

                <div class=\"container d-flex justify-content-center\">
                    <a class=\"btn btn-light btn-lg m-5\" href=\"./financiamento.php\">Voltar</a>
                </div>

                ");
            }else {
                print("<script>alert(\"Não foi possível Editar !!\");</script>");
                print("<script>location.href='?page=listar';</script>");
            }

            break;
    }