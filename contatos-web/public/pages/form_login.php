<?php
    $tagLinkLogin = "";
    require_once __DIR__ . '/templates/cabecalho.php';
    $erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_STRING);
?>
    <div class="container">
        <h1>Login</h1>
        <?= isset($erro) ? "<p>$erro</p>" : '' ?>
        <form action="<?=rotaBase('app/login.php')?>" method="post">
            <input class="form-input" type="text" name="login" id="login" placeholder="Login">
            <input class="form-input" type="password" name="senha" id="senha" placeholder="Senha">
            <input class="btn btn-primary" type="submit" value="Logar">
        </form>
    </div>
    
<?php
    require_once __DIR__ . '/templates/rodape.php';
?>