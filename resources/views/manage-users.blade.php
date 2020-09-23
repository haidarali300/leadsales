@extends('layouts.index')

@section('ref-header')
	href="{{url('admin-menu')}}" 
@endsection

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
 			<h2>Manage Users</h2>
 		</div>
 		<div class="ml-5 mr-5">
 			<!--tabs titles-->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
			    <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="true">Admin</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients" aria-selected="false">Clients</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="salesmen-tab" data-toggle="tab" href="#salesmen" role="tab" aria-controls="salesmen" aria-selected="false">Salesmen</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="supervisors-tab" data-toggle="tab" href="#supervisors" role="tab" aria-controls="supervisors" aria-selected="false">Supervisors</a>
			  </li>
			</ul>

			<!--Content tab-->
			<div class="tab-content" id="myTabContent"> 
			  <!--ADMIN-->
			  <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
			  	<form class="form-inline my-3">
			      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
			      <button class="btn btn-outline-success my-2" type="submit">Search</button>
			    </form>
			    <div class="row">
			    	<div class="col-3 d-flex align-items-center">
			    		<a class="btn btn-color btn-create ml-4" href="{{url('create-user')}}" role="button">
			    			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <circle cx="12" cy="12" r="9" />
							  <line x1="9" y1="12" x2="15" y2="12" />
							  <line x1="12" y1="9" x2="12" y2="15" />
							</svg>
			    		Create Admin</a>
			    	</div>
			    	<div class="col-9 pl-5"> 
			    		<div class="row">
				    		<div class="card mb-3 col-6 mr-4" style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/f.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Anne Cuthbert</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="card mb-3 col-6 " style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/h.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Ruby Gillis</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			    	</div>
			    </div>
			  </div>
			  <!--CLIENTS-->
			  <div class="tab-pane fade" id="clients" role="tabpanel" aria-labelledby="clients-tab">
			  	<form class="form-inline my-3">
			      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
			      <button class="btn btn-outline-success my-2" type="submit">Search</button>
			    </form>
			    <div class="row">
			    	<div class="col-3 d-flex align-items-center">
			    		<a class="btn btn-color btn-create ml-4" href="{{url('create-user')}}" role="button">
			    			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <circle cx="12" cy="12" r="9" />
							  <line x1="9" y1="12" x2="15" y2="12" />
							  <line x1="12" y1="9" x2="12" y2="15" />
							</svg>
			    		Create Client</a>
			    	</div>
			    	<div class="col-9 pl-5"> 
			    		<div class="row">
				    		<div class="card mb-3 col-6 mr-4" style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/g.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Diana Barry</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="card mb-3 col-6 " style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/e.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Cole Mackenzie</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			    	</div>
			    </div>
			 
			  </div>
			  <!--SALESMEN--->
			  <div class="tab-pane fade" id="salesmen" role="tabpanel" aria-labelledby="salesmen-tab">
				<form class="form-inline my-3">
			      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
			      <button class="btn btn-outline-success my-2" type="submit">Search</button>
			    </form>
			    <div class="row">
			    	<div class="col-3 d-flex align-items-center">
			    		<a class="btn btn-color btn-create ml-4" href="{{url('create-user')}}" role="button">
			    			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <circle cx="12" cy="12" r="9" />
							  <line x1="9" y1="12" x2="15" y2="12" />
							  <line x1="12" y1="9" x2="12" y2="15" />
							</svg>
			    		Create Salesman</a>
			    	</div>
			    	<div class="col-9 pl-5"> 
			    		<div class="row">
				    		<div class="card mb-3 col-6 mr-4" style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/b.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Muriel Stacy</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="card mb-3 col-6 " style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/c.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Josephine Spurgeon</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			    	</div>
			    </div>
			  </div>
			  <div class="tab-pane fade" id="supervisors" role="tabpanel" aria-labelledby="supervisors-tab">
				<form class="form-inline my-3">
			      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
			      <button class="btn btn-outline-success my-2" type="submit">Search</button>
			    </form>
			    <div class="row">
			    	<div class="col-3 d-flex align-items-center">
			    		<a class="btn btn-color btn-create ml-4" href="{{url('create-user')}}" role="button">
			    			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <circle cx="12" cy="12" r="9" />
							  <line x1="9" y1="12" x2="15" y2="12" />
							  <line x1="12" y1="9" x2="12" y2="15" />
							</svg>
			    		Create Supervisor</a>
			    	</div>
			    	<div class="col-9 pl-5"> 
			    		<div class="row">
				    		<div class="card mb-3 col-6 mr-4" style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/d.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Mary Lacroix</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="card mb-3 col-6 " style="max-width: 430px;">
							  <div class="row no-gutters">
							    <div class="col-md-4 d-flex align-items-center">
							      <img src="images/e.png" class="card-img" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							      	<div class="row">
							      		<div class="col-8">
									        <h5 class="card-title">Gilbert Blythe</h5>
									        <p class="card-text">Phone</p>
									        <p class="card-text"><small class="text-muted">Email</small></p>
							      		</div>
							      		<div class="col-4">
							      			<a class="btn btn-color mt-1 mb-3" href="#" role="button">
						    					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
												  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
												  <line x1="16" y1="5" x2="19" y2="8" />
												</svg>
				    						</a>
				    						<a class="btn btn-color mt-4" href="#" role="button">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
												  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												  <line x1="4" y1="7" x2="20" y2="7" />
												  <line x1="10" y1="11" x2="10" y2="17" />
												  <line x1="14" y1="11" x2="14" y2="17" />
												  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
												  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
												</svg>
				    						</a>
							      		</div>
							      	</div>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
			    	</div>
			    </div>

			  </div>
			</div>
 		</div>
 	</main>
@endsection
