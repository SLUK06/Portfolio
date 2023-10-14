<?php
$msgSucessoErro = "";

//inserir dados no banco de dados
include "../Includes/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["Nome"];
    $conteudo = $_POST["Conteudo"];
    
    $sql = "INSERT INTO feedbacks (nome, conteudo) VALUES ('$nome', '$conteudo')";

    if ($conn->query($sql) === TRUE) {
        $msgSucessoErro =  "Feedback enviado com SUCESSO!</br>";

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $msgSucessoErro = "ERRO ao enviar o Feedback: " . $conn->error . "</br>";
    }
}
//consulta no banco de dados
$sql = "SELECT * FROM feedbacks ORDER BY id DESC";
$result = $conn->query($sql);

$nomeRes = array();
$conteudoRes = array();
$dataRes = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomeRes[] = $row["nome"];
        $conteudoRes[] = $row["conteudo"];
        $dataRes[] = $row["data"];
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>
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
        <form class="form-feedback" action="../Pages/Feedback.php" method="post">
            <div class="form-group">
                <input type="text" class="form-nome" placeholder="Nome" name="Nome" required>
            </div>
            <div class="form-group">
                <textarea class="form-conteudo" placeholder="Conteúdo" name="Conteudo" style="resize: none" rows='3' required></textarea>
            </div>
            <button type="submit" class="btn-submit">Enviar</button>
        </form>
        <text><?php echo $msgSucessoErro ?></text>
        <?php for ($i = 0; $i < count($nomeRes); $i++) { ?>
        <div class="feedbacks">
            
            <div class="feed-nome">
                <?php echo $nomeRes[$i] ?>
            </div>
            <div class="feed-conteudo">
                <?php echo $conteudoRes[$i] ?>
            </div>
            <div class="feed-data">
                <?php echo $dataRes[$i] ?>
            </div>
            
        </div>
        <?php } ?>
    </main>
</body>
</html>


