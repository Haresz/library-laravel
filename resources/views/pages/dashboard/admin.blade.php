ush @extends('layouts.app')

@section('page-content')
    <div>
        <nav class="d-flex justify-content-between p-5 text-light w-100" style="background-color: #010828; font-family: 'Inter', sans-serif; position: fixed; top: 0; left: 0; right: 0; z-index: 9999;">
            <p class="h4">Daftar Buku</p>
            <div style="width: 600px;">
                <form class="d-flex" action="{{ route('home.search') }}" method="GET">
                    <input class="form-control me-2 rounded-pill text-light" style="background: rgba(255, 255, 255, 0.15);" type="text" name="search" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2" value="{{ old('seach') }}">
                    <a href="{{ route('home.create') }}" style="width: 200px; background: #364FF6;" class="btn rounded-pill text-light">Tambah Buku</a>
                </form>
            </div>
        </nav>
        <div class="mx-5" style="margin-top: 180px;">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">sampul</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
