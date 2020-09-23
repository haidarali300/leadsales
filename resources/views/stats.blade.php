@extends('layouts.index')

@section('link-extra')
<script type="text/javascript" src="js/Chart.bundle.min.js"></script>
@endsection

@section('content')
 	<main class="">
 		<div class="mt-2 mb-4 ml-3">
			<h2>Stats</h2>
 		</div>		
 		<div class="ml-5 mr-5 mb-4"> 
 			<!--tabs titles-->
 			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
			    <a class="nav-link " id="v-report-tab" data-toggle="tab" href="#v-report" role="tab" aria-controls="v-report" aria-selected="false">View Report</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link active" id="v-graphs-tab" data-toggle="tab" href="#v-graphs" role="tab" aria-controls="v-graphs" aria-selected="true">View Graphs</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="g-report-tab" data-toggle="tab" href="#g-report" role="tab" aria-controls="g-report" aria-selected="false">Generate Report</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="g-graphs-tab" data-toggle="tab" href="#g-graphs" role="tab" aria-controls="g-graphs" aria-selected="false">Generate Graphs</a>
			  </li>
			</ul>
			<!--Content tab-->
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade " id="v-report" role="tabpanel" aria-labelledby="v-report-tab">
			  	<div class="container">
				  	<div class="card mt-4">
					  <div class="card-body">
					    This is some text within a card body.
					  </div>
					</div>		  		
			  	</div>
			  </div>
			  <div class="tab-pane fade show active" id="v-graphs" role="tabpanel" aria-labelledby="v-graphs-tab">
		  		<div class="row mt-4">
		  			<div class="col-6">
		  				<div class="card">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-3">
						    		<div class="d-flex align-items-center">
								      <img src="images/f.png" class="card-img" alt="...">
								    </div>
								    <div class="text-center">
								    	<h5>Salesman Name</h5>
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
						    		<canvas id="myChart"></canvas> 
						    	</div>
						    </div>
						  </div>
						</div>
		  			</div>
		  			<div class="col-6">
		  				<div class="card">
						  <div class="card-body">
						    <div class="row">
						    	<div class="col-3">
						    		<div class="d-flex align-items-center">
								      <img src="images/e.png" class="card-img" alt="...">
								    </div>
								    <div class="text-center">
								    	<h5>Salesman Name</h5>
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
						    		<canvas id="myChart2"></canvas> 
						    	</div>
						    </div>
						  </div>
						</div>
		  			</div>
		  		</div>
			  </div>
			  <div class="tab-pane fade" id="g-report" role="tabpanel" aria-labelledby="g-report-tab">In construction</div>
			  <div class="tab-pane fade" id="g-graphs" role="tabpanel" aria-labelledby="g-graphs-tab">In construction</div>
			</div>
 		</div>
 	</main>
@endsection

@section('js-extra')
<script>
	var ctx= document.getElementById("myChart").getContext("2d");
	var myChart= new Chart(ctx,{
		type:"bar",
		data:{
			labels:['Assigned','Active','Closed','Lost'],
			datasets:[{
				label:'Leads',
				data:[24,7,5,12],
				backgroundColor:[
				'rgb(255, 245, 60,0.8)',
				'rgb(255, 165, 0,0.8)',
				'rgb(154, 205, 0,0.8)',
				'rgb(255, 69, 0,0.8)'       ]
			}]
		},
		options:{
			maintainAspectRatio:false,

			scales:{
				yAxes:[{
					ticks:{
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
<script>
	var ctx= document.getElementById("myChart2").getContext("2d");
	var myChart2= new Chart(ctx,{
		type:"bar",
		data:{
			labels:['Assigned','Active','Closed','Lost'],
			datasets:[{
				label:'Leads',
				data:[24,7,5,12],
				backgroundColor:[
				'rgb(255, 245, 60,0.8)',
				'rgb(255, 165, 0,0.8)',
				'rgb(154, 205, 0,0.8)',
				'rgb(255, 69, 0,0.8)'       ]
			}]
		},
		options:{
			maintainAspectRatio:false,

			scales:{
				yAxes:[{
					ticks:{
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
@endsection