<head>
    <link rel="stylesheet" type="text/css" href="../Styles/Style.css">
</head>
<header>
    <div class="Titulo-Nome">
        <text class="Nome-Header"> SAMUEL TONIAL </text>
    </div>
    <nav class="Links">
        <?php
        
        $paginaAtual = basename($_SERVER['SCRIPT_FILENAME']);
        
        $paginaHome = "index.php";
        $paginaProjetos = "Projetos.php";
        $paginaTecnologias = "Tecnologias.php";
        $paginaFeedback = "Feedback.php";
        
        if($paginaAtual !== $paginaHome){
            echo '<a class="Link-Header" href="../index.php"> Home </a>';
        }

        if($paginaAtual !== $paginaProjetos){
            echo '<a class="Link-Header" href=#> Projetos </a>';
        }

        if($paginaAtual !== $paginaTecnologias){
            echo '<a class="Link-Header" href=#> Tecnologias </a>';
        }

        if ($paginaAtual !== $paginaFeedback){
            echo '<a class="Link-Header" href="Pages/Feedback.php"> Deixe seu Feedback </a>';
        }
        ?>
    </nav>
</header>