<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/login_asset/css/style.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('login_submit') }}" method="POST">
            @csrf
            <h1>Login Form</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control1" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control2" name="password" required>
            </div>

            <label for="role">Role</label>
            <select class="selectform" required="" name="role">
                <option value="">Select Role</option>
                <option value="1">Admin</option>
                <option value="2">Teacher</option>
              </select>

            <input type="submit" class="btn" value="Submit"><br>
            <div class="error">
                {{ session('msg') }}
                {{ session('unac') }}
            </div>
        </form>
    </div>
</body>
</html>