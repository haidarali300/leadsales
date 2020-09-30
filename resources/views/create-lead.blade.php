@extends('layouts.index')

@section('link-extra')
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
@endsection

@section('js-extra')
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/intlTelInput.js')}}"></script>
<script>
	let input = document.querySelector("#phone");
	iti = intlTelInput(input, {
		separateDialCode: true,
		utilsScript: "/js/utils.js",
		initialCountry: "us",
		autoPlaceholder: "aggressive",
		formatOnDisplay: true,
		onlyCountries: ["us", "gb"],
		hiddenInput: "phone"
	});
	input.addEventListener("keyup", () => {
		if (!iti.isValidNumber())
			$("#phone").addClass("form-control-invalid")
		else
			$("#phone").removeClass("form-control-invalid")
	});
	const setCountryData = () => {
		let selected_country = iti.getSelectedCountryData();
		document.getElementById("country").value = selected_country.name;
		document.getElementById("country-iso2").value = selected_country.iso2;
	}
	input.addEventListener("countrychange", () => setCountryData());
	window.addEventListener('submit', () => setCountryData());

	window.addEventListener('load', () => {
		$("#salesman").select2({ placeholder: 'Select a salesman' });
		$("#supervisor").select2({ placeholder: 'Select a supervisor' });
		$("#category").select2({ placeholder: 'Select a category' });
		$("#origin").select2({ placeholder: 'Select a origin' });
	});

	$("#lead").submit(() => {
		event.preventDefault();
		
		if (!create_user(true))
			Swal.fire({ title: 'Error!', text: 'Something went wrong', icon: 'error' });
	});
	
	const create_user = (submit = false) => {
		let is_set_client = Boolean(document.getElementById("client_id").value);

		if (is_set_client && !submit)
			return true

		let token = window.sessionStorage.getItem('api_token');

		let data = {
			name    : document.getElementById("fullname").value,
			country : document.getElementById("country").value,
			state   : document.getElementById("state").value,
			city    : document.getElementById("city").value,
			email   : document.getElementById("email").value,
			phone   : iti.getNumber()
		};

		let missing_fields = Object.keys(data).map((key,index) => {
			return (!data[key]) ? `<strong>Missing field:</strong> ${key}` : undefined
		}).filter(item => item);			

		if (token) {
			let api_client_create = `/api/user/create/client?api_token=${token}`;
			
			if (missing_fields.length > 0) {
				console.log(missing_fields);
				Swal.fire({ title: 'Error!', html: missing_fields.join("<br>"), icon: 'error' });
				return false;
			}

			$.ajax({
				type: "POST",
				url: api_client_create,
				data: JSON.stringify(data),
				contentType: "application/json",
				dataType: 'json',
				success: (response) => {
					document.getElementById("client_id").value = (response.data.id) ? response.data.id : '';
					if (submit) {
						let self = $("#lead");
						self.off('submit');
						self.submit();
						return true;
					}

					Swal.fire({ title: 'Success', text: "User created successfuly", icon: 'success' });
					return true;
				},
			});
		}
		return true;
	}
</script>
@endsection

@section('ref-header')
	href="{{route('home')}}" 
@endsection

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Create Lead</h2>
 		</div>
		<form id="lead" action="{{route('leads.store')}}" method="POST">
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
								      <input id="fullname" type="text" class="form-control" placeholder="Full Name">
								    </div>
									<fieldset class="form-group col-6 mt-3">
										<div class="row">
										<div class="col-12">
											{{--<div class="form-group">
												<select id="phone-type" class="form-control" name="phone_type">
													<option selected>Type</option>
													<option>...</option>
												</select>
											</div>
											<div class="form-group">
												<select id="area-code" class="form-control" name="phone_area_code">
													<option selected>Area Code</option>
													<option>...</option>
												</select>
											</div>--}}
											<div>
											<label for="phone">Phone</label>
											<input id="phone" type="text" class="form-control" placeholder="Phone Number" value="@if(isset($user) && isset($user['phone'])){{$user['phone']}}@endif">
											</div>
										</div>
										</div>
									</fieldset>
									<fieldset class="form-group col-6 mt-3">
									    <div class="row">
									      <div class="col-12">
										  <label for="">Address</label>
									        <div class="form-group">
												<input type="hidden" id="country-iso2">
												<input readonly id="country" type="text" value="United States" class="form-control" >
									        </div>
									        <div class="form-group">
												<input id="state" type="text" class="form-control" placeholder="State" required>
									        </div>
									        <div class="form-group">
												<input id="city" type="text" class="form-control" placeholder="City" required>
									        </div>
									      </div>
									    </div>
									</fieldset>
									<div class="form-row align-items-center col-12">
									    <div class="col-10 my-1">
									      <label for="email">Email</label>
									      <input type="email" class="form-control" id="email" placeholder="Email">
									    </div>
									    <div class="col-2 my-1">
									      <button type="button" onclick="create_user()" class="btn btn-color btn-email">
									      	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
											  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											  <circle cx="12" cy="12" r="9" />
											  <line x1="9" y1="12" x2="15" y2="12" />
											  <line x1="12" y1="9" x2="12" y2="15" />
											</svg>
									      </button>
									    </div>
									  </div>
									<input type="hidden" name="client_id" id="client_id">
							   </div>					    			
				    		</div>
				    	</div>
				    	<div class="col-5">
				    		<div>
				    			<div class="row">
					    		    <div class="form-group col-6">
								      <select id="category" id="category_id" class="form-control" name="category_id">
										@foreach($categories as $category)
											<option value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
								      </select>
			    					</div>
					    		    <div class="form-group col-6">
								      <select id="origin" class="form-control" name="origin_id" name="origin_id">
									  	@foreach($origins as $origin)
											<option value="{{$origin->id}}">{{$origin->name}}</option>
										@endforeach
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
				    		</div>
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
				    <div>
			    	  <div class="form-group d-flex justify-content-center">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="30" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <circle cx="12" cy="7" r="4" />
						  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>					   
					    <select class="form-control" id="salesman" style="width: 80%;" name="salesman_id">
					      @foreach($salesmen as $salesman)
						  	<option value="{{$salesman->id}}">{{$salesman->name}}</option>
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
						  	<option value="{{$supervisor->id}}">{{$supervisor->name}}</option>
						  @endforeach
					    </select>
					  </div>
				    </div>
				  </div>
				</div>
				<button class="btn btn-color btn-create-lead my-3" type="submit" role="button">Create</button>
 			</div>
 		</div>
		</form>
 	</main>
@endsection
