<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contato</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK10YPAYjqT085Qq/1cq/5FLXAZQ7Ay" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="css/contato.css" media="screen" />
    <header>
      <nav>
            <div class="nav-container">
              <img id="logo" src="img\img4.png" alt="Vere Receitas"/>
              <ul>
  							<li>
  								<a href="meuprimeiro.index.html">Página inicial</a>
  							</li>
                <li>
                  <a href="salgados.html">Salgados</a>
                </li>
                <li>
                  <a href="carnes.html">Carnes</a>
                </li>
                <li>
                  <a href="doces.html">Doces</a>
                </li>
                <li>
                  <a href="bebidas.html">Bebidas</a>
                </li>
                <li>
                  <a href="contato.html">Contato</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <style>
      .body{
        font-family: Arial,Helvetica,sans-serif;
      }
      .content{
        display: flex;justify-content: center;
      }
      .contato {
        width: 100%;max-width: 500px;
      }
      .form {
        display: flex;flex-direction: column;
      }
      .field {
        padding: 10px;margin-bottom: 15px;border: 1px solid #DDD;border-radius: 5px;font-family: Arial,Helvetica,sans-serif;font-size: 16px;
      }
      .textarea {
        height: 150px;
      }
      h3{
        font-size: 85px;
        color: dimgray;
      }
    </style>
  </head>
  <body>
    <section class="content">
      <div class="contato">
        <br />
        <h3>Deixe sua mensagem</h3>
        <form class="form" method="post" action="./email.php">
          <input class="field" name="name" placeholder="Digite seu nome"/>
          <input class="field" name="Email" placeholder="Email"/>
          <textarea class="field" name="mesage" placeholder="Escreva sua mensagem aqui..."></textarea>
          <input class="field" type="submit" value="Enviar" />
        </form>
      </div>
    </section>
  </body>
  <footer>
    <div class="borda">
    <img src="img/img4.png">
    <div class="footer-botoom">
      <div class="nome">
        <p>Vere Receitas - 2020</p>
      </div>
    </div>
    </div>
    <div class="wrapper">
      <div class="footer-box">
        <div class="company-footer">

          <img id="imagem" src="img\img3.jpg" alt="Vere Receitas"/>
          <h2>Vere Receitas</h2>
          <p>As Receitas mais saborosas que você já viu.</p>
        </div>
      </div>

      <div class="footer-box1">
        <h2>Me encontre nas redes sociais </h2>
        <ul class="footer-list">
          <li>
            <a href="">
              <i class="fas fa-at"></i>
              <span>E-mail</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-whatsapp"></i>
              <span>Whatsapp</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-pinterest"></i>
              <span>Pinterest</span>
            </a>
          </li>
        </ul>
      </div>
    </div>


  </footer>
</html>
