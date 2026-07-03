<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>

<body>

    <h1>Gerenciador de Tarefas</h1>

    <?php

    $nome = "Patrick";
    $linguagem = "JavaScript";
    $tarefas = ["Lubrificar corrente", "Cortar cabelo", "Estudar PHP", "Terminar projeto"];

    echo "<p>Meu nome é $nome! e eu amo $linguagem.</p>";

    ?>

    <form method="POST" action="index.php">
        <input type="text" name="titulo" placeholder="Digite uma tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h2>Minhas tarefas</h2>

    <ul>
        <?php

        foreach ($tarefas as $tarefa) {
            echo "<li>$tarefa</li>";
        }

        ?>
        
    </ul>
        
        <?php

        $total = count($tarefas);           // pergunta e guarda a resposta na caixinha
                 
        echo "<p>Você tem $total tarefas no total.</p>";   // usa a caixinha na frase
        
        ?>

    

</body>

</html>