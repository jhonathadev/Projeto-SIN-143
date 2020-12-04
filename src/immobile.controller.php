<?php
    require "conection.php";
	require "immobile.model.php";
	require "task-immobile.php";

	$action = isset ($_GET['action']) ? $_GET['action'] : $action;
	
	if($action == 'insert') {
		// verifica se todos os campos existem
		if((isset($_POST['title']) && isset($_POST['image1']) && isset($_POST['image2']) && isset($_POST['city']) && isset($_POST['rooms']) && isset($_POST['state']) && isset($_POST['value_daily']) && isset($_POST['phone']) && isset($_POST['description']))) {
			// verifica se todos os campos estão preenchidos
			if((!empty($_POST['title']) && !empty($_POST['image1']) && !empty($_POST['image2']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['rooms']) && !empty($_POST['value_daily']) && !empty($_POST['phone']) && !empty($_POST['description']))) {
				$immobile = new Immobile();
				$immobile->__set('title',$_POST['title']);
				$immobile->__set('image1',$_POST['image1']);
				$immobile->__set('image2',$_POST['image2']);
				$immobile->__set('city',$_POST['city']);
				$immobile->__set('state',$_POST['state']);
				$immobile->__set('rooms',$_POST['rooms']);
				$immobile->__set('value_daily',$_POST['value_daily']);
				$immobile->__set('phone',$_POST['phone']);
				$immobile->__set('description',$_POST['description']);
				$connect =  new Conection();
				$register = new taskImmobile($connect, $immobile);
				$register->insert();
				header('location:admin/view.php?insert=sucess');
				exit;
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
	} else if($action == 'read') {
		$immobile = new Immobile();
		$connect =  new Conection();
		$list = new taskImmobile($connect, $immobile);
		$return = $list->read();
	} else if($action == 'readId') {
		// verifica se o campo não está vazio
		if(!empty($_GET['id'])) {
			$idUrl = $_GET['id'];
			$immobile = new Immobile();
			$connect =  new Conection();
			$list = new taskImmobile($connect, $immobile);
			$return = $list->readId($idUrl);
		} else {
			//caso ocorra algum erro redireciona para a página de erro
			header('location:../error.php');
			exit;
		}
	} else if($action == 'update') {
		// verifica se todos os campos existem
		if((isset($_POST['title']) && isset($_POST['image1']) && isset($_POST['image2']) && isset($_POST['city']) && isset($_POST['rooms']) && isset($_POST['state']) && isset($_POST['value_daily']) && isset($_POST['phone']) && isset($_POST['description']))) {
			// verifica se todos os campos estão preenchidos
			if((!empty($_POST['title']) && !empty($_POST['image1']) && !empty($_POST['image2']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['rooms']) && !empty($_POST['value_daily']) && !empty($_POST['phone']) && !empty($_POST['description']))) {
				$immobile = new Immobile();
				$immobile->__set('id',$_POST['id']);
				$immobile->__set('title',$_POST['title']);
				$immobile->__set('image1',$_POST['image1']);
				$immobile->__set('image2',$_POST['image2']);
				$immobile->__set('city',$_POST['city']);
				$immobile->__set('rooms',$_POST['rooms']);
				$immobile->__set('state',$_POST['state']);
				$immobile->__set('value_daily',$_POST['value_daily']);
				$immobile->__set('phone',$_POST['phone']);
				$immobile->__set('description',$_POST['description']);
				$connect = new Conection();
				$update =  new taskImmobile($connect,$immobile);
				$update->update();
				header('location:admin/view.php?update=sucess');
				exit;
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
	} else if($action == 'delete') {
		if(!empty($_GET['id'])) {
			$idUrl = $_GET['id'];
			$immobile = new Immobile();
			$connect = new Conection();
			$remove =  new taskImmobile($connect,$immobile);
			$remove->delete($idUrl);
			header('location:view.php?delete=sucess'); 
			exit;
		} else {
			header('location:view.php?delete=error'); 
			exit;
		}
	} else if($action == 'search') {
		if(isset($_POST['city']) && isset($_POST['min']) && isset($_POST['max'])) {
			if((!empty($_POST['city']) && !empty($_POST['min']) && !empty($_POST['max']))) {
				$city = $_POST['city'];
				$min = $_POST['min'];
				$max = $_POST['max'];
				header("location:../search.php?city=$city&min=$min&max=$max&$action=search"); 
				exit;
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
	} else if($action == '') {
		exit;
	}
?>