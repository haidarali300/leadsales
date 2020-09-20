@extends('layouts.index')

@section('content')
<div class="container">
	<h2 class="text-center mt-3">What do you want to do?</h2>
	<div class="row mt-3">
		<div class="col-12 text-center">
			<a class="btn btn-color btn-menu" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="View Active Leads, Lost Leads, Closed Leads">View Leads</a>
		</div>
	</div>
</div><br><br><br><br>
@endsection

@section('js-extra')
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
	</script>
@endsection