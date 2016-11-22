<form action="" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend></legend>
		</div>
		<div class="form-group">
			<label for="textareaComment" class="col-sm-2 control-label"><?= $com_title ?></label>
			<div class="col-sm-10">
				<textarea name="comment" id="textareaComment" class="form-control" rows="3" required="required"><?php
				if($com_title==='Update'){ echo $comment['comment'];}?></textarea>
			</div>
		</div>
		

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary"><?= $com_title ?></button>
			</div>
		</div>
</form>