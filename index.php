<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa nessandy</title>
    <link rel="icon" sizes="48x48" href="images/Logo Casa Nessandy____.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body style="font-family: 'Roboto', sans-serif;">
      <!-----------------------------------------HEADER--------------------------------------------------->
      <?php
            include_once 'includes/header.php';
        ?>
      <!-----------------------------------------HEADER--------------------------------------------------->
      <!-----------------------------------------MAIN--------------------------------------------------->
      <main>
        <div>
          <center><img src="images/lisboa-noite1-slide.jpg" class="image1 img-fluid opacity-100 rounded-bottom"></center>
          <h1 class="display-2 fw-bold position-absolute top-50 start-50 translate-middle text-white sts-text-animation-home">CASA NESSANDY</h1>
        </div>
        <div class="m-5">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-orange">Home</a></li>
              <li class="breadcrumb-item active text-black">Quem somos nós </li>
            </ol>
          </nav>
        </div>
        <div>
            <div class="row mx-3 mb-5">
              <div class="col">
                  <h1 class="fw-bold my-3">Quem Somos</h1>
                          <p class="text-justify fs-5 text text-body-secondary">Somos uma agência imobiliária e de prestação de serviços, consciente da crescente complexidade e riscos associados a um negócio imobiliário.</p>
                          <p class="text-justify my-5 fs-5 text text-body-secondary">Trabalhamos todos os dias para melhorar o nosso conhecimento do mercado português, dedicamos toda a nossa energia para obter resultados e assim ajudar os nossos clientes a decidir com consciência e segurança</p>
                          <p class="my-5 fs-5 text text-body-secondary">Conte connosco agora e sempre!</p>
                          <button type="button" class="btn fw-bold w-25 p-3 text-white fs-6 text bg-orange" >Contate-nos!</button>
              </div>
                    <div class="col">
                      <img src="images/IMG-20240701-WA0001.jpg" class="rounded-2" width="90%" height="400">
                    </div>
            </div>
        </div>
        <!-------------------------------------------------------------------------------------------->
        <div>
        <h1 class="m-4 fw-bold ml-4">Porquê nós?</h1>
          <center>
            <div class="row row-cols-1 row-cols-md-3 g-4 container m-5">
              <div class="col">
                <div class="h-100">
                  <i class="fas fa-city fa-3x text-orange"></i>
                  <h3 class="fw-bold my-3">Focalização no imobiliário</h3>
                  <p class="text-justify fs-6 text text-body-secondary">Os nossos consultores dedicam-se  à mediação imobiliária e prestação de serviços, adquirindo todos os dias conhecimento e experiência sobre o mercado e o setor.</p>
                </div>
              </div>
              <div class="col">
                <div class="h-100">
                  <i class="fas fa-chart-line fa-3x text-orange"></i>
                  <h3 class="fw-bold my-3">Resultados Rápidos</h3>
                  <p class="text-justify fs-6 text text-body-secondary">A dedicação exclusiva a esta atividade, a motivação e atitude da nossa equipa geram melhores resultados e maior eficiência para os nossos clientes.</p>
                </div>
              </div>
              <div class="col">
                <div class="h-100">
                  <i class="fas fa-globe fa-3x text-orange" ></i>
                  <h3 class="fw-bold my-3">Serviço Global</h3>
                  <p class="text-justify fs-6 text text-body-secondary">Estamos preparados para solucionar e suportar todos os aspetos relacionados com o crédito, compra, venda ou arrendamento do seu imóvel.</p>
                </div>
              </div>
            </div>
          </center>
        </div>
        <!-------------------------------------------------------------------------------------------->

      </main>
      <!-----------------------------------------FOOTER--------------------------------------------------->
      <?php
            include_once 'includes/footer.php';
        ?>
      <!-----------------------------------------FOOTER--------------------------------------------------->
      <!-----------------------------------------MAIN--------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="includes/voltarTopo.js"></script>
  </body>
</html>