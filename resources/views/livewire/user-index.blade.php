
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
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr class="stra">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                    <td>
{{--                        <span class="label label-primary cursor-pointer" wire:click="editRecord({{$user->id}})">Edit</span>--}}
                        <span class="label label-danger cursor-pointer"
                              wire:click="delete({{$user->id}})">Delete</span>
                    </td>
                </tr>
            @empty
                <td colspan="4" class="text-center">Record not Available.</td>
            @endforelse
            </tbody>
        </table>
    </div>

