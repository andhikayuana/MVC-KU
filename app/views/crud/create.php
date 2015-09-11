<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>

	<link href="<?=PUBLIC_DIR?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-6">
	<h1>Register</h1>
	<?php
		echo Form::open('register',['action'=>$this->createUrl('crud/store'),'method'=>'post']);
		echo Form::text('username',null,['class'=>'form-control','placeholder'=>'Username','required'=>'required']);
		echo Form::text('email',null,['class'=>'form-control','placeholder'=>'Email','required'=>'required']);
		echo Form::submit('register','Register',['class'=>'btn btn-success']);
		echo Form::close();
	?>		
</div>
</body>
</html>