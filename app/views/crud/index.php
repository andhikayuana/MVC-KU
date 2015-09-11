<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>

	<link href="<?=PUBLIC_DIR?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-6">
	<h1>Daftar Peserta</h1>
	<a href="<?=$this->createUrl('crud/create');?>" class="btn btn-success">Register</a>
	<table class="table">
		<tr align="center">
			<td>No</td>
			<td>Username</td>
			<td>Email</td>
			<td>Aksi</td>
		</tr>
		<?php $i=1; foreach ($users as $key => $user): ?>
			<tr>
				<td><?=$i;?></td>
				<td><?=$user->username;?></td>
				<td><?=$user->email;?></td>
				<td>
					<a href="<?=$this->createUrl('crud/show/'.$user->id);?>" class="btn btn-success">Detail</a>
					<a href="<?=$this->createUrl('crud/edit/'.$user->id);?>" class="btn btn-warning">Edit</a>
					<a href="<?=$this->createUrl('crud/delete/'.$user->id) ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?')">Delete</a>
				</td>
			</tr>
		<?php $i++; endforeach ?>

	</table>
</div>
</body>
</html>