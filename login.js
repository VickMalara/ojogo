$(document).ready(function(){

	$("#loginBnt").click(function(){

		$.ajax({
			url : "login.php",
			type : "post",
			data : {
				nome : $("#nick").val()
			},

			beforeSend : function(){
				$('#alert').html('Entrando...');
			}
		})

		.done(function(msg){
			if(msg == 'login'){
				$('#alert').html('Entrou');
			}else{
				$('#alert').html('*Nick inválido: repetido');
			}
		})

		.fail();
	});
});