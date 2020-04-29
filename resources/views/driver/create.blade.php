@extends('layouts.app')

@section('content')
<div class="container">
    <form action="POST" action="/driver/store">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <h3>New Driver</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="driver" class="font-weight-bold">Name</label>
                <input type="text" name="name" class="form-control">
                <button class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
</div>
@endsection
