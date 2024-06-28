<div class="row d-flex align-items-center">

    <div>
    <h1 class="text-center m-5">Exibir clientes</h1>

        <?php
            $sql = ("SELECT * FROM Cliente");

            $res = $conn->query($sql);

            $qtdi = $res->num_rows;

            if($qtdi > 0 ) {
                print("<table class='table table-hover table-striped table-bordered rounded table-dark mt-5'>");
                    print("<tr>");
                        print("<th>#</th>");
                        print("<th>Nome</th>");
                        print("<th>CPF</th>");
                        print("<th>Telefone</th>");
                        print("<th>Email</th>");
                        print("<th style='width: 200px;'>Ações</th>");
                    print("</tr>");
                while($row = $res->fetch_object()) {
                    print("<tr>");
                        print ("<td>".$row->ClienteID."</td>");
                        print ("<td>".$row->Nome."</td>");
                        print ("<td>".$row->CPF."</td>");
                        print ("<td>".$row->Telefone."</td>");
                        print ("<td>".$row->Email."</td>");
                        print ("<td class='d-flex justify-content-around'>
                            <button class='btn btn-secondary' onclick=\"location.href='?page=editar&id=" . $row->ClienteID . "';\">Editar</button>
                            <button class='btn btn-outline-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&entendo=excluir&id=" . $row->ClienteID . "';}else{false;}\">Excluir</button>
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

