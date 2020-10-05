@extends('layouts.index')

@section('js-extra')
<script>
	
</script>
@endsection

@section('content')
 	<main class="">
	    <div class="mt-2 mb-4 ml-3">
			<h2>Setup System</h2>
 		</div>
 		<div class="row mx-1 mb-4">
 			<div class="col-6">
				<h6 class="ml-4 w-100">Set Stages</h6>
				<div class="card">
				  <div class="card-body" id="stages"> 
				   <div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						  <label class="form-check-label" for="defaultCheck1">
						    Contact
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						  <label class="form-check-label" for="defaultCheck2">
						    Budget
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						  <label class="form-check-label" for="defaultCheck2">
						    Negotiation
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>
  					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						  <label class="form-check-label" for="defaultCheck2">
						    Closing
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
						  <label class="form-check-label" for="defaultCheck2">
						    Quality of Service
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>

					 <div class="text-right mr-2 mt-3" id="delete-stages">
						  <a class="btn btn-delete-check btn-check" href="#" role="button">
							 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <line x1="4" y1="7" x2="20" y2="7" />
							  <line x1="10" y1="11" x2="10" y2="17" />
							  <line x1="14" y1="11" x2="14" y2="17" />
							  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
							  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
							</svg>
						  </a>	
					</div>
				
				
				  </div>
				</div>
 			</div>
 			<div class="col-6">
 				<h6 class="ml-4">Set Criterias</h6>
 				<div class="card">
				  <div class="card-body">
				    <div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
						  <label class="form-check-label" for="defaultCheck11">
						   	Product Quality
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>
  					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck22">
						  <label class="form-check-label" for="defaultCheck22">
						    Product Arrival
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>
					</div>

					<div class="text-right mr-2 mt-3">
					  <a class="btn btn-delete-check btn-check" href="#" role="button">
						 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
						  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
						  <line x1="4" y1="7" x2="20" y2="7" />
						  <line x1="10" y1="11" x2="10" y2="17" />
						  <line x1="14" y1="11" x2="14" y2="17" />
						  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
						  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
						</svg>
					  </a>	
					</div>
				  </div>
				</div>
 			</div>
 		</div>
 	</main>
@endsection
