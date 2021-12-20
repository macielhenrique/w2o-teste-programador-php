<?php  
	
	# Incluindo os arquivos necessários
	

	function validate_options(){
		
		if(!isset($_GET['option'])){
			return false;
		}		

		include_once $GLOBALS['project_path']."/models/Connect.class.php";
		include_once $GLOBALS['project_path']."/models/Manager.class.php";

		$manager = new Manager();

		switch($_GET['option']){

		
			// EMPRESAS
			case "add_empresa":
				include_once $GLOBALS['project_path']."/views/forms/empresa/insert.php";
			break;

			case "manager_empresa":
				$empresas = $manager->select_common("tb_empresa",null, null, " ORDER BY id_empresa DESC");
				include_once $GLOBALS['project_path']."/views/forms/empresa/listar.php";
			break;

			case "update_empresa":
				$filtro['id_empresa'] = $_GET['id'];
				$emp = $manager->select_common("tb_empresa",null,$filtro, " ORDER BY id_empresa DESC")[0];
				include_once $GLOBALS['project_path']."/views/forms/empresa/update.php";
			break;


			default:
				echo "<h2> ERRO 404: NOT FOUND !</h2>";
			break;


			// colaborador
			case "add_colaborador":
				include_once $GLOBALS['project_path']."/views/forms/colaborador/insert.php";
			break;

			case "manager_colaborador":
				$empresas = $manager->select_common("tb_colaborador",null, null, " ORDER BY id_colaborador DESC");
				include_once $GLOBALS['project_path']."/views/forms/colaborador/listar.php";
			break;

			case "update_colaborador":
				$filtro['id_colaborador'] = $_GET['id'];
				$emp = $manager->select_common("tb_colaborador",null,$filtro, " ORDER BY id_colaborador DESC")[0];
				include_once $GLOBALS['project_path']."/views/forms/colaborador/update.php";
			break;



		}

	}
?>