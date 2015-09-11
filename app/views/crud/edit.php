<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

	<link href="<?=PUBLIC_DIR?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-6">
	<h1>Edit</h1>
	<?php
		echo Form::open('update',['action'=>$this->createUrl('crud/update/'.$id),'method'=>'post']);
		echo Form::text('username',$user->username,['class'=>'form-control','placeholder'=>'Username','required'=>'required']);
		echo Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'Email','required'=>'required']);
		echo Form::submit('update','Update',['class'=>'btn btn-success']);
		echo Form::close();
	?>
	<a href="<?=$this->createUrl('crud/index');?>" class="btn btn-primary">Back</a>
</div>
</body>
</html>