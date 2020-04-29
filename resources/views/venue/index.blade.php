@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <th></th>
                <th>Venue Name</th>
            </thead>

            <tbody>
                @foreach($venues as $venue)
                    <tr>
                        <td>{{$venue->id}}</td>
                        <td>{{$venue->venue ?? ''}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
