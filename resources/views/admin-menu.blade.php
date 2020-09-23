@extends('layouts.index')

@section('ref-header')
	href="{{url('admin-menu')}}" 
@endsection

@section('content')
<main>
	<div class="container">
		<h2 class="text-center mt-3">What do you want to do?</h2>
		<div class="row">
			<div class="col-12 text-center mt-3">
				<a class="btn btn-color btn-menu mr-2" href="{{url('create-lead')}}" role="button" data-toggle="tooltip" data-placement="left" title="Star a fresh lead, Assing a seller, Assing a supervisor">Create Lead</a>
				<a class="btn btn-color btn-menu" href="{{url('view-lead')}}" role="button" data-toggle="tooltip" data-placement="bottom" title="View Active Leads, Lost Leads, Closed Leads">View Leads</a>
				<a class="btn btn-color btn-menu ml-2" href="{{url('manage-users')}}" role="button" data-toggle="tooltip" data-placement="right" title="Clients, Salesmen, Supervisors, Admins">Manage Users</a>
			</div>
			<div class="col-12 mt-3 text-center">
				<a class="btn btn-color btn-menu mr-6" href="{{url('stats')}}" role="button" data-toggle="tooltip" data-placement="left" title="View Report, View Graphs, Generate Reports, Generate Graphs"> Stats</a>	
				<a class="btn btn-color btn-menu ml-6" href="{{url('setup-system')}}" role="button" data-toggle="tooltip" data-placement="right" title="Sep Stages, Set Criterias">Setup System</a>
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