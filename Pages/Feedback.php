<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');</style>
    <title>Portifólio Samuel Tonial</title>
    <link rel="stylesheet" type="text/css" href="../Styles/FormFeedback.css">
</head> 
<body>
    <?php include '../Includes/header.php'; ?>
    <main class="conteudo-feedback">
        <text class="titulo-feedback"><b>DEIXE SEU FEEDBACK</b></text>
        <form class="form-feedback" action="/Feedback.php" method="post">
            <div class="form-group">
                <input type="text" class="form-nome" placeholder="Nome" name="Nome">
            </div>
            <div class="form-group">
                <textarea class="form-conteudo" placeholder="Conteúdo" name="conteudo" style="resize: none" rows='3' ></textarea>
            </div>
            <button type="submit" class="btn-submit">Enviar</button>
        </form>
    </main>
</body>