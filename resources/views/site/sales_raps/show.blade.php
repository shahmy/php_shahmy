@extends('site.app')

@section('content')

    <table>
        <tr>
            <td>Full Name</td>
            <td>{{ $salesRep->full_name }}</td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>{{ $salesRep->email }}</td>
        </tr>
        <tr>
            <td>Telephone No</td>
            <td>{{ $salesRep->tel }}</td>
        </tr>
        <tr>
            <td>Joined Date</td>
            <td>{{ $salesRep->joined_date }}</td>
        </tr>
        <tr>
            <td>Current Route</td>
            <td>{{ $salesRep->current_route }}</td>
        </tr>

        <tr>
            <td>Comments</td>
            <td>{{ $salesRep->comments }}</td>
        </tr>
    </table>


@endsection
