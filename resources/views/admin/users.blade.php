@extends('admin.dashboard')

@section('title', 'Admin Users')

@section('content')
<h1 style="color: #ff0000;">Admin Users</h1>
<p style="color: #ff0000;">Here you can manage users.</p>

<div class="table-responsive">
    <table class="table table-striped" style="border: 1px solid #000;">
        <thead style="background-color: #000; color: #fff;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hierarchical Category</th>
                <th>Hierarchical Superior ID</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @if($users->isEmpty())
            <tr>
                <td colspan="5" style="text-align: center; color: #ff0000;">No users found.</td>
            </tr>
            @else
            @foreach ($users as $user)
            <tr style="background-color: #fff; color: #000;">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->hierarchical_category }}</td>
                <td>{{ $user->hierarchical_superior_id }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary" style="background-color: #ff0000; border-color: #ff0000;">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="background-color: #000; border-color: #000;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection