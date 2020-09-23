@extends('layouts.index')

@section('ref-header')
	href="{{url('login')}}" 
@endsection

@section('content')
 	<main class="text-center">
	    <form class="form-signin">
	      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
	      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	      <label for="user" class="sr-only mb-4">User</label>
	      <input type="text" id="user" class="form-control" placeholder="User" required autofocus><br>
	      <label for="inputPassword" class="sr-only">Password</label>
	      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
	      <div class="checkbox mb-3">
	        <label>
	          <input type="checkbox" value="remember-me"> Remember me
	        </label>
	      </div>
	      <button class="btn btn-lg btn-block btn-color" type="submit">Sign in</button>
	      <div class="text-right mt-4"><a href="#">Register</a></div>
	      <p class="mt-1 mb-3 text-muted">&copy; 2019-2020</p>
	    </form>		
 	</main>
@endsection
