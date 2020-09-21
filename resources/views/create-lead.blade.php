@extends('layouts.index')

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Create Lead</h2>
 		</div>
 		<div class="row mx-1 mb-3">
 			<!--Card start a fresh lead-->
 			<div class="col-8">
 				<h6 class="ml-4">Start a fresh lead</h6>
 				<div class="card pb-1">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col-7">
				    		<form>
				    		  <div class="form-row">
								    <div class="col-6">
								      <input type="text" class="form-control" placeholder="Last Name">
								    </div>
								    <div class="col-6">
								      <input type="text" class="form-control" placeholder="Name">
								    </div>
								   <fieldset class="form-group col-6 mt-3">
									    <div class="row">
									      <legend class="col-form-label col-sm-4 pt-0">Phone:</legend>
									      <div class="col-8">
									        <div class="form-group">
													<select id="phone-type" class="form-control">
											        <option selected>Type</option>
											        <option>...</option>
											     </select>
									        </div>
									        <div class="form-group">
										        <select id="area-code" class="form-control">
											        <option selected>Area Code</option>
											        <option>...</option>
											     </select>
									        </div>
									        <div class="">
									          <input type="text" class="form-control" placeholder="Phone Number">
									        </div>
									      </div>
									    </div>
									</fieldset>
									<fieldset class="form-group col-6 mt-3">
									    <div class="row">
									      <legend class="col-form-label col-sm-4 pt-0">Addres:</legend>
									      <div class="col-8">
									        <div class="form-group">
													<select id="country" class="form-control">
											        <option selected>Country</option>
											        <option>...</option>
											     </select>
									        </div>
									        <div class="form-group">
										        <select id="state" class="form-control">
											        <option selected>State</option>
											        <option>...</option>
											     </select>
									        </div>
									        <div class="">
									          <input type="text" class="form-control" placeholder="City">
									        </div>
									      </div>
									    </div>
									</fieldset>
									<div class="form-row align-items-center col-12">
									    <div class="col-6 my-1">
									      <label class="sr-only" for="email">Name</label>
									      <input type="email" class="form-control" id="email" placeholder="Email">
									    </div>
									    <div class="form-group col-5 my-1 ">
									     	<select id="email-type" class="form-control">
										        <option selected>Type</option>
										        <option>...</option>
										    </select> 
									    </div>
									    <div class="col-1 my-1">
									      <button type="submit" class="btn btn-color btn-email">
									      	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
											  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											  <circle cx="12" cy="12" r="9" />
											  <line x1="9" y1="12" x2="15" y2="12" />
											  <line x1="12" y1="9" x2="12" y2="15" />
											</svg>
									      </button>
									    </div>
									  </div>
							   </div>					    			
				    		</form>
				    	</div>
				    	<div class="col-5">
				    		<form>
				    			<div class="row">
					    		    <div class="form-group col-6">
								      <select id="category" class="form-control">
								        <option selected>Category</option>
								        <option>...</option>
								      </select>
			    					</div>
					    		    <div class="form-group col-6">
								      <select id="origin" class="form-control">
								        <option selected>Origin</option>
								        <option>...</option>
								      </select>
								    </div>
								    <div class="form-group col-12">
									    <label for="addcoments">Additional coments</label>
									    <textarea class="form-control" id="addcoments" rows="3"></textarea>
									</div>
									<div class="custom-file mb-3 col-11 ml-3">
									    <input type="file" class="custom-file-input" id="File">
									    <label class="custom-file-label" for="File">Choose file...</label>   
									</div>
				    			</div>
				    		</form>
				    	</div>
				    </div>
				  </div>
				</div>
 			</div>

 			<!--Card Assign-->
 			<div class="col-4">
 				<h6 class="ml-4">Assign</h6>
 				<div class="card py-4">
				  <div class="card-body">
				    <form class="mt-4">
			    	  <div class="form-group d-flex justify-content-center">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <circle cx="12" cy="7" r="4" />
						  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>					   
					    <select class="form-control" id="salesman" style="width: 80%;">
					      <option selected>Salesman</option>
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					    </select>
					  </div>
					  <div class="form-group d-flex justify-content-center pt-4">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <circle cx="12" cy="7" r="4" />
						  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>
					    <select class="form-control" id="supervisor" style="width: 80%;">
					      <option selected>Supervisor</option>
					      <option>1</option>
					      <option>2</option>
					      <option>3</option>
					    </select>
					  </div>
				    </form>
				  </div>
				</div>
				<a class="btn btn-color btn-create-lead my-3" href="#" role="button">Create</a>
 			</div>
 		</div>
 	</main>
@endsection
