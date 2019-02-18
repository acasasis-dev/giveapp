@extends("layout.adminlayout")

@section('title')
Admin | Admin List
@endsection


@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card strpied-tabled-with-hover">
					<div class="card-header">
						<h4 class="card-title">Admin List</h4>
						<p class="card-category">
							Current Administators
						</p>
					</div>

					<div class="card-body table-full-width table-responsive">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Position</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Sample</td>
									<td>Sample</td>
									<td>Sample</td>
									<td>Sample</td>
									<th>Sample</th>
									<td>
                    					<a class="btn btn-sm btn-danger" 
                    					href="#"
                    					style="margin-left: 5%;"><i class="fas fa-trash-alt"></i> Revoke</a>    
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection