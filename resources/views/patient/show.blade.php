@extends('layouts.master')

@section('title', $patient->name)

@section('page_content')
	
	<div class="col-md-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">{{ $patient->name }}</h6>
				<div class="dropdown no-arrow">
					<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" id="print">
						<div class="dropdown-header">Print:</div>
						<a class="dropdown-item print_label" href="#">Print Label</a>
						<a class="dropdown-item print_all" href="#">Print All</a>
						{{-- <div class="dropdown-divider"></div> --}}
						{{-- <a class="dropdown-item" href="#">Something else here</a> --}}
					</div>
				</div>
			</div>

			<div class="card-body">
				
				<form>
					@include('layouts.alert')

					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Reference Number</label>
							<input type="text" class="form-control" disabled>
						</div>
					</div>
					
					<h5>Patient Personal Details</h5>
					<hr class="mt-1 border border-primary">
					
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Name</label>
							<input name="name" type="text" class="form-control" value="{{ $patient->name }}" disabled>
						</div>
						<div class="col-md-6">
							<label for="">Identification Card Number</label>
							<input name="ic_num" type="text" class="form-control" value="{{ $patient->ic_num }}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Sex</label>
							<input name="sex" type="text" class="form-control" value="{{ $patient->sex }}" disabled>
						</div>
						<div class="col-md-6">
							<label for="">Race</label>
							<input name="race" type="text" class="form-control" value="{{ $patient->race }}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Nationality</label>
							<input name="nationality" type="text" class="form-control" value="{{ $patient->nationality }}" disabled>
						</div>
						<div class="col-md-6">
						</div>
					</div>
				

					<h5>Patient Contact Information</h5>
					<hr class="mt-1 border border-primary">

					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Telephone Number</label>
							<input name="tel_no" type="text" class="form-control" value="{{ $patient->tel_no }}" disabled>
						</div>
						<div class="col-md-6">
							<label for="">Emergency Telephone Number <sub>Optional</sub></label>
							<input name="emerg_no" type="text" class="form-control" value="{{ $patient->emerg_no }}" disabled>
						</div>
					</div>
					<div class="form-group">
						<textarea disabled name="" class="form-control">{{ $patient->address_building }}, {{ $patient->address_street_1 }}, {{ $patient->address_street_2 }}
						</textarea>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">State</label>
							<input name="state" type="text" class="form-control" value="{{ $patient->state }}" disabled>
						</div>
						<div class="col-md-6">
							<label for="">Town</label>
							<input name="address_town" type="text" class="form-control" value="{{ $patient->address_town }}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Postcode</label>
							<input name="postcode" type="text" class="form-control" value="{{ $patient->postcode }}" disabled>
						</div>
						<div class="col-md-6">
						</div>
					</div>
					
					<hr class="border border-primary">

					<div class="form-group" id="print_mark">
						<a href="#" class="print_label btn btn-primary btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-print"></i>
							</span>
							<span class="text">Print</span>
						</a>
						<a href="{{ route('patients.index') }}" class="btn btn-danger btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-trash"></i>
							</span>
							<span class="text">Back to List</span>
						</a>
					</div>
				</form>

				{{-- Print --}}

			</div>
		</div>
	
	<div style="display:none;">
		<div class="card" id="print_label">
			<div class="card-body">
				<div class="form-group mb-0">
					<label class="mb-0">Name</label>
					<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->name }}">
				</div>
				<div class="form-group mb-0">
					<label class="mb-0">I.C Number</label>
					<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->ic_num }}">
				</div>
			</div>
		</div>

		<div class="card" id="print_all">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Name</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->name }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">I.C Number</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->ic_num }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Sex</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->sex }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Race</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->race }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Nationality</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->nationality }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Telephone Number</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->tel_no }}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="mb-0">Emergency Telephone Number</label>
							<input type="text" readonly class="form-control-plaintext py-0" value="{{ $patient->emerg_no }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="mb-0">Address</label>
							<textarea name="" row="3" class="form-control-plaintext">{{ $patient->address_building }}, {{ $patient->address_street_1 }}, {{ $patient->address_street_2 }}, {{ $patient->postcode }},{{ $patient->address_town }}, {{ $patient->state }}</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	</div>

@endsection