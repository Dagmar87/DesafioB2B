<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuario</h2>

<form action="add.php" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="usuario['nome']">
        </div>

        <div class="form-group col-md-3">
            <label for="campo2">Email</label>
            <input type="text" class="form-control" name="usuario['email']">
        </div>

        <div class="form-group col-md-2">
            <label for="campo3">Senha</label>
            <input type="text" class="form-control" name="usuario['senha']">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">CPF</label>
            <input type="text" class="form-control" name="usuario['cpf']">
        </div>

        <div class="form-group col-md-3">
            <label for="campo2">Login</label>
            <input type="text" class="form-control" name="usuario['login']">
        </div>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>