<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Sistema de Automação Residencial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <script type="text/javascript" src="js/validaForm.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>

body{
  background: url("img/img4.jpg") no-repeat center fixed;
  background-size: cover;
}

.navbar-inverse {
  background-color: rgba(255, 250, 250, 0.8);
  border-width: 0px;
  border-radius: 0px;
}
li a{
  color: black;
}

.panel-default{
  color: #5264ae;
  background-color: rgba(248, 248, 255, 1.0);
  padding-top: 10px;
  margin: auto;
  width: 380px;
  box-shadow: 2px 2px 19px black;
}
.panel-group{
  padding-top: 60px;
}

input{
  background-color: rgba(248, 248, 255, 0.1);
}
.modal-header, h4, .close {
  background-color: #00BFFF;
  color:white !important;
  text-align: center;
  font-size: 30px;
}
.modal-footer {
  background-color: #f9f9f9;
}
    
/* Set black background color, white text and some padding */
    footer {
      background-color: rgba(255, 250, 250, 0.8);
      color: black;
      padding: 0px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 1200px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class='row'>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuário</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configuração</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
       <div class="panel-group">
  <div class="panel panel-default">
    <center>
        <h3>Faça seu login</h3>
    <div class="panel-body">
  

      <form name="formlogin" action="logar.php" method="POST">

         <div class="group">
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="37" required>
            <label>E-MAIL</label>
            <span class="bar"></span>
         </div>

        <div class="group">
          <input type="password" name="senha" maxlength="37" required>
          <label>SENHA</label>
          <span class="bar"></span>
        </div>
        <br>

        <div class="group">
          <button class="btn btn-info" type="submit" name="entrar">Entrar</button>
        </div>
        
        </form>
          <button class="btn btn-link" onclick="cadastroModal()"> Criar Cadastro </button>
          <button class="btn btn-link" onclick="verificaEmail()"> Esqueci a senha </button>
      </div>
    </center>
      </div>
      </div>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<script type="text/javascript">
  function cadastroModal() {
    $('#cadModal').modal('show')
    $('#cadModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
  }
  function verificaEmail() {
    $('#emailModal').modal('show')
    $('#emailModal').on('hide.bs.modal', function () { window.location.href = 'login.php'; })
  }
</script>
</body>
</html>