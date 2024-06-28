<?php
    $sql = "SELECT * FROM Funcionario WHERE FuncionarioID=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
    /* print($_REQUEST["id"]); */
?>

<div class="row vh-100 d-flex align-items-center">
    <div class="col-4">
        <h1 class="mb-5" >Editar Funcionário</h1>
        <form action="./funcionario.php/?page=salvar" method="POST">
            
            <input type="hidden" name="entendo" value="Editar">
            <input type="hidden" name="id" value="<?php print($_REQUEST["id"])?>">
            <div class="mb-3">
                <label for="FuncionarioID" class="form-label">ID do funcionário</label>
                <input type="number" id="FuncionarioID" class="form-control d-block p-3" name="FuncionarioID" placeholder="Exemplo: 123" value="<?php print($row->FuncionarioID);?>">
                <label for="Nome" class="form-label mt-2">Nome do funcionário</label>
                <input type="text" id="Nome" class="form-control d-block p-3" name="Nome" placeholder="Exemplo: João da Silva" value="<?php print($row->Nome);?>">
                <label for="Cargo" class="form-label mt-2">Cargo do funcionário</label>
                <input type="text" id="Cargo" class="form-control d-block p-3" name="Cargo" placeholder="Exemplo: Analista de Vendas" value="<?php print($row->Cargo);?>">
                <label for="Salario" class="form-label mt-2">Salário do funcionário</label>
                <input type="number" id="Salario" class="form-control d-block p-3" name="Salario" placeholder="Exemplo: 50000.00" value="<?php print($row->Salario);?>">
                <button type="submit" class="btn btn-success mt-3 btn-lg p-3">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-8 d-flex justify-content-end">
        <div class="tenor-gif-embed" data-postid="5928196" data-share-method="host" data-aspect-ratio="1.04603" data-width="85%"><a href="https://tenor.com/view/izuku-midoriya-smile-concerned-my-hero-academia-deku-gif-5928196">Izuku Midoriya GIF</a>from <a href="https://tenor.com/search/izuku+midoriya-gifs">Izuku Midoriya GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </div>
</div>