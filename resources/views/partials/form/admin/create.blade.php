@extends('layouts.app')

@section('page-content')
    <form class="card m-5 mx-auto" style="width: 75%;" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header h6">
            Formulir Tambah Buku
        </div>
        <div class="card-body">
            <x-input name="judul" label="Judul" :value="old('judul')" required />
            <x-input name="sampul" label="Upload Sampul" :value="old('sampul')" type="file" required />
            <x-input name="pengarang" label="Pengarang" :value="old('pengarang')" required />
            <x-input name="penerbit" label="Penerbit" :value="old('penerbit')" required />
            <button type="submit" class="btn btn-success">Tambahkan Data</button>
            <a href="{{ route('admin.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </form>
@endsection
