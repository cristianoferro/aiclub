<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','ai_club');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');
  
  //guardar numa variável uma consulta à base de dados
  $consulta = mysqli_query($ligacao, "SELECT * FROM artigos ORDER BY id");

while($linha = mysqli_fetch_assoc($consulta)){
  $artigos[] = $linha;
};

//tabela2 - O Futuro
//guardar numa variável uma consulta à base de dados
  $consulta_futuro = mysqli_query($ligacao, "SELECT * FROM artigos_futuro ORDER BY id");

while($linha_futuro = mysqli_fetch_assoc($consulta_futuro)){
  $artigos_futuro[] = $linha_futuro;
};

//tabela3 - Apps
//guardar numa variável uma consulta à base de dados
  $consulta_app = mysqli_query($ligacao, "SELECT * FROM artigos_app ORDER BY id");

while($linha_app = mysqli_fetch_assoc($consulta_app)){
  $artigos_app[] = $linha_app;
};

//tabela4 - Webgrafia
//guardar numa variável uma consulta à base de dados
  $consulta_web = mysqli_query($ligacao, "SELECT * FROM webgrafia ORDER BY id");

while($linha_web = mysqli_fetch_assoc($consulta_web)){
  $artigos_web[] = $linha_web;
};

//tabela5 - imagens do cerebro grande
//guardar numa variável uma consulta à base de dados
  $consulta_brain = mysqli_query($ligacao, "SELECT * FROM brain ORDER BY id");

while($linha_brain = mysqli_fetch_assoc($consulta_brain)){
  $brain[] = $linha_brain;
};

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Artificial Inteligence Club</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header id="top">
  <div id="learn_more">
  </div>
  
<!-- Top -->
    <div id="bar">
      <div class="contentor">
<!-- Logo -->
         <h1 id="logo" class="left">Artificial Inteligence Club <br/>
            <p id="logo_info" class="left">Projeto Académico</p>
         </h1>
<!-- Menu -->
        <nav id="menu">
           <a class="right" href="#sobre_botao">Sobre</a>
           <a class="right" href="#apps">APPS</a>
           <a class="right" href="#o_futuro">O Futuro</a>
           <a class="right" href="#tempos1">tempos atuais</a>
        </nav>
      <div class="clear"></div>
      </div>
    </div>
</header>
    <!-- Menu Pop -->
<div class="contentor">
  <nav id="menu_pop">
    <a class="left" href="#top">Início</a>
    <a class="left" href="#tempos1">tempos atuais</a>
    <a class="left" href="#o_futuro">O Futuro</a>
    <a class="left" href="#apps">APPS</a>
    <a class="left" href="#sobre_botao  ">Sobre</a>
      <img class="menu_trigger" src="imagens/brain.png"> </img>
  </nav>

</div>
</div>

<div class="contentor">
<div id="celulas">
<img id="celulas1" src="imagens/celulas1.png"></img>
<img id="celulas2" src="imagens/celulas2.png"></img>

<img id="brain_main" src="imagens/brain.png"></img>
<?php for($i=0; $i<count($brain); $i++){ ?>
<img id="stephen_brain" class="apresent" src="imagens/<?php echo $brain[$i]['imagem']; ?>"></img>
<?php } ?>
</div>
</div>
<img id="next1" src="imagens/setas.png"></img>

    <!-- Tempos Atuais -->
<?php for($i=0; $i<count($artigos); $i++){ ?>
<section id="tempos" class="contentor">

  <h1  class="tempos_class"id="tempos<?php echo $artigos[$i]['id']; ?>">Tempos Atuais</h1>
  <svg viewbox="0 0 100 0.2">
    <line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" />
  </svg>
  <article class="articles">
    
    <img class="figures left" src="imagens/<?php echo $artigos[$i]['imagem']; ?>"></img>
    <br/>
    <div class="article_text">
       <h2><?php echo $artigos[$i]['titulo']; ?></h2>
       <div class="vermais" id="show<?php echo $artigos[$i]['id']; ?>"> Ver Mais </div>
       <p class="text_article" id="tempos_txt<?php echo $artigos[$i]['id']; ?>">
           <img id="x<?php echo $artigos[$i]['id']; ?>" class="fechar right" src="imagens/X.png"></img>
           <?php echo $artigos[$i]['texto']; ?> <br/>
           <br/>
       </p>
    </div>
    <div class="clear"></div>
  </article>

<img class="next_class" id="next<?php $art_id = $artigos[$i]['id'];
$id_art_mais1 = $art_id + 1; 
echo $id_art_mais1 ?>" src="imagens/setas.png"></img>

</section>
<?php } ?>

<?php for($i=0; $i<count($artigos_futuro); $i++){ ?>
<section id="seccao_futuro" class="contentor">

  <h1 id="o_futuro<?php echo $artigos_futuro[$i]['id']; ?>">O Futuro</h1>
  <svg viewbox="0 0 100 0.2">
    <line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" />
  </svg>
  <article class="articles">
    <!-- bryan johnson -->
    <img class="figures left" src="imagens/<?php echo $artigos_futuro[$i]['imagem']; ?>"></img>
    <br/>
    <div class="article_text">
    <h2><?php echo $artigos_futuro[$i]['titulo']; ?></h2>
    <div class="vermais" id="show_f<?php echo $artigos_futuro[$i]['id']; ?>"> Ver Mais </div>
    <p class="text_article" id="future<?php echo $artigos_futuro[$i]['id']; ?>_txt">
      <img id="xf<?php echo $artigos_futuro[$i]['id']; ?>" class="fechar right" src="imagens/X.png"></img>
      <?php echo $artigos_futuro[$i]['texto']; ?>
    </p>
  </div>
  <div class="clear"></div>
  </article>

<img class="next_class" id="next_f<?php $art_fut_id = $artigos_futuro[$i]['id'];
$id_art_fut_mais1 = $art_fut_id + 1;
echo $id_art_fut_mais1 ?>" src="imagens/setas.png"></img>


</section>
<?php } ?>

<section id="seccao_apps" class="contentor">
<h1 id="apps">Apps &amp; Tools</h1>
<svg viewbox="0 0 100 0.2">
  <line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" />
</svg>
  <article class="articles">

    <img class="figures left" src="imagens/apps_icon.jpg"></img>
    <br/>
    <div class="apps_contentor">
      <h2 id="apps_text">
        Exemplos que utilizam mecanismos de AI.
      </h2>
    <div class="hide_overflow">
      <div class="intro">
        <img src="imagens/seta_esq.png" class="setas_horizontal left" id="seta_esquerda"></img>
        <img src="imagens/seta_dir.png" class="setas_horizontal right" id="seta_direita"></img>
          
          <h1 class="menu_overflow left">
            <?php for($i=0; $i<count($artigos_app); $i++){ ?>
            <a class="apps_menu <?php if($artigos_app[$i]['id'] == 1){echo 'app_selecionada';}?>"><?php echo $artigos_app[$i]['titulo']; ?></a>
            <?php } ?>
          </h1>
          
      </div>
        <?php for($i=0; $i<count($artigos_app); $i++){ ?>
      <div class="app <?php if($artigos_app[$i]['id'] == 1){echo 'app_cont_selecionada';}?>">
        <img class="left" src="imagens/<?php echo $artigos_app[$i]['imagem']; ?>"></img>
        <p>
          <?php echo $artigos_app[$i]['texto']; ?></p>
      </div>
        <?php } ?>
        <div class="clear"></div>
  </article>
</section>

<div class="contentor">
  <h1 id="sobre_botao">
    Sobre o Site
  </h1>
</div>

<div id="sobre">
<img id="x5" class="right" src="imagens/X.png"></img>
<section id="seccao_sobre" class="contentor">
<h1 id="about">Acerca do Site</h1>
  <svg viewbox="0 0 100 0.2">
    <line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" />
  </svg>


  <article class="articles_opac">
    <div id="texto_sobre">
    <h2>Acerca do Site</h2>
    <p id="realizado_por" class="text_article">
      Trabalho realizado por Cristiano Ferro no âmbito da cadeira de Laboratório de Aplicações Interativas.
    </p>
    <h3>Webgrafia</h3>
    <div id="links">
    <p class="text_article">
      <?php for($i=0; $i<count($artigos_web); $i++){ ?>
      <a class="left" href="<?php echo $artigos_web[$i]['site']; ?>"><?php echo $artigos_web[$i]['nome']; ?></a>
      <?php } ?>
    </p>
  </div>
    </div>
    <div class="clear"></div>
  </article>


</section>
</div>

<footer>
<div>

</div>
</footer>
<!-- Javascript -->
<script type="application/javascript" src="js/jquery.js"></script>
<script type="application/javascript" src="js/script.js"></script>

</body>
</html>
