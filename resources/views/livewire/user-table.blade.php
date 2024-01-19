<div wire:poll.keep-alive>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
