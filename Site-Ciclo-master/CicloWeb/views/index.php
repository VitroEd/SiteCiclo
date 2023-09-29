<?php 
include("blades/header.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark --green-main sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ciclo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#init">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nos">Conheça-nos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="init" class="landing-page">

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="mt-5 display-5 fw-bolder text-uppercase">Grupo ciclo</h2>
                            <p>descricao</p>
                            <button class="button">Veja</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="imgs/corpo/Logo_CicloBr.png" height="400px" alt="Imagem">
                        </div>
                    </div>
                </div>
            </section>

            <div class="section-divider"></div>

  <div class="container mt-5">
    <div class="row mt-5">
      <!-- Primeira seção -->
      <div id="ver" class="col-md-6 text-center">
        <img src="imgs/corpo/lixeira.png" height="200px" alt="Imagem 1" >
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <h2 class="display-5 fw-bolder text-uppercase">LIXEIRA</h2>
          <p>Uma lixeira "Smart" para reciclagem de plastico.</p>
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <div class="row mt-5">
      <!-- Segunda seção -->
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <h2 class="display-5 fw-bolder text-uppercase">pontos</h2>
          <p>Receba pontos com base no peso do plastico que foi depositado. Troque os pontos por recompensas!</p>
        </div>
      </div>
      <div class="col-md-6 text-center">
      <img src="imgs/corpo/moeda.png" height="200px" alt="Imagem 1" >
      </div>
    </div>
    <div class="section-divider"></div>

    <div class="row mt-5">
      <!-- Terceira seção -->
      <div class="col-md-6 text-center">
      <img src="imgs/corpo/celulae.png" height="200px" alt="Imagem 1" >
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <h2 class="display-5 fw-bolder text-uppercase">baixe o app</h2>
          <p>Utilize o aplicativo de celular para se comunicar com a lixeira</p>
        </div>
      </div>
    </div>
  </div>
  <div id="sobre" class="section-divider"></div>
    <!-- Conteúdo da página -->
    <div class="container mt-5">
    <h2  class="text-center">Como funciona</h2>
    <div class="row">
      <div class="col-md-6">
        <p>O projeto consiste em uma "lixeira smart", na qual iria ter a capacidade de pesar o plastico antes de ser depositado e converter esse peso em pontos que poderão ser usados no aplicativo para trocar por dinheiro.</p>
        <p>A parte de cima da lixeira conta com a tampa onde será realizada a pesagem, uma tela onde será possivel obter o código QR que ao ser escaneado dirá o peso do plastico que vai ser depositado e a quantidade de pontos que o usuario irá receber e ao lado da tela um botão que ao ser apertado abaixara a tampa da lixeria permitindo que o plastico seja guardado para então futuramente ser reciclado.</p>
      </div>
      <div class="col-md-6">
        <p>No App você poderá abrir a camera para escanear o código QR que estará disponivel na lixeira e resgatar seus pontos, depois poderá entrar em uma tela que mostra a quantidade de pontos possuidos e as lixeiras próximas, tendo acesso a um mapa que mostrara com mais detalhes todas as lixeiras disponiveis na cidade.</p>
        <p>Também será possivel analisar de mais de perto todos os pontos recebidos, olhando data, hora e quantidade de plastico depositado no dia. Na tela de trocas será possivel ver todos os itens disponiveis a serem resgatados com base nos pontos possuidos.</p>
      </div>
    </div>
  </div>

  <div id="nos" class="section-divider"></div>

  <h2 class="display-2 text-center">Conheça o Grupo</h2>

  <div class="contai">
    <div class="box box-1" style="--img: url(./imgs/corpo/luiz.png);" data-text="Luiz" ></div>
    <div class="box box-2" style="--img: url(./imgs/corpo/marco.png);" data-text="Marco" ></div>
    <div class="box box-3" style="--img: url(./imgs/corpo/nicolas.png);" data-text="Nicolas" ></div>
    <div class="box box-4" style="--img: url(./imgs/corpo/vitor.png);" data-text="Vitor" ></div>
  </div>

  <div class="section-divider"></div>


<?php 
include("blades/footer.php");
?>