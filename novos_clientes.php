<h1>Novos clientes</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Pedido</label>
        <!-- INPUT ANTIGO -->
        <!-- <input type="text" name="pedido" class="form-control"> -->
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" type="text" name="pedido">
        <option selected>Selecione o produto</option>
        <option value="Bolo de chocolate">Bolo de chocolate</option>
        <option value="Cupcake">Cupcake</option>
        <option value="Empada">Empada</option>
        <option value="Coxinha">Coxinha</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número</label>
        <input type="number" name="numero" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>