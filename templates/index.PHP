<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);

    if ($nome && $email) {
        $dados = "$nome,$email,$curso\n";
        $arquivo = 'data/inscricoes.txt';
        file_put_contents($arquivo, $dados, FILE_APPEND | LOCK_EX);
        header("Location: lista.php?sucesso=1"); // Redireciona para a lista
        exit();
    } else {
        header("Location: index.php?erro=1"); // Redireciona com erro
        exit();
    }
} else {
    header("Location: index.php"); // Se acessado diretamente, redireciona
    // 
    // 
    // 
    
    

exit();
}
?>