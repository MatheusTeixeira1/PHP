<?php include_once 'includs/header.php'; ?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-field col s12">
                <label for="sobrenome">Sobreome:</label>
                <input type="text" name="sobrenome" id="sobrenome">
            </div>
            <div class="input-field col s12">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-field col s12">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade">
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php"class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>

<?php include_once 'includs/footer.php'; ?>