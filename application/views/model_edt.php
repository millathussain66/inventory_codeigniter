<div class="card">
	<div class="card-header bg-info">
		<h3 class="text-white">Model Edite </h3>
	</div>
	<div class="card-body">


	<form action="" method="post" name="myform"">

<div class="input-group mb-3">
	<div class="input-group-prepend">
		<span class="input-group-text">Brand Name * </span>
	</div>
	<!-- <input type="text" name="brand_name" class="form-control" require> -->
	<select class="custom-select" name="brand_name">

		   <option selected>Select Brand</option>


		   <option value="<?= $edit->brand_name?>"> <?= $edit->brand_name ?> </option>
	

	</select>
</div>

<div class="input-group mb-3">
	<div class="input-group-prepend">
		<span class="input-group-text">Model Name * </span>
	</div>
	<input type="text" name="name" class="form-control" value="<?= $edit->name?>" require>
	<?php echo form_hidden('entry_date', date('Y-m-d H:i:S')) ?>
</div>
<input class="btn btn-outline-primary" type="submit" value="Add">
</form>


	</div>
</div>
