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
      <main class="pt-5 mt-5">
        <div class="m-5">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-orange">Home</a></li>
              <li class="breadcrumb-item active text-black">Contato </li>
            </ol>
          </nav>
        </div>
        <div class="row mx-3 my-5">
          <div class="col">
            <img src="images/como-comecar-e-concluir-um-email.png" width="700" height="500">
          </div>
          <div class="col">
            <form class="mt-5">
                        <div class="mt-5 mb-3">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputTelefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="inputTelefone" placeholder="Digite seu telefone">
                        </div>
                        <div class="mb-3">
                            <label for="inputMensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="inputMensagem" rows="4" placeholder="Digite sua mensagem" required></textarea>
                        </div>
                        <button type="submit" class="btn text-white bg-orange">Enviar</button>
                    </form>
          </div>
        </div>
        <div class="row my-4 mx-3">
          <div class="col">
            <div class="border border-1 p-3 rounded-3 h-100">
              <i class="fas border text-orange shadow fa-envelope rounded-circle p-3"></i>
              <div class="my-3">
                <p class="fs-6 text text-body-secondary">Fale connosco</p>
                <h3 class="fw-bold">casanessandy@outlook.pt</h3>
              </div>
            </div>            
          </div>
          <div class="col">
            <div class="border border-1 p-3 rounded-3 h-100">
              <i class="fas fa-phone text-orange shadow fa-envelope rounded-circle p-3"></i>
              <div class="my-3">
                <p class="fs-6 text text-body-secondary">Contate-nos</p>
                <h3 class="fw-bold">(+351) 965 443 586</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="border border-1 p-3 rounded-3 h-100">
              <i class="fab fa-whatsapp text-orange shadow fa-envelope rounded-circle p-3"></i>
              <div class="my-3">
                <p class="fs-6 text text-body-secondary">Contate-nos</p>
                <h3 class="fw-bold">(+351) 960 432 931</h3>
              </div>
            </div>
          </div>
        </div>
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