@extends('layouts.index')

@section('link-extra')
	<link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
@endsection

@section('js-extra')
	<script src="{{asset('js/intlTelInput.js')}}"></script>
	<script>
		const input = document.querySelector("#phone");
		iti = intlTelInput(input, {
			separateDialCode: true,
			utilsScript: "/js/utils.js",
			initialCountry: "us",
			autoPlaceholder: "aggressive",
			formatOnDisplay: true,
			onlyCountries: ["us"],
			hiddenInput: "phone"
		});
		const setCountryData = () => {
			let selected_country = iti.getSelectedCountryData();
			document.getElementById("country").value = selected_country.name;
			document.getElementById("country-iso2").value = selected_country.iso2;
		}
		input.addEventListener("keyup", () => {
			if (!iti.isValidNumber())
				$("#phone").addClass("form-control-invalid")
			else
				$("#phone").removeClass("form-control-invalid")
		});
		input.addEventListener("countrychange", () => setCountryData());
		window.addEventListener('submit', () => setCountryData());
	</script>
@endsection

@section('ref-header')
	href="{{url('admin-menu')}}" 
@endsection

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Create {{$role}}</h2>
 		</div>
 		<div class="container my-4">
 			<div class="card">
			  <div class="card-body">	 		  
			    <form class="" method="POST" @if(isset($user)) action="{{route('users.update', ['role' => $role, 'user' => $user['id']])}}" @endif>
					@csrf
					@if(isset($user)) <input type="hidden" name="_method" value="PUT"> @endif
					<div class="row">
						<div class="col-6">
							<input type="text" class="form-control" placeholder="Last Name" name="lastname" value="@if(isset($user) && isset($user['lastname'])){{$user['lastname']}}@endif" required>
						</div>
						<div class="col-6">
							<input type="text" class="form-control" placeholder="Name" name="name" value="@if(isset($user) && isset($user['name'])){{$user['name']}}@endif" required>
						</div>
					    <fieldset class="form-group col-6 mt-3">
						    <div class="row">
						      <legend class="col-form-label col-sm-4 pt-0">Phone:</legend>
						      <div class="col-8">
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
						          <input id="phone" type="text" class="form-control" placeholder="Phone Number" value="@if(isset($user) && isset($user['phone'])){{$user['phone']}}@endif" name="phone">
						        </div>
						      </div>
						    </div>
							<div class="row mt-4">
								<legend class="col-form-label col-sm-3 pt-0">Email:</legend>
								<div class="col-9">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" value="@if(isset($user) && isset($user['email'])){{$user['email']}}@endif" required>
									</div>
									@if ($create_user)
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password" required>
									</div>
									@endif
								</div>
							</div>
						</fieldset>
					   	<fieldset class="form-group col-6 mt-3">
						    <div class="row">
						      <legend class="col-form-label col-sm-4 pt-0">Address:</legend>
						      <div class="col-8">
						        <div class="form-group">
									<input type="hidden" name="iso2" id="country-iso2">
									<input readonly type="text" value="United States" class="form-control" name="country" value="@if(isset($user) && isset($user['country'])){{$user['country']}}@endif" id="country">
						        </div>
						        <div class="form-group">
									<input type="text" class="form-control" placeholder="State" name="state" value="@if(isset($user) && isset($user['state'])){{$user['state']}}@endif" required>
						        </div>
						        <div class="form-group">
						          	<input type="text" class="form-control" placeholder="City" name="city" value="@if(isset($user) && isset($user['city'])){{$user['city']}}@endif" required>
						        </div>
						      </div>
						    </div>
						</fieldset>
						<div class="col-1">
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
					    <div class="text-center">
					 	   <button class="btn btn-color btn-create-user mt-3" role="button">Create</button>	
					    </div>
			    </form>	
		      </div>
			</div>
	    </div>
 	</main>
@endsection
