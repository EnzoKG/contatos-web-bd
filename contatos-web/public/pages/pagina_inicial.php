<?php
    session_start();
    require_once __DIR__.'/templates/cabecalho.php';
?>
<section class="container">
    <h1>Contatos</h1>
    <?php
        //var_dump($_SESSION);
        if(isset($_SESSION['contatos']))
        {

            echo "<table class='table table-bordered'>"
                    ."<tr>"
                        ."<th>nome</th>"
                        ."<th>email</th>"
                        ."<th>telefone</th>"
                    ."</tr>";
            $contatos = $_SESSION['contatos'];
            foreach ($contatos as $contato) {
                echo "<tr>"
                        ."<td>{$contato['nome']}</td>"
                        ."<td>{$contato['email']}</td>"
                        ."<td>{$contato['telefone']}</td>"
                    ."</tr>";
            }

            echo "</table>";

        } else {
            echo "<p>Não existem contatos cadastrados</p>";
        }
    ?>
</section>
<?php
    require_once __DIR__.'/templates/rodape.php';
?>