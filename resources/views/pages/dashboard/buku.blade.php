@extends('layouts.app')

@section('page-content')
    <div>
        <p class="h3 text-center py-5 bg-light">Daftar Buku</p>
        <div class="m-5">
            <div class="d-flex justify-content-between">
                <a href="{{ route('home.create') }}" class="btn btn-primary ">Tambah Buku</a>
                <div class="input-group w-25 ">
                    <div class="input-group-append">
                        <form action="{{ route('home.search') }}" method="GET">
                            <input type="text" class="form-control" name="search" placeholder="Cari judul buku" aria-label="Cari judul buku" aria-describedby="basic-addon2" value="{{ old('seach') }}">

                            <button class="btn btn-outline-primary" type="submit">Cari !</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-cols-4 my-4" >
                @foreach ($books as $book)
                    <x-card :image="$book->sampul" :title="$book->judul" :id="$book->id" />
                @endforeach
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
