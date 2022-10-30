<div class="card">
	<div class="card-header bg-info">
		<h3 class="text-white">Model Edite </h3>
	</div>
	<div class="card-body">


		<form action="<?php echo base_url('model/update/'.$edit->id) ?>" method="post">

			<div class=" input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Brand Name * </span>
				</div>
				<!-- <input type="text" name="brand_name" class="form-control" require> -->
				<select class="custom-select" name="brand_name">

					<option selected>Select Brand</option>

					<?php foreach ($model as $row) { ?>

						<option value=""><?php echo $row ?></option>

					<?php } ?>


				</select>
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Model Name * </span>
				</div>
				<input type="text" name="name" class="form-control" value="<?php echo $edit->name ?>" require>
				<?php echo form_hidden('entry_date', date('Y-m-d H:i:S')) ?>
			</div>


			<input class="btn btn-outline-primary" type="submit" value="Update">
		</form>


	</div>
</div>
