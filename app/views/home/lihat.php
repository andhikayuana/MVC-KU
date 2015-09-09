<?php foreach (@$users as $user): ?>

<a href="<?=$this->createUrl('home/detail/'.$user->id);?>">
	<?=$user->username;?>
</a> ||
	
<?php endforeach ?>