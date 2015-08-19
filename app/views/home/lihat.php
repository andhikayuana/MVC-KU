<?php foreach (@$users as $user): ?>

<a href="<?=$this->createUrl('home/detail',['id'=>$user->id]);?>">
	<?=$user->username;?>
</a> ||
	
<?php endforeach ?>