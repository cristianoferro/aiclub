<?php

    //Ligar à base de dados
    $ligacao = mysqli_connect('localhost','root','','teste2');
    //Definir codificação de caracteres
    mysqli_set_charset($ligacao,'utf8');

    //Guardar numa variável o parametro id do URL
    $id = $_GET['id'];

    //Verificar se existem elementos guardados no array $_POST
    if( count($_POST) > 0 ){

        //Guardar em variáveis os valores enviados pelo formulário
        $nome = mysqli_real_escape_string($ligacao,$_POST['nome']);;
        $site = mysqli_real_escape_string($ligacao,$_POST['site']);

        //Actualizar registo na base de dados
        mysqli_query($ligacao,"UPDATE webgrafia SET nome = '$nome' , site = '$site'
        WHERE id = $id ")or die();

    }

    //Fazer consulta à base de dados
    $consulta = mysqli_query($ligacao , "SELECT * FROM webgrafia WHERE id = $id");
    //Guardar numa variável o registo encontrado pela consulta
    $artigo = mysqli_fetch_assoc($consulta);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administração</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
  <!--  <link type="text/css" rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css" /> -->
</head>
<body>

<header class="top">
  <a href="index.php" class="contentor">
    <h1>
      Gestor de conteúdos
    </h1>
  </a>
</header>

    <div class="contentor">

        <h2>Webgrafia</h2>
        <svg viewbox="0 0 100 0.2"><line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" /></svg>

        <div class="janela_editar">
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

                <label>Nome do site</label>
                <input type="text" name="nome" value="<?php echo $artigo['nome']; ?>"/>

                <label>Link</label>
                <textarea name="site"><?php echo $artigo['site']; ?></textarea>

                <input type="submit" value="Inserir" class="submit_button"/>

            </form>
          </div>
        </div>
                
                
    </div>

    <!-- Ficheiros JS -->
    <script type="application/javascript" src="js/jquery.js"></script>
    <script type="application/javascript" src="js/script.js"></script>




</body>
</html>