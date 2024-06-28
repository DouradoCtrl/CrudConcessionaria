<?php
    $sql = "SELECT * FROM Financiamento WHERE FinanciamentoID=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
    /* print($_REQUEST["id"]); */
?>


<div class="row vh-100 d-flex align-items-center">
    <div class="col-4">
        <h1 class="mb-5" >Editar financiamento</h1>
        <form action="./financiamento.php/?page=salvar" method="POST">

            <input type="hidden" name="entendo" value="Editar">
            <input type="hidden" name="id" value="<?php print($_REQUEST["id"])?>">

            <div class="mb-3">
                <label class="form-label">ID do financiamento</label>
                <input type="number" class="form-control d-block p-3" name="FinanciamentoID" placeholder="Exemplo: 123" value="<?php echo($row->FinanciamentoID);?>">
                <label class="form-label mt-2">ID da venda</label>
                <input type="number" class="form-control d-block p-3" name="VendaID" placeholder="Exemplo: 123" value="<?php echo($row->VendaID);?>">
                <label class="form-label mt-2">Número de parcelas</label>
                <input type="number" class="form-control d-block p-3" name="Parcelas" placeholder="Exemplo: 48" value="<?php echo($row->Parcelas);?>">
                <label class="form-label mt-2">Taxa de Juros</label>
                <input type="text" class="form-control d-block p-3" name="TaxaJuros" placeholder="Exemplo: 0.5" value="<?php echo($row->TaxaJuros);?>">
                
                <button type="submit" class="btn btn-success mt-3 btn-lg p-3">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="col-8 d-flex justify-content-end">
        <div class="tenor-gif-embed" data-postid="5928196" data-share-method="host" data-aspect-ratio="1.04603" data-width="85%"><a href="https://tenor.com/view/izuku-midoriya-smile-concerned-my-hero-academia-deku-gif-5928196">Izuku Midoriya GIF</a>from <a href="https://tenor.com/search/izuku+midoriya-gifs">Izuku Midoriya GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </div>
</div>