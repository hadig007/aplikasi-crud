@include('template.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/template/header.css">
    <title>APLIKASI CRUD | login</title>
</head>
<body>
    <div class="container">
    <h2 class="text-center mt-4">Login Page</h2>
    <form action="{{ route('postlogin') }}" method="get">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <small id="email" class="form-text text-muted">masukkan email yang sudah terdaftar</small>
        </div>
        <div class="form-group">
            <label for="password">Sandi</label>
            <input type="password" class="form-control" id="password" name="password">
            <small id="password" class="form-text text-muted">masukkan sandi untuk email anda</small>
         </div>
         <button type="submit" class="btn pl-5 pr-5 btn-primary">Login</button>
    </form>
</body>
</html>