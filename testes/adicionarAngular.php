<!DOCTYPE html>
<html ng-app="pedido">
<head>
	<meta charset="utf-8">
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
		.jumbotron{
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			margin-top: 20px;
		}
		.table{
			margin-top: 20px;

		}
		.form-control{
			margin-bottom: 5px;
		}
		.selecionado{
			font-weight: bold;

		}

	</style>
	<script src="angular/angular.js"></script>
	<script>
		angular.module("pedido", []);
		angular.module("pedido").controller("pedidoCtrl", function($scope){
			$scope.app = "Pedidos";

			$scope.pedidos = [];
			
			$scope.adicionarContato = function(pedido){
				$scope.pedidos.push(pedido);
				delete $scope.pedido;
				$scope.pedidoForm.$setPristine();
			};

			$scope.apagarContatos = function(pedidos){
				$scope.pedidos = pedidos.filter(function (pedido){
					if (!pedido.selecionado) return pedido; 
				})
			}
			$scope.isContatoSelecionado	= function(pedidos){
				return pedidos.some(function(pedido){
					return pedido.selecionado;
				});
			}
			$scope.ordenarPor = function(campo){
				$scope.criterioDeOrdenacao = campo;

			};
		});
	</script>
	</head>
<body ng-controller = "pedidoCtrl">
	<div class="jumbotron">
		<h3>{{app}}</h3>
			<input type="text" class="form-control" ng-model="criterioDeBusca" placeholder="digite para localizar">
			<table class="table table-striped" ng-show="pedidos.length > 0">
				<tr>
					<th>Selecionar</th>
					<th>Produto</th>
					<th>Quantidade</th>

				</tr>
				<tr ng-class="{selecionado: pedido.selecionado}" ng-repeat= "pedido in pedidos | filter:criterioDeBusca">
					<td> <input type="checkbox" ng-model="pedido.selecionado"/></td>
					<td>{{pedido.produto}}</td>
					<td>{{pedido.quantidade}}</td>
				</tr>

			</table> 
			<hr/>
			<form name="pedidoForm">
			
			<input class="form-control" type="text" name="produto" ng-model="pedido.produto" placeholder="Produto" ng-required="true"/>
			<input class="form-control" type="text" name="quantidade" ng-model="pedido.quantidade" placeholder="Quantidade" ng-required="true"/>
			
			</form>

			<div ng-show="pedidoForm.produto.$invalid && pedidoForm.produto.$dirty" class="alert alert-danger">
				Preencha o campo produto!
			</div>
			<div ng-show="pedidoForm.quantidade.$error.required && pedidoForm.quantidade.$dirty" class="alert alert-danger">
				Preencha o campo quantidade!
			</div>
			
			<button class="btn btn-primary btn-block" ng-click="adicionarContato(pedido)" ng-disabled="pedidoForm.$invalid">Adicionar </button>
			<button class="btn btn-danger btn-block" ng-click="apagarContatos(pedidos)" ng-show="isContatoSelecionado(pedidos)">Apagar </button>
	</div>
</body> 
</html>