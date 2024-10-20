<?php 
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/opa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>

  /* aoifnoidnf */
  
.pai{
    padding:30px;
    padding-left:140px;
    padding-right:140px;
    display:block;
    align-items:center;
    flex-direction: column;


}
body {
  background: #201b2c;
    font-family: Arial, sans-serif;
    color: white;
}


.opa{
    color: aqua;
}

.carousel-inner img {
    justify-content: center;
    align-items: center;
    height: 650px; 

    
    
}
.carousel-innerr img{
  justify-content: center;
    align-items: center;
    height: 400px; 
    
  
}

.carousel-inner{
  display:flex;
}


.bg-color {
    background-color:#121216;
}



.custom-height {
    height: 300px; 
    object-fit: cover; 
}
h3.novos{
    color:white;
    align-items:center;
    justify-content:center;
    text-align:center;
    font-weight: bold;
    display:flex;
    padding-top:10px;
    text-align:center;

    

    
}

.carousel-slide{
  height: 10px;
}


/*  <button class="btn btn-outline-light me-2">Login</button>
        <button class="btn btn-outline-light">Cadastre-se</button> */



</style>
<body>
   

<?php 
include_once('navbar.php');
?>
<!-- carousel -->

<!-- fim carousel -->
<div class="pai">
<!-- carousel 2 -->

<div class="p">
    <h3 class="novos">Novos lançamentos</h3>
</div>

<div id="carousel">
<div id="carouselExampleIndicators2" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
<div class="carou">
  <div class="carousel-innerr">
    <div class="carousel-item active">
      <img src="img/amongu.jpg" class="d-block w-60" alt="...">
      <div class="form">
        <div class="text">
        <h3 class="title">AMONG US</h3>
        </div>
      <div class="imgs">
        <img src="img/a.jpg" class="i" alt="">
        <img src="img/m.jpg" class="i"alt="">
        </div>

        <div class="etc">
        <img src="img/o.webp" class="i"alt="">
        <img src="img/i.webp" class="i"alt="">
        </div>
        <h6 class="title2">Já disponível</h6>
        <p class="title3">R$ 10,00 </p>

        </div>

    </div>
    </div>

    <div class="carousel-item">
      <img src="img/minecraft.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> 
</div>
</div>


<Style>

 
  .carousel-indicators{
    padding-top:10px ;
  }
.carou{
  display:flex;
  width: 1200px;
}
#carouselExampleIndicators{
padding: 6% ;
}

  #carouselExampleIndicators2{
    justify-content: center;
    align-items: center;
    display: flex;
    
  }
  .carousel-item.active {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 15px;  

}
#carouselExampleIndicators2 .carousel-item img.d-block {
  width: 80%; /* Ajuste conforme necessário */
  max-height: 380px; /* Ajuste conforme necessário */
  object-fit: cover; /* Mantém a proporção */
  margin: 0 auto;
  box-shadow: 8px 0 5px rgba(0, 0, 0, 0.5 ); /* Adiciona uma sombra */
  border-radius: 10px; /* Cantos arredondados para combinar */
  z-index: 1; /* Garante que a div esteja acima de outras */

}

.form {
  background-color: #2A2A3350; /* Fundo escuro */
  height: 380px;
  width: 370px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding-top: 10px;
  padding-right: 10px;
  color: #fff;
}

.title {
  color: white;
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  margin-top: 20px;
  padding-left: 20px;
}

.title2{
  color: white;
  text-align: center;
  font-size: 19px;
  margin-bottom: 20px;
  margin-top: 20px;
  padding-left: 20px;
}

.title3{
  color: #ccc;
  padding-left: 20px;

}


.imgs, .etc {
  display: flex;
  justify-content: space-around;
  margin-top: 10px;
  gap: 7px; /* Espaçamento entre as imagens */
}

img.i {
  width: 150px;
  height: 80px;
  margin: 2px;
  object-fit: cover;
  filter: brightness(0.6); /* Escurece as imagens */
  border-radius: 5px;
  transition: filter 0.3s ease; /* Transição suave ao passar o mouse */
}

img.i:hover {
  filter: brightness(1); /* Volta ao normal ao passar o mouse */
}




 
  
</Style>
  


<style>

  .card {
    border: none; 
    border-radius: 15px; 
    transition: transform 0.3s; 
    overflow: hidden; 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
  }

  .card:hover {
    transform: translateY(-5px); 
  }

  .card-body {
    height: 150px; 
    background-color: #101014; 
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    text-align: center; 
    border-radius: 0 0 15px 15px; 

  }

  .card-title {
    font-size: 1.25rem; 
    color: #343a40; 
    margin-bottom: 10px; 
    font-weight: bold; 
  }

  .card-text {
    font-size: 0.9rem; 
    color: #6c757d; 
  }

  .p {
    margin-top: 65px;
  }

  .card-title{
    color: white;
  }
  .card-text{
    color:white;
  }
 /* setas */
 .carousel-control-prev,
.carousel-control-next {
  width: 50px;
  height: 50px;
  background-color: rgba(0, 0, 0, 0.7); /* Dark background for arrows */
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
  
}

.carousel-control-prev {
  left: 0px;
}

.carousel-control-next {
  right: 0px;
  
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: none; /* Hide default icons */
  
}

.carousel-control-prev::before,
.carousel-control-next::before {
  content: '';
  display: inline-block;
  width: 15px;
  height: 15px;
  border-top: 2px solid #00FF88 !important; /* Orange color */
  border-right: 2px solid #00FF88 !important;
  
}

.carousel-control-prev::before {
  transform: rotate(-135deg); /* Left arrow */
  
}

.carousel-control-next::before {
  transform: rotate(45deg); /* Right arrow */

}


</style>



</style>
<!-- cards  -->
    <div class="p">
        <h3>Jogos populares</h3>
    </div>
   

    <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide card">
        <img src="img/cs.jpg" class="card"alt="">
        <h4>Counter strike 2</h4>
        <p> Preço </p>
      </div>

      <div class="swiper-slide card">
        <img src="img/beli.jpg" class="card"alt="">
        <h4>Sports FC 25</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/donk.png" class="card"alt="">
        <h4>Donk Kong Returns</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/guys.jpg" class="card"alt="">
        <h4>Fall Guys</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/messi.png"class="card" alt="">
        <h4> Efootball</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/mine.png"class="card" alt="">
        <h4>Minecraft</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/read.jpg"class="card" alt="">
        <h4>Read Dead 2</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/terra.webp"class="card" alt="">
        <h4>Terraria</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/fort.jpg"class="card"alt="">
        <h4>title</h4>
        <p> Preço </p>
      </div>      

     
      <div class="swiper-slide card">
        <img src="img/wukong.jpg"class="card" alt="">
        <h4> title</h4>
        <p> Preço </p>
      </div>      

     
<div class="swiper-slide card">
  <img src="img/carro" class="card" alt="">
    <h4 classe="t"> title</h4>
      <p> text </p>
</div>      
      
     
      <div class="swiper-slide card">
        <img src="img/gta.png" class="card" alt="">
        <h4> title</h4>
        <p> text </p>
      </div>      

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Include Swiper JS from CDN -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    // Cria uma nova instância do Swiper
const swiper = new Swiper('.swiper', {
  // Define quantos slides serão exibidos ao mesmo tempo
  slidesPerView: 4,
  
  // Define o espaço (em pixels) entre os slides
  spaceBetween: 30,
  
  // Define quantos slides avançar ao clicar nas setas de navegação
  slidesPerGroup: 4,
  
  // Permite que o Swiper gire indefinidamente, sem um fim
  loop: true,
  
  // Configuração da paginação
  pagination: {
    // Seleciona o elemento onde a paginação será renderizada
    el: '.swiper-pagination',
    
    // Permite que a paginação seja clicável
    clickable: true,
  },
  
  // Configuração da navegação
  navigation: {
    // Seleciona o botão que avança para o próximo slide
    nextEl: '.swiper-button-next',
    
    // Seleciona o botão que volta para o slide anterior
    prevEl: '.swiper-button-prev',
  },
});

</script>

<style>
.swiper-wrapper{
height: 400px;
padding-bottom:70px
}  
.card {
    width: 80%;  /* Reduz a largura do cartão */
    max-width: 245px;
    height: 380px;
    background-color: #101014;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
}

      img.card{
      border-radius: 20px;
      width: 230px;
      height: 260px;
      object-fit: cover; 

    }

h4{
  color:#ccc;
  text-align:center;
  padding-top:10px;
  font-weight:300px;
      letter-spacing: 2px;
}
p{
  color:#ccc;
  padding-left:25px;
}
/* setas */
.swiper-button-next,
.swiper-button-prev {
    color: #00FF88;
    top: 50%;
    width: 35px;
    height: 35px;
    margin-top: -18px;
    z-index: 10;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
}

.swiper-button-next {
    top:25px ; 
}

.swiper-button-prev {
    top: 25px ; 
}

.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after{
  font-size:25px;
  font-weight: bolder;

  
} 
.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after{
  font-size:25px;
  font-weight: bolder;

}

/* Pagination */
.swiper-pagination-bullet-active {
    background-color: #00FF88 !important;
}

  </style>



</div>
</div>


  <!-- footer -->

<footer class="bg-body-color text-white text-center py-4">
  <div class="container">
    <p class="mb-0">© 2024 Nome da Empresa. Todos os direitos reservados.</p>
    <div class="social-icons mt-3">
      <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
  </div>
</footer>

<style>
  footer {
    background-color: #1B1B1F; /* Cor de fundo do footer */
}
</style>

<!-- Font Awesome para os ícones (adicione isso no head) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>