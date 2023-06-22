<?php
include_once "connect.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar tarefa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="max-w-xs p-12 bg-gray-200 border border-indigo-800 rounded-sm">
        <h2 class="text-2xl font-medium mb-4 text-center">Alterar</h2>
        <?php
        $id = $_GET['id'];
        ?>
        <form action="action.php?id=<?= $id ?>&acao=4" method="POST" class="flex flex-col">
            <label class="inline-block mb-1">Título:</label>
            <input type="text" name="novoTitulo" placeholder="" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" />
            <label class="inline-block mb-1">Descrição:</label>
            <input type="text" name="novaDescricao" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" />
            <label class="inline-block">Data de criação:</label>
            <input type="date" name="novaDtCriacao" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" />
            <label class="inline-block">Data de conclusão:</label>
            <input type="date" name="novaDtConclusao" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" />
            <div class="flex flex-col">
                <input type="submit" value="Alterar" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4">
            </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 1) {
        echo '<span class="absolute top-[18%] inline-block bg-green-200 text-green-900 p-3 rounded-lg">Usuário já cadastrado!</span>';
    }
}
?>