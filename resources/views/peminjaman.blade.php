<!DOCTYPE html>
<html lang="en">

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

<body class="public-screen">
    @include('includes.header')

    <div class="container my-5">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <div class="py-1 px-2 fs-5 fw-bold">Daftar Peminjaman Ruangan</div>
                    <div class="mb-2 py-1 px-2 fs-5">
                        Daftar Nama Lengkap Peminjam beserta Nama Kegiatan untuk Peminjaman Ruangan
                    </div>

                    <tbody>
                        <tr>
                            <td class="p-2 px-4">ID</td>
                            <td class="p-2 px-4">Nama Lengkap Peminjam</td>
                            <td class="p-2 px-4">Nama Ruangan</td>
                            <td class="p-2 px-4">Nama Kegiatan</td>
                            <td class="p-2 px-4">Waktu Peminjaman</td>
                            <td class="p-2 px-4 text-center">Status</td>
                        </tr>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <td class="p-2 px-4">{{ $peminjaman->id }}</td>
                                <td class="p-2 px-4">{{ $peminjaman->nama_lengkap_peminjam }}</td>
                                <td class="p-2 px-4">{{ $peminjaman->nama_ruangan }}</td>
                                <td class="p-2 px-4">{{ $peminjaman->nama_kegiatan }}</td>
                                <td class="p-2 px-4">{{ $peminjaman->created_at }}</td>
                                <td class="p-2 px-4 text-center">
                                    @if ($peminjaman->status == 'Sedang Diproses')
                                        <button class='btn btn-warning text-black' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                    @elseif ($peminjaman->status == 'Telah Selesai')
                                        <button class='btn btn-success' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                    @elseif ($peminjaman->status == 'Ditolak')
                                        <button class='btn btn-danger' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>