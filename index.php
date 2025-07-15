<?php include 'inc/header.php'; ?>

<section class="hero-home" id="home">
  <video autoplay muted loop playsinline class="video-bg">
    <source src="<?= $base ?>img/vino-video.mp4" type="video/mp4">
    <source src="<?= $base ?>img/vino-video.webm" type="video/webm">
    Seu navegador não suporta vídeo HTML5.
  </video>
  <div class="overlay-home text-center text-white">
    <h1>Bem-vindo à <span class="brand-highlight">Divinoo!</span></h1>
    <p>Explore o mundo do vinho com sofisticação, sabor e conhecimento.</p>
    <a href="<?= $base ?>#planos" class="btn btn-outline-light btn-lg">Conheça Nossos Planos</a>
  </div>
</section>


<section class="carousel-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 text-dark">Descubra o Universo do Vinho</h2>
    <div id="wineCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="<?= $base ?>img/image1.jpg" class="d-block w-100 rounded shadow" alt="Vinho 1">
            </div>
            <div class="col-md-6">
              <h3 class="text-primary">Vinhos Tintos</h3>
              <p>Intensos, elegantes e encorpados. Os vinhos tintos são perfeitos para momentos especiais e pratos robustos.</p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="<?= $base ?>img/image2.jpg" class="d-block w-100 rounded shadow" alt="Vinho 2">
            </div>
            <div class="col-md-6">
              <h3 class="text-danger">Vinhos Rosés</h3>
              <p>Leves e refrescantes, os vinhos rosés unem o melhor dos tintos e brancos com muito charme.</p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img src="<?= $base ?>img/image3.jpg" class="d-block w-100 rounded shadow" alt="Vinho 3">
            </div>
            <div class="col-md-6">
              <h3 class="text-warning">Harmonização</h3>
              <p>Aprenda a combinar vinhos com queijos, carnes, massas e sobremesas para uma experiência gastronômica completa.</p>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#wineCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#wineCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<section class="intro py-5">
  <div class="container text-center">
    <h2>Assine, Aprenda e Deguste</h2>
    <p>Com nossos planos, você recebe mensalmente vinhos selecionados, conteúdos educativos e acesso a experiências exclusivas.</p>
  </div>
</section>


<section id="sobre">


<div class="container my-5">
  <h1 class="text-center mb-4">Sobre a <span class="text-danger">Divinoo!</span></h1>
  <p class="lead text-center">
    Nossa paixão por vinhos nos levou a criar a Divinoo!, um clube que oferece uma experiência única a cada garrafa.
  </p>
  <p class="mt-4">
    Imagine a cena: um final de semana tranquilo, você em casa, mas falta algo. Aquela taça de vinho perfeita para acompanhar um bom livro, um jantar especial ou simplesmente para relaxar. Só que escolher um bom rótulo, que combine com seu gosto e que não seja o mesmo de sempre, pode ser um desafio.

Foi pensando nisso que a Divinoo! nasceu. Não de uma sala de reunião fria, mas da paixão por vinhos e de uma observação simples: por que a experiência de ter grandes marcas de vinho em casa, de forma conveniente e regular, ainda não era uma realidade para todos?
A ideia brotou como uma videira fértil, com a vontade de romper as barreiras geográficas e logísticas. A cada mês, o time da Divinoo! se dedicava a selecionar os melhores rótulos, aqueles que você talvez só encontraria em importadoras especializadas ou em viagens. O objetivo era claro: levar essa curadoria direto para a sua porta, transformando a rotina em um ritual de descoberta e prazer.
    Assinar a Divinoo! é fazer parte de uma comunidade que celebra a vida em cada taça.
    
  </p>

  <div class="text-center my-5">
    <img src="<?= $base ?>img/image-about.jpg" alt="Representação da Divinoo!" class="img-fluid rounded shadow img-about">
  </div>
  <p class="mt-4">
    E assim, a Divinoo! se tornou mais do que um clube de vinhos. Virou um convite para explorar novos sabores, aprender sobre diferentes uvas e regiões, e surpreender o paladar com garrafas que contam histórias. Tudo isso sem sair do conforto do seu lar, com a certeza de que a cada entrega, uma nova experiência vínica te espera. É a paixão pelo vinho simplificada, democratizada e entregue diretamente a você.
    Assinar a Divinoo! é mais do que receber vinhos em casa; é fazer parte de uma comunidade que celebra a vida em cada taça. Imagine a alegria de brindar com as pessoas que você ama, com um vinho cuidadosamente selecionado, feito especialmente para esses momentos únicos no conforto do seu lar.

Nós, da Divinoo!, entendemos que a verdadeira felicidade reside nos instantes mais íntimos e especiais. Por isso, nossa equipe de profissionais se dedica a levar até você não apenas rótulos excepcionais, mas a experiência completa de apreciar a vida, um gole de cada vez, no aconchego do seu lar.
  </p>
   <video src="img/campanha.mp4" autoplay muted loop playsinline class="video-about" controls>
    <source src="<?= $base ?>img/campanha.mp4" alt="Video de campanha">
    <source src="<?= $base ?>img/campanha.webm" alt="Video de campanha">
   </video>

  <h2 class="text-center mb-4">Participe do Quiz e veja qual o melhor plano para te atender!</h2>

  <div class="text-center mt-5">
    <button class="btn btn-outline-danger btn-lg" onclick="startQuiz()">Descubra seu perfil de degustador</button>
  </div>
</div>

<div class="quiz-container" id="quizContainer">
  <div class="quiz-box" id="quizBox">
    <h2 id="quizQuestion">Carregando pergunta...</h2>
    <div id="quizAnswers"></div>
    <button class="btn btn-light mt-3" onclick="nextQuestion()">Próxima</button>
  </div>
</div>

</section>

<section id="planos">
<main class="container my-5">
    <h1 class="text-center mb-4">Nossos Planos</h1>
    <p class="lead text-center">Escolha o plano que melhor se adapta ao seu paladar.</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 text-center border-top border-4 border-warning">
          <div class="card-body">
            <h5 class="card-title text-warning">Essencial</h5>
            <img src="img/basic.jpg" alt="Plano Basic" class="img-fluid">
            <p class="card-price">R$ 49/mês</p>
            <p class="card-text">2 garrafa por mês + ficha técnica.</p>
            <ul class="list-unstyled">
              <li>✔ Frete grátis</li>
              <li>✔ 5% off na loja</li>
            </ul>
            <a href="<?= $base ?>#assinar" class="btn btn-warning w-100 mt-3">Assinar</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 text-center border-top border-4 border-primary">
          <div class="card-body">
            <h5 class="card-title text-primary">Premium</h5>
            <img src="img/premium.jpg" alt="Plano Premium" class="img-fluid">
            <p class="card-price">R$ 99/mês</p>
            <p class="card-text">4 garrafas por mês + ficha técnica + 1 brinde surpresa.</p>
            <ul class="list-unstyled">
              <li>✔ Frete grátis</li>
              <li>✔ 10% off na loja</li>
              <li>✔ Brindes exclusivos</li>
            </ul>
            <a href="<?= $base ?>#assinar" class="btn btn-primary w-100 mt-3">Assinar</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 text-center border-top border-4 border-danger">
          <div class="card-body">
            <h5 class="card-title text-danger">Sommelier</h5>
            <img src="img/sommelier.jpg" alt="Plano Basic" class="img-fluid">
            <p class="card-price">R$ 249/mês</p>
            <p class="card-text">6 garrafas premium + ficha técnica + acesso a degustações online.</p>
            <ul class="list-unstyled">
              <li>✔ Frete expresso grátis</li>
              <li>✔ 20% off na loja</li>
              <li>✔ Brindes exclusivos</li>
            </ul>
            <a href="<?= $base ?>#assinar" class="btn btn-danger w-100 mt-3">Assinar</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <h2 class="text-center mb-4">Ficou na dúvida de qual plano escolher? Faça o teste do nosso Quiz.</h2>
   <div class="text-center mt-5">
      <button class="btn btn-outline-danger btn-lg" onclick="startQuiz()">Descubra seu perfil de degustador</button>
    </div>
  </div>

<div class="quiz-container" id="quizContainer">
  <div class="quiz-box" id="quizBox">
    <h2 id="quizQuestion">Carregando pergunta...</h2>
    <div id="quizAnswers"></div>
    <button class="btn btn-light mt-3" onclick="nextQuestion()">Próxima</button>
  </div>
</div>
</section>

<section id="assinar">
  <div class="container my-5">
    <h1 class="text-center mb-4">Assine a <span class="text-danger">Divinoo!</span></h1>
    <p class="lead text-center">Preencha o formulário abaixo para começar a receber vinhos selecionados na sua casa.</p>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="p-4 border rounded shadow-sm">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone">
          </div>
          <div class="mb-3">
            <label for="age">Você possui mais de 18 anos?</label>
            <select name="age" id="age" class="form-select">
              <option value="Sim">Sim</option>
              <option value="Não">Não</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="planos"> Qual plano deseja assinar? <br>
              <input type="radio" id="planos_essencial" name="planos" value="essencial"/>
              Essencial <br>
              <input type="radio" id="planos_premium" name="planos" value="premium"/>
              Premium <br>
              <input type="radio" id="planos_sommelier" name="planos" value="sommelier"/>
              Sommelier
            </label>
          </div>
          <div class="mb-3">
            <label for="infor">Gostaria de receber novidades exclusivas da Divinoo! ?<br>
              <input type="checkbox" name="infor" id="infor" onclick="marcarUm(this)"> Sim, concordo em receber novidades exclusivas no meu e-mail. <br>
              <input type="checkbox" name="infor" id="infornot" onclick="marcarUm(this)"> Não, obrigado.
            </label>
          </div>
          <div class="mb-3">
            <label for="mensagem" class="form-label">Alguma consideração a fazer? (opcional)</label>
            <textarea class="form-control" id="mensagem" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-danger w-100">Assinar</button>
        </form>
      </div>
    </div>
  </div>

</section>

<?php include 'inc/footer.php'; ?>
