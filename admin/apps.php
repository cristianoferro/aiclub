

<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','teste2');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');

  //verificar se existe o parametro id_apagar no URL
if(isset($_GET['id_apagar']) ){
  $id = $_GET['id_apagar'];
  //apagar registo da vase de dados
  mysqli_query($ligacao, "DELETE FROM artigos_app WHERE id = $id");
}

//verificar se existe informação no array $_POST
if(count($_POST) > 0){

//guardar em variáveis a informação proveniente do formulário
  $titulo = $_POST['titulo'];
  $imagem = '';
  $texto = $_POST['texto'];

  //verificar se existiu upload de ficheiro bem sucedido
  if( $_FILES['imagem']['error'] == 0 ){

   //guardar nome original do ficheiro
   $imagem = $_FILES['imagem']['name'];

    //guardar nome do ficheiro temporário
    $ficheiro_temporario = $_FILES['imagem']['tmp_name'];

    //mover o ficheiro para a pasta das imagens
    move_uploaded_file( $ficheiro_temporario, '../imagens/'.$imagem );
    
  }

//inserir novo registo na tabela de artigos
mysqli_query($ligacao, "INSERT INTO artigos_app
(titulo,texto,imagem)
VALUES
('$titulo','$texto','$imagem') ")or die(mysqli_error($ligacao));

  };

//guardar numa variável uma consulta à base de dados
  $consulta = mysqli_query($ligacao, "SELECT * FROM artigos_app ORDER BY id");

while($linha = mysqli_fetch_assoc($consulta)){
  $artigos_app[] = $linha;
};



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Administração</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
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

        <h2>Apps</h2>
        <svg viewbox="0 0 100 0.2"><line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" /></svg>

        <div class="lista">

          <?php for($i=0;$i<count($artigos_app);$i++){ ?>

            <div class="item">
                <div class="lista-img">
                    <img src="../imagens/<?php echo $artigos_app[$i]['imagem']; ?>"></img>
                </div>
                <div class="lista-title">

                    <?php echo $artigos_app[$i]['titulo']; ?>
                    </a>
                </div>
                <div class="lista-botoes">
                  <div class="lista-delete">
                    <a href="apps.php?id_apagar=<?php echo $artigos_app[$i]['id']; ?>">Apagar Artigo</a>
                  </div>

                  <div class="lista-edit">
                    
                      <a href=" editar_artigo_apps.php?id=<?php echo $artigos_app[$i]['id']; ?>" class="botao_editar"> 
                        editar
                      </a>
                    </div>
                  <div class="clear">
                  </div>
              </div>
            </div>

          <?php } ?>

        </div>
        <h3 id="insert-button">Inserir app</h3>
              <div class="clear">

<!-- ___________________________________________________________________________________ -->
        <div class="janela_insert">
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

                <label>Título</label>
                <input type="text" name="titulo"/>

                <label>Texto</label>
                <textarea name="texto"></textarea>

                <label>Imagem</label>
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
