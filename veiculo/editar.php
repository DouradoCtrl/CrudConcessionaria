<?php
    $sql = "SELECT * FROM Veiculo WHERE VeiculoID=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
    /* print($_REQUEST["id"]); */
?>

<div class="row vh-100 d-flex align-items-center">
    <div class="col-4">
        <h1 class="mb-5" >Editar Veículo</h1>
        <form action="./veiculo.php/?page=salvar" method="POST">
            
            <input type="hidden" name="entendo" value="Editar">
            <input type="hidden" name="id" value="<?php print($_REQUEST["id"])?>">
            <div class="mb-3">
                <label class="form-label">ID do veículo</label>
                <input type="number" class="form-control d-block p-3" name="VeiculoID" placeholder="Exemplo: 123" value="<?php print($row->VeiculoID);?>">
                <label class="form-label mt-2">Nome do veículo</label>
                <input type="text" class="form-control d-block p-3" name="Modelo" placeholder="Exemplo: Civic" value="<?php print($row->Modelo);?>">
                <label class="form-label mt-2">Marca do veículo</label>
                <input type="text" class="form-control d-block p-3" name="Marca" placeholder="Exemplo: Honda" value="<?php print($row->Marca);?>">
                <label class="form-label mt-2">Ano do veículo</label>
                <input type="number" class="form-control d-block p-3" name="Ano" placeholder="Exemplo: 2022" value="<?php print($row->Ano);?>">
                <label class="form-label mt-2">Preço</label>
                <input type="number" class="form-control d-block p-3" name="Preco" placeholder="Exemplo: 90.000" value="<?php print($row->Preco);?>">
                <label for="Salario" class="form-label mt-2">Estoque</label>
                <input type="number" class="form-control d-block p-3" name="Estoque" placeholder="Exemplo: 60" value="<?php print($row->Estoque);?>">
                <button type="submit" class="btn btn-success mt-3 btn-lg p-3">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-8 d-flex justify-content-end">
        <div class="tenor-gif-embed" data-postid="5928196" data-share-method="host" data-aspect-ratio="1.04603" data-width="85%"><a href="https://tenor.com/view/izuku-midoriya-smile-concerned-my-hero-academia-deku-gif-5928196">Izuku Midoriya GIF</a>from <a href="https://tenor.com/search/izuku+midoriya-gifs">Izuku Midoriya GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </div>
</div>