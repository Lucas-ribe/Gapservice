<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/base.css">
    <title>Gap Service</title>
</head>
<body class="base">
    <header class="cabecalho">
        <figure class="logo">
            <a href="index.php">
               <img src="about/imagens/logoGap.png" alt="logo Gap Service Telecomunicações" height=120px >
            </a>
        </figure>
        
    </header>
   
    <nav class="navegacao">
        <a href="base.php?dir=about&file=sobre" class ="buttonI">Sobre</a>
        <a href="base.php?dir=contato&file=contato" class ="buttonI">Contato</a>
        <a href="base.php?dir=products&file=products" class ="buttonI">Produtos</a>
        <a href="base.php?dir=orcamento&file=orcamento" class ="buttonI">Orçamento</a>
        <a href="base.php?dir=solucoes&file=solucoes" class ="buttonI">Soluções</a>
        <a href="base.php?dir=trabconosco&file=trabconosco" class ="buttonI">Trabalhe conosco</a>
        <a href="index.php" class="buttonV">Voltar</a>
       
    </nav>
    <main class="principal">
        <div class="conteudo">
             <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
             ?>
        </div>
    </main>
    <footer class="rodape">
      (31) 34115114&nbsp&nbsp (31) 99585114 &nbsp&nbspGAP Service - © <?= date('Y'); ?>
    </footer>
</body>
</html>