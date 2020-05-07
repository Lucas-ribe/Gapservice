<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAP Service Telecomunicações</title>
    <meta name="title" content="GAP Service Telecomunicações">
    <meta name="url" content="www.gapservice.com.br">
    <meta name="description" content="GAP Service - Produtos e serviços de Telecomunicações">
    <meta name="keywords" content="GAP, GAP Service, Radiocomunicação, Telecom, Videomonitoramento, Comunicação Multimídia, Engenharia, Locação, Rádios">
    <meta name="autor" content="Lucas Rocha Ribeiro">
    <meta name="company" content="Gap Service">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/base.css">
    <title>GAP Service Telecomunicações</title>
</head>
<body class="base">
    <header class="cabecalho">
        <figure class="logo">
            <a href="index.php">
                <img src="about/imagens/logoGap.png" alt="Logo Gap Service Telecomunicações" height=120px>
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
    </nav>
    <main class="principal">
        <div class="conteudo">
                        <!-- Slideshow container -->
            <div class="slideshow-container">
              <div class="mySlides fade">
              
                <img class="imgIndex" src="imgs_index/1.png" alt="Rádios Portáteis Motorola Tag">
                <a href="base.php?dir=orcamento&file=orcamento">
                  <button style="
                    min-width:10px;
                    max-width:150px;
                    position:relative;
                    left:20px;
                    top:-100px;
                    border:2px solid black;
                    border-radius: 5px;
                    font-size: 20px;
                    background-color: rgb(178, 230, 178);">Solicite um Orçamento</button>
                </a>
              
              </div>

              <div class="mySlides fade">
              
               <img class="imgIndex"  src="imgs_index/layout2.png" alt="Tag Linha de rádios Motorola">
               <a href="base.php?dir=contato&file=contato">
                  <button style="
                    max-width:150px;
                    position:relative;
                    right:-980px;
                    top:-100px;
                    border:2px solid black;
                    border-radius: 5px;
                    font-size: 20px;
                    background-color: rgb(178, 230, 178);">Fale Conosco</button>
                </a>
              
              </div>

              <div class="mySlides fade">
             
                <img class="imgIndex" src="imgs_index/layout3.png" alt="Rádios Tag">
                <a href="base.php?dir=orcamento&file=orcamento">
                  <button style="
                    max-width:150px;
                    position:relative;
                    left:20px;
                    top:-100px;
                    border:2px solid black;
                    border-radius: 5px;
                    font-size: 20px;
                    background-color: rgb(178, 230, 178);">Solicite um Orçamento</button>
                </a>
            

            
              </div>
            </div>
          </div>

    </main>
    <footer class="rodape">
    ©<?= date('Y'); ?> Todos os direitos reservados para GAP Service Ltda.
     <br> 
     Site desenvolvido por Lucas Ribeiro 
    </footer>
</body>
</html>


<!--  Codigo JavaScript para troca de slides-->
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 7500); // Troca a imagen a cada 7.5 segundos
}

</script>
