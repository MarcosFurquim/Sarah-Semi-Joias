Revendedor View
<?php
require_once (dirname(__DIR__).'/model/Revendedor.php');
$revendedor = Revendedor::getRevendedor(1);
//$revendedor_new = new Revendedor('Teste', 'markinfurkin@gmail.com','488854645645');
//var_dump($revendedor_new);
//$revendedor_new->cadastaRevendedor();
?>
<div class="identy-list">
    <div class="header-list">
        <div class="row mb-4">
            <div class="col">
                <h2>Revendedores(as)</h2>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Busca de Revendedores(as)" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><img src="../assets/public/svg/search-24px.svg" /></button>
                    </div>
                </div>
            </div>
            <div class="col actions">
                <a href="./cadastraRevendedor" class="btn btn-primary">Novo</a>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</div>

