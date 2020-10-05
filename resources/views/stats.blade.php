@extends('layouts.index')

@section('link-extra')
<script type="text/javascript" src="{{asset('js/Chart.bundle.min.js')}}"></script>
@endsection

@section('content')
	@php $p = ['b','c','d','e','f','g','h']; @endphp
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Stats</h2>
 		</div>		
 		<div class="ml-5 mr-5 mb-4"> 
 			<!--tabs titles-->
 			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" onclick="selectTab('v-report')" id="v-report-tab" data-toggle="tab" href="#v-report" role="tab" aria-controls="v-report" aria-selected="false">View Report</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" onclick="selectTab('v-graphs')" id="v-graphs-tab" data-toggle="tab" href="#v-graphs" role="tab" aria-controls="v-graphs" aria-selected="true">View Graphs</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" onclick="selectTab('g-report')" id="g-report-tab" data-toggle="tab" href="#g-report" role="tab" aria-controls="g-report" aria-selected="false">Generate Report</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" onclick="selectTab('g-graphs')" id="g-graphs-tab" data-toggle="tab" href="#g-graphs" role="tab" aria-controls="g-graphs" aria-selected="false">Generate Graphs</a>
			  </li>
			</ul>
			<!--Content tab-->
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade " id="v-report" role="tabpanel" aria-labelledby="v-report-tab">
			  	<div class="container">
				  	<div class="card mt-4">
					  <div class="card-body">
					  	<form>
						  <div class="form-row">
							<form method="GET">
						    <div class="col-5">
						        <div class="form-group row">
								    <label for="date-start" class="col-3 col-form-label text-right">Start date:</label>
								    <div class="col-9">
								      <input type="date" class="form-control" id="date-start" placeholder="dd/mm/yyyy" name="date-start">
								    </div>
								</div>
						    </div>
						    <div class="col-5">
						      <div class="form-group row"> 
								    <label for="date-end" class="col-3 col-form-label text-right" >End date:</label>
								    <div class="col-9">
								      <input type="date" class="form-control" id="date-end" placeholder="dd/mm/yyyy" name="date-end">
								    </div>
								</div>
							</div>
							<div class="col-2">
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
							</form>
						    <div class="col-12 mt-3">
						    	<h6 class="mb-4">For this range there are:</h6>
						    	<div class="row">
							    	<div class="form-group col-4 text-center">
									    <label for="number-lead">Total number of Leads</label>
									    <input type="number" class="form-control text-center" id="number-lead" value="{{$number_of_leads}}" readonly="true">
									</div>
									<div class="form-group col-4 text-center">
									    <label for="number-successful-lead">Successful leads</label>
									    <input type="number" class="form-control text-center" id="number-successful-leads" value="{{$successful_leads}}" readonly="true">
									</div>
									<div class="form-group col-4 text-center">
									    <label for="number-lost-lead">Lost leads</label>
									    <input type="number" class="form-control text-center" id="number-lost-lead" value="{{$lost_leads}}" readonly="true">
									</div>		
						    	</div>
						    	<h6 class="mb-4">That come from:</h6>
						    	<div class="row">
									@foreach($origins_all as $origin_single)
										<div class="form-group col-4 text-center">
											<label for="number-facebook">{{$origin_single->name}}</label>
										@php $found = false; @endphp
										@foreach($origins as $origin)
											@if ($origin_single->id == $origin->id)
												<input type="number" class="form-control text-center" id="number-facebook" value="{{$origin->total}}" readonly="true">
												@php $found = true; @endphp
											@endif
										@endforeach
										@if (!$found)
											<input type="number" class="form-control text-center" id="number-facebook" value="0" readonly="true">
										@endif
										</div>
									@endforeach
						    	</div>	
						    </div>
						  </div>
						   <div class="mt-4 d-flex justify-content-end">
						        <div class="form-group row"> 
								    <label for="total-sales" class="col-6 col-form-label text-right" ><b>Total Sales Profit: </b></label>
								    <div class="col-6">
								      <input type="number" class="form-control" id="total-sales" value="560" readonly="true">
								    </div>
								</div>
						   </div>
						</form>		
					  </div>
					</div>		  		
			  	</div>
			  </div>
			  <div class="tab-pane fade " id="v-graphs" role="tabpanel" aria-labelledby="v-graphs-tab">
		  		<div class="row mt-4">
					@foreach($users as $user)
		  			<div class="col-6">
		  				<div class="card">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-3">
						    		<div class="d-flex align-items-center">
										<img src="{{ asset('images/' . $p[mt_rand(0, count($p) - 1)] . '.png')}}" class="card-img" alt="pic">
								    </div>
								    <div class="text-center">
								    	<h5>{{$user->name}}</h5>
								    </div>
								  <!--  <div class="mt-3 d-flex justify-content-center">
									    <a class="btn btn-color btn-stats" href="#" role="button">
									  		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-external-link" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
											  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											  <path d="M11 7h-5a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-5" />
											  <line x1="10" y1="14" x2="20" y2="4" />
											  <polyline points="15 4 20 4 20 9" />
											</svg>
									  	</a>
								    </div>-->
						    	</div>
						    	<div class="col-9">
						    		<canvas id="myChart{{$user->id}}"></canvas> 
						    	</div>
						    </div>
						  </div>
						</div>
					</div>
					@endforeach
		  		</div>
			  </div>
			  <div class="tab-pane fade" id="g-report" role="tabpanel" aria-labelledby="g-report-tab">In construction</div>
			  <div class="tab-pane fade" id="g-graphs" role="tabpanel" aria-labelledby="g-graphs-tab">In construction</div>
			</div>
 		</div>
 	</main>
@endsection

@section('js-extra')
<script src="{{asset('js/fn/stats.js')}}"></script>
<script>
	@foreach($users as $user)
		var ctx = document.getElementById("myChart{{$user->id}}").getContext("2d");
		var myChart = new Chart(ctx,{
			type: "bar",
			data: {
				labels: ['Assigned','Active','Closed','Lost'],
				datasets: [{
					label: 'Leads',
					data: [{{$user->lead_assigned}},{{$user->lead_active}},{{$user->lead_closed}},{{$user->lead_lost}}],
					backgroundColor: [
						'rgb(255, 245, 60,0.8)',
						'rgb(255, 165, 0,0.8)',
						'rgb(154, 205, 0,0.8)',
						'rgb(255, 69, 0,0.8)'
					]
				}]
			},
			options: {
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	@endforeach
</script>
@endsection