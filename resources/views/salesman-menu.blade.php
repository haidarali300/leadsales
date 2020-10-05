@extends('layouts.index')

@section('content')
<main>
	<div class="container">
		<h2 class="text-center mt-3">What do you want to do?</h2>
		<div class="row">
			<div class="col-12 text-center  mt-3">

				<a class="btn btn-color btn-menu mr-2" href="{{route('leads.create')}}" role="button" data-toggle="tooltip" data-placement="left" title="Star a fresh lead">Create Lead</a>
				<a class="btn btn-color btn-menu" href="{{route('leads.new')}}" role="button" data-toggle="tooltip" data-placement="bottom" title="View Urgent Leads, Normal Leads">View New Leads</a>
				<a class="btn btn-color btn-menu ml-2" href="{{route('leads.index')}}" role="button" data-toggle="tooltip" data-placement="right" title="View Active Leads, Lost Leads, Closed Leads">View Leads</a>
			</div>
		</div>
	</div><br><br><br><br>
</main>
@endsection

@section('js-extra')
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
	</script>
@endsection