<?php 


include_once dirname(__DIR__)."/models/config.php";
include_once $project_path."/models/Connect.class.php";
  include_once $project_path."/models/Manager.class.php";
session_start();
if(isset($_SESSION[md5("user_data")])){ 
	$user=$_SESSION[md5("user_data")];

}
	

    //Se for delete
	if(isset($_POST['filter'])) {
		$delete=$_POST['filter'];
		$_POST['action'] = "delete";
	}


	switch($_POST['action']){
		case 'add':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->insert_common("tb_colaborador", $_POST, null);
			header("location: $project_index/admin.php?option=manager_colaborador&success=insert_ok");
		break;

		case 'update':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->update_common("tb_colaborador", $_POST, ['id_colaborador'=>$_POST['id_colaborador']],null);
			header("location: $project_index/admin.php?option=manager_colaborador&success=update_ok");
		break;

		case 'delete':
			$manager = new Manager;
			unset($_POST['action']);
			$manager->delete_common("tb_colaborador",['id_colaborador'=>$delete],null);
			header("location: $project_index/admin.php?option=manager_colaborador&success=delete_ok");
		break;

	}
	
?> 
