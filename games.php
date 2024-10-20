<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos Populares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        body {
            background-color: #101014;
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
        }

        .pai {
            padding: 30px 140px;
            display: block;
            align-items: center;
        }

    </style>
</head>
<body>

<div class="pai">
    <div class="p">
        <h3>Jogos populares</h3>
    </div>

    <!-- Swiper -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide card">
                <img src="img/cs.jpg" class="card" alt="Counter Strike 2">
                <h4>Counter Strike 2</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/beli.jpg" class="card" alt="Sports FC 25">
                <h4>Sports FC 25</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/donk.png" class="card" alt="Donk Kong Returns">
                <h4>Donk Kong Returns</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/guys.jpg" class="card" alt="Fall Guys">
                <h4>Fall Guys</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/messi.png" class="card" alt="Efootball">
                <h4>Efootball</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/mine.png" class="card" alt="Minecraft">
                <h4>Minecraft</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/read.jpg" class="card" alt="Red Dead 2">
                <h4>Red Dead 2</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/terra.webp" class="card" alt="Terraria">
                <h4>Terraria</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/fort.jpg" class="card" alt="Fortnite">
                <h4>Fortnite</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/wukong.jpg" class="card" alt="Wukong">
                <h4>Wukong</h4>
                <p>Preço</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/carro.jpg" class="card" alt="Carro">
                <h4>Carro</h4>
                <p>Texto</p>
            </div>
            <div class="swiper-slide card">
                <img src="img/gta.png" class="card" alt="GTA">
                <h4>GTA</h4>
                <p>Texto</p>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Include Swiper JS from CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    // Cria uma nova instância do Swiper
    const swiper = new Swiper('.swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
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
  font-size:20px
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


</body>
</html>
