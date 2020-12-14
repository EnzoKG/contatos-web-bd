<?php 

require_once __DIR__.'/conexao.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS contatos (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                nome VARCHAR(50) NOT NULL,                               
                email VARCHAR(50) NOT NULL,                              
                telefone VARCHAR(11) NOT NULL,
                ultima_alteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
  $pdo->exec($sql);
  #echo "tabela usuarios criada com sucesso!";
} catch(PDOException $e) {
  echo $e->getMessage();
}
#echo '<a href="/">voltar</a>';