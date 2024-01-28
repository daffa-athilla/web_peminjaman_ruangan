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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    
    <!-- My Style CSS -->
    <link rel="stylesheet" href="/public_admin/css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Content -->
        <aside id="sidebar" class="js-sidebar">
            <div class="h-100">
                <div class="sidebar-logo mt-3">
                    <span class="d-block text-center fs-5">Admin Web Peminjaman Ruangan</span>
                </div>
                <ul class="sidebar-nav mt-3">
                    <li class="sidebar-header text-center mb-4">
                        <a href="/admin" class="py-2 px-3 bg-white text-black fw-semibold rounded fs-6">Admin Dashboard</a>
                    </li>
                    <li class="sidebar-header text-center">
                        <a href="/home" class="py-2 px-3 bg-info text-black fw-semibold rounded fs-6">Home</a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- End of Sidebar Content -->

        <!-- Main Content -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="/public_admin/img/profile.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="/logout" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="my-4">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="d-flex col-12">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4 class="fs-5">Welcome Back, Admin</h4>
                                                <p class="mb-0 fs-6">
                                                    Administrator Pengelolaan Web Peminjaman Ruangan di Universitas Teknokrat Indonesia
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="/public_admin/img/customer-support.jpg" class="img-fluid illustration-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">Web Peminjaman Ruangan</h5>
                            <h6 class="card-subtitle text-muted">Data Peminjaman Ruangan di Universitas Teknokrat Indonesia</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-1">ID</th>
                                            <th class="col-2">Nama Lengkap Peminjam</th>
                                            <th class="col-1">Nama Ruangan</th>
                                            <th class="col-2">Kegiatan</th>
                                            <th class="col-2">Waktu Peminjaman</th>
                                            <th class="col-4 text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjamans as $peminjaman)
                                            <tr>
                                                <th style="position: relative;">
                                                    <div
                                                        style="position: absolute; top: 50%; transform: translateY(-50%);">
                                                        {{ $peminjaman->id }}
                                                    </div>
                                                </th>
                                                <td style="position: relative;">
                                                    <div
                                                        style="position: absolute; top: 50%; transform: translateY(-50%);">
                                                        {{ $peminjaman->nama_lengkap_peminjam }}
                                                    </div>
                                                </td>
                                                <td style="position: relative;">
                                                    <div
                                                        style="position: absolute; top: 50%; transform: translateY(-50%);">
                                                        {{ $peminjaman->nama_ruangan }}
                                                    </div>
                                                </td>
                                                <td style="position: relative;">
                                                    <div
                                                        style="position: absolute; top: 50%; transform: translateY(-50%);">
                                                        {{ $peminjaman->nama_kegiatan }}
                                                    </div>
                                                </td>
                                                <td style="position: relative;">
                                                    <div
                                                        style="position: absolute; top: 50%; transform: translateY(-50%);">
                                                        {{ $peminjaman->created_at }}
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center align-items-center">
                                                    <form action="/admin/{{ $peminjaman->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('put')


                                                        <input type="hidden" name="id" value="{{ $peminjaman->id }}">

                                                        @if ($peminjaman->status == 'Telah Selesai')
                                                            <button class='m-2 btn btn-success' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                                        @elseif ($peminjaman->status == 'Sedang Diproses')
                                                            <button class='m-2 btn btn-warning text-black' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                                        @elseif ($peminjaman->status == 'Ditolak')
                                                            <button class='m-2 btn btn-danger' type='button' data-bs-toggle='dropdown'>{{ $peminjaman->status }}</button>
                                                        @endif

                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <button type="submit" class='dropdown-item' name='status' value='Telah Selesai'>Selesai</button>
                                                            </li>
                                                            <li>
                                                                <button type="submit" class='dropdown-item' name='status' value='Sedang Diproses'>Proses</button>
                                                            </li>
                                                            <li>
                                                                <button type="submit" class='dropdown-item' name='status' value='Ditolak'>Tolak</button>
                                                            </li>
                                                        </ul>
                                                    </form>

                                                    <span class="fs-5">|</span>

                                                    <a class="m-2 btn btn-warning" href="/admin/{{ $peminjaman->id }}/edit">Edit Data</a>

                                                    <form action="/admin/{{ $peminjaman->id }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')

                                                        <button class="m-2 btn btn-danger" name="status" onclick="return confirm('Are you sure?')">Delete Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-12 py-3 text-center">
                            <p class="mb-0">
                                <span>
                                    <strong>&copy; 2024 - Web Peminjaman Ruangan</strong>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End of Main Content -->
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public_admin/js/script.js"></script>
</body>

</html>