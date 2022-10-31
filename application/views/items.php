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

			<tr>

			<td>Millat</td>
			<td>Millat</td>
			<td>Millat</td>
			<td>Millat</td>
			<td>Millat</td>
			<td>
			<a class="" href="">
								<i class="fa fa-pencil-square-o"></i>
							</a>
							<!--  -->

							<a onclick="alert('Are You Sure To Delete The Selected Brand?')" class="text-danger" href=""><i class="fa fa-trash"></i></a>
			</td>
			
			</tr>

			
		   </tbody>


		</table>



	</div>
</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#model_add">
	Add Models
</button>

<!-- Modal Create -->
<div class="modal fade" id="model_add" tabindex="-1" aria-labelledby="model_add" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Models</h5>
			</div>
			<div class="modal-body">


				<form action="" method="post" name="myform"">

					<div class=" input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Brand Name * </span>
					</div>
					<!-- <input type="text" name="brand_name" class="form-control" require> -->
					<select class="custom-select" name="brand_name">

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

				<select class="custom-select" name="name">

					<option selected>Select Brand</option>

					<?php foreach ($model as $key => $row) { ?>

						<option value="<?php echo $row->id ?>"><?php echo $row->brand_name ?></option>

					<?php }  ?>

				</select>



			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Item Name * </span>
				</div>
				<input type="text" name="item" class="form-control" require>
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
