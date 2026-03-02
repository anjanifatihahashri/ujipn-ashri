<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sarana Prasarana</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<div class="container">

    <!-- LEFT LOGIN -->
    <div class="login-box">

        <img src="{{ asset('logo_smkpn.jpg') }}" class="logo">

        <h2>Sign in</h2>

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Email siswa" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">SIGN IN</button>
        </form>

    </div>


    <!-- RIGHT INFO -->
    <div class="info-box">

        <h1>Sarana & Prasarana</h1>

        <p>
            Sistem pengaduan fasilitas sekolah
            SMK Purnawarman
        </p>

    </div>

</div>

</body>
</html>
