<?php
    require "conection.php";
	require "immobile.model.php";
	require "task-immobile.php";
	$action = isset ($_GET['action']) ? $_GET['action'] : $action;


	if($action == 'insert') {
		$immobile = new Immobile();
		$immobile->__set('title',$_POST['title']);
		$immobile->__set('image1',$_POST['image1']);
		$immobile->__set('image2',$_POST['image2']);
		$immobile->__set('city',$_POST['city']);
		$immobile->__set('state',$_POST['state']);
		$immobile->__set('value_daily',$_POST['value_daily']);
		$immobile->__set('phone',$_POST['phone']);
		$immobile->__set('description',$_POST['description']);
		$connect =  new Conection();
		$register = new taskImmobile($connect, $immobile);
		$register->insert();
		header('location:register.php?insert=sucess');
		exit;
	} else if($action == 'read') {
		$immobile = new Immobile();
		$connect =  new Conection();
		$list = new taskImmobile($connect, $immobile);
		$return = $list->read();

	} else if($action == 'readId') {
		$idUrl = $_GET['id'];
		$immobile = new Immobile();
		$connect =  new Conection();
		$list = new taskImmobile($connect, $immobile);
		$return = $list->readId($idUrl);

	} else if($action == 'update') {
		$immobile = new Immobile();
		$immobile->__set('id',$_POST['id']);
		$immobile->__set('title',$_POST['title']);
		$immobile->__set('image1',$_POST['image1']);
		$immobile->__set('image2',$_POST['image2']);
		$immobile->__set('city',$_POST['city']);
		$immobile->__set('state',$_POST['state']);
		$immobile->__set('value_daily',$_POST['value_daily']);
		$immobile->__set('phone',$_POST['phone']);
		$immobile->__set('description',$_POST['description']);
		$connect = new Conection();
		$update =  new taskImmobile($connect,$immobile);
		$update->update();
		header('location:view.php?update=sucess');
		exit;
	} else if($action == 'delete') {
		$idUrl = $_GET['id'];
		$immobile = new Immobile();
		$connect = new Conection();
		$remove =  new taskImmobile($connect,$immobile);
		$remove->delete(id);
		header('location:view.php?delete=sucess'); 
		exit;
	} else if($action == 'search') {
		$city = $_POST['city'];
		$immobile = new Immobile();
		$connect =  new Conection();
		$list = new taskImmobile($connect, $immobile);
		$return = $list->search($city);
		header('location:search.php?search=sucess'); 
	}
		
?>