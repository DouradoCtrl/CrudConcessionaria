<div class="row vh-100 d-flex align-items-center">
    <div class="col-4">
        <h1 class="mb-5" >Cadastrar Veículo</h1>
        <form action="teste.php" method="POST">
            <div class="mb-3">
            <label class="form-label mt-2">Data da venda</label>
                <input type="date" class="form-control d-block p-3" name="DataVenda" placeholder="Exemplo: 27/06/2004">
                <button type="submit" class="btn btn-success mt-3 btn-lg p-3">Cadastrar</button>
            </div>
        </form>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $data = $_POST["DataVenda"];
            echo($data);
        }