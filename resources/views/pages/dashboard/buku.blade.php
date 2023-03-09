@extends('layouts.app')

@section('page-content')
    <div>
        <nav class="d-flex justify-content-between p-5 text-light w-100" style="background-color: #010828; font-family: 'Inter', sans-serif; position: fixed; top: 0; left: 0; right: 0; z-index: 9999;">
            <a href="{{ auth()->check() ? route('admin.index') : route('home.index') }}" style="text-decoration: none">
                <p class="h4">Daftar Buku</p>
            </a>
            <div style="width: 600px;">
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2 rounded-pill text-light" style="background: rgba(255, 255, 255, 0.15);" type="text" name="search" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2" value="{{ old('seach', request()->search) }}">
                </form>
            </div>
            <div class="">
                <a href="/admin" type="submit" style="width: 120px; background: #364FF6;" class="btn rounded-pill text-light">login</a>
                <a href="/register" type="submit" style="width: 120px; border: white 2px solid;" class="btn rounded-pill text-light">registrasi</a>   
            </div>
        </nav>
        <div class="mx-5" style="margin-top: 180px;">
            <div class="row row-cols-4  my-4 mx-auto" >
                @foreach ($books as $book)
                    <x-card :id="$book->id" :title="$book->judul" :image="$book->sampul" :author="$book->pengarang" :publisher="$book->penerbit" />
                @endforeach
            </div>
            {{ $books->links() }}
        </div>
    </div>
@endsection
