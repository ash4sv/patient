@extends('layouts.master')

@section('title', 'List of Patient')

@section('page_content')

	<div class="col-md-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List of Patient</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Name</th>
								<th>IC Number</th>
								<th>Tel Number</th>
								<th>Date Register</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($patients as $patient)
							<tr>
								<td>{{ $patient->name }}</td>
								<td>{{ $patient->ic_num }}</td>
								<td>{{ $patient->tel_no }}</td>
								<td>{{ $patient->created_at }}</td>
								<td class="text-center">
									<div class="btn-group">
										<a href="{{ route('patients.show',$patient) }}" class="btn btn-info btn-sm">
											Show
										</a>
										<a href="{{ route('patients.edit',$patient) }}" class="btn btn-primary btn-sm">
											<span class="text">Edit</span>
										</a>
 									</div>
									<form style="display:inline;" onsubmit="return confirm('Do you really want to delete?');"  action="{{ route('patients.destroy',$patient) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm m-0">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
            	</div>
				

			</div>
		</div>
	</div>

@endsection