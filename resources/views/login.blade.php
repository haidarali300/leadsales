@extends('layouts.index')

@section('ref-header')
	href="{{url('login')}}" 
@endsection

@section('content')
 	<main class="text-center">
	 <form class="form-signin" method="POST" action="{{ route('login') }}">
		@csrf
	      <img class="mb-4" src="images/login.png" alt="" width="auto" height="80">
	      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	      <label for="email" class="sr-only mb-4">Email</label>
	      <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email" name="email" required autofocus><br>
		  @error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
	      <label for="password" class="sr-only">Password</label>
	      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
		  @error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
	      <div class="checkbox mb-3">
	        <label>
	          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
	        </label>
	      </div>
	      <button class="btn btn-lg btn-block btn-color mb-4" type="submit">Sign in</button>
	   <!--   <div class="text-right mt-4"><a href="#">Register</a></div>-->
	      <p class="mt-1 mb-3 text-muted">&copy; 2019-2020</p>
	    </form>
	    <br>
	    <br>
	    <a href="{{url('admin-menu')}}">Login as Admin</a>
	    <br>
	    <a href="{{url('salesman-menu')}}">Login as Salesman</a>
	    <br>
	    <a href="{{url('supervisor-menu')}}">Login as Supervisor</a>
 	</main>

@endsection
