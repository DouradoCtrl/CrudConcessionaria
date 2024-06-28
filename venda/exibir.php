<div class="row d-flex align-items-center">

    <div>
    <h1 class="text-center m-5">Exibir Vendas</h1>

        <?php
            $sql = ("SELECT * FROM Venda");

            $res = $conn->query($sql);

            $qtdi = $res->num_rows;

            if($qtdi > 0 ) {
                print("<table class='table table-hover table-striped table-bordered rounded table-dark mt-5'>");
                    print("<tr>");
                        print("<th>#</th>");
                        print("<th>Data</th>");
                        print("<th>ID do Cliente</th>");
                        print("<th>Valor Bruto</th>");
                        print("<th style='width: 200px;'>Ações</th>");
                    print("</tr>");
                while($row = $res->fetch_object()) {
                    print("<tr>");
                        print ("<td>".$row->VendaID."</td>");
                        print ("<td>".$row->DataVenda."</td>");
                        print ("<td>".$row->ClienteID."</td>");
                        print ("<td>".$row->ValorTotal."</td>");
                        print ("<td class='d-flex justify-content-around'>
                            <button class='btn btn-secondary' onclick=\"location.href='?page=editar&id=" . $row->VendaID . "';\">Editar</button>
                            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&entendo=excluir&id=" . $row->VendaID . "';}else{false;}\">Excluir</button>
                        </td>");
                    print("</tr>");
                }
                print("</table>");
            }else {
                print("<p class='alert alert-danger'>Nenhum resultado encontrado</p>");
            }


        ?>
    </div>
    
</div>