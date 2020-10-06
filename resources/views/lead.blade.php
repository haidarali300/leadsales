@extends('layouts.index')

@section('link-extra')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
@endsection

@section('content')
 	<main class="">
 		<div class="container my-4 ">
			<div id="carouselLead" class="carousel slide" data-ride="carousel" data-interval="false">
			  <div class="carousel-inner">
			  	<!--Contact-->
			    <div class="carousel-item active">
			      <div class="card">
					  <div class="card-body">
					    <h6 class="mb-4">Contact</h6>
						<form method="POST" action="{{route('users.update', ['role' => 'client', 'user' => $lead->client->id])}}" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="lead_id" value="{{$lead->id}}">
					    <div class="row">
					    	<div class="col-5">
								<div class="form-group row mb-5">
									<label for="name" class="col-4 col-form-label">Full Name:</label>
									<div class="col-8">
										<input type="text" class="form-control" id="name" value="{{$lead->client->name}}" name="name">
									</div>
								</div>
								<div class="form-group row mb-5">
									<label for="phone" class="col-4 col-form-label">Phone:</label>
									<div class="col-8">
										<input type="number" class="form-control" id="phone" value="{{$lead->client->phone}}" name="phone">
									</div>
								</div>
								<div class="form-group row mb-5">
									<label for="address" class="col-4 col-form-label">Address:</label>
									<div class="col-8">
										<input type="text" class="form-control" id="address" value="{{$lead->client->address}}" name="address">
									</div>
								</div>
								<div class="form-group row mb-5">
									<label for="address" class="col-4 col-form-label">Address:</label>
									<div class="col-8">
										<input readonly type="text" class="form-control" id="country" value="{{$lead->client->country}}" name="country">
									</div>
								</div>
								<div class="form-group row ">
									<label for="email" class="col-4 col-form-label">Email:</label>
									<div class="col-8">
										<input type="email" class="form-control" id="email" value="{{$lead->client->email}}" name="email">
									</div>
								</div>
					    	</div>
					    	<div class="col-4">
								<div class="row">
									<div class="form-group col-6">
										<select id="category" class="form-control">
										@foreach($categories as $category)
											<option value="{{$category->id}}" {{($lead->category_id == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group col-6 mb-4">
										<select id="origin" class="form-control">
										@foreach($origins as $origin)
											<option value="{{$origin->id}}" {{($lead->origin_id == $origin->id) ? 'selected' : ''}}>{{$origin->name}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group col-12 mt-4">
										<textarea class="form-control" id="addcoments" rows="3" placeholder="Additional coments">{{$lead->description}}</textarea>
									</div>
									<div class="form-group  mt-1 ml-3">
									<label for="samples" class="col-form-label">Samples: 
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<line x1="15" y1="8" x2="15.01" y2="8" />
											<rect x="4" y="4" width="16" height="16" rx="3" />
											<path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
											<path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
										</svg>
										@if($lead->image)
											<img src="{{asset($lead->image)}}" id="image_display" alt="" style="width:100%">
										@endif
									</label>
									</div>
								</div>
					    	</div>
					    	<div class="col-3">
								@if(auth()->user()->hasrole('admin'))
								<div class="form-group">
									<select id="salesman" class="form-control">
									@foreach($salesmen as $salesman)
										<option value="{{$salesman->id}}" {{($lead->salesman_id == $salesman->id) ? 'selected' : ''}}>{{$salesman->name}}</option>
									@endforeach
									</select>
								</div>
								<div class="form-group mt-5">
									<select id="supervisor" class="form-control">
									@foreach($supervisors as $supervisor)
										<option value="{{$supervisor->id}}" {{($lead->supervisor_id == $supervisor->id) ? 'selected' : ''}}>{{$supervisor->name}}</option>
									@endforeach
									</select>
								</div>
								@endif
								<div class="text-right mt-edit-extra">
									<button type="submit" class="btn btn-color btn-check" role="button">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
										<path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
										<path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
										<line x1="16" y1="5" x2="19" y2="8" />
									</svg>
									</button>
								</div>
					    	</div>	
					    </div>
						</form>
					  </div>
				  </div>
			    </div>
				<!--Budget-->
			    <div class="carousel-item">
			      <div class="card">
					  <div class="card-body">
					    <h6 class="mb-4">Budget</h6>
						<form method="POST" action="@if($lead->budget_id){{route('budgets.update', ['budget' => $lead->budget_id])}}@else{{route('budgets.store')}}@endif" enctype="multipart/form-data">
							@csrf 
							@if($lead->budget_id) <input type="hidden" name="_method" value="PUT"> @endif
							<input type="hidden" name="lead_id" value="{{$lead->id}}">
					    	<div class="row">
					    		<div class="col-7">
									<div class="form-group row mb-5">
										<label for="budget-num" class="col-3 col-form-label">Budget Number:</label>
										<div class="col-9">
											<input type="text" class="form-control" id="budget-num" name="number" value="@if($lead->budget_id){{$lead->budget->number}}@endif">
										</div>
									</div>
									<div class="custom-file mb-3 ">
										<input type="file" class="custom-file-input" id="budget_image" name="image">
										<label class="custom-file-label" for="budget_image">Choose file...</label>   
									</div>
									<div>
										<img src="@if($lead->budget_id){{asset($lead->budget->image)}}@endif" id="budget_image_display" class="img-fluid" alt="">
									</div>
					    		</div>
					    		<div class="col-5">
									<div class="form-group row ">
										<label for="description" class="col-3">Description</label>
										<div class="col-9">
											<textarea class="form-control" id="description" rows="3" name="description">@if($lead->budget_id){{$lead->budget->description}}@endif</textarea>	
										</div>
									</div>
									<div class="text-right">
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
				  </div>
			    </div>
			    <!--Negotiation-->
			    <div class="carousel-item">
			      <div class="card">
					  <div class="card-body">
					    <h6 class="mb-4">Negotiation</h6>
						<form method="POST" action="@if($lead->negotiation_id){{ route('negotiations.update', ['negotiation' => $lead->negotiation_id] )}}@else{{ route('negotiations.store') }}@endif" enctype="multipart/form-data">
							@csrf 
							@if($lead->negotiation_id) <input type="hidden" name="_method" value="PUT"> @endif
							<input type="hidden" name="lead_id" value="{{$lead->id}}">
					    	<div class="row">
					    		<div class="col-7">
									<div class="form-group row mb-5">
										<label for="budget-num" class="col-3 col-form-label">Budget Number:</label>
										<div class="col-9">
											<input type="text" class="form-control" id="budget-num" name="number" value="@if($lead->negotiation_id){{$lead->negotiation->number}}@endif">
										</div>
									</div>
									<div class="custom-file mb-3 ">
										<input type="file" class="custom-file-input" id="negotiation_image" name="image">
										<label class="custom-file-label" for="negotiation_image">Choose file...</label>   
									</div>
									<div>
										<img src="@if($lead->negotiation_id){{asset($lead->negotiation->image)}}@endif" id="negotiation_image_display" class="img-fluid" alt="">
									</div>
					    		</div>
					    		<div class="col-5">
									<div class="form-group row ">
										<label for="description" class="col-3">Description</label>
										<div class="col-9">
											<textarea class="form-control" id="description" rows="3" name="description">@if($lead->negotiation_id){{$lead->negotiation->description}}@endif</textarea>	
										</div>
									</div>
									<div class="text-right">
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
				  </div>
			    </div>
			    <!--Closing-->
			    <div class="carousel-item">
			      <div class="card">
					  <div class="card-body">
					    <h6 class="mb-4">Closing</h6>
						<form method="POST" action="@if($lead->closing_id){{ route('closings.update', ['closing' => $lead->closing_id] )}}@else{{ route('closings.store') }}@endif" enctype="multipart/form-data">
							@csrf
							@if($lead->closing_id) <input type="hidden" name="_method" value="PUT"> @endif
							<input type="hidden" name="lead_id" value="{{$lead->id}}">
					    	<div class="row">
					    		<div class="col-6">
									<div class="form-group row mb-5">
										<label for="invoice-num" class="col-4 col-form-label">Invoice number:</label>
										<div class="col-8">
											<input type="text" class="form-control" id="invoice-num" name="invoice_number" value="@if($lead->closing_id){{$lead->closing->invoice_number}}@endif">
										</div>
									</div>
									<div class="custom-file mb-3 ">
										<input type="file" class="custom-file-input" id="closing_invoice_image" name="invoice_image">
										<label class="custom-file-label" for="closing_invoice_image">Choose file...</label>   
									</div>
									<div>
										<img src="@if ($lead->closing_id){{asset($lead->closing->invoice_image)}}@endif" id="closing_invoice_image_display" class="img-fluid" alt="">
									</div>
					    		</div>
					    		<div class="col-6">
									<div class="form-group row mb-5">
										<label for="guide-num" class="col-3 col-form-label">Guide number:</label>
										<div class="col-9">
											<input type="text" class="form-control" id="guide-num" name="guide_number" value="@if($lead->closing_id){{$lead->closing->guide_number}}@endif">
										</div>
									</div>
									<div class="custom-file mb-3 ">
										<input type="file" class="custom-file-input" id="closing_guide_image" name="guide_image">
										<label class="custom-file-label" for="closing_guide_image">Choose file...</label> 
									</div>
									<div>
										<img src="@if($lead->closing_id){{asset($lead->closing->guide_image)}}@endif" id="closing_guide_image_display" class="img-fluid" alt="">
									</div>
								</div>
								<label for="income" class="col-2 col-form-label">Income:</label>
								<div class="col-10">
									<input class="form-control" step="any" type="number" name="income" value="@if($lead->closing_id){{$lead->closing->income}}@endif">
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-color btn-email">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									<circle cx="12" cy="12" r="9" />
									<line x1="9" y1="12" x2="15" y2="12" />
									<line x1="12" y1="9" x2="12" y2="15" />
								</svg>
								</button>
							</div>
						</form>
					  </div>
				  </div>
			    </div>
			    <!--Quality of Service-->
			    <div class="carousel-item">
			      <div class="card">
					  <div class="card-body">
					    <h6 class="mb-4">Quality of Service</h6>
						<form method="POST" action="{{ route('lead.qualities.store', ['lead' => $lead->id]) }}">
							@csrf
							<div class="row ">
							@if ($lead->stage_id != 5)
							@foreach($qualityCriterias as $criteria)
							<div class="col-2 mt-n1">{{$criteria->name}}: </div>
				    		<div class="stars col-10 mt-n3 d-flex justify-content-start">
								<div>
								<input class="star star-5" id="{{$criteria->id}}star-5" type="radio" name="{{$criteria->id}}" value="5"/>
								<label class="star star-5" for="{{$criteria->id}}star-5"></label>
								<input class="star star-4" id="{{$criteria->id}}star-4" type="radio" name="{{$criteria->id}}" value="4"/>
								<label class="star star-4" for="{{$criteria->id}}star-4"></label>
								<input class="star star-3" id="{{$criteria->id}}star-3" type="radio" name="{{$criteria->id}}" value="3"/>
								<label class="star star-3" for="{{$criteria->id}}star-3"></label>
								<input class="star star-2" id="{{$criteria->id}}star-2" type="radio" name="{{$criteria->id}}" value="2"/>
								<label class="star star-2" for="{{$criteria->id}}star-2"></label>
								<input class="star star-1" id="{{$criteria->id}}star-1" type="radio" name="{{$criteria->id}}" value="1"/>
								<label class="star star-1" for="{{$criteria->id}}star-1"></label>
								</div>
							</div>
							<br><br><br>
							@endforeach
							@else
							@foreach($lead->qualityCriterias as $criteria)
							<div class="col-2 mt-n1">{{$criteria->name}}: </div>
				    		<div class="stars col-10 mt-n3 d-flex justify-content-start">
								<div>
								<input class="star star-5" id="{{$criteria->id}}star-5" type="radio" name="{{$criteria->id}}" value="5" @if($criteria->pivot->rate == 5) checked @endif />
								<label class="star star-5" for="{{$criteria->id}}star-5"></label>
								<input class="star star-4" id="{{$criteria->id}}star-4" type="radio" name="{{$criteria->id}}" value="4" @if($criteria->pivot->rate == 4) checked @endif />
								<label class="star star-4" for="{{$criteria->id}}star-4"></label>
								<input class="star star-3" id="{{$criteria->id}}star-3" type="radio" name="{{$criteria->id}}" value="3" @if($criteria->pivot->rate == 3) checked @endif />
								<label class="star star-3" for="{{$criteria->id}}star-3"></label>
								<input class="star star-2" id="{{$criteria->id}}star-2" type="radio" name="{{$criteria->id}}" value="2" @if($criteria->pivot->rate == 2) checked @endif />
								<label class="star star-2" for="{{$criteria->id}}star-2"></label>
								<input class="star star-1" id="{{$criteria->id}}star-1" type="radio" name="{{$criteria->id}}" value="1" @if($criteria->pivot->rate == 1) checked @endif />
								<label class="star star-1" for="{{$criteria->id}}star-1"></label>
								</div>
							</div>
							<br><br><br>
							@endforeach
							@endif
							</div>
							<button type="submit" class="btn btn-color btn-email">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									<circle cx="12" cy="12" r="9" />
									<line x1="9" y1="12" x2="15" y2="12" />
									<line x1="12" y1="9" x2="12" y2="15" />
								</svg>
							</button>
						</form>
					  </div>
				  </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselLead" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselLead" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

 			<!--Contact
		    <div class="card">
			  <div class="card-body">
			    <h6 class="mb-4">Contact</h6>
			    <div class="row">
			    	<div class="col-5">
			    		<form>
			    			<div class="form-group row mb-5">
							    <label for="name" class="col-4 col-form-label">Full Name:</label>
							    <div class="col-8">
							      <input type="text" class="form-control" id="name">
							    </div>
							</div>
							<div class="form-group row mb-5">
							    <label for="phone" class="col-4 col-form-label">Phone:</label>
							    <div class="col-8">
							      <input type="number" class="form-control" id="phone">
							    </div>
							</div>
							<div class="form-group row mb-5">
							    <label for="address" class="col-4 col-form-label">Address:</label>
							    <div class="col-8">
							      <input type="text" class="form-control" id="address">
							    </div>
							</div>
							<div class="form-group row ">
							    <label for="email" class="col-4 col-form-label">Email:</label>
							    <div class="col-8">
							      <input type="email" class="form-control" id="email">
							    </div>
							</div>
			    		</form>
			    	</div>
			    	<div class="col-4">
			    		<form>
		    				<div class="row">
				    		    <div class="form-group col-6">
							      <select id="category" class="form-control">
							        <option selected>Category</option>
							        <option>...</option>
							      </select>
		    					</div>
				    		    <div class="form-group col-6 mb-4">
							      <select id="origin" class="form-control">
							        <option selected>Origin</option>
							        <option>...</option>
							      </select>
							    </div>
							    <div class="form-group col-12 mt-4">
								    <textarea class="form-control" id="addcoments" rows="3" placeholder="Additional coments"></textarea>
								</div>
								<div class="form-group  mt-6 ml-3">
							    <label for="samples" class="col-form-label">Samples: 
							    	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
									  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									  <line x1="15" y1="8" x2="15.01" y2="8" />
									  <rect x="4" y="4" width="16" height="16" rx="3" />
									  <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
									  <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
									</svg>
							    </label>
							</div>
			    			</div>
			    		</form>
			    	</div>
			    	<div class="col-3">
			    		<form>
				    		<div class="form-group">
						      <select id="salesman" class="form-control">
						        <option selected>Salesman</option>
						        <option>...</option>
						      </select>
							</div>
							<div class="form-group mt-5">
						      <select id="supervisor" class="form-control">
						        <option selected>Supervisor</option>
						        <option>...</option>
						      </select>
							</div>
							<div class="text-right mt-edit-extra">
							  <a class="btn btn-color btn-check" href="#" role="button">
							  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
								  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
								  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
								  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
								  <line x1="16" y1="5" x2="19" y2="8" />
								</svg>
							  </a>
							</div>
			    		</form>
			    	</div>
			    	
			    </div>
			  </div>
			</div>	
			<br><br>	-->
			<!--Budget
			<div class="card">
			  <div class="card-body">
			    <h6 class="mb-4">Budget</h6>
			    	<div class="row">
			    		<div class="col-7">
			    			<form>
			    				<div class="form-group row mb-5">
								    <label for="budget-num" class="col-3 col-form-label">Budget Number:</label>
								    <div class="col-9">
								      <input type="text" class="form-control" id="budget-num">
								    </div>
								</div>
								<div class="custom-file mb-3 ">
									    <input type="file" class="custom-file-input" id="File">
									    <label class="custom-file-label" for="File">Choose file...</label>   
								</div>
								<div>
									<img src="images/budget2.png" class="img-fluid" alt="Responsive image">
								</div>
			    			</form>
			    		</div>
			    		<div class="col-5">
			    			<form>
				    			 <div class="form-group row ">
								    <label for="description" class="col-3">Description</label>
								    <div class="col-9">
								   		 <textarea class="form-control" id="description" rows="3"></textarea>	
								    </div>
								</div>
							    <div class="text-right">
							      <button type="submit" class="btn btn-color btn-email">
							      	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									  <circle cx="12" cy="12" r="9" />
									  <line x1="9" y1="12" x2="15" y2="12" />
									  <line x1="12" y1="9" x2="12" y2="15" />
									</svg>
							      </button>
							    </div>
			    			</form>
			    		</div>
			    	</div>
			  </div>
			</div>
			<br><br>-->
			<!--Negotiation
			<div class="card">
			  <div class="card-body">
			    <h6 class="mb-4">Negotiation</h6>
			    	<div class="row">
			    		<div class="col-7">
			    			<form>
			    				<div class="form-group row mb-5">
								    <label for="budget-num" class="col-3 col-form-label">Budget Number:</label>
								    <div class="col-9">
								      <input type="text" class="form-control" id="budget-num">
								    </div>
								</div>
								<div class="custom-file mb-3 ">
									    <input type="file" class="custom-file-input" id="File">
									    <label class="custom-file-label" for="File">Choose file...</label>   
								</div>
								<div>
									<img src="images/budget2.png" class="img-fluid" alt="Responsive image">
								</div>
			    			</form>
			    		</div>
			    		<div class="col-5">
			    			<form>
				    			 <div class="form-group row ">
								    <label for="description" class="col-3">Description</label>
								    <div class="col-9">
								   		 <textarea class="form-control" id="description" rows="3"></textarea>	
								    </div>
								</div>
							    <div class="text-right">
							      <button type="submit" class="btn btn-color btn-email">
							      	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									  <circle cx="12" cy="12" r="9" />
									  <line x1="9" y1="12" x2="15" y2="12" />
									  <line x1="12" y1="9" x2="12" y2="15" />
									</svg>
							      </button>
							    </div>
			    			</form>
			    		</div>
			    	</div>
			  </div>
			</div>
			<br><br>-->
			<!--Closing
			<div class="card">
			  <div class="card-body">
			    <h6 class="mb-4">Closing</h6>
			    	<div class="row">
			    		<div class="col-6">
			    			<form>
			    				<div class="form-group row mb-5">
								    <label for="invoice-num" class="col-4 col-form-label">Invoice number:</label>
								    <div class="col-8s">
								      <input type="text" class="form-control" id="invoice-num">
								    </div>
								</div>
								<div class="custom-file mb-3 ">
									<input type="file" class="custom-file-input" id="File">
									<label class="custom-file-label" for="File">Choose file...</label>   
								</div>
								<div>
									<img src="images/budget2.png" class="img-fluid" alt="Responsive image">
								</div>
			    			</form>
			    		</div>
			    		<div class="col-6">
			    			<form>
				    			<div class="form-group row mb-5">
								    <label for="guide-num" class="col-3 col-form-label">Guide number:</label>
								    <div class="col-9">
								      <input type="text" class="form-control" id="guide-num">
								    </div>
								</div>
								<div class="custom-file mb-3 ">
								    <input type="file" class="custom-file-input" id="File">
								    <label class="custom-file-label" for="File">Choose file...</label> 
								</div>
								<div>
									<img src="images/budget2.png" class="img-fluid" alt="Responsive image">
								</div>
			    			</form>
			    		</div>
			    	</div>
			  </div>
			</div>
			<br><br>-->
			<!--Quality of Service
			<div class="card">
			  <div class="card-body">
			    <h6 class="mb-4">Quality of Service</h6>
			    <div class="row ">
				    <div class="col-2 mt-n1">Criterion: </div>
		    		<div class="stars col-10 mt-n3 d-flex justify-content-start">
						<form action="">
							<input class="star star-5" id="astar-5" type="radio" name="star"/>
							<label class="star star-5" for="astar-5"></label>
							<input class="star star-4" id="astar-4" type="radio" name="star"/>
							<label class="star star-4" for="astar-4"></label>
							<input class="star star-3" id="astar-3" type="radio" name="star"/>
							<label class="star star-3" for="astar-3"></label>
							<input class="star star-2" id="astar-2" type="radio" name="star"/>
							<label class="star star-2" for="astar-2"></label>
							<input class="star star-1" id="astar-1" type="radio" name="star"/>
							<label class="star star-1" for="astar-1"></label>
						</form>								
					</div>
					<br><br><br>		
					<div class="col-2 mt-n1">Criterion: </div>
		    		<div class="stars col-10 mt-n3 d-flex justify-content-start">
						<form action="">
							<input class="star star-5" id="bastar-5" type="radio" name="star"/>
							<label class="star star-5" for="bastar-5"></label>
							<input class="star star-4" id="bastar-4" type="radio" name="star"/>
							<label class="star star-4" for="bastar-4"></label>
							<input class="star star-3" id="bastar-3" type="radio" name="star"/>
							<label class="star star-3" for="bastar-3"></label>
							<input class="star star-2" id="bastar-2" type="radio" name="star"/>
							<label class="star star-2" for="bastar-2"></label>
							<input class="star star-1" id="bastar-1" type="radio" name="star"/>
							<label class="star star-1" for="bastar-1"></label>
						</form>								
					</div>
					<br><br><br>		
					<div class="col-2 mt-n1">Criterion: </div>
		    		<div class="stars col-10 mt-n3 d-flex justify-content-start">
						<form action="">
							<input class="star star-5" id="castar-5" type="radio" name="star"/>
							<label class="star star-5" for="castar-5"></label>
							<input class="star star-4" id="castar-4" type="radio" name="star"/>
							<label class="star star-4" for="castar-4"></label>
							<input class="star star-3" id="castar-3" type="radio" name="star"/>
							<label class="star star-3" for="castar-3"></label>
							<input class="star star-2" id="castar-2" type="radio" name="star"/>
							<label class="star star-2" for="castar-2"></label>
							<input class="star star-1" id="castar-1" type="radio" name="star"/>
							<label class="star star-1" for="castar-1"></label>
						</form>								
					</div>
			    </div>
			    
			  </div>
			</div>-->
 		</div>
 	</main>
@endsection

@section('js-extra')
	<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/sweetalert2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/intlTelInput.js')}}"></script>
	<script>let stage_id = <?= $lead->stage_id ?>; </script>
	<script type="text/javascript" src="{{asset('js/fn/lead.js')}}"></script>
@endsection