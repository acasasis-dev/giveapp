@extends("layout.adminlayout")

@section('title')
Admin | Pending Items
@endsection


@section('content')
<link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/item.css')}}>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card strpied-tabled-with-hover">
					<div class="card-header">
						<h4 class="card-title">Pending List</h4>
						<p class="card-category">
							Item that needs administrator approval
						</p>
					</div>

					<div class="card-body table-full-width table-responsive">
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Item Name</th>
									<th>Category</th>
									<th>Item Description</th>
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
									<td>Sample</td>
									<td>
                    					<a class="btn btn-sm btn-success" 
                    					href="#"
                    					><i class="fas fa-check"></i> Approved</a>   
                    					<a class="btn btn-sm btn-danger" 
                    					href="#"
                    					style="margin-left: 5%;"><i class="fas fa-times"></i> Reject</a>
                    					<a class="btn btn-sm btn-primary" 
                    					data-toggle="modal" data-target=".bd-example-modal-lg"
                    					style="margin-left: 5%;"><i class="fas fa-eye"></i> View</a>   
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

@section('modal')
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="flex-grid featured-content">
      <div class="grid-item">
  		 <div class="grid-item-wrapper">
  			  <div class="grid-item-bg-img" style="background-image:url('https://images.unsplash.com/photo-1484036218807-91efe1baff2f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f2ddcac446186aaf34590666d33e85a9&auto=format&fit=crop&w=1350&q=80')"></div>
  			  <div class="grid-item-content">
  					<div class="grid-item-content-details">
  						 <h4 class="grid-title">Graphic Design</h4>
  						 <div class="grid-details">Graphic design is the process of visual communication and problem-solving using one or more of typography, photography and illustration to create visual compositions.</div>
  					<div class="grid-action">
  						 <div class="btn btn--clear">Click Outside to Exit</div>
  					</div>
  			  </div>
  		 </div>
      </div>
  </div>
</div>

    </div>
  </div>
</div>
@endsection