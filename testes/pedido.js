
		angular.module("pedido", []);
		angular.module("pedido").controller("listaTelefonicaCtrl", function($scope){
			$scope.app = "Pedidos";

			$scope.pedidos = [];
			
			$scope.adicionarContato = function(pedido){
				$scope.pedidos.push(pedido);
				delete $scope.pedido;
				$scope. .$setPristine();
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
