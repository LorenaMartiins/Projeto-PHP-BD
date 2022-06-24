<!DOCTYPE html>
<html>
  <head>
    <title>Compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/es_inicial.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </head>
  <body>
    <nav>
      <ul>
        <li> <a href="php/logout.php" id="entrar">Logout</a> </li>
        <li> <a href=""><span class="material-icons">local_mall</span></a> </li>
      </ul>
    </nav>
    <section class="product-details">
      <div class="image-slider">
          <div class="product-images">
              <img src="img/air-force-nude-1.jpg" class="active" alt="">
              <img src="img/air-force-nude-2.jpg" alt="">
              <img src="img/air-force-nude-4.jpg" alt="">
              <img src="img/air-force-nude-7.jpg" alt="">
          </div>
      </div>

      <div class="details">
        <h2 class="product-brand">BILLIE EILISH</h2>
        <p class="product-short-des">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <span class="product-price">R$ 1.199,99</span>

        <div class="quant">
          Quantidade
          <input type="number" name="quantidade" >
        </div>

        <p class="product-sub-heading">Tamanho</p>

        <input type="radio" name="size" value="s" checked hidden id="s-size">
        <label for="s-size" class="size-radio-btn check">35</label>
        <input type="radio" name="size" value="m" hidden id="m-size">
        <label for="m-size" class="size-radio-btn">36</label>
        <input type="radio" name="size" value="l" hidden id="l-size">
        <label for="l-size" class="size-radio-btn">37</label>
        <input type="radio" name="size" value="xl" hidden id="xl-size">
        <label for="xl-size" class="size-radio-btn">38</label>
        <input type="radio" name="size" value="xxl" hidden id="xxl-size">
        <label for="xxl-size" class="size-radio-btn">39</label>

        <button class="btn cart-btn">add to cart</button>
    </div>
  </section>

  <section class="detail-des">
    <h2 class="heading">Descrição</h2>
    <h4>Look com alças</h4>
    <p class="des">Quatro alças extras com peças metálicas modernizam seu estilo AF1, enquanto o 
      design mais volumoso cria uma plataforma elevada.</p>
    <h4>Couro sintético, sensação real</h4>
    <p class="des">
      O elegante couro nobuck sintético é mais suave do que o acrílico da tabela de basquete, além de ser confortável e durável.
    </p>
    <h4>Conforto de herança</h4>
    <p class="des">
      Originalmente concebido para o basquete de alto desempenho, o amortecimento Air proporciona um conforto duradouro, enquanto a língua e o tornozelo acolchoados garantem uma passada suave.
    </p>
    <h4>Mais benefícios</h4>
    <p class="des">
      O logotipo Blohsh certifica a autenticidade.Descubra detalhes divertidos: confira embaixo do forro e na parte de baixo dos cadarços.
    </p>
    <h4>Detalhes do produto</h4>
    <p class="des">
      Entressola de espuma. Sistema de amarração de largura variável. Fecho aderente. Gola acolchoada de cano alto. Perfurações na ponta
    </p>
    
  </section>

  <footer>
    <p>Direitos autorais Nike - Feito por Lorena Martins de Farias - 06/2022</p>

    <div class="icons">
      <a href="#" class="icon icon--instagram">
        <i class="ri-instagram-line"></i>
      </a>
      <a href="#" class="icon icon--twitter">
        <i class="ri-twitter-line"></i>
      </a>
    </div>
  </footer>

  <script src="js/product.js"></script>
  </body>
</html>