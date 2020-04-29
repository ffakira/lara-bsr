@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Drivers</h3>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Total Orders</th>
        </thead>

        <tbody>
            @foreach($drivers as $driver)
            <tr>
                <td>{{$driver->name}}</td>
                <td>0</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
