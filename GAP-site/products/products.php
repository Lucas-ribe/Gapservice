<style>
* {box-sizing: border-box;}

.container {
  display: inline-block;
  position: relative;
  width: 50%;
  max-width: 230px;
  
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position:absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color:#f1f1f1; 
  width:100%;
  transition:.5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<div class="titulo">Produtos</div>
<p>A Gap conta com uma grande variedade de 
    rádios e equipamentos, para atender melhor 
    a necessidade de nossos clientes, trabalhamos com rádios moveis, 
    portáteis e equipamentos para videomonitoramento.
</p>

<div class="titulo">Portáteis</div>
<div class="container">
    <img src="products/images/dep450.jpg" alt="rádio motorola DEP450" class="image">
    <div class="overlay">Motorola DEP450</div>
</div>
<div class="container">
    <img src="products/images/ep450.jpg" alt="rádio motorola EP450" class="image">
    <div class="overlay">Motorola EP450</div>
</div>
<div class="container">
    <img src="products/images/dgp8050.jpg" alt="rádio motorola DGP8050" class="image">
    <div class="overlay">Motorola DGP8050</div>
</div>

<div class="titulo">Móveis</div>

<div class="container">
    <img src="products/images/dem300.jpg" alt="rádio motorola DGM5000" class="image">
    <div class="overlay">Motorola DEM300</div>
</div>

<div class="container">
    <img src="products/images/dgm8000.jpg" alt="rádio motorola DGM5000" class="image">
    <div class="overlay">Motorola DGM8000</div>
</div>

<div class="container">
    <img src="products/images/dgm5000.jpg" alt="rádio motorola DGM5000" class="image">
    <div class="overlay">Motorola DGM5000</div>
</div>

<div class="container">
    <img src="products/images/DEM500.jpg" alt="rádio motorola DGM5000" class="image">
    <div class="overlay">Motorola DEM500</div>
</div>

<div class="titulo">Videomonitoramento</div>

<div class="container">
    <img src="products/images/intelbrass3330.jpg" alt="camera " class="image">
    <div class="overlay">Câmera Intelbras S3330</div>
</div>

<div class="container">
    <img src="products/images/vmd1120.jpg" alt="camera " class="image">
    <div class="overlay">Câmera Intelbras VDM1120</div>
</div>

<div class="container">
    <img src="products/images/vip3230.jpg" alt="camera " class="image">
    <div class="overlay">Câmera Intelbras VIP3230</div>
</div>

<div class="container">
    <img src="products/images/vip5230.jpeg" alt="camera " class="image">
    <div class="overlay">Câmera Intelbras VIP5230</div>
</div>
  