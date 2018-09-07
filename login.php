<?php

	$nick = $_POST['nome'];
	$link = mysqli_connect('localhost','root','usbw','quemsoueudb');

	$sql = "SELECT * FROM jogador WHERE nome = '".$nick."'";
	$busca = mysqli_query($link,$sql);

	if(mysqli_num_rows($busca) == 0){

		$sql = "INSERT INTO jogador (nome) VALUES ('".$nick."')";
		mysqli_query($link,$sql);

		echo "login";
	}else{
		echo "erro";
	}

?>