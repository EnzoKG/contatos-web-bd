<?php
    $tagLinkLogin = "";
    require_once __DIR__ . '/templates/cabecalho.php';
    $erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_STRING);
?>
    <div class="container">
        <h1>Cadastrar Contato</h1>
        <?= isset($erro) ? "<p>$erro</p>" : '' ?>
        <form action="<?=rotaBase('app/processa_cadastro.php')?>" method="post">
            <input class="form-input" type="email" name="email" id="email" placeholder="Email">
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Nome">
            <input class="form-input" type="text" name="telefone" id="telefone" placeholder="Telefone">
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>
    </div>
    
<?php
    require_once __DIR__ . '/templates/rodape.php';
?>