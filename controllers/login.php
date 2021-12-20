<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/Connect.class.php";
	include_once $project_path."/models/Manager.class.php";
	
	# Recebendo os dados do Formulário
	$email = $_POST['email'];
	$password = $_POST['password'];

	# Realizando a busca no Banco de Dados
	
	$manager = new Manager ;
	$log = $manager->select_common("tb_users", NULL, $filter, " LIMIT 1");
	
	# Testando o login
	if(!$log){
		header("location: $project_index?error=user_not_found");
	}elseif(sha1($password) != $log[0]['user_pass']){
		header("location: $project_index?error=password_incorrect");
	}else{

		# Como está tudo ok, então faça...
		session_start();
        
		$_SESSION[md5('user')] = $log;

		header("location: $project_index");

	}


?>
