<div class="card">
	<div class="card-header bg-info">
		<h3 class="text-white">Items Menu </h3>
	</div>
	<div class="card-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">SL</th>
					<th scope="col">Items Name </th>
					<th scope="col">Model Name </th>
					<th scope="col">Brand Name </th>
					<th scope="col">Entry Date </th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>

			<pre>
			<?php foreach($getAllData as $key=>$data){

				?>
			</pre>
				<tr>
					<td> <?php echo $key+1 ?> </td>
					<td> <?php echo $data->item ?> </td>
					<!-- From Model Table -->

					<td> <?php echo $data->models_id ?> </td>

					<!-- From Model Table -->
					<!-- From Brand Table -->
					<td> <?php echo $data->brand_id ?> </td>
					<!-- From Brand Table -->
					<td> <?php echo $data->entry_date ?> </td>


						<td>
							<a class="" href="">
								<i class="fa fa-pencil-square-o"></i>
							</a>
							<a onclick="alert('Are You Sure To Delete The Selected Items?')" class="text-danger" href="<?php echo base_url('items/delete/'.$data->id)?>"><i class="fa fa-trash"></i></a>
						</td>
					</tr>

					<?php } ?>
			
			</tbody>
		</table>
	</div>
</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#model_add">
	Add Items
</button>

<!-- Modal Create -->
<div class="modal fade" id="model_add" tabindex="-1" aria-labelledby="model_add" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Models</h5>
			</div>
			<div class="modal-body">


				<form action="<?php echo base_url('items/add') ?>" method="post" name="myform"">

					<div class=" input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Brand Name * </span>
					</div>
					<!-- <input type="text" name="brand_name" class="form-control" require> -->
					<select class="custom-select" name="brand_name" required>

						<option selected>Select Brand</option>

						<?php foreach ($brand as $key => $row) { ?>

							<option value="<?php echo $row->id ?>"><?php echo $row->brand_name ?></option>

						<?php }  ?>

					</select>
			</div>
			<div class=" input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Model Name * </span>
				</div>
				<!-- <input type="text" name="brand_name" class="form-control" require> -->

				<select class="custom-select" name="name" required>

					<option selected>Select Brand</option>

					<?php foreach ($model as $key => $row) { ?>
						<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>

					<?php }  ?>

				</select>



			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Item Name * </span>
				</div>

				<input type="text" name="items" class="form-control" required>


				<?php echo form_hidden('entry_date', date('Y-m-d H:i:S')) ?>
			</div>


			<input class="btn btn-outline-primary" type="submit" value="Add">


			</form>

		</div>

	</div>
</div>
</div>
<!-- Modal Create -->

<!-- edt Create -->

<!-- Modal Create -->

<!-- Footer Section -->
