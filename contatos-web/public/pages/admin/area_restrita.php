<?php
    session_start();
    require_once __DIR__.'/../../../app/funcoes.php';

    $tagLinkLogin = '<a class="btn btn-danger" href="'.rotaBase('app/logout.php').'">Deslogar</a>';
    require_once __DIR__.'/../templates/cabecalho.php';
    if(!isset($_SESSION['perfil']) or $_SESSION['perfil']!='admin')
    {
        header('Location: '.rotaPages());
        die();
    }
    $adm = $_SESSION['perfil'];

    include_once '/../../../database/conexao.php';
    include_once '/../../../database/create_table.php';
?>
<section class="container">

    <h1 class="welcome">Bem vindo, <?=$adm?></h1>

    <button><a class="btn btn-primary" href="../form.php">Cadastrar contato</a></button>
    <br>
    <?php
        //var_dump($_SESSION);
        if(isset($_SESSION['contatos']))
        {

            echo "<table class='table table-bordered'>"
                    ."<tr>"
                        ."<th>ID</th>"
                        ."<th>nome</th>"
                        ."<th>email</th>"
                        ."<th>telefone</th>"
                        ."<th>ações</th>"
                    ."</tr>";

            $registros = $pdo->query('SELECT * FROM contatos');

            foreach ($registros as $registro) {
                echo "<tr>"
                        ."<td>{$registro[0]}</td>"
                        ."<td>{$registro[1]}</td>"
                        ."<td>{$registro[2]}</td>"
                        ."<td>{$registro[3]}</td>"
                        ."<td><a href='/../../../database/deletar.php?id=".$registro[0].">remover</a>, <a href='/../form_editar.php?id=".$registro[0]."'>editar</a></td>"
                    ."</tr>";
            }

            echo "</table>";

        } else {
            echo "<p>Não existem contatos cadastrados</p>";
        }
    ?>

</section>
<?php
    require_once __DIR__.'/../templates/rodape.php';
?>