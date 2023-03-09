<nav class="d-flex justify-content-between p-5 text-light w-100 border border-bottom-5" style="background-color: white; font-family: 'Inter', sans-serif; top: 0;  right: 0;">
    <p class="h4 text-dark">Daftar Buku</p>
    <div style="width: 600px;">
        <form class="d-flex" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2 rounded-pill text-light" style="background: rgba(255, 255, 255, 0.15);" type="text" name="search" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2" value="{{ old('seach') }}">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ request()->user()->name }}</strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </form>
    </div>
</nav>
