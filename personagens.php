<?php include('kernel/head.php') ?>  
<div class="ui main center aligned container">
<h1 class="ui header">Selecione um personagem para visualisar suas cargas.</h1>
</div>

<?php

//conexao ao banco de dados, essa variavel pode ser colocada no db.php assim podendo ser chamada apenas com $con... Mas vou colocar aqui por enquanto

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Codigo da consulta SQL

$sql = "select * from campeoes order by nome asc";

//faz a consulta
$consulta = mysqli_query($con, $sql);

//laço de repetição

while ($linha = mysqli_fetch_array($consulta)) {

	//Set as variaveis
	$id = $linha['id'];
	$nome = $linha['nome'];
	$foto = $linha['foto'];
	$classe = $linha['classe'];

?>

<!--  

Como não sou muito bom com front-end fiz as edicões do css inline entao depois quem for um pouco melhor no css pfvr melhore eles.


-->

<!-- Div geral -->
<div style="margin: 180px;">

<!-- Div que fica cada personagem deentro -->

<div style="float: left; padding-right: 12px; padding-top: 12px; ">


<!-- Codigo da imagem com o link passando algumas informações por GET -->
<a href="build.php?id=<?php echo $id ?>&champ=<?php echo $nome ?>"><img style="width: 100px; border-radius: 7px;" src="<?php echo $foto ?>"  alt="<?php echo $nome ?>"></a><br>

<!-- codigo que exibir o nome do campeao -->
<center><h3 style="margin-top: 5px; font-size: 17px;"><?php echo $nome ?></h3></center>
</div></div>




<?php 
}
//fecho o while
 ?>
