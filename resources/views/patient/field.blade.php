					@csrf
					@include('layouts.alert')

					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Reference Number</label>
							<input type="text" class="form-control" value="{{ $patient->ref_num }}">
						</div>
					</div>
					
					<h5>Patient Personal Details</h5>
					<hr class="mt-1 border border-primary">
					
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Name</label>
							<input name="name" type="text" class="form-control" value="{{ $patient->name }}">
						</div>
						<div class="col-md-6">
							<label for="">Identification Card Number</label>
							<input name="ic_num" type="text" class="form-control" value="{{ $patient->ic_num }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Sex</label>
							<input name="sex" type="text" class="form-control" value="{{ $patient->sex }}">
						</div>
						<div class="col-md-6">
							<label for="">Race</label>
							<input name="race" type="text" class="form-control" value="{{ $patient->race }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Nationality</label>
							<input name="nationality" type="text" class="form-control" value="{{ $patient->nationality }}">
						</div>
						<div class="col-md-6">
						</div>
					</div>

					<h5>Patient Contact Information</h5>
					<hr class="mt-1 border border-primary">

					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Telephone Number</label>
							<input name="tel_no" type="text" class="form-control" value="{{ $patient->tel_no }}">
						</div>
						<div class="col-md-6">
							<label for="">Emergency Telephone Number <sub>Optional</sub></label>
							<input name="emerg_no" type="text" class="form-control" value="{{ $patient->emerg_no }}">
						</div>
					</div>
					<div class="form-group">
						<label for="">Building</label>
						<input name="address_building" type="text" class="form-control" value="{{ $patient->address_building }}">
					</div>
					<div class="form-group">
						<label for="">Address Street 1</label>
						<input name="address_street_1" type="text" class="form-control" value="{{ $patient->address_street_1 }}">
					</div>
					<div class="form-group">
						<label for="">Address Street 2</label>
						<input name="address_street_2" type="text" class="form-control" value="{{ $patient->address_street_2 }}">
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">State</label>
							<input name="state" type="text" class="form-control" value="{{ $patient->state }}">
						</div>
						<div class="col-md-6">
							<label for="">Town</label>
							<input name="address_town" type="text" class="form-control" value="{{ $patient->address_town }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="">Postcode</label>
							<input name="postcode" type="text" class="form-control" value="{{ $patient->postcode }}">
						</div>
						<div class="col-md-6">
						</div>
					</div>
					
					<hr class="border border-primary">

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-save"></i>
							</span>
							<span class="text">Save</span>
						</button>
						<a href="#" class="btn btn-danger btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-trash"></i>
							</span>
							<span class="text">Cancel</span>
						</a>
					</div>