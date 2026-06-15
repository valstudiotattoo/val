<?php
// Inicia a sessão para podermos salvar que o usuário está logado
session_start();

// Define o usuário e a senha padrão do curso (Pode alterar aqui)
$usuario_correto = "emilia";
$senha_correta = "anaclara";

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    // Compara os dados digitados com os dados corretos
    if ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
        // Se estiver correto, guarda na sessão que o utilizador está autorizado
        $_SESSION['logado'] = true;
        
        // Redireciona para a página do vídeo do curso
        header("Location: pagina.html");
        exit();
    } else {
        // Se estiver errado, manda de volta para o login com um sinal de erro
        header("Location: index.php?erro=1");
        exit();
    }
} else {
    // Se tentarem aceder a este ficheiro diretamente, manda para o login
    header("Location: index.php");
    exit();
}
?>