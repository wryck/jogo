<?php
// Exemplo de um script que redireciona para outra página na mesma pasta
if (!headers_sent()) { // Verificando se os cabeçalhos já foram enviados
    header("Location: index.html");
    exit;
}
?>