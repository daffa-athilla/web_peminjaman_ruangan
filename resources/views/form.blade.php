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

    <main class="form-signin" style="max-width: 500px;">
        <h1 class="h3">Form Peminjaman Ruangan</h1>

        <form action="/form" method="POST" class="mb-5">
            @csrf
            
            <div class="mt-5 mb-3 form-floating">
                <input type="text" class="form-control" id="floatingNamaLengkapPeminjam" placeholder="" name="nama_lengkap_peminjam" value="{{ old('nama_lengkap_peminjam') }}" required>
                <label for="floatingNamaLengkapPeminjam">Nama Lengkap Peminjam</label>
            </div>

            <div class="mb-3">
                <select class="form-select py-3" style="background-color: #E9F3F9;" name="nama_ruangan" required>
                    <option selected disabled>Pilihan Ruangan</option>
                    <option value="LAB Bisnis Digital">LAB Bisnis Digital</option>
                    <option value="LAB Hardware">LAB Hardware</option>
                    <option value="LAB 4 GSG">LAB 4 GSG</option>
                    <option value="LAB 3 GSG">LAB 3 GSG</option>
                    <option value="LAB 2 GSG">LAB 2 GSG</option>
                    <option value="LAB 1 GSG">LAB 1 GSG</option>
                </select>
            </div>

            <div class="mb-5 form-floating">
                <input type="text" class="form-control" id="floatingNamaKegiatan" placeholder="" name="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required>
                <label for="floatingNamaKegiatan">Nama Kegiatan</label>
            </div>

            <button class="w-100 btn btn-lg" type="submit">Submit</button>
        </form>

        <p class="py-3 copyright">&copy; 2024 - Web Peminjaman Ruangan</p>
    </main>
</body>

</html>