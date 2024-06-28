<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="text-white bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-around">
            <div class="navbar-nav">
                <a class="btn btn-success ms-2" href="?page=cadastrar">Cadastrar</a>
                <a class="btn btn-outline-dark ms-2" href="?page=exibir">Exibir</a>
                <a class="btn btn-outline-dark ms-2" href="?page=home">Home</a>
            </div>
        </div>
    </nav>
    <!-- d-flex justify-content-between vh-100 -->
    <div class="container ">
            <?php
            include("config.php");
                switch (@$_REQUEST["page"]) {
                    case 'cadastrar':
                        include("cliente/cadastrar.php");
                        break;
                    case 'exibir':
                        include("cliente/exibir.php");
                        break;
                    case 'salvar':
                        include("cliente/salvar.php");
                        break;
                    case 'editar':
                        include("cliente/editar.php");
                        break;
                    case 'home':
                        header("Location: /CrudEdu/index.php");
                        exit();
                        break;
                    default:
                        include("cliente/exibir.php");
                        break;
                }
            ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>