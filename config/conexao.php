<?php
// Aqui está toda a configuração de conexão criada, sendo necessário alterá-las quando haver conexão em outro banco;
// Vale ressaltar os detalhes de nome de user e password do banco de dados!

$conexao = pg_connect("host=localhost dbname=dbteste user=postgres password=pgserver");

// Caso a conexão não funcione: provavelmente será algo relacionado com a referência feita no arquivo "session.php",
// por isso peço para que ou altere o endereço inserido, ou então coloque este arquivo de conexão na raíz!
?>
