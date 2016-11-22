<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title"><?= $comment['user'] ?></h3>
	</div>
	<div class="panel-body">
		<?= $comment['comment'] ?>
	<?php if ($_SESSION['user']===$comment['user']) {?>
	<hr>
	<a href="/update_comment.php?id=<?= $id_c ?>" class="btn  btn-sm btn-success">Update</a>
	<a href="/delete_comment.php?id=<?= $id_c ?>" class="btn btn-sm btn-danger">Delete</a>
	<?php }?>
	</div>
</div>