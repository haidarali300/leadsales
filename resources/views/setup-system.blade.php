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
			 	<div class="d-flex">
					<h6 class="mr-auto mt-4 ml-4 w-100">Stages</h6>
				</div>
				<div class="card">
				  <div class="card-body" id="stages"> 
				   <div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
						  <label class="form-check-label" for="defaultCheck1">
						    Contact
						  </label>
					   	</div>
					   	{{--<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>--}}
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">--}}
						  <label class="form-check-label" for="defaultCheck2">
						    Budget
						  </label>
					   	</div>
					   	{{--<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>--}}
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">--}}
						  <label class="form-check-label" for="defaultCheck2">
						    Negotiation
						  </label>
					   	</div>
					   	{{--<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>--}}
					</div>
  					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">--}}
						  <label class="form-check-label" for="defaultCheck2">
						    Closing
						  </label>
					   	</div>
					   	{{--<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>--}}
					</div>
					<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  {{--<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">--}}
						  <label class="form-check-label" for="defaultCheck2">
						    Quality of Service
						  </label>
					   	</div>
					   	{{--<div class="p-2 flex-shrink-1 bd-highlight">
						  <a class="btn btn-color btn-check" href="#" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </a>	
					   	</div>--}}
					</div>

					{{--<div class="text-right mr-2 mt-3" id="delete-stages">
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
					</div>--}}
				  </div>
				</div>
			</div>
			<div class="modal fade categories-modal" tabindex="-1" role="dialog" aria-labelledby="categoriesModal" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Create new category</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="{{route('categories.store')}}" method="POST" id="category-form">
								@csrf
								<div class="form-group">
									<label for="category-name" class="col-form-label">Name:</label>
									<input type="text" class="form-control" id="category-name" name="name">
								</div>
								<div class="form-group">
									<label for="category-description" class="col-form-label">Description:</label>
									<textarea class="form-control" id="category-description" name="description"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-color" onclick="document.getElementById('category-form').submit()">Create</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="d-flex">
					<h6 class="mr-auto mt-auto ml-4">Categories</h6>
					<button class="p-2 btn btn-color mb-1 pt-0" data-target=".categories-modal" data-toggle="modal">Create</button>
				</div>
				<div class="card">
				  <div class="card-body">
					@foreach($categories as $category)
					<form action="{{route('categories.update', ['category' => $category->id])}}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="PUT">
				    	<div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
						  <input class="form-check-input" id="categorycheck-{{$category->id}}" type="checkbox" name="active" @if($category->active) checked @endif>
						  <label class="form-check-label" for="categorycheck-{{$category->id}}">
						   	{{$category->name}}
						  </label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
							<button type="submit" class="btn btn-color btn-check" role="button">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									<path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
									<path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
									<line x1="16" y1="5" x2="19" y2="8" />
								</svg>
							</button>
						</div>
					</div>
					</form>
					@endforeach

					{{--<div class="text-right mr-2 mt-3">
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
					</div>--}}
				  </div>
				</div>
			</div>
			<div class="modal fade origins-modal" tabindex="-1" role="dialog" aria-labelledby="originsModal" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Create new origin</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="{{route('origins.store')}}" method="POST" id="origin-form">
								@csrf
								<div class="form-group">
									<label for="origin-name" class="col-form-label">Name:</label>
									<input type="text" class="form-control" id="origin-name" name="name">
								</div>
								<div class="form-group">
									<label for="origin-description" class="col-form-label">Description:</label>
									<textarea class="form-control" id="origin-description" name="description"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-color" onclick="document.getElementById('origin-form').submit()">Create</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6 mt-4">
				<div class="d-flex">
					<h6 class="mr-auto mt-auto ml-4">Origins</h6>
					<button class="p-2 btn btn-color mb-1 pt-0" data-target=".origins-modal" data-toggle="modal">Create</button>
				</div>
 				<div class="card">
				  <div class="card-body">
					@foreach($origins as $origin)
					<form action="{{route('origins.update', ['origin' => $origin->id])}}" method="POST">
					@csrf
					<input type="hidden" name="_method" value="PUT">
				    <div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
							<input class="form-check-input" id="origin-check-{{$origin->id}}" type="checkbox" name="active" @if($origin->active) checked @endif>
							<label class="form-check-label" for="origin-check-{{$origin->id}}">
								{{$origin->name}}
							</label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						  <button type="submit" class="btn btn-color btn-check" role="button">
						  	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
							  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
							  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
							  <line x1="16" y1="5" x2="19" y2="8" />
							</svg>
						  </button>	
					   	</div>
					</div>
					</form>
					@endforeach

					{{--<div class="text-right mr-2 mt-3">
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
					</div>--}}
				  </div>
				</div>
			</div>
			<div class="modal fade qualities-modal" tabindex="-1" role="dialog" aria-labelledby="qualitiesModal" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Create new quality criteria</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="{{route('qualities.store')}}" method="POST" id="quality-form">
								@csrf
								<div class="form-group">
									<label for="quality-name" class="col-form-label">Name:</label>
									<input type="text" class="form-control" id="quality-name" name="name">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-color" onclick="document.getElementById('quality-form').submit()">Create</button>
						</div>
					</div>
				</div>
			</div>
 			<div class="col-6 mt-4">
				<div class="d-flex">
					<h6 class="mr-auto mt-auto ml-4">Set Criterias</h6>
					<button class="p-2 btn btn-color mb-1 pt-0" data-target=".qualities-modal" data-toggle="modal">Create</button>
				</div>
 				<div class="card">
				  <div class="card-body">
					@foreach($criterias as $criteria)
					<form action="{{route('qualities.update', ['quality' => $criteria->id])}}" method="POST">
					@csrf
					<input type="hidden" name="_method" value="PUT">
				    <div class="form-check d-flex bd-highlight">
					   	<div class="p-2 w-100 bd-highlight">
							<input class="form-check-input" id="criteria-check-{{$criteria->id}}" type="checkbox" name="active" @if($criteria->active) checked @endif>
							<label class="form-check-label" for="criteria-check-{{$criteria->id}}">
								{{$criteria->name}}
							</label>
					   	</div>
					   	<div class="p-2 flex-shrink-1 bd-highlight">
						   <button type="submit" class="btn btn-color btn-check" role="button">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="25" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#bbe1fa" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
									<path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
									<path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
									<line x1="16" y1="5" x2="19" y2="8" />
								</svg>
							</button>
					   	</div>
					</div>
					</form>
					@endforeach

					{{--<div class="text-right mr-2 mt-3">
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
					</div>--}}
				  </div>
				</div>
 			</div>
 		</div>
 	</main>
@endsection
