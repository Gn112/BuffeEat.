<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>

<body>
    <main>
        <div> <!-- Essa div n faz nada (acho). Mas deixa ai -->
            <form method="post" id="formulario">

                <div class="page_counter"></div>

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
                    <button type="submit" name="submit" class="button_submit">PRÓXIMO</button>
                </div>

                <div class="row" id="return_button">
                    <a href="#">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>