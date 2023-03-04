@extends('layouts.app')

@section('page-content')
    <form class="card m-5 mx-auto" style="width: 75%;">
        <div class="card-header h6">
            Formulir Edit Buku
        </div>
        <div class="card-body">
            <x-input name="judul" label="Judul" :value="$book->judul" disabled />
            <x-input name="sampul" label="Upload Sampul" :value="old('sampul')" type="file" disabled />
            <x-input name="pengarang" label="Pengarang" :value="$book->pengarang" disabled />
            <x-input name="penerbit" label="Penerbit" :value="$book->penerbit" disabled />
            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ route('home.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>
@endsection
