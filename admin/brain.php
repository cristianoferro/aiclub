

<?php

  //guardar numa variável a ligação à base de dados
  $ligacao = mysqli_connect('localhost','root','','teste2');
  //definir a codificação de caracteres de ligação à base de dados (BD) - para ser possivel ver todos os caracteres iguais, ex: acentosm etc
  mysqli_set_charset($ligacao,'utf8');

  //verificar se existe o parametro id_apagar no URL
if(isset($_GET['id_apagar']) ){
  $id = $_GET['id_apagar'];
  //apagar registo da vase de dados
  mysqli_query($ligacao, "DELETE FROM brain WHERE id = $id");
}

//verificar se existe informação no array $_POST
if(count($_POST) > 0){

//guardar em variáveis a informação proveniente do formulário - neste caso só existem imagens
  $imagem = '';

  //verificar se existiu upload de ficheiro bem sucedido
  if( $_FILES['imagem']['error'] == 0 ){

   //guardar nome original do ficheiro
   $imagem = $_FILES['imagem']['name'];

    //guardar nome do ficheiro temporário
    $ficheiro_temporario = $_FILES['imagem']['tmp_name'];

    //mover o ficheiro para a pasta das imagens
    move_uploaded_file( $ficheiro_temporario, '../imagens/'.$imagem );
    
  }

//inserir novo registo na tabela brain
mysqli_query($ligacao, "INSERT INTO brain
(imagem)
VALUES
('$imagem') ")or die(mysqli_error($ligacao));

  };

//guardar numa variável uma consulta à base de dados
  $consulta = mysqli_query($ligacao, "SELECT * FROM brain ORDER BY id");

while($linha = mysqli_fetch_assoc($consulta)){
  $brain[] = $linha;
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

        <h2>Imagens do cérebro na animação</h2>
        <svg viewbox="0 0 100 0.2"><line x1="0" y1="0" x2="200" y2="0" style="stroke:#ffffff;stroke-width:0.4" /></svg>

        <div class="lista">

          <?php for($i=0;$i<count($brain);$i++){ ?>

            <div class="item">
                <div class="lista-img">
                    <img src="../imagens/<?php echo $brain[$i]['imagem']; ?>"></img>
                </div>
                <!-- elemento vazio que ajuda a manter a estrutura habitual dos botoes -->
                <div class="lista-title">
                    <br> 
                </div>
          
                <div class="lista-botoes">
                  <div class="lista-delete">
                    <a href="brain.php?id_apagar=<?php echo $brain[$i]['id']; ?>">Apagar Imagem</a>
                  </div>

               
                  <div class="clear">
                  </div>
              </div>
            </div>

          <?php } ?>

        </div>
        <h3 id="insert-button">Inserir imagem</h3>
              <div class="clear">

<!-- ___________________________________________________________________________________ -->
        <div class="janela_insert">
          <div class="item-insert">

            <form  enctype="multipart/form-data" action="" method="post">

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
