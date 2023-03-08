@extends('layouts.app')

@section('page-content')
    <div class="d-flex" style="height: 100%;  overflow: hidden;">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="background-color: #010828; width: 280px; height: 100%;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-light">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-light">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Orders
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-light">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-light">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Customers
                </a>
            </li>
            </ul>
            <hr>
        </div>
        <div class="w-100" >
            <nav class="d-flex justify-content-between p-5 text-light w-100 border border-bottom-5" style="background-color: white; font-family: 'Inter', sans-serif; top: 0;  right: 0;">
                <p class="h4 text-dark">Daftar Buku</p>
                <div style="width: 600px;">
                    <form class="d-flex" action="{{ route('home.search') }}" method="GET">
                        <input class="form-control me-2 rounded-pill text-light" style="background: rgba(255, 255, 255, 0.15);" type="text" name="search" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2" value="{{ old('seach') }}">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
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
            <div class="" style="background-color: #F5F6FA; height: 80%">
                <div class="d-flex justify-content-between px-5 py-4">
                    <div>
                        <div class="h5 mb-0" >List Buku</div>
                        <div>10 data</div>
                    </div>
                    <a href="{{ route('home.create') }}" style="width: 200px; height: 40px; background: #364FF6;" class="btn rounded-pill text-light align-self-center">Tambah Buku</a>
                </div>
                <div class="mx-5" style="height: 80%; box-sizing: border-box; overflow: scroll;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover Buku</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #E5E7EE;" >
                                <td class="align-middle">1</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr>
                                <td class="align-middle">2</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr style="background: #E5E7EE;" >
                                <td class="align-middle">1</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr>
                                <td class="align-middle">2</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr style="background: #E5E7EE;" >
                                <td class="align-middle">1</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr>
                                <td class="align-middle">2</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr style="background: #E5E7EE;" >
                                <td class="align-middle">1</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                            <tr>
                                <td class="align-middle">2</td>
                                <td class="align-middle"><img src="sampul.jpg" alt="" width="100"></td>
                                <td class="align-middle">Judul Buku</td>
                                <td class="align-middle">Penerbit</td>
                                <td class="align-middle">Aksi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
