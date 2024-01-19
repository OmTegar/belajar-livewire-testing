<div wire:poll.keep-alive>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Users as $index => $user )
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('editUser', $user->id) }}" class="btn btn-sm btn-warning">edit</a>
                        <a wire:click='deleteUser({{ $user->id }})' class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
