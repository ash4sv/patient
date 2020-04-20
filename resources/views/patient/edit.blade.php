@extends('layouts.master')

@section('title', 'Add New Patient')

@section('page_content')

	<div class="col-md-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Add New Patient</h6>
			</div>
			<div class="card-body">
				
				<form action="{{ route('patients.update', $patient) }}" method="POST">
					@method('PUT')
					@include('patient.field')
				</form>

			</div>
		</div>
	</div>

@endsection