<?php 

require_once __DIR__.'/conexao.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  //0
                nome VARCHAR(50),                               //1
                email VARCHAR(50),                              //2
                telefone VARCHAR(20),                           //3
                permissao VARCHAR(10),
                ultima_alteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
  $pdo->exec($sql);
  echo "tabela usuarios criada com sucesso!";
} catch(PDOException $e) {
  echo $e->getMessage();
}
echo '<a href="/">voltar</a>';