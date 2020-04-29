@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/venue/store">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <h3>Create Venue</h3>
            </div>
        </div>

        <div class="row">
            <div class="col md-6">
                <label for="venue" class="font-weight-bold">Venue</label>
                <input name="venue" type="text" class="form-control">
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
