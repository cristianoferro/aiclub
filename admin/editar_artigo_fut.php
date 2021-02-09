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
        $titulo = mysqli_real_escape_string($ligacao,$_POST['titulo']);;
        $texto = mysqli_real_escape_string($ligacao,$_POST['texto']);

        //Actualizar registo na base de dados
        mysqli_query($ligacao,"UPDATE artigos_futuro SET titulo = '$titulo' , texto = '$texto'
        WHERE id = $id ")or die();


        //Verificar se foi enviada uma nova imagem
        if( $_FILES['imagem']['error'] == 0 ){

            //Guardar numa variável o nome do ficheiro original
            $imagem = $_FILES['imagem']['name'];
            //Guardar numa variável o caminho para o ficheiro temporário
            $temp_file = $_FILES['imagem']['tmp_name'];

            //Mover o ficheiro carregado para a pasta das imagens
            move_uploaded_file( $temp_file  , '../img/'.$imagem );

            //Actualizar a base de dados
            mysqli_query($ligacao,"UPDATE artigos_futuro SET imagem = '$imagem' WHERE id = $id");

        }

    }

    //Fazer consulta à base de dados
    $consulta = mysqli_query($ligacao , "SELECT * FROM artigos_futuro WHERE id = $id");
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

        <h2>O Futuro</h2>
        <svg viewbox="0 0 100 0.2"><line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" /></svg>

        <div class="janela_editar">
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

                <label>Título</label>
                <input type="text" name="titulo" value="<?php echo $artigo['titulo']; ?>"/>

                <label>Texto</label>
                <textarea name="texto"><?php echo $artigo['texto']; ?></textarea>

                <label>Imagem</label>
                  <?php if($artigo['imagem'] != ''){ ?>
                     <img src="../img/<?php echo $artigo['imagem']; ?>" accept="image/*"/>
                  <?php } ?>
                <input type="file" name="imagem"/>

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