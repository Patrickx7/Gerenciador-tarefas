<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>

<body>

    <h1>Seja Bem-vindo!</h1>


    <form method="POST" action="index.php">
        <input type="text" name="titulo" placeholder="Digite uma tarefa">
        <button type="submit">Adicionar</button>
    </form>


    <?php

    $nome = "Patrick";                             // variáveis começam com $
    $tarefas = []; //array 

    echo "<p>Olá, " . $nome . "!</p>"; //Echo imprime; o ponto  (.) concatena strings
    ?>


    <h2>Minhas tarefas</h2>

    <ul>
        <?php

        // verifica se veio um formulário
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // pega o que o usuário digitou
            $novaTarefa = $_POST["titulo"];

            // adiciona na lista
            $tarefas[] = $novaTarefa;
        }

        foreach ($tarefas as $tarefa) {
            echo "<li>" . $tarefa . "</li>";
        }

        ?>
    </ul>

</body>

</html>