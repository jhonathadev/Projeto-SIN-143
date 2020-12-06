<?php
    require "conection.php";
	require "image.model.php";
    require "task-image.php";
	
	$action = isset ($_GET['action']) ? $_GET['action'] : $action;

    if($action == 'insert'){
		if(isset($_POST['image'])) {
			if(!empty($_POST['image'])) {
				$image = new Image();
				$image->__set('image',$_POST['image']);
				$connect = new Conection();
				$update = new taskImage($connect,$image);
				$update->insert();
				header('location:admin/register-image.php?insert=sucess');
			} else {
				//caso ocorra algum erro redireciona para a página de erro
				header('location:../error.php');
				exit;
			}
		} else {
			//caso ocorra algum erro redireciona para a página de erro
			header('location:../error.php');
			exit;
		}
    } else if($action == 'read'){
		$image = new Image();
		$connect =  new Conection();
		$list = new taskImage($connect,$image);
		$return = $list->read();
	}
?>