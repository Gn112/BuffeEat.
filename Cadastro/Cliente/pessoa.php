<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Cliente</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>

<?php
print_r($_POST); ?>

<body>
    <main>
        <div class="formulario">
            <form action="etapas/email.php" method="post">

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome Completo:</label>
                    <input type="text" name="full_name" id="full_name" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Número Celular:</label>
                    <input type="text" name="numero_cel" id="numero_cel" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input type="text" name="cep" id="cep" class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit">PRÓXIMO</button>
                </div>

                <div class="row return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>