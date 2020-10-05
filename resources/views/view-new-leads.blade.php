@extends('layouts.index')

@section('ref-header')
	href="{{route('home')}}" 
@endsection

@section('link-extra')
<script src="https://use.fontawesome.com/c47bc38e87.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{ asset('css/styleProgress.css') }}">
@endsection

@section('content')
 	<main class="">
		<div class="mt-2 mb-4 ml-3">
			<h2>New Leads</h2>
 		</div>
 		<div class="ml-5 mr-5 mb-4">
 			<!--tabs titles-->
 			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
			    <a class="nav-link active" id="urgent-tab" data-toggle="tab" href="#urgent" role="tab" aria-controls="urgent" aria-selected="true">Urgent</a>
			  </li>
			  <li class="nav-item" role="presentation">
			    <a class="nav-link" id="normal-tab" data-toggle="tab" href="#normal" role="tab" aria-controls="normal" aria-selected="false">Normal</a>
			  </li>
			</ul>
			<!--Content tab-->
			<div class="tab-content" id="myTabContent">
			  <!--Urgent-->
			  <div class="tab-pane fade show active" id="urgent" role="tabpanel" aria-labelledby="urgent-tab">
			  		<form class="form-inline my-3">
				      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
				      <button class="btn btn-outline-success my-2" type="submit">Search</button>
				    </form>
				    <div class="row">
					@foreach ($leads as $lead)
				    	<div class="col-6">
				    		<div class="card">
							  <div class="card-body">
							    <div class="d-flex justify-content-between">
							   	  <div class="p-2 bd-highlight">{{$lead->client->name}}</div>
								  <div class="p-2 bd-highlight">{{$lead->salesman->name}}</div>
								  <div class="p-2 bd-highlight">{{($lead->supervisor) ? $lead->supervisor->name : 'Supervisor: Not assigned'}}</div>
								  <div class="p-2 bd-highlight mt-n1">
								  	<a class="btn btn-dot" href="{{route('leads.show', ['lead' => $lead->id])}}" role="button">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
										  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
										  <circle cx="5" cy="12" r="1" />
										  <circle cx="12" cy="12" r="1" />
										  <circle cx="19" cy="12" r="1" />
										</svg>
								  	</a>
								  </div>
								</div>
								<div class="containerA">
								  <div class="progressA">
								    <div class="progress-track"></div>
								    <div id="step1" class="progress-step 
										@if($lead->stage_id == 1) is-active @elseif($lead->stage_id > 1) is-complete @endif
									">
								      <div>Contact</div>
								    </div>
								    <div id="step2" class="progress-step
										@if($lead->stage_id == 2) is-active @elseif($lead->stage_id > 2) is-complete @endif
									">
								      <div>Budget</div>
								    </div>
								    <div id="step3" class="progress-step
										@if($lead->stage_id == 3) is-active @elseif($lead->stage_id > 3) is-complete @endif
									">
								      <div>Negotiation</div>
								    </div>
								    <div id="step4" class="progress-step
										@if($lead->stage_id == 4) is-active @elseif($lead->stage_id > 4) is-complete @endif
									">
								      <div>Closing</div>
								    </div>
								    <div id="step5" class="progress-step
										@if($lead->stage_id == 5) is-active @elseif($lead->stage_id > 5) is-complete @endif
									">
								      <div>Quality & Service</div>
								    </div>
								   </div>
								    <!--space for button next-->
								</div>  
							  </div>
							</div>
				    	</div>
						@endforeach
				    </div>
			  </div>
			  <!--Normal-->
			  <div class="tab-pane fade" id="normal" role="tabpanel" aria-labelledby="normal-tab">
			 		<form class="form-inline my-3">
				      <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" style="width: 27%;">
				      <button class="btn btn-outline-success my-2" type="submit">Search</button>
				    </form>
				    <div class="row">
				    	
				    	{{--<div class="col-6 mt-4">
				    		<div class="card">
							  <div class="card-body">
							    <div class="d-flex justify-content-between">
							   	  <div class="p-2 bd-highlight">Client Name</div>
								  <div class="p-2 bd-highlight mt-n1">
								  	<a class="btn btn-dot" href="{{url('lead')}}" role="button">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
										  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
										  <circle cx="5" cy="12" r="1" />
										  <circle cx="12" cy="12" r="1" />
										  <circle cx="19" cy="12" r="1" />
										</svg>
								  	</a>
								  </div>
								</div>
								<div class="containerA">
								  <div class="progressA">
								    <div class="progress-track"></div>
								    <div id="step1" class="progress-step">
								      <div>Contact</div>
								    </div>
								    <div id="step2" class="progress-step">
								      <div>Budget</div>
								    </div>
								    <div id="step3" class="progress-step">
								      <div>Negotiation</div>
								    </div>
								    <div id="step4" class="progress-step">
								      <div>Closing</div>
								    </div>
								    <div id="step5" class="progress-step">
								      <div>Quality & Service</div>
								    </div>
								   </div>
								    <!--space for button next-->
								</div>  
							  </div>
							</div>
				    	</div>--}}
				    </div>
			  </div>
	
			</div>

 		</div>	
 	</main>
@endsection

@section('js-extra')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{ asset('js/script.js')}}"></script>
@endsection
