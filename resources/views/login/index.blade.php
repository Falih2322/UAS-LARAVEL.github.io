<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        body {
            background-image: url('assets/img/depan.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            /* Adjust the maximum width as needed */
            width: 100%;
        }
    </style>
</head>

<body>
    <form method="POST" action="{{ route('users.login') }}" class="login-form">
        @csrf
        <h1 class="text-center">Login</h1>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control form-control-sm" placeholder="Masukkan username anda" name="username"
                required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Masukkan password anda" name="password" required>
        </div>
        <br>
        <p class="text-center">Don't have an account? <a href="/register">Register</a></p>
        <br />
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/" class="btn btn-warning ml-2">Batal</a>
        </div>
    </form>
</body>

</html>


<body>
    <style>
        body {
            background-image: url('assets/img/depan.jpg');
            background-size: cover;
            background-repeat: relative;
            background-attachment: relative;
            /* Optional: Fix the background image */
        }

        /* Add additional styles as needed */
    </style>
</body>

</html>