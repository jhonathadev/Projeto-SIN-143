<?php
    require "conection.php";
	require "image.model.php";
    require "task-image.php";
	
	$action = isset ($_GET['action']) ? $_GET['action'] : $action;

    if($action == 'update'){
        $image = new Image();
		$image->__set('image1',$_POST['image1']);
		$image->__set('image2',$_POST['image2']);
		$image->__set('image3',$_POST['image3']);
		$connect = new Conection();
		$update = new taskImage($connect,$image);
		$update->update();
        header('location: register-image.php?update=1');
        
    } else if($action == 'read'){
		$image = new Image();
		$connect =  new Conection();
		$list = new taskImage($connect,$image);
		$return = $list->read();
	}
?>