<div class="row d-flex align-items-center">

    <div>
    <h1 class="text-center m-5">Exibir veículos</h1>

        <?php
            $sql = ("SELECT * FROM Veiculo");

            $res = $conn->query($sql);

            $qtdi = $res->num_rows;

            if($qtdi > 0 ) {
                print("<table class='table table-hover table-striped table-bordered rounded table-dark mt-5'>");
                    print("<tr>");
                        print("<th>#</th>");
                        print("<th>Modelo</th>");
                        print("<th>Marca</th>");
                        print("<th>Ano</th>");
                        print("<th>Preço</th>");
                        print("<th>Estoque</th>");
                        print("<th style='width: 200px;'>Ações</th>");
                    print("</tr>");
                while($row = $res->fetch_object()) {
                    print("<tr>");
                        print ("<td>".$row->VeiculoID."</td>");
                        print ("<td>".$row->Modelo."</td>");
                        print ("<td>".$row->Marca."</td>");
                        print ("<td>".$row->Ano."</td>");
                        print ("<td>".$row->Preco."</td>");
                        print ("<td>".$row->Estoque."</td>");
                        print ("<td class='d-flex justify-content-around'>
                            <button class='btn btn-secondary' onclick=\"location.href='?page=editar&id=" . $row->VeiculoID . "';\">Editar</button>
                            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&entendo=excluir&id=" . $row->VeiculoID . "';}else{false;}\">Excluir</button>
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