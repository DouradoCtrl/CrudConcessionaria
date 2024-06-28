<?php
    $sql = "SELECT * FROM Cliente WHERE ClienteID=".$_REQUEST["id"];
    $res = $conn->query($sql);

    $row = $res->fetch_object();
    /* print($_REQUEST["id"]); */
?>

<div class="row vh-100 d-flex align-items-center">
    <div class="col-4">
        <h1 class="mb-5" >Editar Cliente</h1>
        <form action="./cliente.php/?page=salvar" method="POST">
            
            <input type="hidden" name="entendo" value="Editar">
            <input type="hidden" name="id" value="<?php print($_REQUEST["id"])?>">
            <div class="mb-3">
                <label class="form-label">ID do Cliente</label>
                <input type="number" class="form-control d-block p-3" name="ClienteID" value="<?php print($row->ClienteID);?>" placeholder="Exemplo: 123">

                <label class="form-label mt-2">Nome do Cliente</label>
                <input type="text" class="form-control d-block p-3" name="Nome" value="<?php print($row->Nome);?>" placeholder="Exemplo: João Silva">

                <label class="form-label mt-2" >CPF do Cliente</label>
                <input type="number" class="form-control d-block p-3" name="CPF" value="<?php print($row->CPF);?>" placeholder="Exemplo: 12345678901">

                <label class="form-label mt-2">Telefone do Cliente</label>
                <input type="tel" class="form-control d-block p-3" name="Telefone" value="<?php print($row->Telefone);?>" placeholder="Exemplo: (11) 98765-4321">

                <label class="form-label mt-2">Email do Cliente</label>
                <input type="Email" class="form-control d-block p-3" name="Email" value="<?php print($row->Email);?>" placeholder="Exemplo: joao@email.com">
                <button type="submit" class="btn btn-success mt-3 btn-lg p-3">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-8 d-flex justify-content-end">
        <div class="tenor-gif-embed" data-postid="5928196" data-share-method="host" data-aspect-ratio="1.04603" data-width="85%"><a href="https://tenor.com/view/izuku-midoriya-smile-concerned-my-hero-academia-deku-gif-5928196">Izuku Midoriya GIF</a>from <a href="https://tenor.com/search/izuku+midoriya-gifs">Izuku Midoriya GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </div>
</div>