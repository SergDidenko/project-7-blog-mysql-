<form action="" method="POST" class="form-horizontal" role="form">
		<div class="form-group">
			<legend><?= $userTitle ?></legend>
		</div>

		<div class="form-group">
			<label for="inputUsername" class="col-sm-2 control-label">Username:</label>
			<div class="col-sm-10">
				<input type="text" name="username" id="inputUsername" class="form-control" value="" required="required"  title="">
				<span style='color:red'>
				<?php
					foreach ($errors as $k => $v) {
						if ($k=='username') {
							foreach ($v as $error) {
								echo $error." ";
							}
						}
					}

				?>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">Password:</label>
			<div class="col-sm-10">
				<input type="password" name="password" id="inputPassword" class="form-control" required="required" title="">
				<span style='color:red'>
				<?php
					foreach ($errors as $k => $v) {
						if ($k=='password') {
							foreach ($v as $error) {
								echo $error." ";
							}
						}
					}
				?>
				</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary"><?= $userTitle ?></button>
			</div>
		</div>
</form>