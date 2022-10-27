<!-- Header Side  -->
		<div class="card">
			<div class="card-header bg-info">
				<h3 class="text-white">Brand Menu</h3>
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">SL</th>
							<th scope="col">Name</th>
							<th scope="col">Entry Date</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>


					<?php foreach ($brand as $row) { ?> 


					

						
						

						<tr>
						<td><?php echo $row->id ?></td>
						<td><?php echo $row->name ?></td>
						<td><?php echo $row->entry_date ?></td>
						
							<td>
								<a class="" href="" data-toggle="modal" data-target="#brand-edit"><i class="fa fa-pencil-square-o"></i></a>


								<a onclick="alert('Are You Sure To Delete The Selected Brand?')" class="text-danger" href=""><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php }?>

				
					</tbody>
				</table>


			</div>
		</div>





		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#brand-model">
			Add Brand
		</button>

		<!-- Modal Create -->
		<div class="modal fade" id="brand-model" tabindex="-1" aria-labelledby="brand-model" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
					</div>
					<div class="modal-body">

						<form action="" method="post">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Brand Name * </span>
								</div>
								<input type="text" class="form-control">
							</div>
							<input class="btn btn-outline-primary" type="submit" value="Add">
						</form>

					</div>

				</div>
			</div>
		</div>
		<!-- Modal Create -->
		<!-- Modal Create -->
		<div class="modal fade" id="brand-edit" tabindex="-1" aria-labelledby="brand-edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edite Brand</h5>
					</div>
					<div class="modal-body">

						<form action="" method="post">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">Brand Name * </span>
								</div>
								<input type="text" class="form-control" value="Millat Hussain">
							</div>
							<input class="btn btn-outline-info" type="submit" value="Update">
						</form>

					</div>

				</div>
			</div>
		</div>
		<!-- Modal Create -->

<!-- Footer Section -->
