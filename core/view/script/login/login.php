<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventu - Login</title>
    <link rel="stylesheet" type="text/css" href="core/view/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
	<script src="../../../public/view/js/login.js"></script>
</head>
<body>
    <div class="header">
        <h2 class="title">Eventu, o site certo para o seu evento!</h2>
    </div>
    <div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form autocomplete="off" action="" method="post">
					<label for="chk" aria-hidden="true">Cadastrar-se</label>
					<input type="text" name="txt" id="nome" placeholder="Seu nome" required="">
					<input type="email" name="email" id="email-cadastro" placeholder="E-mail" required="">
					<input type="password" name="pswd" id="senha-cadastro" placeholder="Senha" required="">
                    <input type="password" name="confirm-pswd" id="senha_confirma" placeholder="Confirmar senha" required="">
					<button type="button" onclick="cadastrar();">Cadastrar-se</button>
				</form>
			</div>

			<div class="login">
				<form autocomplete="off" action="" method="post">
					<label for="chk" aria-hidden="true">Entrar</label>
					<input type="email" name="email" id="email-login" placeholder="E-mail" required="">
					<input type="password" name="pswd" id="senha-login" placeholder="Senha" required="">
					<button type="button" onclick="logar();">Entrar</button>
				</form>
			</div>
	</div>
    <div class="footer">
        <p class="copyright">© 2023 Eventu</p>
        <a class="email-marca" href="mailto:eventu.oficial@gmail.com">
            <p>eventu.oficial@gmail.com</p>
        </a>
    </div>
</body>
</html>