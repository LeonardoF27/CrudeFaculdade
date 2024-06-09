<h1>Editar clientes</h1>
<?php
    $sql = "SELECT * FROM cliente WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php 
    print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Pedido</label>
        <!-- <input type="text" name="pedido" value="<?php print $row->pedido?>" class="form-control"> -->
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" name="pedido" value="<?php print $row->pedido?>">
        <option value="Bolo de chocolate">Bolo de chocolate</option>
        <option value="Cupcake">Cupcake</option>
        <option value="Empada">Empada</option>
        <option value="Coxinha">Coxinha</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?php print $row->endereco?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número</label>
        <input type="number" name="numero" value="<?php print $row->numero?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>