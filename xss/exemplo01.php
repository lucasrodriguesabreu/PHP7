<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>


</form>


<?php

$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("Ok")</script>';

if(isset($_POST['busca'])){

	//Removendo tags e adicionando excessões, após a vírgula do busca.
	//echo strip_tags($_POST['busca'], "<strong><a>");
	//Escrevendo todas as tags
	echo htmlentities($_POST['busca']);
}


?>