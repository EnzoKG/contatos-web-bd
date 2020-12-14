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
                        ."<th>ID</th>"
                        ."<th>nome</th>"
                        ."<th>email</th>"
                        ."<th>telefone</th>"
                    ."</tr>";

            $registros = $pdo->query('SELECT * FROM contatos');

            foreach ($registros as $registro) {
                echo "<tr>"
                    ."<td>{$registro[0]}</td>"
                    ."<td>{$registro[1]}</td>"
                    ."<td>{$registro[2]}</td>"
                    ."<td>{$registro[3]}</td>"
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