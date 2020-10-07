@extends('layouts.index')

@section('link-extra')
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
@endsection

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Create Lead</h2>
 		</div>
		<form id="lead" action="{{route('leads.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
 		<div class="row mx-1 mb-3">
 			<!--Card start a fresh lead-->
 			<div class="col-8">
 				<h6 class="ml-4">Start a fresh lead</h6>
 				<div class="card pb-1">
				  <div class="card-body">
				    <div class="row">
				    	<div class="col-7">
				    		<div>
				    		  <div class="form-row">
								    <div class="col-12">
										<label for="fullname">Full name</label>
								     	<input id="fullname" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{old('name')}}">
									 	@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
								    </div>
									<fieldset class="form-group col-6 mt-3">
										<div class="row">
										<div class="col-12">
											<div>
												<label for="phone">Phone</label>
												<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="@if(isset($user) && isset($user['phone'])){{$user['phone']}}@else{{old('phone')}}@endif" name="phone">
												@error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
											</div>
										</div>
										</div>
									</fieldset>
									<fieldset class="form-group col-6 mt-3">
									    <div class="row">
									      <div class="col-12">
										  <label for="">Address</label>
									        <div class="form-group">
												<input type="hidden" id="country-iso2" name="iso2">
												<input readonly id="country" type="text" value="United States" class="form-control" name="country">
									        </div>
									        <div class="form-group">
												<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{old('address')}}" required>
												@error('address')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
									        </div>
									      </div>
									    </div>
									</fieldset>
									<div class="form-row align-items-center col-12">
									    <div class="col-12 my-1">
									      <label for="email">Email</label>
									      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{old('email')}}" name="email">
										  @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
									    </div>
									</div>
							   </div>					    			
				    		</div>
				    	</div>
				    	<div class="col-5">
				    		<div>
				    			<div class="row">
					    		    <div class="form-group col-6">
								      <select id="category" id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
										@foreach($categories as $category)
											<option value="{{$category->id}}" @if(old("category_id") == $category->id) selected @endif>{{$category->name}}</option>
										@endforeach
								      </select>
									  @error('category_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
			    					</div>
					    		    <div class="form-group col-6">
								      <select id="origin" class="form-control @error('origin_id') is-invalid @enderror" name="origin_id" name="origin_id">
									  	@foreach($origins as $origin)
											<option value="{{$origin->id}}" @if(old('origin_id') == $origin->id) selected @endif>{{$origin->name}}</option>
										@endforeach
								      </select>
									  @error('origin_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
								    </div>
								    <div class="form-group col-12">
									    <label for="addcoments">Additional coments</label>
									    <textarea class="form-control @error('description') is-invalid @enderror" rows="3" id="description" name="description">{{old('description')}}</textarea>
										@error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="custom-file mb-3 col-11 ml-3">
									    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
									    <label class="custom-file-label" for="File">Choose file...</label>   
										@error('image')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									<div class="mb-3 col-12 ml-3">
										<img src="" id="image_display" alt="" style="width:100%">
									</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				  </div>
				</div>
 			</div>
			@if(auth()->user()->hasRole('admin'))
 			<!--Card Assign-->
 			<div class="col-4">
 				<h6 class="ml-4">Assign</h6>
 				<div class="card py-4">
				  <div class="card-body">
				    <div>
			    	  <div class="form-group d-flex justify-content-center">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <circle cx="12" cy="7" r="4" />
						  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>					   
					    <select class="form-control" id="salesman" style="width: 80%;" name="salesman_id">
					      @foreach($salesmen as $salesman)
						  	<option value="{{$salesman->id}}" @if(old('salesman_id') == $salesman->id) selected @endif>{{$salesman->name}}</option>
						  @endforeach
					    </select>
					  </div>
					  <div class="form-group d-flex justify-content-center pt-4">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <circle cx="12" cy="7" r="4" />
						  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>
					    <select class="form-control" id="supervisor" style="width: 80%;" name="supervisor_id">
					      @foreach($supervisors as $supervisor)
						  	<option value="{{$supervisor->id}}" @if(old('supervisor_id') == $supervisor->id) selected @endif>{{$supervisor->name}}</option>
						  @endforeach
					    </select>
					  </div>
				    </div>
				  </div>
				</div>
				<button class="btn btn-color btn-create-lead my-3" type="submit" role="button">Create</button>
 			</div>
			@else
			<div class="col-4">
				<button class="btn btn-color btn-create-lead my-3" type="submit" role="button">Create</button>
			</div>
			@endif
 		</div>
		</form>
 	</main>
@endsection

@section('js-extra')
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/intlTelInput.js')}}"></script>
<script type="text/javascript" src="{{asset('js/fn/create_lead.js')}}"></script>
@endsection