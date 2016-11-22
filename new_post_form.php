<form action="" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend><?= $title_form ?></legend>
		</div>
		<div class="form-group">
			<label for="inputTitle" class="col-sm-2 control-label">Title:</label>
			<div class="col-sm-10">
				<input type="text" name="title" id="inputTitle" class="form-control" 
				value=
				"<?php
					if($title_form==='Update post'){
						foreach ($posts as $post) {
							if( $id===$post['id']){
								echo $post['title'];
							}
						}
					}
					else{echo null;} ?>" 
				required="required"  title="">
			</div>
		</div>
		<div class="form-group">
			<label for="textareaContent" class="col-sm-2 control-label">Content:</label>
			<div class="col-sm-10">
				<textarea name="content" id="textareaContent" class="form-control" rows="3" required="required"><?php
					if($title_form==='Update post'){
						foreach ($posts as $post) {
							if ($id===$post['id']) {
								echo $post['content'];	
							}
						}
					}
					else{echo null;} 
				?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary"><?= $btn_form ?></button>
				<a href="/" class="btn btn-danger">Close</a>
			</div>
		</div>
</form>