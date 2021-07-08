@extends('app')

@section('content')

    <div class="panel panel-flat">
        <div class="panel-heading text-right">
            <a href="{{ route('add_user') }}" class="btn btn-primary">Add User</a>
        </div>
        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td>
                    <span class="label label-primary">Edit</span>
                    <span class="label label-danger">Delete</span>
                </td>
            </tr>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td>
                    <span class="label label-primary">Edit</span>
                    <span class="label label-danger">Delete</span>
                </td>
            </tr>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td>
                    <span class="label label-primary">Edit</span>
                    <span class="label label-danger">Delete</span>
                </td>
            </tr>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td>
                    <span class="label label-primary">Edit</span>
                    <span class="label label-danger">Delete</span>
                </td>
            </tr>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td>
                    <span class="label label-primary">Edit</span>
                    <span class="label label-danger">Delete</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@stop