<div>
    <div class="panel panel-flat">
        <div class="panel-heading text-right">
            <a href="{{ route('add_user') }}" class="btn btn-primary">Add User</a>
        </div>
        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created Time</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                    <td>
                        <span class="label label-primary">Edit</span>
                        <span class="label label-danger">Delete</span>
                    </td>
                </tr>
            @empty
                Record not Available.
            @endforelse
            </tbody>
        </table>
    </div>
</div>

