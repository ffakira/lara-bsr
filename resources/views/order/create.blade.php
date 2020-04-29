@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="/order/store">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<h3>Create Order</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<label class="font-weight-bold" for="venue">Venue</label>
				<select id="selectVenue" class="form-control" name="venue_id">
					<option value="1">Butter</option>
					<option value="2">Uncle Desi and Sons</option>
					<option value="3">Go Corporate</option>
					<option disabled></option>
					<option value="4">Soul Food Thai</option>
					<option value="5">Ho Lee Fook</option>
					<option value="6">Burger Circus</option>
					<option value="7">Motorino (Soho)</option>
					<option value="8">Maison Libanaise</option>
					<option value="9">Chôm Chôm</option>
					<option value="10">Taqueria Super Macho</option>
					<option value="11">Hotal Colambo</option>
					<option value="12">La Vache</option>
					<option value="13">Stazione Novella</option>
					<option disabled></option>
					<option value="14">Le Petit Saigon</option>
					<option value="15">Artemis Apolo</option>
					<option value="16">Motorino (Wan Chai)</option>
				</select>
			</div>

			<div class="col-md-6">
				<label class="font-weight-bold" for="order">Order Number</label>
				<input name="order_number" class="form-control" type="text">
			</div>
		</div>

		<div class="row pt-3">
			<div class="col-md-6">
				<label for="order_at" class="font-weight-bold">Ordered at</label>
				<input type="time" name="order_at" class="form-control">
			</div>

			<div class="col-md-6">
				<label for="ready_at" class="font-weight-bold">Ready at</label>
				<input type="time" name="ready_at" class="form-control">
			</div>
		</div>

		<div class="row">
			<div class="pt-3 col-md-12">
				<button class="btn btn-primary">Create</button>
			</div>
		</div>
	</form>
</div>
@endsection
