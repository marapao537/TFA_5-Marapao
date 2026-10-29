<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customers</a> |
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['full_name'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>