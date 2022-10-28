<div class="card">
	<div class="card-header bg-info">
		<h3 class="text-white">Edite Brand </h3>
	</div>
	<div class="card-body">


		<form action="" method="post" name="myform" onsubmit="return validateform()">

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Brand Name * </span>
				</div>
				<input type="text" name="name" class="form-control" value="<?= $edit->name?>" require>
				<?php echo form_hidden('entry_date', date('Y-m-d H:i:S')) ?>

			</div>
			<input class="btn btn-outline-primary" type="submit" value="Update">
		</form>


	</div>
</div>
