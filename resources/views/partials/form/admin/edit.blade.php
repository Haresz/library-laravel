@extends('layouts.app')

@section('page-content')
    <form class="card m-5 mx-auto" style="width: 75%;" action="{{ route('admin.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header h6">
            Formulir Edit Buku
        </div>
        <div class="card-body">
            <x-input name="judul" label="Judul" :value="old('judul', $book->judul)" required />
            <x-input name="sampul" label="Upload Sampul" :value="old('sampul')" type="file" :image="$book->sampul" />
            <x-input name="pengarang" label="Pengarang" :value="old('pengarang', $book->pengarang)" required />
            <x-input name="penerbit" label="Penerbit" :value="old('penerbit', $book->penerbit)" required />
            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ route('admin.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>
@endsection
