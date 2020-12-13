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
                        ."<th>nome</th>"
                        ."<th>email</th>"
                        ."<th>telefone</th>"
                        ."<th>ações</th>"
                    ."</tr>";
            $contatos = $_SESSION['contatos'];
            foreach ($contatos as $contato) {
                echo "<tr>"
                        ."<td>{$contato['nome']}</td>"
                        ."<td>{$contato['email']}</td>"
                        ."<td>{$contato['telefone']}</td>"
                        ."<td><a href='#'>remover</a>, <a href='#'>editar</a></td>"
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