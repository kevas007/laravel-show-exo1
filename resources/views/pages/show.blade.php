@extends('layouts.index')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">quantity</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            <tr>)
                <th scope="row">{{  $show->id }}</th>
                <td>{{  $show->name }}</td>
                <td>{{  $show->quantity }}</td>
                <td>{{  $show->image }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
