<?php
include_once "connect.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="max-w-xs p-12 bg-gray-200 border border-indigo-800 rounded-sm">
        <h2 class="text-2xl font-medium mb-4 text-center">Cadastre-se</h2>
        <form onsubmit="validarSenha()" action="action.php?acao=1" method="POST" class="flex flex-col">
            <label class="inline-block mb-1">E-mail:</label>
            <input type="email" name="email" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" required />
            <label class="inline-block mb-1">Nome:</label>
            <input type="text" name="nome" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" required />
            <label class="inline-block">Senha:</label>
            <input type="password" name="senha" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" required />
            <div class="flex flex-col">
                <input type="submit" value="Enviar Dados" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4">
                <a href="./index.php" class="text-center mt-2 text-neutral-600">Voltar para login</a>
            </div>
        </form>
    </div>
</body>

<script>
    function validarSenha() {
        const senha = document.getElementsByName('senha')

        const maiuscula = /[A-Z]/.test(senha)
        var temNumero = /[0-9]/.test(senha);

        if (senha.length < 6) {
            alert('A senha deve ter no mínimo 6 caracteres.')
            return false
        }

        if (!maiuscula) {
            alert('A senha deve conter pelo menos uma letra maiúscula.')
            return false
        }

        if (!temNumero) {
            alert('A senha deve conter pelo menos um número.')
            return false
        }
        return true
    }
</script>

</html>

<?php
if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 1) {
        echo '<span class="absolute top-[18%] inline-block bg-green-200 text-green-900 p-3 rounded-lg">Usuário já cadastrado!</span>';
    }
}
?>