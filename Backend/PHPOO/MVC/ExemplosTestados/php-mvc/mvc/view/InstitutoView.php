<?php

class InstitutoView{
	public static function exibeInstitutos($institutos){
		$view = "";

		$view .= "<br>";
		$view .= "<h2>Adicionar Instituto</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"criar-inst\" class=\"form-control\" type=\"text\" size=\"35\" maxlength=\"45\">";
		$view .= "<div id=\"add\"><i class=\"glyphicon glyphicon-plus\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert\"></div>";

		$view .= "<div id=\"alt-div\" style=\"display:none\">";

		$view .= "<h2>Alterar Instituto</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"alterar-inst\" class=\"form-control\" type=\"text\" size=\"35\" maxlength=\"45\">";
		$view .= "<div id=\"alt\"><i class=\"glyphicon glyphicon-ok alt-ico\"></i></div>";
		$view .= "<div id=\"cancela\"><i class=\"glyphicon glyphicon-remove alt-ico\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert-alt\"></div>";

		$view .= "</div>";

		$view .= "<h2>Gerenciar Institutos</h2>";
		$view .= "<br>";

		$view .= "<div id=\"table\">";
		$view .= "<table class=\"table table-hover\">";

		$view .= "<thead>";
		$view .= "<tr>";
		$view .= "<th>Nome</th>";
		$view .= "<th>Excluir</th>";
		$view .= "<th>Atualizar</th>";
		$view .= "</tr>";
		$view .= "</thead>";
		$view .= "<tbody>";

		if($institutos != null){
			for($i=0;$i<sizeof($institutos);$i++){
				$view .= "<tr id='".$institutos[$i]->getId()."'>";
				
				$view .= "<td>";
				$view .= $institutos[$i]->getNome();
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-remove remove\"></i>";
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-pencil pencil\"></i>";
				$view .= "</td>";

				$view .= "</tr>";
			}
		}

		$view .= "</tbody>";
		$view .= "</table>";
		$view .= "</div>";

		echo $view;
	}

	public static function sucesso(){
		$view = "<div class=\"alert alert-info\">";
		$view .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
		$view .= "Instituto adicionado com sucesso!";
		$view .= "</div>";
		echo $view;
	}

	public static function erro(){
		$view = "<div class=\"alert alert-danger\">";
		$view .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
		$view .= "Já existe um instituto com esse nome ou algum campo está vazio!";
		$view .= "</div>";
		echo $view;
	}
}

?>