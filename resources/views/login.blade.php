<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS and JS -->
    <link rel="stylesheet" href="/public_bootstrap/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="/public_bootstrap/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    
    <!-- My Style CSS -->
    <link rel="stylesheet" href="/public_form/css/style.css">
</head>

<body class="h-100 d-flex m-auto">
    @include('includes.header_absolute_position')

    <div class="bg"></div>

    <main class="form-signin">
        <h1 class="h3">Login</h1>

        <form action="/login" method="POST">
            @csrf

            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-5 mb-3 form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="" name="username" required>
                <label for="floatingInput">Username</label>
            </div>

            <div class="mb-5 form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="" name="password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg" type="submit">Sign In</button>
        </form>

        <div class="me-3 mb-5 text-end">
            <a href="/register" class="text-white text-decoration-none">Belum punya akun? Register</a>
        </div>

        <p class="py-3 copyright">&copy; 2024 - Web Peminjaman Ruangan</p>
    </main>
</body>

</html>