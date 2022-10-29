<div class="card">
	<div class="card-header bg-info">
		<h3 class="text-white">Edite Brand </h3>
	</div>
	<div class="card-body">

	<div class="text-danger mb-3" id="error"></div>



		<form action="<?php echo base_url('brand/update/'.$edit->id); ?>" method="post" name="myform" id="myform">

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Brand Name * </span>
				</div>
				<input type="text" id="brand_name" name="brand_name" class="form-control" value="<?= $edit->brand_name?>" require>
				<?php echo form_hidden('entry_date', date('Y-m-d H:i:S')) ?>

			</div>
			<input class="btn btn-outline-primary" type="submit" value="Update">
		</form>


	</div>
</div>
