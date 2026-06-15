<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Curso</title>
    
<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            /* Degradê moderno de marketing digital: Roxo escuro para Preto em ângulo */
            background: linear-gradient(135deg, #1f0d3d 0%, #0b0514 50%, #000000 100%);
            background-attachment: fixed; /* Garante que o degradê cubra a tela toda sem quebras */
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Caixa de diálogo de login (Efeito Glassmorphism sutil) */
        .login-container {
            background-color: rgba(30, 20, 45, 0.65); /* Roxo extremamente escuro com transparência */
            backdrop-filter: blur(10px); /* Efeito de vidro desfocado atrás da caixa */
            -webkit-backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.7), 0 0 15px rgba(138, 43, 226, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border: 1px solid rgba(138, 43, 226, 0.2); /* Borda roxa bem suave */
        }

        .login-container h2 {
            margin-bottom: 24px;
            color: #a855f7; /* Roxo vibrante/neon para o título */
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #c0aed6; /* Texto da label num tom lilás acinzentado */
            font-size: 14px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 14px;
            border: 1px solid rgba(138, 43, 226, 0.3);
            background-color: rgba(15, 10, 25, 0.8);
            color: #fff;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #a855f7;
            box-shadow: 0 0 10px rgba(168, 85, 247, 0.4);
        }

        /* Botão de chamada para ação (CTA) marcante */
        .btn-enviar {
            width: 100%;
            padding: 14px;
            background: linear-gradient(90deg, #a855f7 0%, #7c3aed 100%); /* Degradê no botão */
            border: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(168, 85, 247, 0.4);
            transition: all 0.3s ease;
        }

        .btn-enviar:hover {
            transform: translateY(-2px); /* Pequeno efeito de flutuar ao passar o rato */
            box-shadow: 0 6px 20px rgba(168, 85, 247, 0.6);
            filter: brightness(1.1);
        }

        .btn-enviar:active {
            transform: translateY(0);
        }

        .erro-mensagem {
            color: #ff4444;
            background-color: rgba(255, 68, 68, 0.1);
            border: 1px solid rgba(255, 68, 68, 0.2);
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
    </style>

</head>
<body>

    <div class="login-container">
        <h2>Área do Aluno</h2>
        
        <?php if (isset($_GET['erro'])): ?>
            <div class="erro-mensagem">Usuário ou senha incorretos!</div>
        <?php endif; ?>

        <form action="verificar.php" method="POST">
            <div class="form-group">
                <label for="usuario">Usuário / E-mail</label>
                <input type="text" id="usuario" name="usuario" required placeholder="Digite seu usuário">
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            
            <button type="submit" class="btn-enviar">Entrar no Curso</button>
        </form>
    </div>

</body>
</html>
