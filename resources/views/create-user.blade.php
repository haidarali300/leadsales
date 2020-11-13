@extends('layouts.index')

@section('link-extra')
	<link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">
@endsection

@section('js-extra')
	<script src="{{asset('js/intlTelInput.js')}}"></script>
	<script src="{{asset('js/fn/create_user.js')}}"></script>
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
						<legend class="col-form-label col-sm-2 pt-0">Full name:</legend>
						<div class="col-10">
							<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="@if(isset($user) && isset($user['name'])){{$user['name']}}@endif" required>
							@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
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
						        <div class="@error('phone') is-invalid @enderror">
						          <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="@if(isset($user) && isset($user['phone'])){{$user['phone']}}@endif" name="phone">
						        </div>
								@error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
						      </div>
						    </div>
							<div class="row mt-4">
								<legend class="col-form-label col-sm-4 pt-0">Email:</legend>
								<div class="col-8">
									<div class="form-group">
										<input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="@if(isset($user) && isset($user['email'])){{$user['email']}}@endif" required>
										@error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
									</div>
									@if ($create_user)
									<div class="form-group">
										<input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required>
										@error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
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
									<input readonly type="text" value="United States" class="form-control @error('country') is-invalid @enderror" name="country" value="@if(isset($user) && isset($user['country'])){{$user['country']}}@endif" id="country">
									@error('country')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
						        </div>
						        <div class="form-group">
									<input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="@if(isset($user) && isset($user['address'])){{$user['address']}}@endif" required>
									@error('address')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
						        </div>
						      </div>
						    </div>
						</fieldset>
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
