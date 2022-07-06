<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alerta!</h4>
        </div>
        <div class="modal-body">
          <p><center>Login e/ou senha incorretos!</center></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

        </div>
      </div>

    </div>
  </div>
</body>
</html>

<?php
//Recebe as variaveis do formulario de login
  $email = htmlspecialchars($_POST['email']);
  $senha = md5($_POST['senha']);
  $entrar = $_POST['entrar'];

//Conecta ao banco de dados
$conexao= mysqli_connect("localhost","root","")or die("Erro na conexão!");

//Seleciona o banco para verificacao dos campos
mysqli_select_db($conexao,'home')or die("Erro na consulta sql!");

//Executa a validação dos dados ao clicar no botao entrar
    if (isset($entrar)) {
            
      $verifica = mysqli_query($conexao, "SELECT email, senha FROM login WHERE email= '$email' AND senha= '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){

          echo "<script>
                  $('#myModal').modal('show')
                  $('#myModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
                </script>";

        }else{

      session_start();

          $_SESSION['email'] = $email;
          header("Location:index.php");
        }
    }
?>
