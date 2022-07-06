<!DOCTYPE html>
<html>
<head>
	<title>Atualizar sem refresh</title>
</head>
<body>
	<div id="conteudo">Este conteúdo será alterado</div>	

		Qual é seu nome? <input type="text" id="seu_nome">
 
		<button type="button" onclick="alterar_div()">Alterar</button>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
function alterar_div() {
  $.ajax({
    type: "POST",
    url: "processa.php",
    data: {
      nome_usuario: $('#seu_nome').val()
    },
    success: function(data) {
      $('#conteudo').html(data);
    }
  });
}
</script>
</html>
