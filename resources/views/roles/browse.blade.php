<h1>Roles</h1>

<form action="{{ route('newRole') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" id="role_title">
    <button type="submit">Add New</button>
</form>

@if (!empty($roles))
    <ul>
    @foreach($roles as $role)
        <li>{{ $role->title }}</li>
    @endforeach
    </ul>
@endif
