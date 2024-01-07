<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/img/register.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <form method="POST" action="{{ route('users.register') }}" class="register-form">
        @csrf
        <h1 class="text-center">Register</h1>
        <input type="text" name="level" value="1" hidden>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control form-control-sm" id="username" placeholder="Enter your username"
                name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password"
                required>
        </div>
        <br>
        <p class="text-center">Already have an account? <a href="/login">Login</a></p>
        <br />
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="/" class="btn btn-warning ml-2">Cancel</a>
        </div>
    </form>
</body>

</html>