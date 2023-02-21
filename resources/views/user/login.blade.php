<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>

    <form action="/postlogin" method="POST">
        @csrf
     
            <label><strong>Nama Pengguna</strong></label>
            <input type="username" name="username" value="{{ old('username') }}">
        </div>
        <div class="mb-3">
            <label><strong>Password</strong></label>
            <input type="password" name="password">
        </div>
        <div class="mb-3">
            <button class="btn" style="background-color: #AEBDCA; font-style: italic; border-radius: 20px; border-color: gray;"><strong>Masuk</strong></button>
            Belum punya akun?<a class="" href="/register">daftar disini</a>
        </div>
     </form>
</body>
</html>