<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>


.pai{
    padding:30px;
    padding-left:140px;
    padding-right:140px;
    display:block;
    align-items:center;
    flex-direction: column;


}
body {
    background-color: #101014;
    font-family: Arial, sans-serif;
    color: white;
    margin: 0;
}


.opa{
    color: aqua;
}

.carousel-inner img {
    justify-content: center;
    align-items: center;
    height: 600px; 
    padding: 10px;
    border-radius:50px
    
}
.carousel-innerr img{
  justify-content: center;
    align-items: center;
    height: 450px; 
    padding: 10px;
    border-radius:50px;
    
  
}
.carou{
  display:flex;
}


.bg-color {
    background-color:#121216;
}



.custom-height {
    height: 300px; 
    object-fit: cover; 
}
.p{
    color:white;
    align-items:center;
    justify-content:center;
    text-align:center;
    font-weight: bold;
    display:flex;
    justify-content: start;
    padding-bottom:20px;
    padding-top:20px

    

    
}




/* teste
#carousel {
    display: block;
    background-color: #2c2c2c;
    border-radius: 10px;
    overflow: hidden;
    flex-direction: row;

}

.main-image {
    flex: 2;
}

.main-image img {
    width: 100%;
    height: auto;
}

.details {
    display:block;
    justify-content: end;
    align-items: end;
    text-align: end;
    

}

.details h2 {
    font-size: 24px;
    margin: 0;
    
}

.details p {
    font-size: 18px;
    margin: 10px 0;
}

.details span {
    font-size: 20px;
    font-weight: bold;
}

.thumbnails {
    display: flex;
    margin-top: 20px;
}

.thumbnails img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: transform 0.3s;
}

.thumbnails img:hover {
    transform: scale(1.1);
}


 */


 /* From Uiverse.io by absoluteSTrange */ 
/* From Uiverse.io by virus231 */ 



</style>
<body>
   

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-color navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Suporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Games</a>
        </li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-light me-2">Login</button>
        <button class="btn btn-outline-light">Cadastre-se</button>
      </div>
    </div>
  </div>
</nav>

<style>
  .container-fluid {
      padding: 10px;
      
      
  }

  .navbar {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  }

  .navbar a {
      color: white; 
      font-size: 17px;
      margin-left:20px;

  }

  .navbar-brand {
      font-size: 24px; 
      
  }

  .nav-link.active {
      color: #00ff88 !important; 
  }

  .dropdown-menu {
      background-color: #343a40; 
  }

  .btn {
      transition: background-color 0.3s ease;
      margin-right:20px;
      margin-left:10px

  }

  .btn:hover {
      background-color: rgba(255, 255, 255, 0.1); /* Efeito de hover nos botões */
      background-color: #00ff88      ; /* Cor verde ao passar o mouse */
      

  }
  .btn-outline-light {
    --bs-btn-color: #f8f9fa;
    --bs-btn-border-color: #77ffc0;
    --bs-btn-hover-color: #000;
    --bs-btn-hover-bg: #f8f9fa;
    --bs-btn-hover-border-color: #f8f9fa;
    --bs-btn-focus-shadow-rgb: 248, 249, 250;
    --bs-btn-active-color: #000;
    --bs-btn-active-bg: #f8f9fa;
    --bs-btn-active-border-color: #f8f9fa;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #f8f9fa;
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: #f8f9fa;
    --bs-gradient: none;
    
}

</style>






<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" >
  <div class="carousel-indicators"  >
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="../img/gta6.webp" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/mario.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/zelda.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<!-- carousel 2 -->

<div class="pai">
<div class="p">
    <h3>Novos lançamentos</h3>
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
      <img src="../img/amongu.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
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

  .card-img-top {
    height: 310px; 
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
 
</style>



</style>
<!-- cards -->
    <div class="p">
        <h3>Jogos populares</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="../img/cs.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Counter strike 2</h5>
                    <p class="card-text">Preço</p>
                </div>
                
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="../img/messi.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Efootball</h5>
                    <p class="card-text">Preço</p>
                </div>
              
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="../img/mine.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Minecraft</h5>
                    <p class="card-text">Preço</  p>
                </div>
              
            </div>
        </div>
    </div>
    </div>

    </div>
  <!-- footer -->

<footer class="bg-body-color text-white text-center py-4">
  <div class="container">
    <p class="mb-0">© 2024 Seu Nome ou Nome da Empresa. Todos os direitos reservados.</p>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMc0eM1Zb6P5I9lZmAqf2N4U2d1Xc2AqZ0xW9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>