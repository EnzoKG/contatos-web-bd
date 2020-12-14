<?php
    $tagLinkLogin = "";
    require_once __DIR__ . '/templates/cabecalho.php';
    $erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_STRING);
?>
    <div class="container">
        <h1>Editar Contato</h1>
        <?= isset($erro) ? "<p>$erro</p>" : '' ?>
        <form action="<?=rotaBase('database/editar.php')?>" method="post">
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Novo Nome">
            <input class="form-input" type="email" name="email" id="email" placeholder="Novo Email">
            <input class="form-input" type="text" name="telefone" id="telefone" placeholder="Novo Telefone">
            <input class="btn btn-success" type="submit" value="Atualizar">
            <?php
                $id = $_GET["id"];
                echo "<input type='hidden' name='id' value='".$id."'>";
            ?>
        </form>
    </div>
    
<?php
    require_once __DIR__ . '/templates/rodape.php';
?>