<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
		<a href="/separate.php?id=<?= $id ?>"><?= $post['title']. "<span class='user-name'>".$post['user']."</span>" ?></a>
		</h3>
	</div>
	<div class="panel-body">
		<?= $post['content'] ?>
	<?php if ($_SESSION['user']===$post['user']): ?>
	<hr>
	<a href="/update.php?id=<?= $id ?>" class="btn btn-sm btn-success">Update</a>
	<a class="btn btn-sm btn-danger" data-toggle="modal" href='#modal-id-<?php echo $id ?>'>Delete</a>
	<div class="modal fade" id="modal-id-<?php echo $id ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Are you sure?</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="/delete.php?id=<?= $id ?>" class="btn btn-sm btn-danger">Delete</a>
				</div>
			</div>
		</div>
	</div>
	<?php endif ?>
	</div>
	
</div>