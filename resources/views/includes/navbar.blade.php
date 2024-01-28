<!-- Navbar -->
<nav class="sticky-top py-2 navbar navbar-expand" style="background-color: #1999AA;">
    <div class="container-fluid">
        <div class="navbar-nav mx-auto bg-transparent">
            <div class="d-flex m-auto px-3 align-items-center">
                <i class="bi bi-skip-backward-circle fs-2 text-white"></i>
            </div>

            <a href="/home" class="p-0 fs-2 fw-bold text-white text-decoration-none">Web Peminjaman Ruangan</a>

            <div class="d-flex m-auto px-3 align-items-center">
                <i class="bi bi-skip-forward-circle fs-2 text-white"></i>
            </div>
        </div>

        <div class="navbar-nav mx-auto bg-transparent">
            @if (!Auth::check())
                <a href="/login" class="nav-item nav-link btn btn-secondary py-2 px-3 text-white fs-5">Login</a>
            @elseif (Auth::check())
                <div class="nav-item dropdown d-flex m-auto">
                    <a href="" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">{{ auth()->user()->username }}</a>
                    <div class="dropdown-menu bg-light mt-2">
                        <form action="/logout" method="post">
                            @csrf

                            <button class="dropdown-item">Logout ({{ auth()->user()->username }})</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
<!-- End of Navbar -->