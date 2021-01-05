<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <!--Aui entra o código-->
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
            Tarefa:
            <input type="text" name="nome" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <?php
        if(array_key_exists('nome', $_GET)) {
            $lista_tarefas[] = $_GET['nome'];
        }
    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>

    <?php foreach ($lista_tarefas as $tarefa) :?>
        <tr>
            <td><?php echo $tarefa; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>